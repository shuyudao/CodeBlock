<?php
namespace app\model;
use core\lib\model;
use Lazer\Classes\Database as Lazer;

class code extends model{
    //参数
    public $title;
    public $code;
    public $cateid;
    public $ctime;

    private $codeM;

    public function __construct(){
        $this->codeM = Lazer::table('code');
    }

    public function save()
    {
        $this->codeM->title = $this->title;
        $this->codeM->code = $this->code;
        $this->codeM->cateid = intval($this->cateid);
        $this->codeM->ctime = $this->ctime;
        return $this->codeM->save();
    }

    public function find($id)
    {
        return $this->codeM->find($id);
    }
    /**
     * 分类下片段总数
     */
    public function count($cateid = 0)
    {
        if(!$cateid){
            return $this->codeM->findAll()->count();
        }
        return $this->codeM->where("cateid","=",$cateid)->findAll()->count();
    }

    /**
     * 查询分类下
     */
    public function select($cateid = 0,$page = 0)
    {
        $data = array();
        if(!$cateid){
            $data = $this->codeM->orderBy('id', 'DESC')->limit(10,$page*10)->findAll()->asArray();
        }else{
            $data = $this->codeM->where('cateid',"=",$cateid)->orderBy('id', 'DESC')->limit(10,$page*10)->findAll()->asArray();
        }

        $cate = new cate();
        
        for($i = 0 ; $i < count($data) ; $i++){
            $t = &$data[$i];
            $t['catename'] = $cate->findByid($t['cateid'])->name;
        }

        return $data;

    }

    /**
     * 模糊查询
     */
    public function search($keyword)
    {
        $keyword = "%".urldecode($keyword)."%";
        $data = $this->codeM->where("title","LIKE",$keyword)->findAll()->asArray();

        $cate = new cate();
        for($i = 0 ; $i < count($data) ; $i++){
            $t = &$data[$i];
            $t['catename'] = $cate->findByid($t['cateid'])->name;
        }
        return $data;
    }

    public function del($id)
    {
        $this->codeM->find($id)->delete();
    }
}