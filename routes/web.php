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

Route::get('/',[
    'uses'=>'HomeController@homePage',
    'as'=>'/'
]);
Route::get('categories',[
    'uses'=>'HomeController@Category',
    'as'=>'categories'
]);
Route::get('category/details',[
    'uses'=>'HomeController@DetailsCategory',
    'as'=>'details'
]);
Route::get('contact/with',[
    'uses'=>'HomeController@Contact',
    'as'=>'contact'
]);
Auth::routes();
Route::resource('/admin/dashboard', 'HomeController');