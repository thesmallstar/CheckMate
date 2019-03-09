<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
    
    
    
    .block {
      display: inline;
    }
    
    form {
      background-color: white;
    }
    
    #formdiv {
      width: 500px;
      float: left;
      text-align: center;
    }
    
    .upload {
      background-color: #ff0000;
      border: 1px solid #ff0000;
      color: #fff;
      border-radius: 5px;
      padding: 10px;
      text-shadow: 1px 1px 0px green;
      box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.75);
    }
    .upload:hover {
      cursor: pointer;
      background: #c20b0b;
      border: 1px solid #c20b0b;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.75);
    }
    #file {
      color: green;
      padding: 5px;
    
      background-color: #f9ffe5;
    }
    #upload {
      margin-left: 45px;
    }
    
    #noerror {
      color: green;
      text-align: left;
    }
    #error {
      color: red;
      text-align: left;
    }
    #img {
      width: 17px;
      border: none;
      height: 17px;
      margin-left: -20px;
      margin-bottom: 91px;
    }
    
    .abcd {
      text-align: center;
    }
    
    .abcd img {
      height: 100px;
      width: 100px;
      padding: 5px;
      border: 1px solid rgb(232, 222, 189);
    }
    
    #formget {
      float: right;
    }
    #img1 {
      width: 25px;
      border: none;
      height: 25px;
      margin-left: -20px;
      margin-bottom: 91px;
    }
    
    #files {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    #filediv {
      height: 100px;
      width: 100px;
    }
    
    #snackbar {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #2196f3;
      color: #fff;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
    }
    
    .show {
      visibility: visible !important;
    
      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }
    
    @-webkit-keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }
      to {
        bottom: 30px;
        opacity: 1;
      }
    }
    
    @keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }
      to {
        bottom: 30px;
        opacity: 1;
      }
    }
    
    @-webkit-keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }
      to {
        bottom: 0;
        opacity: 0;
      }
    }
    
    @keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }
      to {
        bottom: 0;
        opacity: 0;
      }
    }
    </style>
  

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                     
                        <li class="nav-item">
                       
                                <li class="nav-item">
                                        <a class="nav-link" style="color:black;">
                                         @if(Auth::user()->type)
                                             Logged in as Teacher
                                         @else
                                         Logged in as Student
                                         @endif

                                        </a>
                                    </li>
                             </li>
                             <li class="nav-item">
                                    <a class="nav-link" style="color:#227DC7;" href="../home" >
                                       Home
                                    </a>
                                </li>
                         </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                               
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
