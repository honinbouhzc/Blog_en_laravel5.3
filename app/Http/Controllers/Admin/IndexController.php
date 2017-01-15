<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    public function index(){
    	return view('admin.index');
    }

    public function info(){
    	return view('admin.info');
    }

    //change super admin password
    public function pass(){
   	 if($input = Input::all()){ 	
    	
    	$rules = [
    			'password'=>'required|between:6,20|confirmed',	
    			];
    	$message = ['password.required'=>'New password is not null',
    				'password.between'=>'New password uses 6 to 20 characters',
    				'password.confirmed'=>'Comfirmed password is different from new password',
    				];
    	$validator = Validator::make($input,$rules,$message);
    	
    	if($validator->passes()){
            $user = User::first();
            $_password = Crypt::decrypt($user->user_pass);
            if($input['password_o']==$_password){
                $user->user_pass = Crypt::encrypt($input['password']);
                $user->update();
                return back()->with('errors','Changed password is successful!');
            }else{
                return back()->with('errors','Original password is error');
                }
        }else{
            return back()->withErrors($validator);
            }

    }else{
        return view('admin.pass');
        }
    }
}
