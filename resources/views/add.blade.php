@extends('layouts.app')

@section('content')
<div class="fluidcontainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Add new Ambulance</div>
                <div class="card-body">
                        <form action="" method="POST">
                            @csrf 
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="Name">Name of Ambulance</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Eg: East Road hosp 1st">
                                  </div>
                                 </div>
                                <div class="form-group">
                                  <label for="description">Location Description</label>
                                  <input type="text" class="form-control"  name="des" id="des" placeholder="Location">
                                </div>
                                
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Contact Number</label>
                                    <input type="number" class="form-control" name="total" id="numbers">
                                  </div>
                                 
                                  <div class="form-group col-md-6">
                                    <label for="totalQ">Number of Ambulances</label>
                                    <input type="number" class="form-control" name="totalQ"id="totalQ">
                                  </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary" >Add Ambulance</button>
                              </form>
                 </div>

            </div>
        </div>
    </div>
</div>
@endsection
