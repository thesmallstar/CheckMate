<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    text-decoration:none;
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
.h3{
     position: absolute; 
     left: 24%;
    top: 400px;
    font-size: 24px;
    font-family: 'Roboto';
    color:#5f5f5f;
    }
    .hr1{
        position: relative;
        left: -5px;
        right: -5px;
        top: 47px;
        width:95%;
        border: 1px solid #abb6ba; 
    }
    .headrow{
        border-collapse: collapse; 
        padding: 5px;
        width: 150px;
        font-family: 'Roboto';
        font-weight: bold;
        color: #410000;
        font-size: 17px;
        float:center;
        padding-left:20px;
        margin-top:-30px;
    }
    .row{
        border-collapse: collapse;
        padding: 5px;
        width: 150px;
        font-family: 'Roboto';
        color: #410000;
        font-size: 17px;
        float:center;
        padding-left:20px;
    }
.btn1{
        position: absolute;
        left: 24%;
        top: 480px;
        background-color: #E4E6C3; 
        border: none;
        border-radius: 5px;
        color: white;
        height: 200px;
        width: 950px;
        font-family: 'Roboto';
}
.top{
    position:absolute;
    top:470px;
    left: 25%;
}
.invalid-feedback{
  color:red;
}
.topic{
  font-family:
}
</style>
<meta name="csrf-token" content="{{csrf_token() }}">
<title>{{ config('app.name','Laravel')}}</title>
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<header>
@guest
    <a class="links" href="{{ route('login')}}">{{ __('Login') }}</a>
    @if(Route::has('register'))
    <a class="links" href="{{ route('register')}}">{{ __('Register') }}</a>
    @endif
@else
    <a class="links" href="">
        @if(Auth::user()->type)
            Logged in as Teacher
        @else
            Logged in as Student
        @endif    
    </a>
<a class="links" href="../home">Home</a>
<a class="links" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
    @csrf
</form>
@endguest
<img class="logohead" src="LOGO_again.png">
<p class="title">CHECKMATE</p>
</header>
<main class="py-4">
  @yield('content')
</main>
</body>
</html>
