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
Route::get('/law', 'StaticPagesController@getLaw')->name('law');
Route::get('/privacypolicy', 'StaticPagesController@getPolicy')->name('policy');

// 新規会員登録機能のルーティング
Route::group(['prefix' => 'users', 'middleware' => 'auth:admin'], function() {
    Route::get('/signup',[
        'uses' => 'UsersController@getSignup',
        'as' => 'users.signup'
        ]);
        
    Route::post('/signup',[
        'uses' => 'UsersController@create',
        'as' => 'users.signup'
        ]);
});

// ユーザーログイン機能のルーティング
Route::group(['prefix' => 'users'], function() {
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

// 商品追加機能のルーティング

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::get('/add_product', 'Admin\AddProductController@showAddProductForm')->name('add.product');
    Route::post('/add_product', 'Admin\AddProductController@create');
});

// 単位追加機能のルーティング
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::get('/add_product_unit', 'Admin\AddUnitController@showAddUnitForm')->name('product.unit');
    Route::post('/add_product_unit', 'Admin\AddUnitController@create');
});

// 商品一覧と詳細ページのルーティング
Route::get('/product_list', 'ProductListController@list')->name('product.list');
Route::get('/product_show/product/{id}', 'ProductListController@getShow')->name('product.show');

// カートのルーティング
Route::get('cart', 'ProductListController@cart')->name('cart');
Route::get('add-to-cart/{id}', 'ProductListController@addToCart');
Route::patch('update-cart', 'ProductListController@update');
Route::delete('remove-from-cart', 'ProductListController@remove');

// 注文確定ページのルーティング
Route::group(['middleware' => 'auth:user'], function(){
    Route::get('/buy', 'BuyController@index')->name('buy.index');
});
Route::post('/buy', 'BuyController@store');