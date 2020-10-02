<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/create', [App\Http\Controllers\userController::class, 'create']);
Route::get('/user/edit/{id}', [App\Http\Controllers\userController::class, 'edit']);
Route::patch('/user/update/{id}', [App\Http\Controllers\userController::class, 'update']);
Route::delete('/user/delete/{id}', [App\Http\Controllers\userController::class, 'destroy']);
Route::get('/user/show/{id}', [App\Http\Controllers\userController::class, 'show']);
Route::post('/users', [App\Http\Controllers\userController::class, 'store']);
