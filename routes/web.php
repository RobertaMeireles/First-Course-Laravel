<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SupplierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'app'], function () {
    Route::get('/supplier', [SupplierController::class, 'index'])->name('name.supplier');
});

Route::get('/', [MainController::class, 'index'])->name('name.home');
Route::get('/about', [AboutController::class, 'index'])->name('name.about');
Route::get('/contact', [ContactController::class, 'index'])->name('name.contact');


