<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\user;

class RegistrationController extends Controller
{
    function index(){
        return view('registration.index');
    }

    function register(Request $request){
        $request->validate([
            'name'=>'required|max:16' ,
            'email'=>'required|unique:users',
            'phone'=>'required|max:14' ,
            'password'=>'required|max:12',
            'location'=>'required|max:16'
,        ]);
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;
        $location = $request->location;
        
        $user = new user();
        $user->name = $name;
        $user->phone = $phone;
        $user->email = $email;
        $user->password = $password;
        $user->location = $location;
        $user->save();
        return redirect()->route('registration.index');
    }
}
