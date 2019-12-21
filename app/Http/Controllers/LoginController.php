<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\admin;

class LoginController extends Controller
{
    function index(){
    	return view('login.index');
    }

    function verify(Request $request){
    	$request->validate([
			'email'=>'required',
			'password'=>'required'
        ]);

    	$users = user::where('email', $request->email)
						->where('password', $request->password)
						->get();
			if(count($users) > 0){
				$request->session()->put('email', $request->email);
				return redirect()->route('home.home');
	            	
			}else{
				$admins = admin::where('username', $request->email)
						->where('password', $request->password)
						->get();
				if(count($admins) > 0){
					$request->session()->put('username', $request->email);
					return redirect()->route('admin.index');
				}else{
					$request->session()->flash('msg', 'Invalid Email or Password');
					return redirect()->route('login.index');
				}
			}			
    	
    	}
}
