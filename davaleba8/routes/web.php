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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'AdminController@index')->name('main');

Route::post('/savepost', 'AdminController@store')->name('savepost');

Route::get('/news', 'AdminController@show')->name('show');

Route::get('/addcategory', 'AdminController@add_category')->name('addcategory');

Route::post('/savecategory', 'AdminController@store_category')->name('save_category');

// crud

Route::post('/delete', 'AdminController@destroy')->name('delete');

Route::get('/edit/{id}', 'AdminController@edit')->name('edit');

Route::post('/update/{id}', 'AdminController@update')->name('update');

Route::get('/show/single/{id}', 'AdminController@show_single')->name('showsingle');