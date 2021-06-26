<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public function getLogin(){
     return view('admin.auth.login');
    }
    public function postLogin(Request $request){
       $request->validate([
        'email'=>'required|email',
        'password'=>'required'
       ]);

       $user_by_email=User::where('email',$request->email)->where('is_admin',true)->first();
       if($user_by_email){
       	  if($user_by_email->is_active){
	          if(auth()->attempt($request->only('email','password'),$request->remember)){
	              return redirect()->route('admin.dashboard')->with('success','Login Successfull');
	          }else{
	           return redirect()->back()->with('error','Invalid Credentials.');
	          }
       	  }else{
             return redirect()->back()->with('error','Looks like your profile is inactive.');
       	  }

       }else{
       	return redirect()->back()->with('error','Invalid Credentials.');
       }

    }
    public function getForgotPassword(){
     return view('admin.auth.forgot_password');
    }
    public function postForgotPassword(Request $request){
       $request->validate([
        'email'=>'required|email'
       ]);
    	
    }
    public function getResetPassword($reset_code){
     return view('admin.auth.reset_password',compact('reset_code'));
    }
    public function postResetPassword($reset_code,Request $request){
       $request->validate([
        'password'=>'required|confirmed'
       ]);
    }
    public function  logout(){
      auth()->logout();
      return redirect()->route('admin.getLogin');
    }

}
