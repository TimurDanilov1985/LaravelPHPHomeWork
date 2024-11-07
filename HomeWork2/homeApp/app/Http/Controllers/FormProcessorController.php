<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessorController extends Controller
{
    //
    public function index() {
        return view('form');
    }

    public function store(Request $request){
        $user = ['firstname' => $request->firstname, 'lastname' => $request->lastname, 'email' => $request->email];
        //return response()->json($user);
        return view('greeting', ['user' => $user]);
    }
}
