<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard',[UserController::class,'asep']);

Route::post('/dashboard', [UserController::class,'tambah']);