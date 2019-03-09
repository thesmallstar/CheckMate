@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
               
                <div class="card-header" >Paper Information</div>
                <div class="card-body">
                  <h4>{{$paper->name}}</h4> 
                        Paper Description: <b>{{$paper->des}}</b><br>
                        Number of Questions Questions:<b> {{ $paper->numQ }}</b><br>
                        Total Marks: <b>{{$paper->total}}</b>
                           
<hr>
@if($paper->status==0)
                      <h5><b> Questions: </b></h5>
                      <hr>
                          
                           <form action="" method="POST">
                                @csrf
               
                              
                                   
                                            @for ($i = 1; $i <=$paper->numQ; $i++)
                                      <div class="form-group">
                                        <label for="Name">Question-<b style="font-size:18px;">{{$i}}</b></label>
                                        <input type="text" class="form-control" name="name{{$i}}" id="name{{$i}}" placeholder="Enter Question here">
                                       <br>
                                        <div class="form-row">
                                                <div class="form-group col-md-4">
                                                        <label for="type{{$i}}">Question Type</label>
                                                        <select class="form-control" id="type{{$i}}" name="type{{$i}}">
                                                          <option value="1">Defination/Axiom (One word or One line)</option>
                                                          <option value="2">Mathematical Problem</option>
                                                          <option value="3">Unordered List</option>
                                                          <option value="4">List and Explain</option>
                                                          <option value="5">Ordered List</option>
                                                          <option value="6">Paragragh</option>
                                                          <option value="7">List/Paragraph</option>

                                                        </select>
                                               
                                                </div>
                                                <div class="form-group col-md-">
                                                        <label for="typec{{$i}}">Type of Checking</label>
                                                        <select class="form-control" id="typec{{$i}}" name="typec{{$i}}">
                                                          <option value="0">Exact syntactic</option>
                                                          <option value="1">Exact non syntactic</option>
                                                          <option value="2">Lenient Non Exact</option>
                                                          <option value="3">Non Lenient Non Exact</option>
                                                          

                                                        </select>
                                               
                                                </div>
                                               
                                                <div class="form-group col-md-1">
                                                  <label for="mark{{$i}}">Marks</label>
                                                  <input type="number" class="form-control" name="marks{{$i}}"id="marks{{$i}}">
                                                </div>
                                                <div class="form-group col-md-2">
                                                  <label for="numc{{$i}}">Total Points</label>
                                                  <input type="number" class="form-control" name="numc{{$i}}"id="numc{{$i}}">
                                                </div>
                                                <div class="form-group col-md-2">
                                                  <label for="nump{{$i}}">Points to Check</label>
                                                  <input type="number" class="form-control" name="nump{{$i}}"id="nump{{$i}}">
                                                </div>
                                             </div>
                                             <div class="form-group">
                                
                                                    <label for="Answer{{$i}}">Expected Answer</label>
                                                    <textarea  class="form-control" name="answer{{$i}}" id="answer{{$i}}" placeholder="Enter Expected Answer here"></textarea>
                                                   <br>
                                                    <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                             
                                                                    <label for="Exact{{$i}}">Exact Words Needed</label>
                                                              <input type="text" class="form-control" name="exact{{$i}}"id="exact{{$i}}">
                                                           
                                                            </div>
                                                           
                                                            <div class="form-group col-md-4">
                                                              <label for="Exactmarks{{$i}}">Marks for Exact( ',' Seperated )</label>
                                                              <input type="text" class="form-control" name="emarks{{$i}}"id="emarks{{$i}}">
                                                            </div>
                                                         </div>         
                                                         <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                 
                                                                        <label for="synsyn{{$i}}">Synonymous Words Needed</label>
                                                                  <input type="text" class="form-control" name="syn{{$i}}"id="syn{{$i}}">
                                                               
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                  <label for="sMarks{{$i}}">Marks for Synonymous( ',' Seperated )</label>
                                                                  <input type="text" class="form-control" name="smarks{{$i}}"id="smarks{{$i}}">
                                                                </div>
                                                             </div>         
                                                             <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                     
                                                                            <label for="Res{{$i}}">Restricted Words </label>
                                                                      <input type="text" class="form-control" name="Res{{$i}}"id="Res{{$i}}">   

                                                                    </div>

                                                                    <div class="form-group col-md-4">
                                                                      <label for="Rmarks{{$i}}">Marks to deduct ( ',' Seperated )</label>
                                                                      <input type="text" class="form-control" name="rmarks{{$i}}"id="rmarks{{$i}}">
                                                                    </div>
                                                                 </div>          
                                             </div>


                                              
                                    <hr>
                                     @endfor
                                    <button type="submit" class="btn btn-primary" >Add Questions</button>
                                 </form>
                           


                      

                            </div>
                        </div>
                
                
                
                </div>
@else
<div style="padding:10px;">
You have added the Questions. 
View/Edit them here: <a href="{{$paper->id}}/edit/"> Questions</a>
              </div>
              <form method="post" action="{{$paper->id}}/check" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                       <input class="form-control"type="text" name="roll" Placeholder="Enter Roll number">

                      </div>
                      <div class="input-group control-group increment" >
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn"> 
                          <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                      </div>
                      <div class="clone hide">
                        <div class="control-group input-group" style="margin-top:10px" >
                          <input type="file" name="filename[]" class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                          </div>
                        </div>
                      </div>
              
                      <button type="submit" class="btn btn-primary" style="margin-top:10px">Check</button>
              
                </form>        
                </div>
                @if(session('msg'))
                
                

                <div class="alert alert-success" style="margin-top:10px;">
                    <strong>Success!</strong>  {{session('msg')}}
                 
                  </div>
                @endif
              
              <script type="text/javascript">
              
              
                  $(document).ready(function() {
              
                    $(".btn-success").click(function(){ 
                        var html = $(".clone").html();
                        $(".increment").after(html);
                    });
              
                    $("body").on("click",".btn-danger",function(){ 
                        $(this).parents(".control-group").remove();
                    });
              
                  });
              
              </script>
                              

@endif
            </div>
        </div>
    </div>
</div>
@endsection


