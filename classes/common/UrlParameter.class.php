<?php
namespace app\common;

class urlParameter extends RequestVariables
{
  protected function setValues()
  {
    $param = ereg_replace('/?$', $_GET['param']);
    $params = [];

    if("" != $param)
    {
      //パラメータをスラッシュで分割
      $params = explode("/", $param);
    }
    for($i = 0; $i < (count($temp)*2); $i++)
    {
      $this->values[$params[$i]] = $params[$i+1];
    }
  }
}
