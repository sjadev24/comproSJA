<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    public function formlogin(){
        return view('loginpage'); // to form login
     
    }
    public function formregis(){
        return view('register');
    }

    public function register(Request $req){
        // dd($req);


        $createuser = User::create([
            'name' => $req->name,   
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
        if($createuser){
            return redirect()->route('formlogin')->with('status', "Register Success");
        }else{
            return redirect()->route('formregister')->with('status', "Register Failed");
        }
    }

    public function login(Request $req){
        if($req->session()->has('name')){
            return redirect()->route(); //return to logout if already login 
        }
        $getuser = User::where('email',$req->email)->first();
    dd($getuser);
        if($getuser != null && Hash::check($req->password, $getuser->password)){
            //return to dashboard
           dd('0');
        }else{
            //return to formlogin
            $pass = Hash::make($req->password);
                if($req->email == $getuser->email && Hash::check($req->password, $getuser->password)){
                    Session::put('user_id', $req->id);
                    Session::put('name', $getuser->name);
                    // dd(Session::get('role'));
                    dd($getuser);
                    return redirect()->route('home')->with('status', "Login Success");
        }
    }
    }
}
