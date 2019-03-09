@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                @if(Auth::user()->type)
                <button type="button" onClick="window.location='papers/create';" class="btn btn-primary">Add new Paper</button>
                <hr>
                @if(session('msg'))
                
                

                <div class="alert alert-success" style="margin-top:10px;">
                    <strong>Success!</strong>  {{session('msg')}}
                 
                  </div>
                @endif

                <div style="padding:20px 0;">
                    <h4>
                  Your Papers:
                    </h4>  
                </div>
                
                  
                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sr No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Number of Questions</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <?php  $i=1 ?>    
                    <tbody>
                     @foreach ($papersgiven as $paper)
                         
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                       <td><a href="papers/{{$paper->id}}">{{$paper->name}}</a></td>
                       <td>{{$paper->created_at->format('d/m/y')}}</td>
                       <td>{{$paper->numQ}}</td>
                       <td>{{$paper->total}}</td>
                       <td>{{$paper->status}}</td>
                       <td><a href="papers/{{$paper->id}}/result">View Result</a></td>

                      </tr>
                      <?php $i++ ?>
                      @endforeach

                  
         
                     
                    </tbody>
                  </table>




                @else



                @endif
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
