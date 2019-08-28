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

Route::get('/sedekah', function () {
    return view('sedekah');
});

Route::get('/zakat', function () {
    return view('zakat');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/sk', function () {
    return view('sk');
});

Route::get('/kebijakan', function () {
    return view('kebijakan');
});

Route::get('/tentangKami', function () {
    return view('tentangKami');
});

Route::get('/bayar_zakat_dagang', function () {
    return view('bayar_zakat_dagang');
});

Route::get('/bayar_zakat_profesi', function () {
    return view('bayar_zakat_profesi');
});

Route::get('/bayar_zakat_emas', function () {
    return view('bayar_zakat_emas');
});

Route::get('/bayar_zakat_simpanan', function () {
    return view('bayar_zakat_simpanan');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/detail_program', function () {
    return view('detail_program');
});

Route::get('/bayar_donasi', function () {
    return view('bayar_donasi');
});

Route::get('/detail_artikel', function () {
    return view('detail_artikel');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
