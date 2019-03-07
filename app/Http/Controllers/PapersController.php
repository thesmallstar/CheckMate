<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PapersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     }
    
    
    Public function index(){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
}

    public function create(){
    
     
        return view('papers.add');

    }

    public function add(){
     

         $paper = new \App\paper;
        
          $paper->name=request('name');
          $paper->des=request('des');
          $paper->numQ=request('totalQ');
          $paper->total=request('total');
          $paper->Tid= \Auth::user()->id;
          $paper->save();

          session()->flash('msg', 'Paper is added successfully.');
          return redirect('/home');                                                                                                                                                                                                                                               
        

    }

}
