<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UserController extends Controller
{

    function __construct() {
        $this->hasMany('App\Post');
    }

    public function getAllUser() {
        return User::all();
    }

    public function createUser(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'email' => ['email', 'required'],
            'password' => ['min:5', 'required']
        ]);

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return $user;
    }
}
