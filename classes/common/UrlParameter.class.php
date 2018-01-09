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
    for(int $i = 0; $i<(count($temp)*2); $i++)
    {
      $this->_values[$params[$i]] = $params[$i+1];
    }
  }
}
