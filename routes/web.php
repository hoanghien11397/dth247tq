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
    return view('pages.home');
});
Route::get('home', function () {
    return view('pages.home');
})->name('home');


Route::get('lienhe', function () {
    return view('pages.lienhe');
})->name('lienhe');

Route::get('tinTuc', function () {
	return view('pages.tinTuc');
})->name('tinTuc');

Route::get('traiNghiem', function () {
	return view('pages.traiNghiem');
})->name('traiNghiem');

Route::get('dichvu', function () {
	return view('pages.dichvu');
})->name('dichvu');

Route::get('gioithieu', function () {
	return view('pages.gioithieu');
})->name('gioithieu');

Route::get('talentwins', function () {
    return view('pages.talentwins');
})->name('talentwins');

Route::get('tintucchitiet', function () {
	return view('pages.tintucchitiet');
})->name('tintucchitiet');
Route::get('talentchitiet', function () {
	return view('pages.talentchitiet');
})->name('talentchitiet');