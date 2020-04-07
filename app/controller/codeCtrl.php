<?php
namespace app\controller;

use app\model\cate;
use app\model\code;
use core\lib\view;

class codeCtrl extends view{

    public function index()
    {
        $cate = new cate();
        $cates = $cate->findAll();

        if(I("codeid")!=NULL){
            $code = new code();
            $code = $code->find(intval(I("codeid")));
            $this->assign("code",$code->code);
            $this->assign("codeid",I("codeid"));
            $this->assign("title",$code->title);
            $this->assign("cateid",$code->cateid);
        }

        $this->assign("cates",$cates);
        $this->display("code.html");
    }

    public function save(){
        if(I("title")==NULL||I("code")==NULL){
            return Res(100);
        }
        $code = new code();
        if(I("id")!=""){
            $code = $code->find(intval(I("id")));
        }
        $code->title = I("title");
        $code->code = I("code");
        $code->cateid = intval(I("cateid"));
        $code->ctime = time();
        $code->save();
        return Res();
    }

    public function select(){
        $code = new code();
        if(I("cateid")!=NULL){
            $count = $code->count(I("cateid"));
        }
        return Res(200,"success",["res"=>$code->select(I("cateid"),I("page")),"count"=>$count]);
    }


    public function search(){
        $code = new code();
        $res = $code->search(I("keyword"));
        return Res(200,"success",["res"=>$res,"count"=>count($res)]);
    }

    public function del(){
        $code = new code();
        $code->del(intval(I("id")));
    }
}