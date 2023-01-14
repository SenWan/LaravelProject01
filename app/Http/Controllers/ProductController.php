<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $products = [
            array('id'=>1, 'name'=>'abc', 'price'=>100),
            array('id'=>2, 'name'=>'def', 'price'=>200),
            array('id'=>3, 'name'=>'ghi', 'price'=>300)
        ];
        return view('products', compact('products'));
    }
}
