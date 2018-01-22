<?php
namespace app\controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class IndexController extends ControllerBase
{
  public function indexAction()
  {
    if(UserController::checkLogin('',false) == true) {
      header('Location: '.WEB_URL.'user/main');
    }
  }

}
