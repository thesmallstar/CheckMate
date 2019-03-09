@extends('layouts.app1')

@section('content')
<body>
    <div class="textbox" style="position: absolute;
        width: 827px;
        height: 513px;
        left: 22%;
        top: 243px;
        background: #FFFFFF;
        border: 1px solid #B0B0B0;
        box-sizing: border-box;
        border-radius: 10px;
        padding-right: 50px;">
        <div class="boxhead" style="position: relative;
        width: 826px;
        height: 60px;
        left: 0px;
        top: 0px;
        background-color: #929697;
        border-radius: 10px 10px 0px 0px;">
            <h3 class="boxtitle">Register</h3>
        </div>
                <form class="form-horizontal" action="{{ route ('register')}}" style="position:relative;
        padding-top:50px;" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">

                      @if($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                        @endif
                    </div>
                  </div>
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
                  <label class="control-label col-sm-2" for="iam">I am:</label>
                    <div class="col-sm-10">
                            <select class="form-control" id="type" name="type" onchange="showDiv('hidden_div', this)">
                                    <option value="0">Student</option>
                                    <option value="1">Teacher</option>
                            </select>
                    </div>
                  </div>
                  <div id="hidden_div">
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="roll">Roll No:</label>
                                <div class="col-sm-10">          
                                  <input type="text" class="form-control" id="roll" placeholder="Enter Roll No" name="roll">
                                </div>
                              </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="cpwd">Confirm Password:</label>
                    <div class="col-sm-10">          
                      
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                      <input type="password" class="form-control" id="password-confirm" placeholder="ReEnter password" name="password_confirmation">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default button" style="background-color:#1b98e0;
      color:white;" name="submit">Register</button>
                    </div>
                  </div>
                </form>
    </div>
    <script>
        function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 0 ? 'block' : 'none';
}
    </script>
</body>
</html>
