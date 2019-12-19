<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\book;
use App\bookorder;
use App\donatebook;
use App\requestbook;

class UserController extends Controller
{
    function index(){
	    $email = session('email');
	    $post = book::where('email', $email)->get();
	    $order = bookorder::where('bemail', $email)->get();

	    return view('user.index')->with('book', $post)
	    						->with('order', $order);
    }
    function addbook(){
    	return view('user.addbook');
    }

    function storebook(Request $request){
    	$book = new book();	
    	$book->bname = $request->bname;
    	$book->aname = $request->aname;
    	$book->category = $request->category;
    	$book->price = $request->price;
    	$book->email = session('email');
    	if($request->hasFile('img')){
    		$file = $request->file('img');
			$filename = $file->getClientOriginalName();
			$file->move('upload', $filename);			
			$book->filename = $filename;
			$book->save();
			return redirect()->route('home.index');
		}else{
			return redirect()->route('user.addbook');
		}


    }

    function donatebook(){
    	return view('user.donatebook');
    }

    function storebookdonate(Request $request){
    	$book = new donatebook();	
    	$book->bname = $request->bname;
    	$book->aname = $request->aname;
    	$book->category = $request->category;
    	$book->email = session('email');
    	if($request->hasFile('img')){
    		$file = $request->file('img');
			$filename = $file->getClientOriginalName();
			$file->move('upload', $filename);			
			$book->filename = $filename;
			$book->save();
			return redirect()->route('user.mydonatebook');
		}else{
			return redirect()->route('user.addbook');
		}
    }
    function mydonatebook(){
    	$email = session('email');
    	$donate = donatebook::where('email', $email)->get();
    	return view('user.mydonate')->with('donatebook', $donate);
    }

    function myprofile(){
    	$email = session('email');
    	$profile = user::where('email', $email)->get();
    	return view('user.profile')->with('user', $profile);
    }

    function myprofileupdate(Request $request){
    	$email = session('email');
    	$user = user::find($email);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->location = $request->location;
        $user->save();
    	return redirect()->route('home.index');
    }

    function homeindex(){
        if(session('email') == null){
            $books = book::all();
            return view('home.index')->with('book', $books);
        }else{
            $books = book::where('email','!=', session('email'))->get();
            return view('home.index')->with('book', $books);
        }   
    }

    function alldonate(){
        if(session('email') == null){
            $books = donatebook::all();
            //return view('home.index')->with('book', $books);
        }else{
            $books = book::where('email','!=', session('email'))->get();
            //return view('home.index')->with('book', $books);
        }   
    }

    function buy($id){
        $book = book::where('id', $id)->get();
        return view('home.buy')->with('book', $book);
    }

    function order(Request $request, $id){
        if(session('email') != null){
            $order = new bookorder();
            $order->bid = $id;
            $order->bname = $request->bname;
            $order->aname = $request->aname;
            $order->category = $request->category;
            $order->price = $request->total;
            $order->semail = $request->semail;
            $order->bemail = session('email');
            $order->save();
            $book = book::find($id);
            $book->delete();
            return redirect()->route('home.index');
        }else{
            echo "Please login first";
        }
    }

    function requestbook(){
        return view('home.requestbook');
    }

    function storerequestbook(Request $request){
        if(session('email') != null){
            $req = new requestbook();
            $req->bname = $request->bname;
            $req->aname = $request->aname;
            $req->category = $request->category;
            $req->email = session('email');
            $req->save();
            return redirect()->route('home.home');
        }else{
            echo "Please login first";
        }
    }

    function donatedbookindex(){
        if(session('email') == null){
            $books = donatebook::all();
            return view('home.donatebook')->with('book', $books);
        }else{
            $books = donatebook::where('email','!=', session('email'))->get();
            return view('home.donatebook')->with('book', $books);
        }   
    }

    function donatedbookorder($id){
        $book = donatebook::where('id', $id)->get();
        return view('home.donateorder')->with('book', $book);
    }

    function donatedbookstoreorder(Request $request, $id){
        if(session('email') != null){
            $order = new bookorder();
            $order->bid = $id;
            $order->bname = $request->bname;
            $order->aname = $request->aname;
            $order->category = $request->category;
            $order->price = $request->delivery;
            $order->semail = $request->semail;
            $order->bemail = session('email');
            $order->save();
            $book = donatebook::find($id);
            $book->delete();
            return redirect()->route('home.index');
        }else{
            echo "Please login first";
        }
    }


}
