<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\admin;
use App\book;
use App\bookorder;
use App\donatebook;
use App\requestbook;
use App\completeorder;
use Validator;


class AdminController extends Controller
{
    function index(){
    	return view('admin.index');
    }

    function alluser(){
     	$users = user::all();
        //echo $users[4]->email;
     	//print_r($users);
    	return view('admin.alluser')->with('user', $users);
    }

    function allorder(){
     	$order = bookorder::all();
     	//print_r($users);
    	return view('admin.allorder')->with('user', $order);
    }
    function ordercomplete($id){
    	$order = bookorder::where('id', $id)->first();
    	//print_r($order);
    	$cmpltorder = new completeorder();
    	$cmpltorder->orderid = $order->id;
    	$cmpltorder->bid = $order->bid;
    	$cmpltorder->bname = $order->bname;
    	$cmpltorder->aname = $order->aname;
    	$cmpltorder->category = $order->category;
    	$cmpltorder->price = $order->price;
    	$cmpltorder->bemail = $order->bemail;
    	$cmpltorder->semail = $order->semail;
    	$cmpltorder->save();
    	$order = bookorder::find($id);
        $order->delete();
    	return redirect()->route('admin.orderhistory');

    }
    function alldonate(){
     	$book = donatebook::all();
    	return view('admin.alldonate')->with('books', $book);
    }

    function orderhistory(){
     	$order = completeorder::all();
    	return view('admin.orderhistory')->with('orders', $order);
    }

     function allrequest(){
     	$req = requestbook::all();
    	return view('admin.allrequest')->with('books', $req);
    }

    function allpost(){
     	$book = book::all();
    	return view('admin.allpost')->with('books', $book);
    }

    function addadminindex(){
    	return view('admin.addadmin');
    }

     function addadminstore(Request $request){

        $request->validate([
            'username'=>'required|unique:admins|max:12' ,
            'password'=>'required|max:12'
        ]);
     	$ad = new admin();
     	$ad->username = $request->username;
     	$ad->password = $request->password;
     	$ad->save();
     	return redirect()->route('admin.index');
    	
    }
}
