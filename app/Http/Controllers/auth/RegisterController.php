<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function formRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
    }
}
