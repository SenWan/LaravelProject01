<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){
        return view('course.create');
    }
    public function store(Request $request){
        dd($request);
    }
}
