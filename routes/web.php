<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'userhomepage'])->name('home');
Route::get('/coffee/{id}', [CategoryController::class, 'subCategory'])->name('category');
Route::post('/pushtransaction', [TransactionController::class, 'pushTransaction'])->name('pushTransaction');
Route::get('/transaction', [TransactionController::class, 'showAllTransaction'])->name('transactionHistory');

