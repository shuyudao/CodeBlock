<?php
namespace core\lib;
/**
 * 配置加载
 */

 class conf
 {

    static $conf = array();//已加载的配置文件内容

    static public function get($name,$file){


        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }

        $path = MVC."/config/".$file.".php";
        if(is_file($path)){
            $config = include $path;
            if(isset($config[$name])){
                self::$conf[$file] = $config; //缓存以加载的配置文件内容
                return $config[$name];
            }else{
                throw new \Exception("没有该配置项".$name);
            }
        }else{
            throw new \Exception("找不到配置文件".$file);
        }

    }

    //取出配置文件所有内容
    static public function all($file)
    {
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }

        $path = MVC."/config/".$file.".php";
        if(is_file($path)){
            $config = include $path;
            self::$conf[$file] = $config;
            return $config;
        }else{
            throw new \Exception("找不到配置文件".$file);
        }

    }
 }
