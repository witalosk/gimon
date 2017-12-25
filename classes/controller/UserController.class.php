<?php

namespace app\controller;

use \app\model\UserModel;
use \app\dao\UserDao;
use \app\dao\WorkDao;
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
    //セッションに入れておいたさっきの配列
    $access_token = $_SESSION['access_token'];

    //OAuthトークンとシークレットも使って TwitterOAuth をインスタンス化
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

    //ユーザー情報をGET
    $user = $connection->get("account/verify_credentials");
    $this->view->assign('username', $user->name);
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

    $user = $connection->get("account/verify_credentials");
    $id = $user->id;

    //データベースに存在しなければ登録、する場合ログイン
    $objUM = new UserModel;
    if(null != $objUM->getModelById($id))
    {
      //存在する場合
      $objUM->name = $user->name;
      $objUM->screen_name = $user->screen_name;
      $objUM->updated_at = date('Y/m/d H:i:s');
      Db::transaction();
      $objUM->save();
      Db::commit();
      $_SESSION[LOGINUSER] = $objUM;
    }
    else
    {
      var_dump($user);
      $objUM->id = $user->id;
      $objUM->name = $user->name;
      $objUM->screen_name = $user->screen_name;
      $objUM->updated_at = date('Y/m/d H:i:s');
      $objUM->created_at = date('Y/m/d H:i:s');
      Db::transaction();
      $objUM->register();
      Db::commit();
      $_SESSION[LOGINUSER] = $objUM;
    }

    //マイページへリダイレクト
    header( 'location: '.WEB_URL.'user/main' );
  }

  /**
  * ログインする
  *
  * @return void
  */
  static public function loginAction()
  {

    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
    $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

    $_SESSION['oauth_token'] = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
    $url = $connection->url('oauth/authenticate', array('oauth_token' => $request_token['oauth_token']));

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
    global $WEB_URL;

    $objUM = (isset($_SESSION[self::LOGINUSER])) ?
    $_SESSION[self::LOGINUSER] : null;

    if(isset($objUM))
    {
      return true;
    }
    if($redirect == true)
    {
      header('Location:'.$WEB_URL);
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
    global $WEB_URL;
    $_SESSION = [];
    session_destroy();
    header('Location: '.$WEB_URL);
  }
}
