<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::get('/',[JobController::class,'index']);
// Route::get('/tags/{tag:name}', TagController::class);