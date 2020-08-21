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
//đây  là phần thể loại

Route::group(['News' => 'theloai'],function(){

    Route::get('danhsach','TheLoaiController@getDanhSach');

    Route::get('them','TheLoaiController@Them');

    Route::post('them','TheLoaiController@XuLyThemTL');

 
    Route::get('sua/{id}','TheLoaiController@Sua');

    Route::post('sua/{id}','TheLoaiController@XuLySuaTL');

    Route::get('xoa/{id}','TheLoaiController@Xoa');
});
//dây là phần loại tin

Route::group(['News' => 'loaitin'],function(){

    Route::get('danhsach','LoaiTinController@getDanhSach');

    Route::get('them','LoaiTinController@Them');

    Route::post('them','LoaiTinController@XuLyThemLT');

    Route::get('sua/{id}','LoaiTinController@Sua');

    Route::post('sua/{id}','LoaiTinController@XuLySuaLT');

    Route::get('xoa/{id}','LoaiTinController@Xoa');
});
//đây là phần tin tức

Route::group(['News' => 'tintuc'],function(){
    
    Route::get('danhsach','TinTucController@getDanhSach');

    Route::get('them','TinTucController@Them');

    Route::post('them','TinTucController@XuLyThemTT');

    Route::get('sua/{id}','TinTucController@Sua');

    Route::post('sua/{id}','TinTucController@XuLySuaTT');

    Route::get('xoa/{id}','TinTucController@Xoa');
});