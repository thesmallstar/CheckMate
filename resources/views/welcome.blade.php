<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <title>checkmate</title>
    <style>

        body{
            background-image: url(https://github.com/thesmallstar/CheckMate/blob/master/resources/views/back1.png?raw=true);
            background-size: cover;
            font-family: 'source sans pro', sans-serif;
        }
        header{
            color:#000066 ;
            background-color: 	#e4e6e7;
            margin-top: -20px;
            margin-left:-10px;
            margin-right:-8px;
            padding:20px;
            padding-right:40px;
            height: 50px;
            opacity: 0.85;
            box-shadow:0px 5px 5px #333333;
        }
        .t1{
            position:absolute;
            top:37%;
            left: 28%;
            font-size:100px;
            color:	#e4e6e7;
            font-family:'Megrim';
            text-shadow: 3px 2px black;
            letter-spacing: 15px;
        }
        .link{
          float:right;
          color: #000066;
          position: relative;
          text-decoration:none;
          padding-right:40px;
          padding-left:40px;
          overflow:hidden;
          padding-top:20px;
          padding-bottom:20px;
          font-size:20px;
          display: block;
        }
        header a:hover{
          background-color:#002756;
          color: #e4e6e7;
        }
        .logo{
          position:relative;
          float:left;
          left:0px;
          width:70px;
          height:auto;
        }
    </style>

</head>
<body>

    <header>
        @if (Route::has('login'))
        
            @auth
                <a class="link" href="{{ url('/home') }}">Home</a>
            @else
                <a class="link" href="{{ route('login') }}">Login</a>
                <a class="link" href="{{ route('register') }}">Register</a>
            @endauth
        
    @endif

      <!--<a class="link" href="">Register</a>
      <a class="link" href="">Login</a>-->
      <a class="link" href="">Documentation</a>
      <a class="link" href="">About</a>
      <img class="logo" src="https://github.com/thesmallstar/CheckMate/blob/master/resources/views/logo_that_shall_not_be_named.png?raw=true">
    </header>
    <h1 class="t1">CHECKMATE</h1>
</body>
</html>

