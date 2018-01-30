<?php

namespace app\controller;

use \app\model\UserModel;
use \app\dao\UserDao;
use \app\model\GimonModel;
use \app\dao\GimonDao;
use \app\controller\GimonController;
use \app\common\Db;
use \app\common\InvalidErrorException;
use \app\common\ExceptionCode;
use \app\common\Request;
use Abraham\TwitterOAuth\TwitterOAuth;


/**
* UserController クラス
* @brief ユーザに関する処理を行う
*/
class UserController extends ControllerBase
{
  //!セッション保存用の名前
  const LOGINUSER = 'lum';

  /**
  * メインアクション
  */
  public function mainAction()
  {
    //ログインチェック
    $this::checkLogin();

    $objUm = new UserModel;
    $objUm = UserController::getLoginUser();

    //セッションに入れておいたさっきの配列
    $access_token = $_SESSION['access_token'];

    //OAuthトークンとシークレットも使って TwitterOAuth をインスタンス化
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

    //ユーザー情報をGET
    $user = $connection->get("account/verify_credentials");
    $this->view->assign('username', $user->name);

    //ブロックリストを取得
    $blocklist = explode(';',$objUm->blocklist);


    //疑問一覧を取得
    $gimons = GimonDao::getDaoFromDestinationId($user->id);
    //悪意のある言葉チェック & ブロックチェック
    foreach ($gimons as $key => $gimon) {
      if(!in_array($gimon['ipaddress'], $blocklist)){
        $score = GimonController::checkBadWords($gimon['text']);
        if($score >= 10) {
          $gimons[$key]['text'] =
          '<p class="uk-label uk-label-danger">This may contain very malicious words.<br>強い悪意のある言葉が含まれる可能性</p>
          <button class="uk-button uk-button-default uk-button-small" type="button" uk-toggle="target: #text'.$key.'">SHOW / 表示</button>
          <p hidden id="text'.$key.'">'.$gimons[$key]['text'].'</p>';
        }
        else if($score >= 5) {
          $gimons[$key]['text'] =
          '<p class="uk-label uk-label-warning">This may contain malicious words.<br>悪意のある言葉が含まれる可能性</p>
          <button class="uk-button uk-button-default uk-button-small" type="button" uk-toggle="target: #text'.$key.'">SHOW / 表示</button>
          <p hidden id="text'.$key.'">'.$gimons[$key]['text'].'</p>';
        }

        //answerをタグに変更
        if(null != $gimon['answer']) {
          $gimons[$key]['answer'] = '<p class="uk-label uk-label-default">Answered</p>';
        }
      }
      else {
        unset($gimons[$key]);
      }
    }

    $this->view->assign('url', WEB_URL.'gimon/add/'.$user->screen_name);
    $this->view->assign('gimons', $gimons);

    $script = "";

    //POSTされていたらツイートする
    if(null != $_POST) {
      //POSTを取得
      $posts = $this->request->getPost();

      $access_token = $_SESSION['access_token'];
      $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

      $result = $connection->post(
        "statuses/update",
        array("status" => $posts['text'])
      );

      if($connection->getLastHttpCode() == 200) {
        // ツイート成功
        $script = "UIkit.notification('tweeted!', 'success');";
      } else {
        // ツイート失敗
        $script = "UIkit.notification('tweet failed...', 'error');";
      }
    }
    $this->view->assign('screen_name', $user->screen_name);
    $this->view->assign('script', $script);
  }

  /**
  * ブロック処理
  */
  public function blockAction()
  {
    //ログインチェック
    $this::checkLogin();

    //postを受け取り
    $posts = $this->request->getPost();

    if(null == $posts['id']) {
      throw new InvalidErrorException(ExceptionCode::INVALID_URL);
    }

    $objUm = new UserModel(); //ユーザモデル
    $objUm = UserController::getLoginUser();

    //ぎもんIDからIPアドレスを検索
    $objGm = new GimonModel();
    $objGm->getModelById($posts['id']);

    //ブロックリストを配列に
    $blocklist = explode(';',$objUm->blocklist);
    //ブロックリストに追加
    array_push($blocklist, $objGm->ipaddress);

    $strblocklist = implode(';', $blocklist);
    $objUm->blocklist = $strblocklist;
    $objUm->updated_at = date('Y/m/d H:i:s');

    //DBを更新
    Db::transaction();
    $objUm->save();
    Db::commit();

    $_SESSION[self::LOGINUSER] = $objUm;
    $this->view->assign('back', WEB_URL.'user/main');
  }

  /**
  * コールバック
  */
  public function callbackAction()
  {
    $request_token = [];
    $request_token['oauth_token'] = $_SESSION['oauth_token'];
    $request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

    //Twitterから返されたOAuthトークンと、あらかじめlogin.phpで入れておいたセッション上のものと一致するかをチェック
    if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
      die( 'Error!' );
    }

    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
    $_SESSION['access_token'] = $connection->oauth("oauth/access_token", array("oauth_verifier" => $_REQUEST['oauth_verifier']));

    header( 'location: '.WEB_URL.'user/update' );
  }

  /**
  * データベースを更新・挿入
  */
  public function updateAction()
  {
    $access_token = $_SESSION['access_token'];

    //OAuthトークンとシークレットも使って TwitterOAuth をインスタンス化
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

    $user = $connection->get("account/verify_credentials");
    $id = $user->id;

    //データベースに存在しなければ登録、する場合ログイン
    $objUM = new UserModel;
    $objUM->getModelById($id);
    if(null != $objUM->id)
    {
      //存在する場合
      $objUM->name = $user->name;
      $objUM->screen_name = $user->screen_name;
      $objUM->updated_at = date('Y/m/d H:i:s');
      Db::transaction();
      $objUM->save();
      Db::commit();
    }
    else
    {
      $objUM->id = $id;
      $objUM->name = $user->name;
      $objUM->screen_name = $user->screen_name;
      $objUM->updated_at = date('Y/m/d H:i:s');
      $objUM->created_at = date('Y/m/d H:i:s');
      Db::transaction();
      $objUM->register();
      Db::commit();
    }
    $_SESSION[self::LOGINUSER] = $objUM;

    //トップページにリダイレクト
    header( 'location: '.WEB_URL.'user/main' );
  }

  /**
  * ログインする
  *
  * @return void
  */
  public function loginAction()
  {

    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
    $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

    $_SESSION['oauth_token'] = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
    $url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

    //Twitter.com の認証画面へリダイレクト
    header( 'location: '. $url );
  }

  /**
  * ログイン状態かどうかをチェックする
  *
  * @param str ログイン後のリダイレクト先のURL
  * @param bool リダイレクトするか
  * @return void
  */
  static public function checkLogin($redirectURL = '', $redirect = true)
  {
    $token = (isset($_SESSION['access_token'])) ?
    $_SESSION['access_token'] : null;

    if(isset($token))
    {
      return true;
    }
    if($redirect == true)
    {
      header('Location:'.WEB_URL);
    }
    else
    {
      return false;
    }
  }

  /**
  * ログイン中のユーザーモデルを取得する
  *
  * @return UserModel
  */
  static public function getLoginUser()
  {
    return $_SESSION[self::LOGINUSER];
  }

  /**
  * ログアウトする
  *
  * @return void
  */
  static public function logoutAction()
  {
    $access_token = $_SESSION['access_token'];
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
    $result = $connection->post("account/end_session");

    $_SESSION = [];
    session_destroy();
    header('Location: '.WEB_URL);
  }
}
