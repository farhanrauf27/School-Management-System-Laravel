<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class hi extends Controller
{
    function put(Request $req){
        $newuser = new Contact;

        $newuser->name = $req->input("name");
        $newuser->email = $req->input("email");
        $newuser->comment = $req->input("comment");
        $newuser->save();
        return redirect("dashboard");
    }
}
