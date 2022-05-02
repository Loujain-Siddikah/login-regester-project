<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //هاد التابع مشان ما اقدر فوت عرابط اليوزر بدون مصادقة وبوديني عالهوم
        $this->middleware('auth');
    }
    public function index(){
        return view('user.index');
    }
}