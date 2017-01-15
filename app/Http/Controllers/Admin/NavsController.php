<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NavsController extends Controller
{
    //get.admin/navs  
    public function index()
    {
        $data = Navs::orderBy('nav_order','asc')->get();
        return view('admin.navs.index',compact('data'));
    }

    public function changeOrder()
    {
        $input = Input::all();
        $navs = Navs::find($input['nav_id']);
        $navs->nav_order = $input['nav_order'];
        $re = $navs->update();
        if($re){
            $data = [
                'status' => 0,
                'msg' => 'Updated successfully！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => 'Updated navigator is failure, please try it again later!',
            ];
        }
        return $data;
    }

    //get.admin/navs/create   
    public function create()
    {
        return view('admin/navs/add');
    }

    //post.admin/navs  
    public function store()
    {
        $input = Input::except('_token');
        $rules = [
            'nav_name'=>'required',
            'nav_url'=>'required',
        ];

        $message = [
            'nav_name.required'=>'Name is not null！',
            'nav_url.required'=>'URL is not null！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $re = Navs::create($input);
            if($re){
                return redirect('admin/navs');
            }else{
                return back()->with('errors','Updated navigator is failure, please try it again later！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get.admin/navs/{navs}/edit  
    public function edit($nav_id)
    {
        $field = Navs::find($nav_id);
        return view('admin.navs.edit',compact('field'));
    }

    //put.admin/navs/{navs}    
    public function update($nav_id)
    {
        $input = Input::except('_token','_method');
        $re = Navs::where('nav_id',$nav_id)->update($input);
        if($re){
            return redirect('admin/navs');
        }else{
            return back()->with('errors','Updated navigator is failure, please try it again later！');
        }
    }

    //delete.admin/navs/{navs}   
    public function destroy($nav_id)
    {
        $re = Navs::where('nav_id',$nav_id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => 'Deleted successfully！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => 'Deleted navigator is failure, please try it again later！',
            ];
        }
        return $data;
    }


    //get.admin/navs/{navs}  
    public function show()
    {

    }

}
