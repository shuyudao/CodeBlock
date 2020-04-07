<?php

use app\controller\indexCtrl;
use core\lib\conf;

/**
 * 函数库
 */
function p($msg)
{
    $time = microtime(true);
    if(is_array($msg)){
        $msg = json_encode($msg);
    }
    echo "<div style='padding:10px;font-size:14px;background:#e9e9e9;
    border-radius:6px;margin:5px 0;min-width:100px'>$msg <span style='font-size:12px;color:#999'>$time</span></div>";
}

/**
 * 获取参数
 */
function I($d){

    if(isset($_POST[$d])){
        return $_POST[$d];
    }else if(isset($_GET[$d])){
        return $_GET[$d];
    }
    
    return NULL;
}

/**
 * 权限检查
 */
function AuthCheck(){
    $md5 = md5(conf::get("username","site").conf::get("password","site")."codeblock");
    $cookie = isset($_COOKIE["user"])?$_COOKIE["user"]:"";

    if($md5!=$cookie){
        header("Location: /index.php/index/login");
        die;
    }

}

/**
 * api接口响应
 */
function Res($code = 200,$msg = "",$data = 1){

    $base = ["code"=>$code,"msg"=>$msg,"data"=>$data];

    if($msg == ""){
        unset($base['msg']);
    }
    if($data == 1){
        unset($base['data']);
    }
    
    return $base;
}