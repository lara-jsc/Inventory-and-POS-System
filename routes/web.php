<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class , 'viewLogin'] );

Route::get('/contact', [ContactController::class , 'contactView'])-> name('contact'); 

Route::get('/shop', [ShopController::class , 'shopView'])-> name('shop'); 

Route::get('/cart', [CartController::class , 'cartView'])-> name('cart'); 

Route::get('/product', [ProductController::class , 'productView'])-> name('product'); 

Route::get('/create', [ProductController::class , 'createView'])-> name('create'); 

Route::post('/product', [ProductController::class , 'store'])-> name('product.store'); 

Route::get('/categories', [ProductController::class , 'categoriesView'])-> name('categories'); 

Route::get('/product/{product}/edit', [ProductController::class , 'edit'])-> name('product.edit'); 

Route::put('/product/{product}/update', [ProductController::class , 'update'])-> name('product.update'); 

Route::delete('/product/{product}/delete', [ProductController::class , 'delete'])-> name('product.delete'); 




