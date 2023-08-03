<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\my;
use App\Http\Controllers\DataBase;
use App\Http\Controllers\hi;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});
Route::get("super-admin/admin",function(){
    return view('admin');
});
Route::get("adminpanel",function(){
    return view('adminpanel');
});

Route::get("add",function(){
    return view('add');
});
Route::get("read",function(){
    return view('read');
});
Route::get("delete",function(){
    return view('delete');
});

Route::get("update",function(){
    return view('update');
});
Route::get("dashboard",function(){
    return view('dashboard');
});
Route::get("login",function(){
    return view('login');
});
Route::get("teachers",function(){
    return view('teachers');
});

Route::get("subject",[SubjectController::class , 'index']);

Route::get("aboutus",function(){
    return view('aboutus');
});
Route::get('create',[my::class,'insert']);
// Route::get('view-records','my@index');
Route::get('read',[my::class,'display']);


Route::get('delete',[my::class,'dshow']);
Route::get('delete/{id}',[my::class,'remove']);

// Route::get('edit',[my::class,'eshow']);
// Route::get('edit/{id}',[my::class,'edit']);
// Route::get('edit/{id}',[my::class,'updates']);


Route::get('logins',[my::class,'userlog']);
Route::get('panel',[DataBase::class,'adminlog']);



Route::get('contact',[hi::class,'put']);


Route::get('/email',function(){
    Mail::to('farhanrauf27@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});


// Route::get('/send-email',function(){

//     $details=[
//         'title'=> 'Mail from Surfside Media',
//         'body'=>'This is testing'
//     ];
//     \Mail::to('farhanrauf.2001@gmail.com')->send(new \App\Mail\TestMail($details));
//     echo "Email has been sent Successfullyy";
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
  
    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('super.admin.home');
    Route::get('/super-admin/add', [HomeController::class, 'addsir'])->name('add');
    Route::get('/super-admin/create', [HomeController::class, 'insert'])->name('create');
    Route::get('/super-admin/read', [HomeController::class, 'display'])->name('read');
    Route::get('/super-admin/delete',[HomeController::class,'dshow'])->name('delete');
Route::get('/super-admin/delete/{id}',[HomeController::class,'remove'])->name('delete');

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});