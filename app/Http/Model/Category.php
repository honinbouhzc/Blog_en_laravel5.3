<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table = 'category';
   protected $primaryKey = 'cate_id';
  	public $timestamps = false;
    protected $guarded =[];//fillable abd guarded 

  	public function tree(){
  		$categories =$this->orderBy('cate_order','asc')->get();//
    	 return $data = $this-> getTree($categories,'cate_name','cate_id','cate_pid');//
  	}

  	 public function getTree($data,$field_name,$fieli_id='id',$field_pid='pid',$pid=0){//
    	$arr = array();//
    	foreach ($data as $k => $v) {
    		if($v->$field_pid == $pid){
    			$data[$k]['_'.$field_name] = $data[$k][$field_name];//
          $arr[] = $data[$k];
    			foreach ($data as $m => $n) {//
    				if($n->$field_pid == $v->$fieli_id){//
    					$data[$m]['_'.$field_name] = '|---'.$data[$m][$field_name];//
    					//
    				}
    			}
    		}	
    	}
    	return $arr;
    }
}
