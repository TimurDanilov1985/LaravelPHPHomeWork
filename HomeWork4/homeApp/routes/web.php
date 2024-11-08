<?php

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

Route::get('/home', function () {

    $array = ['name' => 'Home', 'age' => 30, 'position' => 'Heavenly City', 'address' => 'Beautiful street, House 1'];

    return view('home', ['data' => $array]);
});

Route::get('/contacts', function () {

    $array = ['address' => 'Beautiful street, House 1', 'post_code' => 111111, 'email' => 'flying154@mail.com', 'phone' => '+71341546286'];

    return view('contacts', ['data' => $array]);
});


