<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Models\Product;
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


Route::get('admin/product_detail', function() {
    return view('admin.product_detail', [
        'product' => Product::all()
    ]);
})->name('admin.product_detail');


Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/admin/manajemen_product', function () {
    return view('admin.manajemen_product', [
        'product' => Product::all()
    ]);
})->name('admin.manajemen_product');


Route::controller(ProductController::class)->group(function () {
    Route::get('/admin/manajemen_product/tambah', 'tambah')->name('admin.add');
    Route::post('/admin/manajemen_product/tambah/action','store')->name('admin.store');
    Route::get('/admin/manajemen_product/edit/{id}', 'edit')->name('admin.edit');
    Route::post('/admin/manajemen_product/edit/{id}/action','update')->name('admin.update');
    Route::post('/admin/manajemen_product/delete/{id}/action', 'delete')->name('admin.delete');
    Route::get('/admin/product_detail/show/{id}', 'showProduct')->name('admin.product_detail');
});


Route::get('/admin/product', function () {
    return view('admin.product', [
        'product' => Product::all()
    ]);
})->name('admin.product');


Route::get('/logout', [
    AuthController::class,
    'logout'
])->name('logout');
