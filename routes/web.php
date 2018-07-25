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

Route::get('/',function(){
    return view('welcome');
});
Route::get('ID/{id?}',function($id = 0){
    return "ID {$id}";
});

Route::get('welcome/{locale?}',function($locale){
          App::setLocale($locale);
          return view('translation_example');
    
});

Route::get('/about', function () {
    return '<h3>London App Page</h3>';
});

Route::get('/array',function(){
   $response_arr['author']= 'BP';
   $response_arr['version']= '0.1.1';
    return $response_arr;
    
});

Route::get('/home',function(){
   $response_arr['author']= 'BP';
   $response_arr['version']= '0.1.1';
    return view('welcome',$response_arr);
    
});

Route::get('/titles', 'TestController@di');

Route::get('/facades/encrypt',function(){
    return Crypt::encrypt('123456789'); 
});

Route::get('/facades/decrypt',function(){
    return Crypt::decrypt('eyJpdiI6ImlkTmZhRzNHZVFnWGpVME5uYlwvYldnPT0iLCJ2YWx1ZSI6InY1bDNhdEQxc0I2UCtuY2N1NGdjNUpTS0s4c25IVmJYckhmbEhZTlVTUUE9IiwibWFjIjoiMjhlNmViZmEzZWMyNzIwODllMjYyZGQwMDJkZjM4YTZiM2FkMzc3OTZmOTA4MDM4MGQyYTYyOGQ5ZmVhZmZjYyJ9'); 
});

Route::get('foo',function(){
    return "my route";
});
