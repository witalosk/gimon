<?php
namespace app\model;

use app\dao\UserDao;
/**
* UserMode クラス
* @brief ユーザモデル
*/
final class UserModel
{
    public $id = null;
    public $name = null;
    public $screen_name = null;
    public $blocklist = null;
    public $created_at = null;
    public $updated_at = null;

    /**
    * コンストラクタ
    * @param array $array
    * @return \app\model\UserModel
    */
    public function __construct($array = array())
    {
        if(null != $array)
        {
            $this->setProperty($array);
        }
    }

    /**
    * プロパティを配列で指定するメソッド
    * @param array $array
    * @return \app\model\UserModel
    */
    public function setProperty($array)
    {
        $this->id = $array['id'];
        $this->email = $array['name'];
        $this->password = $array['screen_name'];
        $this->permissions = $array['blocklist'];
        $this->created_at = $array['created_at'];
        $this->updated_at = $array['updated_at'];

        return $this;
    }

    /**
    * ユーザidからユーザモデルを検索するメソッド
    * @param string $id
    * @return \app\model\UserModel
    */
    public function getModelById($id)
    {
        $dao = UserDao::getDaoFromId($id);
        return (isset($dao[0])) ? $this->setProperty(reset($dao)) : null;
    }

    /**
    * DBを更新・DBに保存するメソッド
    * @return bool
    */
    public function save()
    {
        return UserDao::save($this);
    }

    /**
    * ユーザを新規登録する
    *
    * @return bool
    */
    public function register()
    {
        return UserDao::insert($this);
    }
}
