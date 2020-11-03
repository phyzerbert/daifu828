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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/order/index', 'OrderController@index')->name('order.index');
Route::get('/order/create', 'OrderController@create')->name('order.create');
Route::post('/order/store', 'OrderController@store')->name('order.store');
Route::get('/order/delete/{id}', 'OrderController@destroy')->name('order.destroy');

Route::get('/change_password', 'HomeController@password_change')->name('change_password');
Route::post('/change_password', 'HomeController@save_password')->name('save_password');

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile/update', 'HomeController@profile_update')->name('profile.update');

Route::get('/verification', 'HomeController@verification')->name('verification');
Route::post('/verification/submit', 'HomeController@verification_submit')->name('verification.submit');