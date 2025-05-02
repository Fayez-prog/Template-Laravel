<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

Route::get('/', [TemplateController::class, 'index'])->name('index');
Route::get('/login', [TemplateController::class, 'login'])->name('login');
Route::get('/mail', [TemplateController::class, 'mail'])->name('mail');
Route::get('/products', [TemplateController::class, 'products'])->name('products');
Route::get('/furniture', [TemplateController::class, 'furniture'])->name('furniture');
Route::get('/checkout', [TemplateController::class, 'checkout'])->name('checkout');
Route::get('/register', [TemplateController::class, 'register'])->name('register');
Route::get('/short-codes', [TemplateController::class, 'short'])->name('short-codes');
Route::get('/single', [TemplateController::class, 'single'])->name('single');