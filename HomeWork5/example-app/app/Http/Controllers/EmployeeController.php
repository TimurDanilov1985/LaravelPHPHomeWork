<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index() {
        return view('form');
    }

    public function store(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $profession = $request->input('profession');
        $email = $request->input('email');

        $employee = new Employee();
        $employee->firstname = $firstname;
        $employee->lastname = $lastname;
        $employee->profession = $profession;
        $employee->email = $email;
        $employee->save();
    }
}
