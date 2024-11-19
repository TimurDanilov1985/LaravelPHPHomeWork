<?php

use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Events\NewsHidden;

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

Route::get('/test', function () {

    $news = new News();

    $news->title = 'Test news title';
    $news->body = 'Test news body';

    $news->save();

    return $news;
});

Route::get('/news/{id}/hide', function ($id) {

    $news = News::findOrFail($id);

    $news->hidden = true;
    $news->save();

    // Вызываем событие NewsHidden

    NewsHidden::dispatch($news);

    return 'News hidden';
});
