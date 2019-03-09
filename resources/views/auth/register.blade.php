<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="layout.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<style>
    body{
    background-color: #e6f5ff;
    }

    header{
    margin-left:-10px;
    margin-right:-8px;
    padding:20px;
    padding-right:40px;
    padding-left:40px;
    height: 90px;
    background: #002756;
    opacity: 0.85;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

.links{
    float:right;
    color: white;
    position: relative;
    top:-7px;
    text-decoration:none;
    padding-right:40px;
    padding-left:40px;
    overflow:hidden;
    padding-top:20px;
    padding-bottom:20px;
    font-size:20px;
    display: block;
    font-family:'abel';
}

header a:hover{
    background-color:#e4e6e7;
    color: #002756;
  }

.title{
    position: relative;
    float:left;
    font-family: Megrim;
    font-weight: 550;
    font-size: 45px;
    color: #FFFFFF;
    padding-left: 20px;
    }

.boxtitle{
    position:relative;
    float:left;
    padding-left:30px;
    top:-6px;
    font-family:'roboto';
    font-size:28px;
    color:white;
    font-weight:500;
}

.logohead{
    position:relative;
    float:left;
    left:0px;
    top:-3px;
    width:72px;
    height:auto;
}

    .textbox{
        position: absolute;
        width: 827px;
        height: 513px;
        left: 22%;
        top: 243px;
        background: #FFFFFF;
        border: 1px solid #B0B0B0;
        box-sizing: border-box;
        border-radius: 10px;
        padding-right: 50px;
    }
    .boxhead{
        position: relative;
        width: 826px;
        height: 60px;
        left: 0px;
        top: 0px;
        background-color: #929697;
        border-radius: 10px 10px 0px 0px;
    }
    form{
        position:relative;
        padding-top:50px;
    }
    .button{
      background-color:#1b98e0;
      color:white;
    }
</style>
<body>
    <header>

            <a class="links" href="">Username</a>
            <a class="links" href="">Home</a>
            <a class="links" href="">Logged in as ...</a>
            <img class="logohead" src="LOGO_again.png">
            <p class="title">CHECKMATE</p>
    </header>
    <div class="textbox">
        <div class="boxhead">
            <h3 class="boxtitle">Register</h3>
        </div>
                <form class="form-horizontal" action="{{ route ('register')}}">
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
                      <button type="submit" class="btn btn-default button">Register</button>
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