<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('system.index');
    }

    public function jobType()
    {
        return view('system.job_type');
    }
}
