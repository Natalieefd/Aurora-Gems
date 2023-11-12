<?php

use App\Http\Controllers\AuthController;
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
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::post('/login/action', [
    AuthController::class,
    'loginAction'
])->name('login.action');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::post('/register/action', [
    AuthController::class,
    'registerAction'
])->name('register.action');


Route::get('/pengguna/dashboard', function() {
    return view('pengguna.dashboard');
})->name('pengguna.dashboard');


Route::get('pengguna/produk_detail', function() {
    return view('pengguna.produk_detail');
})->name('pengguna.produk_detail');


Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/logout', [
    AuthController::class,
    'logout'
])->name('logout');
