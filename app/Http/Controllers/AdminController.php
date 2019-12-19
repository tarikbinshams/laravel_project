<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\book;
use App\bookorder;
use App\donatebook;
use App\requestbook;
use App\completeorder;


class AdminController extends Controller
{
    function index(){
    	return view('admin.index');
    }

    function alluser(){
     	$users = user::all();
     	//print_r($users);
    	return view('admin.alluser')->with('user', $users);
    }

    function allorder(){
     	$order = bookorder::all();
     	//print_r($users);
    	return view('admin.allorder')->with('user', $order);
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

     function addadminstore(Request $Request){
    	
    }
}
