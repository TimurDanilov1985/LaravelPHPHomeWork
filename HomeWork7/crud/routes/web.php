<?php

use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\UserModelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserModelController::class, 'index']);

Route::get('/store', [UserModelController::class, 'userForm']);

Route::post('/store', [UserModelController::class, 'store'])->name('save');

Route::get('/user/{id}', [UserModelController::class, 'user']);

Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);
