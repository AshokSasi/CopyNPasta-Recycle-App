<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Blog::latest()->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Blog $blog)
    {
     
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
      

        //Validate requires data
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        
        //create
        Blog::create(request(['title','body']));

        //And redirect to home page
        return redirect('/');
    }
}
