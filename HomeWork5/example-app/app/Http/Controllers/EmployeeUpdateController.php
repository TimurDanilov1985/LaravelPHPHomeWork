<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeUpdateController extends Controller
{
    //
    public function index($id)
    {
        $employees = Employee::find($id);
        if ($employees) {
            return view('update', ['id' => $id, 'firstname' => $employees['firstname'], 'lastname' => $employees['lastname'], 'profession' => $employees['profession'], 'email' => $employees['email']]);
        } else {
            echo 'No data of id';
        }
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $profession = $request->input('profession');
        $email = $request->input('email');

        $employee = Employee::where('id', $id)->first(['*']);
        $employee->firstname = $firstname;
        $employee->lastname = $lastname;
        $employee->profession = $profession;
        $employee->email = $email;
        $employee->save();
    }
}
