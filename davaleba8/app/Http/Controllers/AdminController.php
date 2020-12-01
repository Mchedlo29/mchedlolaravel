<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Rules\MyFirstRule;
use App\Rules\RuleForTitle;
use App\Category;
use App\News;
use App\Tags;
use User;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function add_category()
    {
        return view('category');
    }

    public function store(Request $request)
    {

        $this->validate( $request, [
          'image' => 'required',
          'title' => ['required', new RuleForTitle],
          'description' => ['required', new MyFirstRule],
          'shortdesc' => 'required',
          'tags' => 'required'
        ]);

        if(Input::file("image")){
            $destination = public_path('images');
            $filename = uniqid().".jpg";
            $img = Input::file("image")->move($destination, $filename);
        }

        $news_id = News::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'shortdesc'=> $request->input('shortdesc'),
            'image'=> $filename,
            'upload_date'=> $request->input('upload_date'),
            'user_id'=> Auth::user()->id,
            'category_id'=> $request->input('category_id')
        ])['id'];
    
        $data = $request->input("tags");

        foreach ($data as $d) {
            Tags::create([
                'news_id'=>$news_id,
                'name_tag'=>$d
            ]);
        }

        return redirect()->route('show');
        
    }

    public function store_category(Request $request)
    {
        Category::create([
            "title"=>$request->input("title")
        ]);

        return redirect()->route('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $news = News::get();
        $tags = Tags::get();
        $cats = Category::select("id", "title")->get();
        return view('show', [
            "news"=>$news,
            "tags"=>$tags,
            "cat"=>$cats
        ]);
    }

    public function show_single($id)
    {
        $news = News::where("id", $id)->firstOrFail();
        $cat = Category::select("id", "title")->get();
        $tags = Tags::get();
        return view('showsingle', [
            "news"=>$news,
            "cat"=>$cat,
            "tags"=>$tags
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $news = News::where("id", $id)->firstOrFail();
        $tags = Tags::get();
        return view('edit', [
            "news"=>$news,
            "tags"=>$tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate( $request, [
          'image' => 'required',
          'title' => ['required', new RuleForTitle],
          'description' => ['required', new MyFirstRule],
          'shortdesc' => 'required',
          'tags' => 'required'
        ]);

        if(Input::file("image")){
            $destination = public_path('images');
            $filename = uniqid().".jpg";
            $img = Input::file("image")->move($destination, $filename);
        }

        News::where("id", $request->input("id"))->update([
            "title"=>$request->input('title'),
            "description"=>$request->input('description'),
            "shortdesc"=>$request->input('shortdesc'),
            "upload_date"=>$request->input('upload_date'),
            "image"=>$filename
        ]);

        $gela = Tags::where("news_id", $request->input("id"))->get();
        $t = $request->input("tags");

        Tags::where("id", $gela[0]->id)->update(["name_tag"=>$t[0]]);
        Tags::where("id", $gela[1]->id)->update(["name_tag"=>$t[1]]);
        Tags::where("id", $gela[2]->id)->update(["name_tag"=>$t[2]]);
        Tags::where("id", $gela[3]->id)->update(["name_tag"=>$t[3]]);

        $news = News::get();
        $cats = Category::select("id", "title")->get();
        return view('show', ["gela"=>$gela, "news"=>$news, "cat"=>$cats ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        News::where("id", $request->input("id"))->delete();

        return redirect()->back();
    }
}
