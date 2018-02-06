<?php
namespace app\controller;

use app\common\InvalidErrorException;
use app\common\ExceptionCode;
use app\common\Db;
use app\model\UserModel;
use app\controller\UserController;
use app\model\GimonModel;
use app\dao\GimonDao;
use app\dao\BadWordsDao;
use Abraham\TwitterOAuth\TwitterOAuth;


class GimonController extends ControllerBase
{
  /**
  * tweetAction
  * @brief 質問をシェアするアクション
  */
  public function tweetAction() {
    //ログインチェック
    UserController::checkLogin();

    $objUm = new UserModel;
    $objUm = UserController::getLoginUser();
    $script = "";

    //URLパラメータを取得
    $params = $this->request->getParam();
    if(null == $params[0])
    {
      throw new InvalidErrorException(ExceptionCode::INVALID_URL);
    }
    //疑問を取得
    $objGm = new GimonModel;
    $objGm->getModelById($params[0]);

    if($objUm->id != $objGm->destination) {
      throw new InvalidErrorException(ExceptionCode::INVALID_URL);
    }

    //Twitter
    $access_token = $_SESSION['access_token'];
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

    //過去の回答を取得
    if(null != $objGm->answer)
    {
      $result_tweet = $connection->get(
        "statuses/show",
        array("id" => $objGm->answer)
      );
      if(isset($result_tweet->text)) {
        $answer = nl2br($result_tweet->text);
      }
      else {
        $answer = "どうやらあなたは回答のツイートを削除したようです。/ The answer tweet has been deleted.";
      }
    }
    else {
      $answer = "過去のツイートはありません。 / There are no answer.";
    }


    //ツイートする
    if(null != $_POST) {
      //POSTを取得
      $posts = $this->request->getPost();

      $result = $connection->post(
        "statuses/update",
        array("status" => "Q: {$objGm->text}\nA: {$posts['text']}\n#gimon #gimon{$objUm->screen_name}\n".WEB_URL."gimon/add/{$objUm->screen_name}")
      );

      if($connection->getLastHttpCode() == 200) {
        // ツイート成功
        $script = "UIkit.notification('tweeted!', 'success');";
      } else {
        // ツイート失敗
        $script = "UIkit.notification('tweet failed...', 'error');";
      }
      //答えのツイートを記憶
      $objGm->answer = $result->id;

      //DBをアップデート
      Db::transaction();
      $objGm->save();
      Db::commit();
    }

    $this->view->assign('all', 257 - mb_strwidth("Q: {$objGm->text}\nA: \n#gimon #gimon{$objUm->screen_name}\n",'UTF-8'));
    $this->view->assign('gimon', (array)$objGm);
    $this->view->assign('script', $script);
    $this->view->assign('answer', $answer);
    $this->view->assign('back', WEB_URL.'user/main');
  }

  /**
  * deleteAction
  * @brief 質問を削除するアクション
  */
  public function deleteAction() {
    //ログインチェック
    UserController::checkLogin();

    $objUm = new UserModel;
    $objUm = UserController::getLoginUser();
    $script = "";

    //URLパラメータを取得
    $params = $this->request->getParam();
    if(null == $params[0])
    {
      throw new InvalidErrorException(ExceptionCode::INVALID_URL);
    }
    //疑問を取得
    $objGm = new GimonModel;
    $objGm->getModelById($params[0]);

    if($objUm->id != $objGm->destination) {
      throw new InvalidErrorException(ExceptionCode::INVALID_URL);
    }

    //疑問を削除
    Db::transaction();
    $objGm->delete();
    Db::commit();

    $this->view->assign('return', 'Delete completed.');
    header('location: '.WEB_URL.'user/main');
  }

