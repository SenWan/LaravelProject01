<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($category, $myId){
        //return view('others/news', ['category' => $category, 'Id' => $myId]);
        
        return view('others.news', compact('category', 'myId'));
    }
}
