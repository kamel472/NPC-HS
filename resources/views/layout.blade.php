<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Fontawsome --> 
    <script src="https://kit.fontawesome.com/e2b5f74269.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
      
        
      <nav class="navbar  navbar-expand navbar-primary bg-primary scrolling-navbar">
       
        
        
        
        <!-- Right Side Of Navbar -->
        
            <!-- Authentication Links -->
            @guest
                <a class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))   
                <a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Register') }}</a>   
            @endif
            @else

            <div class="container">
        
        <!-- Brand -->
        <a  href="{{'/home'}}">
        <h2 style="color:white">الصفحة الرئيسية</h2>
        </a> 	&nbsp; 	&nbsp; 	&nbsp; 	&nbsp; 
        
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ملاحظات السلامة 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('observations.index')}}">السجل</a>
              <a class="dropdown-item" href="{{route('observations.create')}}">ارسل ملاحظة</a>
              
            </div>
          </li>
          
        
          <li class="nav-item active" >
            <a class="nav-link waves-effect" href="{{route('permits.index')}}" style="color:white">
            تصاريح العمل  </a>
        </li>
            </ul>
        
            <div class="dropdown">
            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
            
             
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            <a class="dropdown-item" href="">Your Profile</a>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        
        </div>
        </div>
            @endguest
        </div>
        </div>
        </div>
        
        </div>
        </nav>

        @yield('body')

        <div id="footer-sec" style="height: 60px;">
        <p>&copy;2020 Nasr Petroleum Company | Design By : Kamel Mohamed</p><br>
        
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('js/jquery.metisMenu.js')}}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    </body>
</html>