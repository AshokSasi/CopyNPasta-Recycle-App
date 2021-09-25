<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
class ItemsController extends Controller
{
    public function index()
    {
        $items = Post::latest()->get();

        return view('posts.index',compact('posts'));
    }
}
