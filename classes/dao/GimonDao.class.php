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
    * ユーザーIDから配列を取得する
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
    * 更新する
    * @param GimonModel $objGM
    * @return bool
    */
    public static function save(GimonModel $objGM)
    {
        $sql = "UPDATE `gimon` SET ";
        $sql .= "`name`= :name, ";
        $sql .= "`ipaddress`= :ipaddress, ";
        $sql .= "`text`= :text, ";
        $sql .= "`created_at`= :created_at ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':name'] = $objGM->name;
        $arr[':ipaddress'] = $objGM->ipaddress;
        $arr[':text'] = $objGM->text;
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
        $sql .= ", :name ";
        $sql .= ", :ipaddress ";
        $sql .= ", :text ";
        $sql .= ", :created_at ";
        $sql .= ")";

        $arr = array();
        $arr[':id'] = $objGM->id;
        $arr[':name'] = $objGM->name;
        $arr[':ipaddress'] = $objGM->ipaddress;
        $arr[':text'] = $objGM->text;
        $arr[':created_at'] = $objGM->created_at;

        return Db::insert($sql, $arr);
    }

}
