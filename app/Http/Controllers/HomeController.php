<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!(\Auth::user()->type)){
           
            $results=\Auth::user()->results;
           // $paper=\App\Paper::find();
            // dd($results);

        return view('home',compact('results'));
        }else{
            $papersgiven = \Auth::user()->papersmade;
            return view("home", compact('papersgiven'));
        }
    }
}
