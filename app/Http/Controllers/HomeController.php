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
    public function learn_listening()
    {
        return view('learn/learn_listening');
    }
    public function learn_structure()
    {
        return view('learn/learn_structure');
    }
  
    public function start_reading()
    {
        return view('start/start_reading');
    }
    public function start_listening()
    {
        return view('start/start_listening');
    }
    public function start_structure()
    {
        return view('start/start_structure');
    }
    public function simulation()
    {
        return view('simulation/simulation_toefl');
    }
    public function simulation_listening()
    {
        return view('simulation/simulation_section1');
    }
}

