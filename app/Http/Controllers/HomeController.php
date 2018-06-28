<?php

namespace App\Http\Controllers;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;
use Illuminate\Http\Request;
use App\Chart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //function construct ???
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
        return view('welcome');
    }
}
