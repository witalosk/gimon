<?php

namespace app\dao;

use app\common\Db;
use app\model\UserModel;

/**
* UserDao クラス
* @brief ユーザに関する処理のSQL文をつくる
*/
class UserDao
{

    /**
    * ユーザーIDから配列を取得する
    * @param int $userId
    * @return array
    */
    public static function getDaoFromId($id)
    {
        $sql = "SELECT ";
        $sql .= " * ";
        $sql .= "FROM `user` ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $id;

        $res = Db::select($sql, $arr);
        return $res;
    }
    /**
    * ScreenNameから配列を取得する
    * @param int $userId
    * @return array
    */
    public static function getDaoFromScreenName($sn)
    {
        $sql = "SELECT ";
        $sql .= " * ";
        $sql .= "FROM `user` ";
        $sql .= "WHERE `screen_name` = :sn ";

        $arr = array();
        $arr[':sn'] = $sn;

        $res = Db::select($sql, $arr);
        return $res;
    }

    /**
    * 更新する
    * @param UserModel $objUM
    * @return bool
    */
    public static function save(UserModel $objUM)
    {
        $sql = "UPDATE `user` SET ";
        $sql .= "`name`= :name, ";
        $sql .= "`screen_name`= :screen_name, ";
        $sql .= "`blocklist`= :blocklist, ";
        $sql .= "`created_at`= :created_at, ";
        $sql .= "`updated_at`= :updated_at ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':name'] = $objUM->name;
        $arr[':screen_name'] = $objUM->screen_name;
        $arr[':blocklist'] = $objUM->blocklist;
        $arr[':created_at'] = $objUM->created_at;
        $arr[':updated_at'] = $objUM->updated_at;
        $arr[':id'] = $objUM->id;

        return Db::update($sql, $arr);
    }

    /**
    * 新規作成する
    * @return int
    */
    public static function insert(UserModel $objUM)
    {
        $sql = "INSERT INTO `user` VALUES (";
        $sql .= ":id ";
        $sql .= ", :name ";
        $sql .= ", :screen_name ";
        $sql .= ", :blocklist ";
        $sql .= ", :created_at ";
        $sql .= ", :updated_at ";
        $sql .= ")";

        $arr = array();
        $arr[':id'] = $objUM->id;
        $arr[':name'] = $objUM->name;
        $arr[':screen_name'] = $objUM->screen_name;
        $arr[':blocklist'] = $objUM->blocklist;
        $arr[':created_at'] = $objUM->created_at;
        $arr[':updated_at'] = $objUM->updated_at;

        return Db::insert($sql, $arr);
    }

}
