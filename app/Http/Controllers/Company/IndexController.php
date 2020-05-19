<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('company.index');
    }

    public function companyList()
    {
        return view('company.company_list');
    }
}