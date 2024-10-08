<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;


class UserController extends Controller
{
    //
    public function formlogin(){
        if($request->session()->has('key')){
            return redirect()->route(); //return to dashboard if already login 
        }else{
            return view(); // to form login
        }
    }

    public function login(Request $req){
        if($request->session()->has('key')){
            return redirect()->route(); //return to logout if already login 
        }
        $getuser = User::where('email',$req->email)->first();
        if($getuser != null && Hash::check($req->password, $getuser->password)){
            //return to dashboard
        }else{
            //return to formlogin
            $pass = Hash::make($req->password);
                if($req->nip == $getuser->nip && Hash::check($req->password, $getuser->password)){
                    Session::put('user_id', $req->id);
                    Session::put('name', $getuser->name);
                    Session::put('role', $getuser->role);
                    // dd(Session::get('role'));
                    return redirect()->route('')->with('status', "Login Success");
        }
    }
    }
}
