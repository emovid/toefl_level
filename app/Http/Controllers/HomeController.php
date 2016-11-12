<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function catalog()
    {
        return view('catalog');
    }
    public function learn_reading()
    {
        return view('learn/learn_reading');
    }
    public function learn_writing()
    {
        return view('learn/learn_writing');
    }
    public function learn_listening()
    {
        return view('learn/learn_listening');
    }
    public function learn_speaking()
    {
        return view('learn/learn_speaking');
    }
}
