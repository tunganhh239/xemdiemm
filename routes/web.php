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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','searchController@index')->name('home');
Route::get('/action','searchController@action')->name('tk');

Route::get('sinhvien','SinhVienController@index')->name('importsinhvien');
Route::get('sinhvien/export','SinhVienController@export')->name('svexport');
Route::post('sinhvien/import','SinhVienController@import')->name('svimport');


Route::get('xemdiem','xemdiemController@index')->name('importdiem');
//Route::get('export', 'xemdiemController@export')->name('export');
Route::post('import', 'xemdiemController@import')->name('import');



Route::resource('monhoc', 'MonHocController');

Route::get('view/{id}','viewController@index')->name('view');
Route::fallback(function(){
    return view('errorAa');
});
