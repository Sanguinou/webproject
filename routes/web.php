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
    $users_ideas = DB::table('user')->join('event', 'event.id_user_create', '=', 'user.id_user')->paginate(4);
    $events = DB::table('event')->get();
    return view('welcome', compact('users_ideas', 'events'));
});

Route::get('event', function () {
    $events = DB::table('event')->get();
    return view('event', compact('events'));
});

Route::get('event/{id}', function ($id) {
    return view('eventpics').$id;
});

Route::get('shop', function () {
    $products = DB::table('product')->get();
    return view('shop', compact('products'));
});

Route::get('ideabox', function () {
    $ideas = DB::table('user')->join('event', 'event.id_user_create', '=', 'user.id_user')->paginate(4);
    return view('idea', compact('ideas'));
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('item', function () {
    return view('item');
});

Route::get('cart', function () {
    return view('cart');
});
