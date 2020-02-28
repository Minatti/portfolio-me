<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', 'Admin\AdminController@index')->name('admin.home');
    Route::get('admin/post', 'Admin\PostController@index')->name('admin.post');
    Route::get('admin/post/form-new', 'Admin\PostController@new')->name('admin.post');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();


