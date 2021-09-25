<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::latest()->get();

        return view('home.index',compact('items'));
    }

    public function show(Items $item)
    {
        
        return view('home.show',compact('item'));
    }

    public function about()
    {
        return view('home.about');
    }
}
