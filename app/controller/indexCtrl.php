<?php
namespace app\controller;

use app\model\cate;
use app\model\code;
use core\lib\view;

/**
 * 控制器
 */
class indexCtrl extends view
{
    public function index()
    {
        $cate = new cate();
        $code = new code();
        $cates = $cate->findAll();
        $codes = $code->select();
        $count = $code->count();

        $this->assign("cates",$cates);
        $this->assign("codes",$codes);
        $this->assign("count",$count);
        $this->display("index.html");
    }

    public function login()
    {
        $this->display("login.html");
    }

}