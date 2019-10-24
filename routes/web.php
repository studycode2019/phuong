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

// NHÂN VIÊN
Route::prefix('home')->group(function () {
    Route::get('themnhanvien', 'NhanVienController@themnhanvien');

});

// BDS
Route::prefix('home')->group(function () {
    Route::get('thembds', 'BDSController@thembds');

    Route::post('postthembds', 'BDSController@postthembds');

    Route::get('danhsachbds', 'BDSController@danhsachbds');
});

// NDT
Route::prefix('home')->group(function () {
    Route::get('themnhadautu', 'NhaDauTuController@themnhadautu');

    Route::post('postthemnhadautu', 'NhaDauTuController@postthemnhadautu');

    Route::get('danhsachnhadautu', 'NhaDauTuController@danhsachnhadautu');
});
