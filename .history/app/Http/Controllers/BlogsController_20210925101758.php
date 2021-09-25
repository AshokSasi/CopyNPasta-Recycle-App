<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Blog::latest()->get();

        return view('blogs.index',compact('blogs'));
    }

    public function show(Blog $blog)
    {
     
        return view('blogs.show',compact('post'));
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
