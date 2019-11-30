<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\belajarlaravelEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function kirimemail(){
        Mail::to("testing@malasngoding")->send(new belajarlaravelEmail());

        return "Email berhasil di kirim";
    }
}
