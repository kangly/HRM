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
    	if($username && $password){
            $map = [
                'username' => $username,
                'is_disable' => 0,
                'is_dimission' => 0
            ];
            $user = User::where($map)->first();
            if($user){
                if($user['password']==md5($password)){
                    session(['user'=>$user]);
                    echo 'success';
                }else{
                    echo '密码错误！';
                }
            }else{
                echo '用户不存在！';
            }
        }else{
            echo '用户名或密码为空！';
        }
    }
}