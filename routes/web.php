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


Route::post('event', function () {
    return view('event');
});

Route::get('event/{id}', function ($id) {
    return view('eventpics',$id_event = ["id_event"=>$id]);
});

Route::post('event/{id}', function ($id) {
    return view('eventpics',$id_event = ["id_event"=>$id]);

});

Route::get('shop', function () {
    return view('shop');
});
Route::get('login', function () {
    return view('login');
});

Route::post('login', function () {
    return view('login');
});

Route::get('post', function () {
    return view('post');
});
Route::get('ideabox', function () {
    return view('idea');
});

Route::get('profile', function () {
    return view('profile');
});
Route::get('logout', function () {
    return view('logout');
});
Route::get('item', function () {
    return view('item');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('connection', function () {
    return view('connection');
});
Route::post('connection', function () {
    return view('connection');
});