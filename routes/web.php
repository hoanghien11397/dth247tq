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

Route::prefix('dichvu')->group(function () {

    Route::get('/', function () {
        return view('pages.dichvu');
    })->name('dich-vu');
    // Route::get('khuyen-mai-chi-tiet', function () {
    //     return view('page.khuyenmaichitiet');
    // })->name('khuyen-mai-chi-tiet');

});


