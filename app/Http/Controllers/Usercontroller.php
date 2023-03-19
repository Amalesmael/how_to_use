<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function login(){
        return view("login");
    }

    public function loginrequest(request $r){

           $admin= admin::where("email",$r->email)->get();
           foreach($admin as $admin){
            $pass= $admin->password;
            $email=$admin->email;
           }
        if(Auth::attempt($r->except("_token"))){
            return view("indexadmin");

        } elseif(

            $r->email == $email && $r->password==$pass

        )
         {

            return view("indexuser");

        }else{
         return view("login");
        }
    }


    public function loginrequesttwo(){

        return view("indexadmin");
    }


    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
 }
