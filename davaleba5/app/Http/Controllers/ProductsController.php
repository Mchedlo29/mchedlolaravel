<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Comments;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware("CanPost");
    }

    public function index()
    {
          return view("products.index",["products"=>Products::get()]);        
    }

    public function create()
    {
        return view("products.create");
    }

    public function store(Request $request)
    { 
        Products::create([
            "title"=>$request->input("title"),
            "text"=>$request->input("text"),
            "short_description"=>$request->input("short_description"),
            "img_url"=>$request->input("img_url"),
        ]);
        return redirect()->route("adminindex");
    }
    
    public function show($id)
    {
        // $data=products::where("id",$id)->firstOrFail();
        // same as where("id",$id 
        $data=Products::find($id)->firstOrFail();
        $comments=Comments::where("product_id",$id)->get(
        );
        return view("products.show",[
            "product"=>$data,
            "comments"=>$comments
            ]);
    } 

    public function destroy(Request $request)
    {
        $data=products::where("id",$request->input("id"))->delete();
        return redirect()->back();

    }


    public function update(Request $request)
    {
    	Products::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "text"=>$request->input("text"),
            "short_description"=>$request->input("short_description"),
            "img_url"=>$request->input("img_url"),
        ]);
        return redirect()->route("adminindex");
    }

    public function edit($id)
    {
        $data=products::where("id",$id)->firstOrFail();
        return view("products.edit", ["product"=>$data]);
    }

    public function store_comments(Request $request)
    {
        Comments::create([
            "product_id"=>$request->input("product_id"),
            "comment"=>$request->input("comment"),
        ]);        
        return redirect()->back();
    }
}
