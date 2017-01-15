<?php
namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\View;
require_once '/org/code/Code.class.php';//

class LoginController extends CommonController
{
    public function login()
    {
        if($input = Input::all()){
            $code = new \Code;//
            $_code = $code->get();//
            if(strtoupper($input['code'])!=$_code){//
            	
                return back()->with('msg','Entered an error code！');
            }
            $user = User::first();//
            if($user->user_name != $input['user_name'] || Crypt::decrypt($user->user_pass)!= $input['user_pass']){
                return back()->with('msg','username or password is error！');
            }
            session(['user'=>$user]);//
            //redirect();
            return redirect('admin/index');

        }else {
            return view('admin.login');
        }
    }

    
    public function code(){
    	$code = new \Code ; 
    	$code->make();
    }

    public function quit(){
        session(['user'=>null]);
        return redirect('admin/login');
    }

    //  public function crypt(){
    // 	$str = '123456';
    // 	$str_p = 'eyJpdiI6IkE4ZnI4VFd1dmt1dkh5VHFGYUdCWXc9PSIsInZhbHVlIjoiclZjWDFIZHIzbERzS2QxSEl2YjY5UT09IiwibWFjIjoiM2E0NzFhYWRkZTU2OGViMzlmNzQ0NDViNDcxYjRhODUzYmExMTg1YzdlYzhiYzEzMjFhM2Q4MzJlZTA2MmQ0OSJ9';
    // 	echo Crypt::encrypt($str);
    // 	echo '<br>';
    // 	echo Crypt::decrypt($str_p);
    // }
}
