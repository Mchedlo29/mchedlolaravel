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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/gettest", function(){
	return view("guest.form");
});


Route::post("/test", function(Request $req){
	$data = [ 
		[

			"name" => $req->post()["name"],
			"lastname" => $req->post()["lastname"],
			"address" => $req->post()["address"],
			"biography" => $req->post()["biography"],
			"date_of_birth" => $req->post()["date_of_birth"]

		]
	];
	
	return view('guest.table', ["newdata"=>$data]);
})->name("testpost");



