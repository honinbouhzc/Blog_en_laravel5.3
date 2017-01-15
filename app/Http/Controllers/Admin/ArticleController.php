<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{
    //get.admin/article 
    public function index(){
        $data =Article::orderby('art_id','desc')->paginate(7);
        return view('admin.article.index',compact('data'));
    }

      //get.admin/article/create   
    public function create(){
    	$data = (new Category)->tree();
    	return view('admin.article.add',compact('data'));
    }

    //post.admin/article  
    public function store(){
    	$input = Input::except('_token');
    	$input['art_time'] = time();

    	$rules = [
            'art_title'=>'required',
            'art_content'=>'required',
        ];

        $message = [
            'art_title.required'=>'Article Title can not null',
            'art_content.required'=>'Article Content can not null',
        ];

        $validator = Validator::make($input,$rules,$message);

    	if($validator->passes()){
            $re = Article::create($input);
            if($re){
                return redirect('admin/article');
            }else{
                return back()->with('errors','Filled data is failure, please try it again later!');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get.admin/article/{art}/edit  
    public function edit($art_id){
        $data = (new Category)->tree();
        $field = Article::find($art_id);

        return view('admin.article.edit',compact('data','field'));
    }

    //put.admin/article/{article}   
    public function update($art_id){
        $input = Input::except('_token','_method');
        $re = Article::where('art_id',$art_id)->update($input);
        if($re){
            return redirect('admin/article');
        }else{
            return back()->with('errors','Updated article is failure, please try it again later');
        }
    }

    //delete.admin/article/{article}   
    public function destroy($art_id){
        $re = Article::where('art_id',$art_id)->delete();
         if($re){
            $data = [
                'status' => 0,
                'msg' => 'Delete successfullly',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => 'Delete unsuccessfully, please try it again later',
            ];
        }
        return $data;
    }

}
