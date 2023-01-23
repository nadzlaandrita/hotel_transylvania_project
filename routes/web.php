<?php

use App\Http\Controllers\CategoryRoomController;
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

Route::get('/home', [CategoryRoomController::class, 'loadHome']);


Route::get('/cart-member', function () {
    return view('.member/cart-member');
});



