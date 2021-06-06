<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Usercontroller;


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
//Route::get('/welcome', function () {
  //return view('welcome');
  //});

  //Route::get('/hello', function () {
    //  return view('hello');
  
  //});
  //Route::get('posts','Usercontroller@index')->name('Usercontroller.index');
  
  //Route::get('/lists', function()
  //{
   //   return view('hello');
  //}
  //Route::get('/','App\Http\controllers\users@index');
  //Route::get('/users',[users::class,'index']);
  //insert data
  //Route::get('/',[Usercontroller::class,'index']);
  //Route::get('/','Usercontroller@index');      model
  //Route ::view ("agecorrect","agecorrect");   middleware view file ddeleted
  //Route ::view ("agenot","agenot");             middle ware    "
  
  
  //Route ::view ("home","home");                            group middleware
  //Route ::view ("noaccess","noaccess");
  //Route::group(['middleware'=>['protectedpage']],function(){
  
    //Route::view ("users","users");
  //});
  
  //Route ::view ('list',[Usercontroller::class,'index']);
  Route::get('list','Usercontroller@getData'); 
  Route::view('add','add'); 
  Route::post('add','Usercontroller@index');
  

