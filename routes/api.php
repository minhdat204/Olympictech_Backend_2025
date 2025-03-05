<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/user', 'user')->name('user');
        Route::get('/logout', 'logout')->name('logout');
    });
});
Route::middleware(['auth:api', 'check.role:admin'])->group(function () {
    Route::get('/admin',function (){
        return "admin";
    });
});

Route::middleware(['auth:api','check.role:judge'])->group(function () {
    Route::get('/judge',function (){
        return "judge";
    });
});
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});