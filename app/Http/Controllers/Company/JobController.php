<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index()
    {
        return view('company.job');
    }

    public function jobList()
    {
        return view('company.job_list');
    }
}