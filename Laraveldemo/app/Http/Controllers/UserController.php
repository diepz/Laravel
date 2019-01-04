<?php

namespace App\Http\Controllers;

class UserController extends Controller
{

    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
