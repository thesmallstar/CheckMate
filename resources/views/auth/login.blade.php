@extends('layouts.app1')

@section('content')
<body>
    <div class="textbox" 
        style="position: absolute;
        width: 827px;
        height: 400px;
        left: 22%;
        top: 243px;
        background: #FFFFFF;
        border: 1px solid #B0B0B0;
        box-sizing: border-box;
        border-radius: 10px;
        padding-right: 50px;">
        <div class="boxhead" 
        style="position: relative;
        width: 826px;
        height: 60px;
        left: 0px;
        top: 0px;
        background-color: #929697;
        border-radius: 10px 10px 0px 0px;">
            <h3 class="boxtitle">Login</h3>
        </div>
            <form class="form-horizontal" action="{{route('login')}}" method="post" style="position:relative;
        padding-top:50px;">
            @csrf
                  <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                          @if($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email')}}</strong>
                            </span>
                        @endif
                        </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                      @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-sm-2" for="iam">I am:</label>
                          <div class="col-sm-10">
                                  <select class="form-control" id="type" name="type">
                                          <option value="0">Student</option>
                                          <option value="1">Teacher</option>
                                  </select>
                          </div>
                    </div>
                    <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember"> 
                        <label for="remember">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default button" style=" background-color: #1b98e0;
        color:white;">Login</button>
                    </div>
                  </div>
                </form>
    </div>
</body>
</html>
