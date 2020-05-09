<?php

namespace App\Http\Controllers\Cdd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('cdd.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cddList()
    {
        return view('cdd.cdd_list');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addCdd(Request $request)
    {
        $id = $request->input('id');

        return view('cdd.add_cdd');
    }

    /**
     * @param Request $request
     */
    public function saveCdd(Request $request)
    {
        $id = $request->input('id');

        if($id>0)
        {
            //update
            echo 'update';
        }
        else
        {
            //insert
            echo 'insert';
        }
    }
}