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
    return redirect()->route('login');
});

Route::middleware('auth')->group(function(){
    Route::get('/home', \App\Livewire\Pages\Home::class)->name('home');
    Route::get('/dokumentasi', \App\Livewire\Pages\Dokumentasi::class)->name('dokumentasi');
    Route::get('/profile', \App\Livewire\User\Profile::class)->name('profile');
    Route::get('/order', \App\Livewire\Order\Index::class)->name('order.index');
    Route::get('/user', \App\Livewire\User\Index::class)->name('user.index');
    Route::get('/user/{user}', \App\Livewire\User\Show::class)->name('user.show');
    Route::get('/paket', \App\Livewire\Paket\Index::class)->name('paket.index');
    Route::get('/sesi', \App\Livewire\Sesi\Index::class)->name('sesi.index');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
    Route::get('/googleredirect', [\App\Http\Controllers\API\AuthController::class, 'googleredirect'])->name('googleredirect');
});
