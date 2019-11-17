<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('blog/index');
    }

    public function tentang(){
        return view('blog/tentang');
    }

    public function kontak(){
        return view('blog/kontak');
    }

}
