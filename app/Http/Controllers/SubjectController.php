<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SubjectController extends Controller
{
    public function index()
    {
        $data =  Auth::user()->class;
        if($data  == "12th")
        {
            return view('secondyear');
        }
        else
        {
            return view('firstyear');
        }
    }
}
