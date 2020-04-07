<?php
namespace app\controller;

use app\model\cate;
use core\lib\view;

class cateCtrl extends view{

    public function index()
    {
        $cate = new cate();
        $cates = $cate->cateAndCount();

        $this->assign("cates",$cates);
        $this->display("cate.html");
    }

    public function update()
    {
        $cate = new cate();
        $cate->id = intval(I("id"));
        $cate->name = I("name");
        $cate->update();
    }

    public function save()
    {
        $cate = new cate();
        $cate->name = I("name");
        $cate->save();
    }

    public function del()
    {
        $cate = new cate();
        $cate->del(intval(I("id")));
    }

}