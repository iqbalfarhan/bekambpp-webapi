<?php

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

Route::middleware('auth')->group(function(){
    Route::get('/home', \App\Livewire\Pages\Home::class)->name('home');
    Route::get('/dokumentasi', \App\Livewire\Pages\Dokumentasi::class)->name('dokumentasi');
    Route::get('/profile', \App\Livewire\User\Profile::class)->name('profile');
    Route::get('/user', \App\Livewire\User\Index::class)->name('user.index');
    Route::get('/paket', \App\Livewire\Paket\Index::class)->name('paket.index');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
});
