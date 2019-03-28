@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
               
                <div class="card-header" >Ambulance Information</div>
                <div class="card-body">
                  <h4>{{$paper->name}}</h4> 
                        Ambulance Description: <b>{{$paper->des}}</b><br>
                      Status:<b> {{ $paper->status }}</b><br>
                       Phone: <b>{{$paper->phone}}</b>
              <br>
                @if(!Auth::user()->type)
                      Book Ambulance: 

                        <a href="{{$paper->id}}\b\{{Auth::user()->id}} ">Book this ambulance</a><hr>
                  @endif
            </div>
        </div>
    </div>
</div>
@endsection


