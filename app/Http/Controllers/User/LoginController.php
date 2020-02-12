<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
    	$username = $request->input('username');
    	$password = $request->input('password');

        $map = [
            'username' => $username,
            'password' => md5($password),
            'is_disable' => 0,
            'is_dimission' => 0
        ];
    }
}