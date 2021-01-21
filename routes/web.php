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




Route::get('/', function () {
    return view('welcome');
});

Route::get('dangky','UserController@register')->name('register');
Route::post('dangky','UserController@post_register')->name('post_register');
Route::get('dangnhap','UserController@login')->name('login');
Route::post('dangnhap','UserController@post_login')->name('post_login');
Route::get('dangxuat','UserController@logout')->name('logout');

Route::group(['middleware' => ['loginmiddle']], function () {
    Route::get('/danhmuc', function () {
        return view('templates.danhmuc');
    });

    Route::get('/dashboard', function () {
        return view('templates.dashboard');
    })->name('dashboard');

    
});