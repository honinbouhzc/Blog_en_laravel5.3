<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware'=>['web']], function () {
Route::get('/','Home\IndexController@index');  
Route::get('/cate/{cate_id}','Home\IndexController@cate');
Route::get('/a/{art_id}','Home\IndexController@article');


Route::any('admin/login','Admin\LoginController@login');
//Route::any('admin/test','Admin\LoginController@test');
Route::get('admin/code','Admin\LoginController@code');
//Route::get('admin/crypt','Admin\LoginController@crypt');
// Route::get('admin/index','Admin\IndexController@index');
// Route::any('admin/info','Admin\IndexController@info');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function () {
	Route::get('index','IndexController@index');
	Route::get('info','IndexController@info');
	Route::get('quit','LoginController@quit');
	Route::any('pass','IndexController@pass');

	Route::resource('category','CategoryController');//
	Route::post('cate/changeorder','CategoryController@changeOrder');

	Route::resource('article','ArticleController');

	Route::any('upload','CommonController@upload');

	Route::post('links/changeorder', 'LinksController@changeOrder');
	Route::resource('links','LinksController');

 	Route::post('navs/changeorder', 'NavsController@changeOrder');
	Route::resource('navs','NavsController');

	Route::get('config/putfile', 'ConfigController@putFile');
    Route::post('config/changecontent', 'ConfigController@changeContent');
	Route::post('config/changeorder', 'ConfigController@changeOrder');
	Route::resource('config','ConfigController');

});