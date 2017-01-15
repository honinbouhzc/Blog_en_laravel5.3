<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends CommonController
{
	//get.admin/category  
    public function index(){
    	$categories = (new Category)->tree();//
    	//$data = $this-> getTree($categories,'cate_name','cate_id','cate_pid',0);
    	return view('admin.category.index')->with('data',$categories);//
    }

    public function changeOrder(){
    	$input = Input::all();
    	$cate = Category::find($input['cate_id']);
    	$cate->cate_order = $input['cate_order'];
    	$re = $cate->update();
    	if($re){
    		$data =['status'=>0,'msg'=>'success'];
    	}else{
    		$data =['status'=>1,'msg'=>'fail'];
    	}
    	
    	//echo $input['cate_id'];
    }
   
    //get.admin/category/create   
    public function create(){
    	$data = Category::where('cate_pid',0)->get();
        return view('admin/category/add',compact('data'));
    }

    //post.admin/category  
    public function store(){
    	$input = Input::except('_token');//
    	$rules = [
            'cate_name'=>'required',
        ];

        $message = [
            'cate_name.required'=>'Name is not null',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $re = Category::create($input);
            if($re){
                return redirect('admin/category');
            }else{
                return back()->with('errors','Filled data is failure, please try it again later!');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    // //get.admin/category/{category}  
    // public function show(){

    // }

    // //delete.admin/category/{category}   
    // public function destroy($cate_id){

    // }


    //get.admin/category/{category}/edit  
    public function edit($cate_id){
    	$data = Category::where('cate_pid',0)->get();
    	$field = Category::find($cate_id);
    	return view('admin.category.edit',compact('field','data'));
    }

     //put.admin/category/{category} 
    public function update($cate_id){
    	$input = Input::except('_token','_method');
    	$re = Category::where('cate_id',$cate_id)->update($input);
    	if($re){
    		return redirect('admin/category');
    	}else{
    		return back()->with('errors','Updated category is failure, please try it again later');
    	};
    }



}
