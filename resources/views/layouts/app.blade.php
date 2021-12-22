<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? '' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha512-TawcSfIUO8yB0Or8FXEDW2X32Q71ZGAOYVVwe7n3EsoyQb+iMZbodI6RnQ4JDcItNoO3TmwP7/bD89vhQA4zTA==" crossorigin="anonymous"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />

    <style>
       body{
           margin: 0;
           padding: 0;
       }
        /*navbar*/

.navbar-custom{
    background: #effcef linear-gradient(rgba(0,0,0, .2), rgba(0,0,0, .2));
   
}

    
.navbar-custom .navbar-brand{
    color: #07682e;
   
}
.menu-item{
    color: #52aa74;
    font-size: 18px;
    letter-spacing: 1px;
    transition: color .5s;
}
.menu-item:hover{
    color: #655c56;
}

.nav-active{
    color: #655c56;
    border-bottom: 3px solid #655c65;
}

.dropdown-menu{
    background-color: #effcef;
}
.dropdown-item{
    color: #655c56;
}
.dropdown-item:hover{
    color: #52aa74;
}
.line1, .line2, .line3{
    width: 23px;
    height: 3px;
    margin: 5px;
    transition: all .4s;
    background-color: black;
}

.change .line1{
    transform: rotate(-45deg) translate(-5px, 6px);

}

.change .line2{
    opacity: 0;
   
}

.change .line3{
    transform: rotate(45deg) translate(-5px, -6px);
    
}
/*end of navbar*/
    </style>
</head>
<body>
   
        <nav class="navbar navbar-expand-md navbar-custom">
            
                <a class="navbar-brand h1 font-weight-bold" href="{{ url('/') }}">
                    Outpatient
                </a>
                <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                        
                </button>

                <div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    
                        <!-- Authentication Links -->
                        @guest
                        <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link m-2 menu-item <?php if($page=='home'){ echo "nav-active"; }?>" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link m-2 menu-item <?php if($page=='doctors'){ echo "nav-active"; }?>" href="/doctors">Doctors</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link m-2 menu-item <?php if($page=='aboutus'){ echo "nav-active"; }?>" href="aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link m-2 menu-item <?php if($page=='contactus'){ echo "nav-active"; }?>" href="contactus">Contact Us</a>
                        </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link m-2 menu-item <?php if($page=='login'){ echo "nav-active"; }?>" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle m-2 menu-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Login<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        Patient Login
                                    </a>
                                    <a class="dropdown-item" href="{{ route('doc.login')}}">
                                        Doctor Login
                                    </a>
                                    <a class="dropdown-item" href="{{ route('recep.login')}}">
                                        Receptionist Login
                                    </a>
                                    <a class="dropdown-item" href="{{ route('admin.login')}}">
                                        Admin Login
                                    </a>
                                </div>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link m-2 menu-item <?php if($page=='signup'){ echo "nav-active"; }?>" href="{{ route('register') }}">Signup</a>
                                </li>
                            @endif
                    </ul>
                        @else
                        <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item">
                        <a class="nav-link m-2 menu-item <?php if($page=='doctors'){ echo "nav-active"; }?>" href="#">Doctors</a>
                        </li> -->

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle m-2 menu-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Welcome {{ Auth::user()->firstname }} <span class="caret"></span>
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
                        </ul>
                        @endguest
                    
                </div>
            
        </nav>

        <main>
            @yield('content')
        </main>
   
    <script>
        @yield('scripts')
        
    </script>
    
</body>
</html>
