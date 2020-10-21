<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('guest.form');
});

Route::post('/form', function(Request $req){
    $data=[
        [
            'name'=>$req->post()['name'],
            'lastname'=>$req->post()['lastname'],
            'address'=>$req->post()['address'],
            'bio'=>$req->post()['bio'],
            'date'=>$req->post()['date'],
        ],
    ];
    return view('guest.table',['data'=>$data]);
})->name('test_form');

Route::get("/index", function(){
    return view("guest.index ");
});


Route::get("/single", function(){
    return view("guest.single");
});


