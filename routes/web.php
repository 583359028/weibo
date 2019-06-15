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


Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

route::get('signup','UsersController@create')->name('signup');

route::resource('users','UsersController');

/* 相当于 route::resource('users','UsersController');
Route::get('/users', 'UsersController@index')->name('users.index');显示所有用户的界面
Route::get('/users/create', 'UsersController@create')->name('users.create'); 创建用户的界面
Route::get('/users/{user}', 'UsersController@show')->name('users.show');显示用户个人信息的界面
Route::post('/users', 'UsersController@store')->name('users.store'); 创建用户
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit'); 编辑用户个人资料的界面
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');更新用户
Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy'); 删除用户  */


Route::get('login','SessionController@create')->name('login');//显示登录页面
Route::post('login','SessionController@store')->name('login');//创建新会话（登录）
Route::delete('logout','SessionController@destroy')->name('logout');//	销毁会话（退出登录）

/*Route::get('/', function () {
    return view('welcome');
});*/
