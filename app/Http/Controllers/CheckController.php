<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GoogleCloudVision\GoogleCloudVision;
use GoogleCloudVision\Request\AnnotateImageRequest;
class CheckController extends Controller
{
  

    public function checkmate($id,request $request){
        $i = "";
        // $answers = preg_split("/((q|Q)[0-9]+:)|([0-9]+:)/", $i);
        // dd($answers);
       // dd($m);
        //convert image to base64
        // $paper = \App\Paper::find($id);
        // $questions=$paper->questions;     
        // //dd($m);
        //   foreach($questions as $question)
        //   { 
        //       //$exact=$question->keywords;
        //       $keywords=$question->keywords;
               
        
        //     }
        


        foreach($request->file('filename') as $file){
        $image = base64_encode(file_get_contents($file));
         
        //prepare request
        $request = new AnnotateImageRequest();
        $request->setImage($image);
        $request->setFeature("DOCUMENT_TEXT_DETECTION");
        $gcvRequest = new GoogleCloudVision([$request],  env('GOOGLE_CLOUD_KEY'));
        //send annotation request
        $response = $gcvRequest->annotate();
         //dd($response);
      
       $j= $response->responses[0]->textAnnotations[0]->description;
        //$i="fjalfjlakfjalkfjlkafj\\n \\n hkdhfkdhfkdhjf\\n hsuhfkdjhf";
        // for($j=0;$j<strlen($i);$j++)
        //  {
            
        //         if($i[$j]=='\\' &&  $i[$j+1]=='n')
        //           {
        //              $i[$j]=" ";
        //              $i[$j+1]=" ";

        //           }
  
            
             
        //  }
        // $i=str_replace(' ', '-', $i);
         //$j= str_replace('|', '', $i);
        // $i= str_replace('-', ' ', $i);
         $j=$j." ";
         $i=$i.$j;
        
        }
        //echo $i;
        $i= str_replace("|","",$i);
        $i= str_replace("©","Q",$i);
          $i=trim($i);
        $answers = preg_split("/((q|Q)[0-9]+(:|;))|([0-9]+(:|;))/", $i);
      //  dd($answers);
      
      
      $paper = \App\Paper::find($id);
      $questions=$paper->questions;     
      //dd($m);
      $k = 0;
        foreach($questions as $question)
        { 
            $keywords=$question->keywords;
            if (sp==0) {$ref = spchk(keywords[0]->answer); $stud = spchk(answers[$k]);}
            $refo = listconv($ref,$question); $studo = listconv($stud,$question);
            $refl = llemm($refo); $stdl = llemm($studo);
            $key = klem($keywords);
            $marks = analyz($refo,$refl,$studo,$studl,$key,$question);
            $k++;
        }
}

public function listconv($str,$question)
{
    if ($question->type == 3 or $question->type == 4 or $question->type == 5 )
    {
        $stra = preg_split("/[0-9]+\./", $str);
        $p = count($stra);
        for ($i=0;$i<$p;$i++) $stra[i] = $stra[i+1];
    }
    else{
        $stra[0] = $str;
    }
    return $stra;
}

public function analyz($refo,$refl,$studo,$studl,$key,$question)
{
    if ($question->type==3) $studo = listsort($refo,$studo,$studl);
    $marks = listeval($refo,$refl,$studo,$studl,$key,$question); 
}

public function listeval($refo,$refl,$studo,$studl,$key,$question)
{
    if ($question->type!=3) $studo = simscr($refo,$studo);
    $n = ($question->numc);
    $m = $question->mark;
    $me = ($m)/($n);
    for ($i=0 ;$i<($question->nump) ;$i++){
        if($question->typec=0){
            $scr[$i] = ex($refo[$i],$studo[$i],$question->mark);
        }
        else if($question->typec=1){
            $scr[$i] = exnonsyn($refo[$i],$studo[$i],$question->mark);
        }
        else if($question->typec=2){
            $scr[$i] = len($refo[$i],$refl[$i],$studo[$i],$studl[$i],$key,$question->mark);
        }
        else if($question->typec=3){
            $scr[$i] = nonlen($refo[$i],$refl[$i],$studo[$i],$studl[$i],$key,$question->mark);
        }
    }
    $marks = 0;
    $scr = arsort($scr);
    for ($i = 0; $i<$n ; $i++)  $marks = $marks + $scr[i];
    return $marks; 
}
}