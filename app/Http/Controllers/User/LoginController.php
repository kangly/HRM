<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if(session('user')){
            return redirect('/home/index');
        }

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

        $user = User::where($map)->first('id','username');

        if($user){
            session(['user'=>$user]);
            echo 'success';
        }else{
            echo 'error';
        }
    }
}