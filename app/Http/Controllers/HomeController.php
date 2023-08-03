<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function superAdminHome()
    {
        return view('admin');
    }
    public function addsir(){
        return view('add');
    }
    public function readsir(){
        return view('read');
    }
    public function delsir(){
        return view('delete');
    }
    function insert(Request $req){
        $newuser = new Student;
       
        if($req->hasFile('img')){
            $file = $req->File('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('upload',$filename);
            $newuser->img = $filename;
          }
        $newuser->name = $req->input("name");
        $newuser->class = $req->input("class");
        $newuser->roll = $req->input("roll");
        $newuser->email = $req->input("email");
        $newuser->phone = $req->input("phone");
        $newuser->bday = $req->input("bday");
        $newuser->password = $req->input("password");
        $newuser->img=$req->input("img");
        $newuser->save();
        return redirect("super-admin/admin");
    }

    function display(){
        $read = Student::all();
        return view('read',['pread'=>$read]);
        }
        function dshow(){
            $read = Student::all();
            return view('delete',['pread'=>$read]);
            }
            function remove($id){
                $data=Student::find($id);
                $data->delete();
                return redirect("delete");
            }
}
