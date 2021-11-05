@extends('layouts.app')
<?php
    
    $title = 'login page';
    $page = 'login';
 ?>
 <style>
    h2{
        text-align: center;
        padding: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    form{
        margin: 35px 0px;
        border: 0px solid #ccc;
        box-shadow: -2px 5px 30px 10px black;
        border-radius: 25px;
        padding: 10px 0px;
        background-color:rgba(32,32,32,0.3);
        
    }
    hr{
        border: 2px solid #f1f1f1;
        
    }
    label{
        font-weight: 600;
    }
    input[type=password]:focus, input[type=email]:focus{
        background-color: #d8d8d8;
    }
    .button{
        width: 40%;
    }
    h6{
        padding: 4px 0px;
    }
    h6 a{
        color: white;
        text-decoration: underline;
    }
    h6 a:hover{
        text-decoration: none;
    }
    .area{
        background-image:linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://gim.uw.edu/sites/gim.uw.edu/files/news_tiles/stock%20photo%20-%20doctor%20hands%20computer.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height:500px;
        width: 100%;
    }
 </style>

@section('content')
<div class="area">
    <div class="row justify-content-center">
        <div class="col-md-7">
            
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h2>Login</h2>
                        <hr>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary button">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color:#d8d8d8" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <h6>New to Outpatient? <a href="{{ route('register') }}">Signup</a></h6>
                            </div>    
                        </div>
                    </form>
              
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
