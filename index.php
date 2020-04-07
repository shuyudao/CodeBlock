<?php
/**
 * 入口文件
 * @术与道 2020-4-6
 */

 //常量配置
define("MVC",dirname(__FILE__));
define("CORE",MVC."/core");
define("APP",MVC."/app");
define("DEBUG",true);
date_default_timezone_set('PRC');
define('LAZER_DATA_PATH', MVC.'/data/');

if(DEBUG){
    ini_set("display_error","On");
}else{
    ini_set("display_error","Off");
}

include MVC."/vendor/autoload.php";
include CORE."/common/function.php";
include CORE."/mvc.php";

//类自动加载注册
spl_autoload_register("\core\Mvc::autoLoad");

//启动
\core\Mvc::run();