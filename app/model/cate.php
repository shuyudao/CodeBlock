<?php
namespace app\model;
use core\lib\model;
use Lazer\Classes\Database as Lazer;

class cate extends model{

    private $cates;

    public $id;
    public $name;

    public function __construct(){
        $this->cates = Lazer::table('cate');
    }

    public function save()
    {
        $this->cates->name = $this->name;
        return  $this->cates->save();
    }
    
    public function findAll()
    {
        return  $this->cates->findAll()->asArray();
    }

    public function findByid($id){
        return $this->cates->find($id);
    }

    /**
     * 所有cate分类以及下总数
     */
    public function cateAndCount()
    {
        $data = $this->cates->findAll()->asArray();
        
        $code = new code();
        for($i = 0 ; $i < count($data) ; $i++){
            $t = &$data[$i];
            $t['count'] = $code->count($t['id']);
        }
        return $data;
    }

    /**
     * 更新
     */
    public function update()
    {
        $row = $this->cates->find($this->id);
        $row->name = $this->name;
        $row->save();
    }

    /**
     * 删除
     */
    public function del($cateid)
    {
        $this->cates->find($cateid)->delete();
    }
}