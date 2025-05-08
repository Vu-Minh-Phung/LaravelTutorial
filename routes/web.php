<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/xin-chao', function() {
    return 'Xin chào laravel!';
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/greet/{name}', [GreetController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
