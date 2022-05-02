<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        //هاد التابع مشان ما اقدر فوت عرابط الادمن بدون مصادقة وبدون ماكون ادمن
        $this->middleware(['auth', 'role:admin']);
    }
    public function index(){
        return view('admin.index');
    }
}
