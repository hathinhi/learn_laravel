<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('user.register');
    }

    public function doRegister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = $request->input();
            $users = User::addUser($data);
            print_r($users);
            exit();
        }
    }
}