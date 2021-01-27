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
    return view('templates.index');
});

Route::get('login','UserController@login');
Route::post('login','UserController@post_login');
Route::get('logout','UserController@logout')->name('logout');


Route::middleware(['adminlogin'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', function () {
            return view('index');
        })->name('dashboard');
        //trang show list tài khoản người dùng
        Route::get('/taikhoanuser',[
            'as' => 'user.index',//tên định danh,giống như name
            'uses' => 'UserController@index',//tên controller,action
            'middleware' => 'checkpermission:tai-khoan-user'
        ]);
        //thêm tài khoản user
        Route::get('/add','UserController@add')->name('user.add');
        Route::post('/add','UserController@store')->name('user.store');
        //chỉnh sửa tài khoản
        Route::get('/edit/{id}','UserController@edit')->name('user.edit');
        Route::post('/edit/{id}','UserController@update')->name('user.edit');
        //xóa tài khoản 
        Route::get('/delete/{id}','UserController@delete')->name('user.delete');


                Route::get('/customer', function () {
                    return view('templates.customer');
                })->name('customer')->middleware('checkpermission:xem-danh-sach-kh');
                Route::get('/category', function () {
                    return view('templates.category');
                })->name('category');
                Route::get('/account', function () {
                    return view('templates.account');
                })->name('account')->middleware('checkpermission:tai-khoan');
            
                Route::get('/form', function () {
                    return view('templates.form');
                })->name('form')->middleware('checkpermission:bieu-mau');
            
                Route::get('/reason', function () {
                    return view('templates.reason');
                })->name('reason');
            
                Route::get('/fee', function () {
                    return view('templates.fee');
                })->name('fee');
                //kho TQ
                Route::get('/warehouse-china', function () {
                    return view('templates.china-warehouse');
                })->name('china-warehouse');
                Route::get('/china-warehouse-create-cont', function () {
                    return view('templates.china-warehouse-create-cont');
                })->name('china-create-cont');
                
                Route::get('/china-warehouse-manage-cont', function () {
                    return view('templates.china-warehouse-manage-cont');
                })->name('china-manage-cont');
                //kho Hà Nội
                Route::get('/hanoi-warehouse', function () {
                    return view('templates.blank');
                })->name('hanoi-warehouse');
    });


    Route::prefix('roles')->group(function()
    {
        //trang show list role
    Route::get('/listrole',[
        'as' => 'role.index',//tên định danh,giống như name
            'uses' => 'RoleController@index',//tên controller,action
            'middleware' => 'checkpermission:vai-tro'
    ]);
   
   
    //thêm role
    Route::get('/add','RoleController@add')->name('role.add');
    Route::post('/add','RoleController@store')->name('role.store');
    //chỉnh sửa role
    Route::get('/edit/{id}','RoleController@edit')->name('role.edit');
    Route::post('/edit/{id}','RoleController@update')->name('role.edit');
    //xóa xóa role 
    Route::get('/delete/{id}','RoleController@delete')->name('role.delete');
    });
});