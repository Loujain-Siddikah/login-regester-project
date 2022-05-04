<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function GetTemp(){
        return view('landing');
    }
    public function GetBlog(){
        return view('blog');
    }
}
