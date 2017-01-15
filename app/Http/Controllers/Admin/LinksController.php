<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Links;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LinksController extends CommonController
{
    //get.admin/links  
    public function index(){
    	$data = Links::orderBy('link_order','asc')->get();	
    	return view('admin.links.index',compact('data'));
    }

     public function changeOrder()
    {
        $input = Input::all();
        $links = Links::find($input['link_id']);
        $links->link_order = $input['link_order'];
        $re = $links->update();
        if($re){
            $data = [
                'status' => 0,
                'msg' => 'Updated successfully',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => 'Updated link is failure, please try it again later！',
            ];
        }
        return $data;
    }

    //get.admin/links/create   
    public function create(){
    	return view('admin.links.add');
    }

    //post.admin/links  
    public function store(){
    	$input = Input::except('_token');
        $rules = [
            'link_name'=>'required',
            'link_url'=>'required',
        ];

        $message = [
            'link_name.required'=>'Name is not null',
            'link_url.required'=>'URL is not null！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $re = Links::create($input);
            if($re){
                return redirect('admin/links');
            }else{
                return back()->with('errors','Updated link is failure, please try it again later');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

     //get.admin/links/{links}/edit  
    public function edit($link_id){
    	$field = Links::find($link_id);
    	return view('admin.links.edit',compact('field'));
    }

     //put.admin/links/{links}    
    public function update($link_id){
    	$input = Input::except('_token','_method');
        $re = Links::where('link_id',$link_id)->update($input);
        if($re){
            return redirect('admin/links');
        }else{
            return back()->with('errors','Updated link is failure, please try it again later！');
        }
    }

     //delete.admin/links/{links}   
    public function destroy($link_id){
    	$re = Links::where('link_id',$link_id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => 'Delete successfully！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => 'Deleted link is failure, please try it again later！',
            ];
        }
        return $data;
    }

    //get.admin/links/{links}  
    public function show()
    {

    }
}
