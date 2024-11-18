<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserModelController extends Controller
{
    //
    public function index()
    {
        $user = new UserModel();
        $users = $user->all();
        $usersJSON = json_encode($users, JSON_PRETTY_PRINT);
        if (count($users)) {
            return view('users', ['users' => $users, 'json' => $usersJSON]);
        } else {
            echo 'Список пуст';
        }
    }

    public function userForm()
    {
        return view('userForm');
    }

    public function store(Request $request)
    {
        $user = $request->validate(
            [
                'name' => ['required', 'max:50'],
                'surname' => ['required', 'max:50'],
                'email' => ['required', 'email'],
            ],
            [
                'name.required' => 'Введите имя',
                'surname.required' => 'Введите фамилию',
                'email.required' => 'Введите адрес электронной почты',
                'name.max' => 'Имя не должно превышать 50 символов',
                'surname.max' => 'Фамилия не должна превышать 50 символов',
            ],
        );

        $userModel = new UserModel($user);

        $userModel->save();
    }

    public function user($id) {
        $userModel = new UserModel();
        $user = $userModel->find($id);
        $userJSON = json_encode($user, JSON_PRETTY_PRINT);
        return view('user', ['user' => $user, 'json' => $userJSON]);
    }
}
