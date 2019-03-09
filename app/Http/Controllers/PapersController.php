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
          $paper->status=0;
          $paper->Tid= \Auth::user()->id;
          $paper->save();

          session()->flash('msg', 'Paper is added successfully.');
          return redirect('/home');                                                                                                                                                                                                                                               
        

    }

     public function addQuestions($id)
      {
        $paper = \App\Paper::find($id);
           
        return view("papers/questions", compact('paper'));

      }

      
     public function viewresult($id)
     {
       $paper = \App\Paper::find($id);
       $results = $paper->results;
    //    dd($results);
       return view("papers/results", compact('paper','results'));

     }


      public function SubmitQuestions($id)
      {

       $paper = \App\Paper::find($id);
       
         //dd($paper->numQ);
           for( $i=1; $i<=$paper->numQ; $i++)
              {
                //Adding Questions 
              //  /dd(request());
                 $question = new \App\question;
                 $question->name= request('name'.strval($i));
                 $question->paper_id=$id;
                 $question->number=$i;
                 $question->numP=request('nump'.strval($i));
                 $question->numC=request('numc'.strval($i));
                 $question->type=request('type'.strval($i));
                 $question->evaltype=request('typec'.strval($i));
                 $question->marks=request('marks'.strval($i));
                 $question->save();
                
                 //Adding Answer
                 $answer= new \App\keyword;
                 $answer->type=0;
                 $answer->question_id=$question->id;
                 $answer->mark=0;
                 $answer->answer=request('answer'.strval($i));
                  $answer->save();
                   
                 //Adding Exact Keywords withmarks

                 $exact = request('exact'.strval($i));
                 $exactm = request('emarks'.strval($i));
                 $exactarray = explode (",", $exact); 
                 $exactmarks = explode (",", $exactm); 
                 $j=0;
                 foreach ($exactarray as $e)
                        {  
                            $exact= new \App\keyword;
                            $exact->type=1;
                            $exact->question_id=$question->id;
                            $exact->mark=$exactmarks[$j];
                            $exact->answer=$e;
                            $exact->save();
                            $j++;
                      }

                      $sym = request('syn'.strval($i));
                      $symm = request('smarks'.strval($i));
                      $symarray = explode (",", $sym); 
                      $symmarks = explode (",", $symm); 
                      $j=0;
                      foreach ($symarray as $e)
                             {
                                 $sym= new \App\keyword;
                                 $sym->type=2;
                                 $sym->question_id=$question->id;
                                 $sym->mark=$symmarks[$j];
                                 $sym->answer=$e;
                                 $sym->save();
                                 $j++;
                           }
                           
                
                   //Adding Exact Keywords withmarks
        
                   $res = request('Res'.strval($i));
                   $resm = request('rmarks'.strval($i));
                   $resarray = explode (",", $res); 
                   $resmarks = explode (",", $resm); 
                   $j=0;
                   foreach ($resarray as $e)
                          { 
                            
                              $res= new \App\keyword;
                              $res->type=3;
                              $res->question_id=$question->id;
                              $res->mark=$resmarks[$j];
                              $res->answer=$e;
                              $res->save();
                              $j++;
                        }
                        

                       
             }
             $paper->status=1;
             $paper->save();
           //  dd(request());
             return redirect('/home');



      }


}
