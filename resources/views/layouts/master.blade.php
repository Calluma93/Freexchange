<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Freexchange</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}">
        <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic') }}">
        <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('vendor/magnific-popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/creative.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/creative.css') }}">
       
    </head>
    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    @if (Request::path() == "/")
                    <a class="navbar-brand page-scroll" href="#page-top">FreExchange</a>
                    @elseif (Request::path() == "home")
                    <a class="navbar-brand page-scroll" href="#page-top">FreExchange</a>
                    @elseif (Request::path() == "login" || "register" || "jobs" || "setpreferences" || "createjob" || "setprofile" || "showfreelancers")
                    <a class="navbar-brand page-scroll" href="/">Freexchange</a>
                    @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Request::path() == "/")
                        <li><a class="navbar-brand page-scroll" href="#freelancer">I'm a Freelancer</a></li>
                        <li><a class="navbar-brand page-scroll" href="#employer">I'm an Employer</a></li>
                        @elseif (Request::path() == "login")
                        <li><a href="{{ url('/register') }}">Become a Freelancer</a></li>
                        <li><a href="{{ url('/register') }}">Become an Employer</a></li>
                        @elseif (Request::path() == "register")
                        <li><a href="{{ url('/login') }}">I'm Already a Freelancer</a></li>
                        <li><a href="{{ url('/login') }}">I'm Already an Employer</a></li>
                        @elseif (Request::path() == "home" || "jobs" || "setpreferences" || "createjob" || "setprofile" || "showfreelancers")
                        @if ( Auth::user() )
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%; ">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/setprofile') }}">Profile</a></li>
                                <li><a href="{{ url('/setpreferences') }}">Preferences</a></li>
                                @if(Auth::user()->type == 'employer') 
                                    <li><a href="{{ url('/createjob') }}">Create a New Job</a></li>                                    
                                    <li><a href="{{ url('users/freelancers') }}">View all Freelancers</a></li>         
                                    <li><a href="{{ url('jobs') }}">View Your Jobs</a></li>
                                @endif
                                @if(Auth::user()->type == 'freelancer') 
                                    <li><a href="{{ url('users/employers') }}">View all Employers</a></li>
                                    <li><a href="{{ url('jobs') }}">Find a Job</a></li>
                                @endif
                                
                                
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        @yield('styles')

        @yield('scripts')

        <!-- Javascript -->
        <script type="text/javascript" src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/creative.min.js') }}"></script>
    </body>
</html>
