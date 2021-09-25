<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Blog $blog)
    {
        
        //validation
        $this->validate(request(), ['body' => 'required|min:2']);

        $post->addComment(request('body'));

        return back();
    }
}
//========================OLD CODE=====================