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

use App\Http\Controllers\Layout_Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'layout'], function () {
    Route::get('master', 'Layout_Controller@master' );
    Route::get('index', 'Layout_Controller@index' )->name('index');
    Route::get('gioithieu', 'Layout_Controller@gioithieu' )->name('gioithieu');
    Route::get('sanpham', 'Layout_Controller@sanpham' )->name('sanpham');
    Route::get('tintuc', 'Layout_Controller@tintuc' )->name('tintuc');
    Route::get('lienhe', 'Layout_Controller@lienhe' )->name('lienhe');
    Route::get('timkiem', 'Layout_Controller@timkiem' )->name('timkiem');
    Route::post('lienhe', 'Layout_Controller@postlienhe' )->name('postlienhe');
    Route::get('category/{id}', 'Layout_Controller@category' )->name('category');
    Route::get('sanphamchitiet/{id}', 'Layout_Controller@sanphamchitiet' )->name('sanphamchitiet');
    Route::get('tintucchitiet/{id}', 'Layout_Controller@tintucchitiet' )->name('tintucchitiet');

});
