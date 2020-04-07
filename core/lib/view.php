<?php
namespace core\lib;

/**
 * 视图基类
 */
class view{

    private $smarty;


    public function __construct()
    {
        $this->smarty = new \Smarty;
        $this->smarty->left_delimiter = "{{";
        $this->smarty->right_delimiter = "}}";
        $this->smarty->setTemplateDir(APP . '/views/');
        $this->smarty->setCacheDir(APP . '/cache/');
    
        $this->smarty->assign("css","/static/css/");
        $this->smarty->assign("js","/static/js/");

    }

    public function assign($name,$val)
    {
        $this->smarty->assign($name,$val);
    }

    public function display($file)
    {
        $file = APP.'/views/'.$file;
        if(is_file($file)){
            $this->smarty->display($file);
        }
    }
}