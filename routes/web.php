<?php

use App\Http\Controllers\BeHeController;
use App\Http\Controllers\BKController;
use App\Http\Controllers\FBController;
use App\Http\Controllers\HCController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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



Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/category', [ProductController::class, 'index'])->name('product');
Route::prefix('/category')->group(function () {
    Route::get('food-beverage', [FBController::class, 'FB'])->name('fb');
    Route::get('beauty-health', [BeHeController::class, 'BeHe'])->name('behe');
    Route::get('baby-kid', [BKController::class, 'BK'])->name('bk');
    Route::get('home-care', [HCController::class, 'HC'])->name('hc');
});
Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('users');
Route::get('/transact', [TransactionController::class, 'transact'])->name('transact');
