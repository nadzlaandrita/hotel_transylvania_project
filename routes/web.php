<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryRoomController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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

Route::get('/login',[AuthController::class,'loginPage']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register',[AuthController::class,'registerPage']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/home', [CategoryRoomController::class, 'loadHome']);

Route::get('/profile', [UserController::class, 'loadProfile']);

Route::get('/add-room', [RoomController::class, 'loadInsertPage']);
Route::post('/add-room', [RoomController::class, 'insertRoom']);

Route::get('/cart-member', function () {
    return view('.member/cart-member');
});


Route::get('/transaction', function () {
    return view('.member/transaction-member');
});



