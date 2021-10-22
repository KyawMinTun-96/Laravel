<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PageController::class, 'index']);




/*
----------------------------------------------------------
|For Product
----------------
*/
Route::get('/products/', [PageController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/create', [ProductController::class, 'store']);
Route::get('/products/{id}/add-carts', [PageController::class, 'add'])->name('addCart');
Route::get('/products/carts', [PageController::class, 'show']);





/*
----------------------------------------------------------
|For Register
----------------
*/
Route::get('user/register', [RegisterController::class, 'show'] );
Route::post('user/register', [RegisterController::class, 'register'] );




/*
----------------------------------------------------------
|For Login
----------------
*/
Route::get('user/login', [LoginController::class, 'show'] );
Route::post('user/login', [LoginController::class, 'login'] );