<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DataBase extends Controller
{
    function adminlog(Request $req){
        $username = $req->input('email');
        $userpassword = $req->input('password');
        $check = DB::table('admins')->where('email',$username)->where('password',$userpassword)->get();
        $auth = count($check);
        if($auth == 1){
            return redirect('admin');
        }
        else{
            return redirect('adminpanel');
        }
    }
}
