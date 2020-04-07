<?php
namespace core\lib;

/**
 * 路由
 */
class route{


    public $controller;

    public $action;

    public function __construct ()
    {   
        //获得对应控制器及方法、参数
        if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI'] != "/"
        &&$_SERVER['REQUEST_URI'] != "/index.php"&&$_SERVER['REQUEST_URI'] != "/index.php/"){
            $uri = $_SERVER['REQUEST_URI'];

            if(strpos($uri,"index.php")){//如果没有隐藏index.php
                $uri = str_replace("index.php","",$uri);
            }

            //取控制器及方法
            $patharr = explode("/",trim($uri,"/"));
            if(isset($patharr[0])){
                $this->controller = $patharr[0];
                unset($patharr[0]);
            }
            if(isset($patharr[1])){

                if(strpos($uri,"?")){ //非Rest风格
                    $patharr[1] = explode("?",$patharr[1])[0];
                }

                $this->action = $patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = conf::get("action","route");
            }

            //取参数(对RestFul的处理)
            $count = count($patharr)+2;
            $i = 2;
            while($i < $count){
                if(isset($patharr[$i+1])){
                    $_GET[$patharr[$i]] = $patharr[$i+1];
                }
                $i+=2;
            }

        }else{
            $this->controller = conf::get("ctrl","route");
            $this->action = conf::get("action","route");
        }

    }

}