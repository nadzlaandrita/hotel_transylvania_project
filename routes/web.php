<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home-member', function () {
    return view('.member/home-member');
});

Route::get('/home-admin', function () {
    return view('.admin/home-admin');
});

Route::get('/cart-member', function () {
    return view('.member/cart-member');
});



