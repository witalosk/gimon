<?php
namespace app\common;
use app\common\Post;
use app\common\QueryString;
use app\common\UrlParameter;

class Request
{
    // POSTパラメータ
    private $post;
    // GETパラメータ
    private $query;
    // URLパラメータ
    private $param;

    // コンストラクタ
    public function __construct()
    {
        $this->post = new Post();
        $this->query = new QueryString();
        $this->param = new UrlParameter();
    }

    // POST変数取得
    public function getPost($key = null)
    {
        if (null == $key) {
            return $this->post->get();
        }
        if (false == $this->post->has($key)) {
            return null;
        }
        return $this->post->get($key);
    }

    // GET変数取得
    public function getQuery($key = null)
    {
        if (null == $key) {
            return $this->query->get();
        }
        if (false == $this->query->has($key)) {
            return null;
        }
        return $this->query->get($key);
    }

    // URL変数取得
    public function getParam($key = null)
    {
        if (null == $key) {
            return $this->param->get();
        }
        if (false == $this->param->has($key)) {
            return null;
        }
        return $this->param->get($key);
    }
}
