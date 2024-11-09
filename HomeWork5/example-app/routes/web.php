<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeUpdateController;
use App\Http\Controllers\ParseJSONController;
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

Route::get('/form', [EmployeeController::class, 'index']);
Route::post('/form', [EmployeeController::class, 'store'])->name("employee");
Route::get('/update/{id}', [EmployeeUpdateController::class, 'index']);
Route::post('/update', [EmployeeUpdateController::class, 'update'])->name("update");
Route::get('/json', [ParseJSONController::class, 'index']);
Route::post('/json', [ParseJSONController::class, 'parse'])->name("parse");
