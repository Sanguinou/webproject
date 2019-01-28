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
    $products = DB::table('product')->get();
    return view('welcome');
});

Route::get('event', function () {
    return view('event');
});

Route::get('event/event1', function () {
    return view('eventpics');
});

Route::get('shop', function () {
    return view('shop');
});
