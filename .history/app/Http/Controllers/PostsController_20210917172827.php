<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Post $post)
    {
        //$post = Post::find($post);
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
       // dd(request(['title', 'body']));
        //Create a new post using the request data
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');

        // //Save it to the database
        // $post->save();

        //Validate requires data
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        
        //create
        Post::create(request(['title','body']));

        //And redirect to home page
        return redirect('/');
    }
}

//====================OLD COMMENTS======================
// public function index()
// {
//     $posts = \App\Post::all();
//     $posts = \App\Post::orderBy('created_at', 'desc')->get();
//     return view('posts.index', compact('posts'));
// }