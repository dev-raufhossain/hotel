<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register']);
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login']);
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/blog-details', [App\Http\Controllers\HomeController::class, 'blogDetails']);
Route::get('/rooms', [App\Http\Controllers\HomeController::class, 'rooms']);
Route::get('/room-details', [App\Http\Controllers\HomeController::class, 'roomsDetails']);

