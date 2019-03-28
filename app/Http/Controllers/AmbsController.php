<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmbsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     }
    
    
    Public function index(){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
}

    public function cr(){
    
     
        return view('ambs.add');

    }

    public function add(){
     

         $amb = new \App\Ambu;
        
          $amb->name=request('name');
          $amb->des=request('des');
          $amb->phone=request('totalQ');
        //  $amb->total=request('total');
          $amb->status=0;
          $amb->Tid= \Auth::user()->id;
          $amb->save();

          session()->flash('msg', 'Ambulance is added successfully.');
          return redirect('/home');                                                                                                                                                                                                                                               
        

    }

     public function view($id)
      {
        $paper = \App\Ambu::find($id);
           
        return view("ambs/amb", compact('paper'));

      }

      
     public function book($aid,$uid)
     {
      // dd($aid);
       $amb = \App\Ambu::find($aid);
      // dd($amb);
       $amb->user_id=$uid;
       $amb->status=1;
       $amb->save();

    //    dd($results);
    if(!(\Auth::user()->type)){
      $ambs= \App\Ambu::all();
      //dd($ambs);
      return view('home',compact('ambs'));
  }

  else{
      $ambsgiven = \Auth::user()->papersmade;
    return view("home", compact('ambsgiven'));
  }


     }


    


}
