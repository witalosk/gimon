<?php
namespace app\model;

use app\dao\GimonDao;
/**
* GimonModel クラス
* @brief 疑問モデル
*/
final class GimonModel
{
  public $id = null; //!ID
  public $destination = null; //!宛先のTwitterID
  public $ipaddress = null; //!質問者のＩＰアドレス
  public $text = null; //!質問内容
  public $answer = null; //!回答TweetID
  public $created_at = null; //!質問日時

  /**
  * コンストラクタ
  * @param array $array
  * @return \app\model\GimonModel
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
  * @return \app\model\GimonModel
  */
  public function setProperty($array)
  {
    $this->id = $array['id'];
    $this->destination = $array['destination'];
    $this->ipaddress = $array['ipaddress'];
    $this->text = $array['text'];
    $this->answer = $array['answer'];
    $this->created_at = $array['created_at'];

    return $this;
  }

  /**
  * idから疑問を検索するメソッド
  * @param string $id
  * @return \app\model\GimonModel
  */
  public function getModelById($id)
  {
    $dao = GimonDao::getDaoFromId($id);
    return (isset($dao[0])) ? $this->setProperty(reset($dao)) : null;
  }

  /**
  * DBを更新・DBに保存するメソッド
  * @return bool
  */
  public function save()
  {
    return GimonDao::save($this);
  }

  /**
  * gimonを新規登録する
  *
  * @return bool
  */
  public function register()
  {
    return GimonDao::insert($this);
  }

  /**
  * gimonを削除する
  */
  public function delete()
  {
    return GimonDao::delete($this);
  }

}
