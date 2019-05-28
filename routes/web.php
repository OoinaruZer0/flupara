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
});