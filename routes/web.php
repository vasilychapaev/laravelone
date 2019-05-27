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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/id{id?}', function($id=null) {
    return $id ? 'User '.$id : 'User not found';
})->where(['id'=>'[\d]+']);
Route::view('/form', 'form');
Route::post('/form', 'UserController@form');
