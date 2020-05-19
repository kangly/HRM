<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('staff.index');
    }

    public function staffList()
    {
        return view('staff.staff_list');
    }
}
