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
Route::get('home', function () {
    return view('home');
});
Route::get('index', function () {
    return view('index');
});
Route::get('main_admin', function () {
    return view('main_admin');
});
Route::get('add_item', function () {
    return view('add_item');
});
Route::get('serviceroom', function () {
    return view('serviceroom');
});
Route::post('register', 'user_controller@register');
Route::post('login', 'user_controller@login');
Route::get('logout', 'user_controller@logout');
Route::post('add admin', 'user_controller@add_admin');
Route::post('add_item_db', 'item_controller@add_item_db');
Route::post('update_item_db', 'item_controller@update_item_db');
Route::get('item', 'item_controller@show_item');
Route::get('edit{item_id}', 'item_controller@edit_item');
Route::get('delete{item_id}', 'item_controller@delete_item');
Route::get('image{item_id}', 'item_controller@image');
Route::get('service_item', 'item_controller@service_item');
Route::get('borrow_item{item_id}', 'item_controller@borrow_item');
Route::post('add_borrow_db', 'item_controller@add_borrow_db');
Route::get('borrow_list', 'item_controller@borrow_list');
Route::get('borrow_change_status/{borrow_id}/{status}/{admin_id}', 'item_controller@borrow_change_status');
Route::get('borrow_histry', 'item_controller@borrow_histry');
/////////////////////////
Route::get('main_user', function () {
    return view('main_user');
});
Route::post('item_user', 'item_controller@item_user');
Route::get('news', 'item_controller@news');