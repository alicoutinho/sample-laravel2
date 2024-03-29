<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','IndexController@index');
Auth::routes();

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/product/gallery','Admin\ProductController@gallery');
Route::post('admin/product/upload','Admin\ProductController@upload');


Route::group(['middleware'=>['auth','UserLevel']],function(){
    $this::get('/home', 'HomeController@index')->name('home');
});

Route::group(['namespace'=>'Admin','middleware'=>['auth','UserLevel'],'prefix'=>'admin'],function(){
    $this::resource('/category','CategoryController');
    $this::resource('/product','ProductController');
    $this::resource('/role','RoleController');
    $this::resource('/user','UserController');
    $this::resource('/permission','PermissionController');
    $this::resource('/slider','SliderController');
    $this::resource('/filter','FilterController');
});
Route::resource('/category','CategoryController');


Route::get('/userpanel', 'HomeController@userpanel');



