<?php

use Illuminate\Http\Request;


Route::get('/',  "PostController@index")->name("index"); 

Route::get('/posts/create',  "PostController@create")->name("createposts"); 
Route::post("/posts/store", "PostController@store")->name("storeposts");

Route::get("/products/create", "ProductsController@create")->name("createproducts");
Route::post("/products/store", "ProductsController@store")->name("storeproducts");
 


Route::get('/test', function(){
    return view('guest.form');
})->name("toredirect");

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


