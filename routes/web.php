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
    return view('home');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', function() {
    return view('adminhome');
})->name('adminhome')->middleware('auth');
