<?php

use App\Mail\BookingComplitedMailing;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Telegram\Bot\Laravel\Facades\Telegram;

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

Route::get('/book', function () {
    $email = 'laravel2324@yandex.ru';
    Mail::to($email)->send(new BookingComplitedMailing());
    return response()->json(['status' => 'success']);
});

Route::get('/test-telegram', function () {
    Telegram::sendMessage([
        'chat_id' => env('TELEGRAM_CHANNEL_ID'),
        'parse_mode' => 'html',
        'text' => 'Произошло тестовое событие',
    ]);

    return response()->json(['status' => 'success']);
});
