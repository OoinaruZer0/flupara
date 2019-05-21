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

Route::get('/', 'StaticPagesController@getIndex');
Route::get('/about', 'StaticPagesController@getAbout');
Route::get('/policy', 'StaticPagesController@getPolicy');
Route::get('/recruiter', 'StaticPagesController@getRecruiter');