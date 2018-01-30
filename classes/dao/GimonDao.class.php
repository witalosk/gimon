<?php

namespace app\dao;

use app\common\Db;
use app\model\GimonModel;

/**
* GimonDao クラス
* @brief 質問に関する処理のSQL文をつくる
*/
class GimonDao
{

  /**
  * 疑問IDから配列を取得する
  * @param int $gimonId
  * @return array
  */
  public static function getDaoFromId($id)
  {
    $sql = "SELECT ";
    $sql .= " * ";
    $sql .= "FROM `gimon` ";
    $sql .= "WHERE `id` = :id ";

    $arr = array();
    $arr[':id'] = $id;

    $res = Db::select($sql, $arr);
    return $res;
  }

  /**
  * ユーザIDから配列を取得する
  * @param int $destinationId
  * @return array
  */
  public static function getDaoFromDestinationId($id)
  {
    $sql = "SELECT ";
    $sql .= " * ";
    $sql .= "FROM `gimon` ";
    $sql .= "WHERE `destination` = :id ";
    $sql .= "ORDER BY `id` DESC ";

    $arr = array();
    $arr[':id'] = $id;

    $res = Db::select($sql, $arr);
    return $res;
  }

  /**
  * 更新する
  * @param GimonModel $objGM
  * @return bool
  */
  public static function save(GimonModel $objGM)
  {
    $sql = "UPDATE `gimon` SET ";
    $sql .= "`destination`= :destination, ";
    $sql .= "`ipaddress`= :ipaddress, ";
    $sql .= "`text`= :text, ";
    $sql .= "`answer`= :answer, ";
    $sql .= "`created_at`= :created_at ";
    $sql .= "WHERE `id` = :id ";

    $arr = array();
    $arr[':destination'] = $objGM->destination;
    $arr[':ipaddress'] = $objGM->ipaddress;
    $arr[':text'] = $objGM->text;
    $arr[':answer'] = $objGM->answer;
    $arr[':created_at'] = $objGM->created_at;
    $arr[':id'] = $objGM->id;

    return Db::update($sql, $arr);
  }

  /**
  * 新規作成する
  * @return int
  */
  public static function insert(GimonModel $objGM)
  {
    $sql = "INSERT INTO `gimon` VALUES (";
    $sql .= ":id ";
    $sql .= ", :destination ";
    $sql .= ", :ipaddress ";
    $sql .= ", :text ";
    $sql .= ", :answer ";
    $sql .= ", :created_at ";
    $sql .= ")";

    $arr = array();
    $arr[':id'] = $objGM->id;
    $arr[':destination'] = $objGM->destination;
    $arr[':ipaddress'] = $objGM->ipaddress;
    $arr[':text'] = $objGM->text;
    $arr[':answer'] = $objGM->answer;
    $arr[':created_at'] = $objGM->created_at;

    return Db::insert($sql, $arr);
  }

  /**
  * 削除する
  */
  public static function delete(GimonModel $objGM)
  {
    $sql = "DELETE FROM `gimon` ";
    $sql .= "WHERE `id`=:id";

    $arr = [];
    $arr[':id'] = $objGM->id;

    return Db::delete($sql, $arr);
  }

}
