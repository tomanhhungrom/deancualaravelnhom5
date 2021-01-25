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

Route::get('/', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

// Route::get('homee',[
// 	'as'=>'trang-chu',
// 	'uses'=>'PageController@getIndex'
// ]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienhe'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioithieu'
]);
// Route::get('add-to-cart/{id}', 'PageController@getAddtoCart')->name('themgiohang');
// Route::get('add-to-cart/{id}', [PageController@getAddtoCart, 'themgiohang'])->name('themgiohang');
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);
// Route::get('add-to-cart/{id}', 'PageController@getAddtoCart')->name('themgiohang');
Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);
Route::post('dat-hang', 'PageController@postCheckout')->name('checkout');
Route::get('dang-nhap', 'PageController@getLogin')->name('login');

Route::post('dang-nhap', 'PageController@postLogin')->name('login');
Route::get('dang-ky', 'PageController@getSignin')->name('signin');

Route::post('dang-ky', 'PageController@postSignin')->name('signin');
Route::get('search', 'PageController@getSearch')->name('search');

