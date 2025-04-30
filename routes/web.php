<?php

use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductContoller;
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

// Route::get('/', [GetController::class, 'index']);

Route::controller(GetController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/apropos', 'about')->name('about');
    Route::get('/faq','faq')->name('faq');
    Route::get('/contact','contact')->name('contact');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/cart','cart')->name('cart');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/product/{p_id}', 'product')->name('product');
});

Route::post('/signup', [PostController::class, 'signup'])->name('signup');
Route::post('/connexion', [PostController::class, 'connexion'])->name('connexion');
Route::get('logout', [PostController::class, 'logout'])->name('logout');