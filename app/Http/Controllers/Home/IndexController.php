<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class IndexController extends AdminController
{
    public function index()
    {
        return view('home.index');
    }

    public function sign_out(Request $request)
    {
        $request->session()->flush();

        echo 'success';
    }
}