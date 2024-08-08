<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;



Route::get('/', [JobController::class,'index']);
// Route::get('/tags/{tag:name}', [TagController::class,'']);