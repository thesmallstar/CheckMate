@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                @if(Auth::user()->type)
                <button type="button" onClick="window.location='Ambs/create';" class="btn btn-primary">Add new Ambulance</button>
                <hr>
                @if(session('msg'))
                
                

                <div class="alert alert-success" style="margin-top:10px;">
                    <strong>Success!</strong>  {{session('msg')}}
                 
                  </div>
                @endif

                <div style="padding:20px 0;">
                    <h4>
                  Ambulances You have added:
                    </h4>  
                </div>
                
                  
                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sr No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Location</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <?php  $i=1 ?>    
                    <tbody>
                     @foreach ($ambsgiven as $ambu)
                         
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                       <td><a href="Ambs/{{$ambu->id}}">{{$ambu->name}}</a></td>
                       <td>{{$ambu->created_at->format('d/m/y')}}</td>
                       <td>{{$ambu->des}}</td>
                       <td>{{$ambu->phone}}</td>
                       <td>{{$ambu->status}}</td>
                       <td><a href="papers/{{$ambu->id}}/result">View more</a></td>

                      </tr>
                      <?php $i++ ?>
                      @endforeach

                  
         
                     
                    </tbody>
                  </table>




                @else

                <div style="padding:20px 0;">
                    <h4>
                  Ambulances Available for booking:
                    </h4>  
                </div>
                
                  
                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sr No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Location</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <?php  $i=1 ?>    
                    <tbody>
                     @foreach ($ambs as $ambu)
                         
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                       <td><a href="Ambs/{{$ambu->id}}">{{$ambu->name}}</a></td>
                       <td>{{$ambu->created_at->format('d/m/y')}}</td>
                       <td>{{$ambu->des}}</td>
                       <td>{{$ambu->phone}}</td>
                       <td>{{$ambu->status}}</td>
                       <td><a href="Ambs/{{$ambu->id}}">View more</a></td>

                      </tr>
                      <?php $i++ ?>
                      @endforeach

                  
         
                     
                    </tbody>
                  </table>


                @endif
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
