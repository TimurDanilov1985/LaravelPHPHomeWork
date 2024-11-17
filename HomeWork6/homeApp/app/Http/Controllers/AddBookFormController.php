<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AddBookFormController extends Controller
{
    //
    public function showForm()
    {
        return view('book-add-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:books'], // Правило unique:books где unique уникальное значение в базе данных, в таблице books. books это название таблицы
            'author' => ['required', 'string', 'max:100'],
            'genre' => ['required'],
        ]);
        // var_dump($validated);
        $book = new Book($validated);
        $book->save();
    }
}
