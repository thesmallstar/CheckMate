@extends('layouts.app')

@section('content')
<div class="fluidcontainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                @if(Auth::user()->type)
                <button type="button" onClick="window.location='papers/create';" class="btn btn-primary">Add new Paper</button>
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

                   @foreach ($papersgiven as $paper)
                   {{$paper->name}}<br>
                    @endforeach






                @else



                @endif
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
