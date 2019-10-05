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

Route::get('/hello', function() {
    return "Hello World!";
});

Route::get('/product/display', 'ProductController@showAll');
Route::get('/product/show/{id?}', 'ProductController@show');
Route::get('/product/save', 'ProductController@saveNew');
Route::get('search', 'ProductController@search');

Route::group(['prefix' => 'latihan'], function(){
    Route::get('/kategori/all', 'CategoryController@index');
    Route::get('/kategori/search', 'CategoryController@search');
    Route::get('/kategori/{id}/delete', 'CategoryController@delete');
    Route::get('/kategori/{id}/restore', 'CategoryController@restore');
    Route::get('/kategori/{id}/permanent-delete', 'CategoryController@permanentDelete');
});