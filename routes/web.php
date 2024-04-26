<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
// use App\Http\Controllers\CartController
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\HomeController;

 
 
Route::get('/layouts.master', function () {
    return view('layouts.master', ['title' => 'Home']);
})->name('layouts.master');
Route::get('/', function () {
    return view('login', ['title' => '']);
})->name('items');
Route::get('home', function () {return view('home');});


    Route::resource('distributors', DistributorController::class);
    Route::resource('barangs', BarangController::class);
    Route::resource('penggunas', PenggunaController::class);
    Route::resource('users', PemakaiController::class);
    Route::resource('mereks', MerekController::class);
    // Route::resource('home', HomeController::class);

    Route::get('/get-harga', [TransaksiController::class, 'getHarga'])->name('getHarga');
    Route::get('items', [TransaksiController::class, 'cart'])->name('cart.items');
    Route::post('cart', [TransaksiController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [TransaksiController::class, 'updateCart'])->name('cart.update');
    Route::post('update-all-cart', [TransaksiController::class, 'updateAllCart'])->name('cart.update-all');
    Route::post('remove', [TransaksiController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [TransaksiController::class, 'clearAllCart'])->name('cart.clear');
    Route::post('pay', [TransaksiController::class, 'payCart'])->name('cart.pay');
   
Route::resource('transaksis', TransaksiController::class);
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
// Route::get('distributors/{distributor}/edit', [DistributorController::class, 'edit'])->name('distributors.edit');
// Route::get('distributors', [DistributorController::class, 'index'])->name('distributors.index');
// Route::get('distributors/{distributor}', [DistributorController::class, 'show'])->name('distributors.show');
// Route::put('distributors/{distributor}', [DistributorController::class, 'update'])->name('distributors.update');
// Route::get('distributors/{distributor}', [DistributorController::class, 'create'])->name('distributors.create');
// Route::get('distributors/{distributor}', [DistributorController::class, 'destroy'])->name('distributors.destroy');