  /**
  * addAction
  * @brief 質問を追加するアクション
  */
  public function addAction(){
    //URLパラメータを取得
    $params = $this->request->getParam();
    if(null == $params[0])
    {
      throw new InvalidErrorException(ExceptionCode::INVALID_USER);
    }
    //宛先のアカウントを検索
    $objUm = new UserModel;
    $objUm->getModelByScreenName($params[0]);
    if(null == $objUm->id)
    {
      throw new InvalidErrorException(ExceptionCode::INVALID_USER);
    }

    //POSTされていたら
    if(null != $_POST)
    {
      //POSTを取得
      $posts = $this->request->getPost();
      //textが280バイト以上の場合、エラーを吐く
      if(strlen($posts['text']) > 280) {
        throw new InvalidErrorException(ExceptionCode::INVALID_FORM);
      }

      //疑問を作成
      $objGm = new GimonModel;
      $objGm->destination = $objUm->id;
      $objGm->ipaddress = $_SERVER["REMOTE_ADDR"];
      $objGm->text = h($posts['text']);
      $objGm->created_at = date('Y/m/d H:i:s',time());

      //DBに追加
      Db::transaction();
      $objGm->register();
      Db::commit();

      //DMを送信
      //gimon_admin
      $consumerKey_a = "HDgu0CCr6p9zQcSWFMpBweJ6K";
      $consumerSecret_a = "4bAu7EqtiHlPsgw8kGyG2hphxxDWRHMTseCGBfKUa93X3EHew0";
      $accessToken_a = "958208809876377600-ZlZBM7gK3uh2eP3fW2GfupjqRMxTxii";
      $accessTokenSecret_a = "cb5i8uDKLhVYmeFCAmCQdaXfQHjTh9blbRrcOUARaSLyN";

      $twitter = new TwitterOAuth($consumerKey_a, $consumerSecret_a, $accessToken_a, $accessTokenSecret_a);

      if(strpos($objUm->blocklist, $objGm->ipaddress) == false) {
        if($this::checkBadWords($objGm->text) >= 5) {
          $result = $twitter->post(
            "direct_messages/new",
            array("user_id" => $objUm->id, "text" => "あなた宛てのgimonが投稿されました。\nA gimon for you has been posted.\n----------\n[非表示]\n".WEB_URL)
          );
        }
        else {
          $result = $twitter->post(
            "direct_messages/new",
            array("user_id" => $objUm->id, "text" => "あなた宛てのgimonが投稿されました。\nA gimon for you has been posted.\n----------\n".$objGm->text."\n".WEB_URL)
          );
        }
      }
      //Templateパスを変更
      $this->templatePath="gimon/added.tpl";
    }
    $this->view->assign('username', $params[0]);
    $this->view->assign('name', $objUm->name);
    $this->view->assign('screen_name', $objUm->screen_name);

    //過去の疑問一覧表示
    $gimons = GimonController::getGimonsFromDestination($objUm->id);
    $ids = [];
    $answers =[];
    foreach ($gimons as $gimon) {
      if(null != $gimon->answer) {
        array_push($ids, $gimon->answer);
      }
    }
    //過去の回答を取得
    if(null != $ids)
    {
      @$access_token = $_SESSION['access_token'];
      $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

      $result_tweet = $connection->get(
        "statuses/lookup",
        array("id" => implode(',', $ids))
      );
      if(isset($result_tweet[0]->text)) {
        foreach ($result_tweet as $value) {
          $answers[strtotime($value->created_at)] = nl2br($value->text)."<br><br><span class='uk-text-meta'>".date('Y/m/d H:i:s', strtotime($value->created_at))."</span>";
        }
      }
      else {

      }
    }
    else {
      array_push($answers, "過去のツイートはありません。 / There are no answer.");
    }
    krsort($answers);
    $this->view->assign('answers', $answers);


    //Twitterカード用
    $this->meta = '
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@'.$objUm->screen_name.'" />
    <meta property="og:url" content="'.WEB_URL.'gimon/add/'.$objUm->screen_name.'" />
    <meta property="og:title" content="Ask '.$objUm->screen_name.'" />
    <meta property="og:description" content="'.$objUm->screen_name.'さんに質問をしよう。" />
    <meta property="og:image" content="'.WEB_URL.'logo.PNG" />
    ';

  }

  /**
  * 疑問を取得
  */
  public static function getGimonsFromDestination($id)
  {
    $array = GimonDao::getDaoFromDestinationId($id);
    $result = [];
    foreach($array as $gimon) {
      $objGm = new GimonModel;
      $objGm->setProperty($gimon);
      array_push($result, $objGm);
      unset($objGm);
    }
    return $result;
  }

  /**
  * 悪意のある言葉チェック
  */
  public static function checkBadWords($text)
  {
    $score = 0; //!悪意スコア
    $array = BadWordsDao::getDao();
    foreach ($array as $word) {
      if(strpos($text, $word['word']) !== false) {
        $score += $word['degree'];
      }
    }

    return $score;
  }
}
