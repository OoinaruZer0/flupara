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

Auth::routes();

// 静的ページのルーティング
Route::get('/', 'StaticPagesController@getIndex')->name('index');
Route::get('/about', 'StaticPagesController@getAbout')->name('about');

// 新規会員登録機能のルーティング
Route::group(['prefix' => 'users'], function() {
    Route::get('/signup',[
        'uses' => 'UsersController@getSignup',
        'as' => 'users.signup'
        ]);
        
    Route::post('/signup',[
        'uses' => 'UsersController@create',
        'as' => 'users.signup'
        ]);
    // ユーザーログイン機能のルーティング
    Route::get('/signin',[
        'uses' => 'UsersController@showLoginForm',
        'as' => 'users.signin'
        ]);
        
    Route::post('/signin',[
        'uses' => 'UsersController@postSignin',
        'as' => 'users.signin'
        ]);
});

// ユーザーログアウト機能のルーティング
Route::get('/logout', [
    'uses' => 'UsersController@getlogout',
    'as' => 'users.logout'
    ]);

//Admin 認証不要

Route::group(['prefix' => 'admin'], function() {
    Route::get('/signin', 'Admin\Auth\LoginController@showLoginForm')->name('admin.signin');
    Route::post('/signin', 'Admin\Auth\LoginController@adminSignin');
});

//Admin ログイン後

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::get('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/home', 'Admin\HomeController@getIndex')->name('admin.home');
});