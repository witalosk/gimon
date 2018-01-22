<?php
namespace app\common;
use app\common\RequestVariables;

class UrlParameter extends RequestVariables
{
    protected function setValues()
    {
        // パラメータ取得(末尾の/は削除)
        $param = preg_replace('/\/?$/', '', $_SERVER['REQUEST_URI']);

        $params = array();
        if ('' != $param) {
            // パラメータを/で分割
            $params = explode('/', $param);
        }
        // 3番目以降のパラメータを順に_valuesに格納
        $i = 3 + DIR_NUM;
        if (4 + DIR_NUM == count($params)) {
          $this->_values[0] = $params[$i];
        }
        else if (4 + DIR_NUM < count($params)) {
            $key = "";
            for ($i = 3 + DIR_NUM; $i < count($params); $i++) {
                if ($i % 2 == 1) {
                    $key = $params[$i];
                }
                else {
                    $this->_values[$key] = $params[$i];
                }
            }
        }
    }
}
