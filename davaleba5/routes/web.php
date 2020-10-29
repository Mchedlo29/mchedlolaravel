<?php

Route::get("/admin", "ProductsController@index")->name("adminindex");

Route::get("/admin/create", "ProductsController@create")->name("admincreate");

Route::post("/admin/store", "ProductsController@store")->name("adminproducts");

Route::get("/admin/show/{id}", "ProductsController@show")->name("adminshow");

Route::post("/admin/show/delete", "ProductsController@destroy")->name("admindelete");

Route::post("/admin/update", "ProductsController@update")->name("adminupdate");

Route::get("/admin/edit/{id}", "ProductsController@edit")->name("adminedit");

Route::post("/admin/store/comment", "ProductsController@store_comments")->name("storecomment");
