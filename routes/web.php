<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/input-name', [FormController::class, 'showForm']);
Route::post('/input-name', [FormController::class, 'handleForm']);

Route::get('/feedback', [FeedbackController::class, 'showForm']);
Route::post('/feedback', [FeedbackController::class, 'handleForm']);

Route::get('/register', [RegisterController::class, 'showForm']);
Route::post('/register', [RegisterController::class, 'handleForm']);

Route::get('/login', [LoginController::class, 'showForm']);
Route::post('/login', [LoginController::class, 'saveForm']);
Route::get('/login-success', [LoginController::class, 'showName'])->middleware('check.login');
