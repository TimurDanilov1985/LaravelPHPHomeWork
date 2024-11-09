<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParseJSONController extends Controller
{
    //
    public function index() {
        $json = '{
  "name": "John",
  "age": 30,
  "city": "New York",
  "hobbies": ["swimming", "reading", "traveling"]
}';
        return view('jsonForm', ['json' => $json]);
    }

    public function parse(Request $request) {
        $data = $request->input('json');
        $data1 = json_decode($data, true);
        $name = $data1['name'];
        $age = $data1['age'];
        $city = $data1['city'];
        echo $name;
        echo '<br>';
        echo $age;
        echo '<br>';
        echo $city;
    }
}
