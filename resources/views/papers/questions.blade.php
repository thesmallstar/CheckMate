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

                      <h5><b> Questions: </b></h5>
                      <hr>
                          
                           <form action="" method="POST">
                                @csrf
               
                              
                                   
                                            @for ($i = 1; $i <=$paper->numQ; $i++)
                                      <div class="form-group">
                                       Q{{$i}} <label for="Name">Question</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Question here">
                                       <br>
                                        <div class="form-row">
                                                <div class="form-group col-md-4">
                                                        <label for="type{{$i}}">Question Type</label>
                                                        <select class="form-control" id="type{{$i}}" name="type{{$i}}">
                                                          <option>Defination/Axiom (One word or One line)</option>
                                                          <option>Mathematical Problem</option>
                                                          <option>List Only</option>
                                                          <option>List and Explain</option>
                                                          <option>Ordered List</option>
                                                          <option>Paragragh</option>
                                                          <option>List/Paragraph</option>

                                                        </select>
                                               
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label for="typec{{$i}}">Type of Checking</label>
                                                        <select class="form-control" id="typec{{$i}}" name="typec{{$i}}">
                                                          <option>Exact</option>
                                                          <option>Lenient Non Exact</option>
                                                          <option>Non Lenient Non Exact</option>
                                                          

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
                                                              <input type="number" class="form-control" name="emarks{{$i}}"id="emarks{{$i}}">
                                                            </div>
                                                         </div>         
                                                         <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                 
                                                                        <label for="syn{$i}}">Synonymous Words Needed</label>
                                                                  <input type="text" class="form-control" name="syn{{$i}}"id="syn{{$i}}">
                                                               
                                                                </div>
                                                               
                                                                <div class="form-group col-md-4">
                                                                  <label for="sMarks{{$i}}">Marks for Synonymous( ',' Seperated )</label>
                                                                  <input type="number" class="form-control" name="smarks{{$i}}"id="smarks{{$i}}">
                                                                </div>
                                                             </div>         
                                                             <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                     
                                                                            <label for="Res{{$i}}">Restricted Words </label>
                                                                      <input type="text" class="form-control" name="Res{{$i}}"id="Res{{$i}}">
                                                                   
                                                                    </div>
                                                                   
                                                                    <div class="form-group col-md-4">
                                                                      <label for="Rmarks{{$i}}">Marks to deduct ( ',' Seperated )</label>
                                                                      <input type="number" class="form-control" name="rmarks{{$i}}"id="rmarks{{$i}}">
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

            </div>
        </div>
    </div>
</div>
@endsection
