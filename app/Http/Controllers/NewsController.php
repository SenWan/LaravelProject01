<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($category, $myId){
        /* echo $category;
        echo '<br>';
        echo $myId; */
        return view('others/news', ['category' => $category, 'Id' => $myId]);
    }
}
