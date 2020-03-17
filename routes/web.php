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
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('category/store', 'CategoryController@store')->name('category.store');

Route::get('categories', 'CategoryController@index')->name('category.index');
Route::delete('category/delete/{id}', 'CategoryController@delete');


Route::get('users', 'HomeController@index')->name('users.index');
Route::delete('user/delete/{id}', 'HomeController@delete')->name('users.delete');

