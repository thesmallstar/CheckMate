@extends('layouts.app')

@section('content')
<div class="fluidcontainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Add new paper</div>
                <div class="card-body">
                        <form action="" method="POST">
                            @csrf 
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="Name">Name of Paper</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Eg: Economics 1st">
                                  </div>
                                 </div>
                                <div class="form-group">
                                  <label for="description">Description</label>
                                  <input type="text" class="form-control"  name="des" id="des" placeholder="Enter some description for the paper">
                                </div>
                                
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Total Marks</label>
                                    <input type="number" class="form-control" name="total" id="total">
                                  </div>
                                 
                                  <div class="form-group col-md-6">
                                    <label for="totalQ">Number of Questions</label>
                                    <input type="number" class="form-control" name="totalQ"id="totalQ">
                                  </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary" >Add Paper</button>
                              </form>
                 </div>

            </div>
        </div>
    </div>
</div>
@endsection
