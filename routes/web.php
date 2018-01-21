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
Route::get('/lusa', function () {
    return view('layouts.gallery');
});
Route::get('/lusaa', function () {
    return view('layouts.about');
});
Route::get('/lusa01', function () {
    return view('layouts.about');
});
Route::get('/lusa002', function () {
    return view('layouts.info');
});
Route::get('/lusa003', function () {
    return view('layouts.share');
});
Route::get('barang','barangcontroller@barang');
Route::get('barang2','barangcontroller@abarang');
Route::get('data','artiscontroller@dataartis');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
