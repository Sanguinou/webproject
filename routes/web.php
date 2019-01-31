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


Route::post('event', function () {
    return view('event');
});

Route::get('event/AddLikes', function () {
    return view('AddLikes');
});

Route::post('event/AddLikes', function () {
    return view('AddLikes');
});

Route::get('event/{id}', function ($id) {
    return view('eventpics',$id_event = ["id_event"=>$id]);
});

Route::post('event/{id}', function ($id) {
    return view('eventpics',$id_event = ["id_event"=>$id]);

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

Route::get('product/{id}', function ($id) {
    return view('product',$id_product = ["id_product"=>$id]);
});

Route::post('product/{id}', function ($id) {
    return view('product',$id_product = ["id_product"=>$id]);
});

Route::get('panier', function () {
    return view('panier');
});
Route::get('fonction-panier', function () {
    return view('fonction-panier');
});
Route::post('panier', function () {
    return view('panier');
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

Route::get('connection', function () {
    return view('connection');
});
Route::post('connection', function () {
    return view('connection');
});
Route::get('AddImage', function () {
    return view('AddImage');
});
Route::post('AddImage', function () {
    return view('AddImage');
});

Route::get('AddVotes', function () {
    return view('AddVotes');
});
Route::post('AddVotes', function () {
    return view('AddVotes');
});