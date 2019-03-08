@extends('layouts.app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
                                                          <option value="3">List Only</option>
                                                          <option value="4">List and Explain</option>
                                                          <option value="5">Ordered List</option>
                                                          <option value="6">Paragragh</option>
                                                          <option value="7">List/Paragraph</option>

                                                        </select>
                                               
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label for="typec{{$i}}">Type of Checking</label>
                                                        <select class="form-control" id="typec{{$i}}" name="typec{{$i}}">
                                                          <option value="1">Exact</option>
                                                          <option value="2">Lenient Non Exact</option>
                                                          <option value="3">Non Lenient Non Exact</option>
                                                          

                                                        </select>
                                               
                                                </div>
                                               
                                                <div class="form-group col-md-4">
                                                  <label for="mark{{$i}}">Marks</label>
                                                  <input type="number" class="form-control" name="marks{{$i}}"id="marks{{$i}}">
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

You have added the Questions. 
View/Edit them here: <a href="{{$paper->id}}/edit/"> Questions</a>

<form class="form-horizontal" enctype="multipart/form-data" method="post" action="/details">
  <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
</form>



@endif
            </div>
        </div>
    </div>
</div>
@endsection
