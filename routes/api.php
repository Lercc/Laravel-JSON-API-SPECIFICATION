<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\OrderController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('V1/users', [UserController::class, 'index']);
Route::get('V1/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::post('V1/users', [UserController::class, 'save'])->name('users.save');

Route::get('V1/orders', [OrderController::class, 'index']);
Route::get('V1/orders/{order}', [OrderController::class, 'show'])->name('orders.show');