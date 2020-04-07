<?php
namespace core;

use core\lib\conf;
use Exception;

/**
 * 核心库
 */
class mvc{

    public static $classMap = array();

    //启动
    public static function run()
    {
        $route = new \core\lib\route();

        $ctrlClass = $route->controller;
        $action = $route->action;

        //可开放的路由
        $openRoute = array(
            "index/index",
            "cate/index",
            "code/select",
            "code/search"
            
        );
        $routepath = $ctrlClass."/".$action;

        if(in_array($routepath,$openRoute)&&conf::get("open","site")){
//
        }else if($routepath!="index/login"){
            AuthCheck();
        }

        $cfile = APP."/controller/".$ctrlClass."Ctrl.php";
        $ctrlClass = "\app\controller\\".$ctrlClass."Ctrl";
        if(is_file($cfile)){
            include $cfile;
            $ctrl = new $ctrlClass();
            $result = $ctrl->$action();

            if($result!=NULL&&is_array($result)){ //返回json格式
                header('Content-Type:application/json; charset=utf-8');
                echo json_encode($result);
            }
        }else{
            throw new Exception("找不到对应的控制器".$ctrlClass);
        }
    }

    //自动加载
    static function autoLoad($class)
    {
        
        if(isset(self::$classMap[$class])){
            return true;
        }else{
            $class = str_replace("\\","/",$class);
            $file = MVC."/".$class.".php";
            if(file_exists($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                
                return false;
            }
        }
        

    }

}