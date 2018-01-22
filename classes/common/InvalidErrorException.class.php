<?php

namespace app\common;
require_once __DIR__."/../../common.php";

/**
 * InvaildErrorException クラス
 * @brief 無効エラー用のクラス
 */
class InvalidErrorException extends \Exception
{
  public function __construct($code, \Exception $previous = null)
  {
    $message = ExceptionCode::getMessage($code);
    $WEB = WEB_URL;
    //エラーページ生成
    print <<< EOS
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{$WEB}css/uikit.min.css" />
      <link rel="stylesheet" href="{$WEB}css/master.css" />
      <script src="{$WEB}js/uikit.min.js"></script>
      <script src="{$WEB}js/uikit-icons.min.js"></script>
    </head>
    <body class="uk-background-muted">
      <header class="">
        <nav class="default-primary-color primary-text-color uk-padding" uk-navbar>
          <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
              <a class="text-primary-color" href="">gimon</a>
            </ul>
          </div>
          <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
              <li class="uk-logo text-primary-color">Error</li>
            </ul>
          </div>
          <!--
          <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
              <li class="uk-active"><a href="#">Active</a></li>
              <li><a href="#">Item</a></li>
            </ul>
          </div>
        -->
        </nav>
      </header>
  <body class="uk-text-center">
    <div class="uk-container">
      <main class="uk-text-center">
        <h1>{$message}</h1>
        <p>操作をよくお確かめください。</p>
        <p>{$code}</p>
        <a href="#" class="uk-button uk-button-primary" onclick="javascript:window.history.back(-1);return false;">戻る</a>
      </main>
    </div>
  </body>
</html>
EOS;
    parent::__construct( $message, $code, $previous);
  }
}
