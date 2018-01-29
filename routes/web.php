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
Route::get('/user', 'UserController@index');
Route::get('user/detail/{id}', 'UserController@detail');
Route::get('user/add', 'UserController@addUser');
Route::post('user/add_save', 'UserController@addSave');
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('register', 'RegisterController@showRegister');
Route::post('register/save', 'RegisterController@doRegister');