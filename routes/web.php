<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class , 'viewLogin'] );

Route::get('/contact', [ContactController::class , 'contactView'])-> name('contact'); 

Route::get('/shop', [ShopController::class , 'shopView'])-> name('shop'); 

Route::get('/cart', [CartController::class , 'cartView']); 



