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

Route::get('/','BlogsController@trangchu');
Route::get('/bai-viet/{id}','BlogsController@bai_viet');

Route::get('/tim-kiem','BlogsController@tim_kiem');

Route::resource('blogs','BlogsController');
Route::resource('category','CategoryController');
Route::resource('post','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/21031999', function () {
//     return view('welcome');
// });