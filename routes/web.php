<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisteredUserController;





Route::get('/', [JobController::class, 'index']);
// Route::get('/tags/{tag:name}', [TagController::class,'']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store']);
});


Route::delete('/logout', [LoginController::class, 'destroy'])->middleware('auth');
