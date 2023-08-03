<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File  ;

use App\Http\Controllers\Controller;

class my extends Controller
{
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
        return redirect("admin");
    }
     function display(){
        $read = Student::all();
        return view('read',['pread'=>$read]);
        }
        function dshow(){
            $read = Student::all();
            return view('delete',['pread'=>$read]);
            }
            function eshow(){
                $read = Student::all();
                return view('edit',['pread'=>$read]);
                }
        // public function remove($id) {
        //     my::delete('delete from students where id = ?',[$id]);
        //     echo "Record deleted successfully.<br/>";
        //     echo '<a href = "/delete">Click Here</a> to go back.';
        //     return redirect("dshow");
        //  }
        function remove($id){
            $data=Student::find($id);
            $data->delete();
            return redirect("delete");
        }

       

            function userlog(Request $req){
                $username = $req->input('email');
                $userpassword = $req->input('password');
                $check = DB::table('students')->where('email',$username)->where('password',$userpassword)->get();
                $auth = count($check);
                if($auth == 1){
                    return redirect('dashboard');
                }
                else{
                    return redirect('login');
                }
            }
             }
        

       
      

