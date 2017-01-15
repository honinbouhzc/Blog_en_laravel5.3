<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Article;

class CommonController extends Controller
{
    //upload images
    public function upload(){
    	$file = Input::file('Filedata');
    	if ($file->isValid()) {
    		//$realPath = $file->getRealPath();//
    		$entension = $file -> getClientOriginalExtension(); //.
    		$newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
    		$path = $file -> move(base_path().'/public/uploads',$newName);//
    		$filepath = 'uploads/'.$newName;
    		return $filepath ;
    	}
    	
    }
}
