<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminPanelController extends Controller
{

//    show user in table  
    public function users(){
        $users = DB::table('users')->get();
        return view('admin_panel.user',[
            'users'=> $users,
        ]);
    }

// add get function 
    public function addUsers(){
        return view('admin_panel.add-user');  
}

// add post function 
public function add(request $request){

    $request->validate([
        'fname'=> 'required',
        'email' => 'required|email',
        'pass' => 'required',
        'username' => 'required'
    ]);

     $add=  DB::table('users')->insert([
       'first_name'=> $_POST['fname'],
       'last_name' => $_POST['lname'],
       'username'=> $_POST['username'],
       'email'=> $_POST['email'],
       'password'=> password_hash($_POST['pass'],PASSWORD_BCRYPT),
       'role'=> $_POST['role'],

 ]);
   
 if($add){
return Redirect::to('/login')->with('success');
 }
}



// update queries 
public function updateUser(){
    $value = DB::table('users')->where('id', $_GET['id'])->get();
    return view('admin_panel.update-user',[
        'value'=> $value,
    ]);
}
public function Update(){
    $update = DB::table('users')->where('id',$_POST['id'])->update([
        'first_name'=> $_POST['fname'],
        'last_name'=> $_POST['lname'],
        'username'=> $_POST['username'],
         'role' => $_POST['role'],
    ]);
     
    if($update){
        return Redirect::to('/user')->with('success');
    }
}


// delete functions 
public function deleteUser(){
$delete = DB::table('users')->where('id',$_GET['id'])->delete();
if($delete){
    return Redirect::to('/user')->with('success');
}

}




public function login(){
return view('admin_panel.login');
}
public function loginUser(){
   $login = DB::table('users')->where(['email'=>$_POST['email']])->first();
    $hash = $login->password;
if(password_verify($_POST['pass'] , $hash)){
    $_SESSION['id'] = $login->id;
    $_SESSION['username'] = $login->username;

  return Redirect::to('/user');
}else{
    echo "email and password was wrong";
}
}

public function logout(){

    session_unset();
    session_destroy();
   return Redirect::to("/login")->with("success");
  
   }

}



