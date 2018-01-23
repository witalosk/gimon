<?php

namespace app\dao;

use app\common\Db;

/**
* BadWordsDao クラス
* @brief 悪意のある言葉の検索用DAO
*/
class BadWordsDao
{

  /**
  * 悪意のある言葉一覧を取得する
  * @return array
  */
  public static function getDao()
  {
    $sql = "SELECT ";
    $sql .= " * ";
    $sql .= "FROM `badwords` ";

    $arr = array();

    $res = Db::select($sql, $arr);
    return $res;
  }
}
