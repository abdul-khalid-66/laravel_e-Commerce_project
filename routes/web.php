<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;


Route::get('/login', function () {
    return view('login');
})->name("login");
Route::post("login_user",[UserController::class,"login"])->name("user_login");
Route::get("logout_user",[UserController::class,"logout"])->name("user_logout");

Route::get("/",[ProductsController::class,"index"])->name("home");