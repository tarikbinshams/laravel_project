<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', "RegistrationController@index")->name('registration.index');
Route::post('/registration', "RegistrationController@register");

Route::get('/login', "LoginController@index")->name('login.index');
Route::post('/login', "LoginController@verify");

Route::get('/logout', "LogoutController@index")->name('logout.index');

Route::get('/user', "UserController@index")->name('home.index');

Route::get('/user/addbook', "UserController@addbook")->name('user.addbook');
Route::post('/user/addbook', "UserController@storebook");

Route::get('/user/donatebook', "UserController@donatebook")->name('user.donatebook');
Route::post('/user/donatebook', "UserController@storebookdonate");
Route::get('/user/mydonatebook', "UserController@mydonatebook")->name('user.mydonatebook');
Route::get('/user/myprofile', "UserController@myprofile")->name('user.myprofile');
Route::post('/user/myprofile', "UserController@myprofileupdate");

Route::get('/home', "UserController@homeindex")->name('home.home');
Route::get('/home/buy/{id}', "UserController@buy")->name('home.buy');
Route::post('/home/buy/{id}', "UserController@order");

Route::get('/requestbook', "UserController@requestbook");
Route::post('/requestbook', "UserController@storerequestbook");

Route::get('/donatedbook', "UserController@donatedbookindex");

Route::get('/donatedbook/order/{id}', "UserController@donatedbookorder")->name('home.order');
Route::post('/donatedbook/order/{id}', "UserController@donatedbookstoreorder");



Route::get('/admin', "AdminController@index")->name('admin.index');
Route::get('/admin/alluser', "AdminController@alluser")->name('admin.alluser');
Route::get('/admin/allorder', "AdminController@allorder")->name('admin.allorder');
Route::get('/admin/alldonate', "AdminController@alldonate")->name('admin.alldonate');
Route::get('/admin/orderhistory', "AdminController@orderhistory")->name('admin.orderhistory');
Route::get('/admin/allrequest', "AdminController@allrequest")->name('admin.allrequest');
Route::get('/admin/allpost', "AdminController@allpost")->name('admin.allpost');

Route::get('/admin/addadmin', "AdminController@addadminindex")->name('admin.addadmin');
Route::post('/admin/addadmin', "AdminController@addadminstore");

