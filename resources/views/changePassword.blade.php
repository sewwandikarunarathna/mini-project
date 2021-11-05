@extends('layouts.app')
<?php
    
    $title = 'change password';
   $page = "";
 ?>


<style>
    
  .area{
    background-image:linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://image.freepik.com/free-photo/medical-stethoscope-isolated-with-white-background-medical-concept_1391-751.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    padding: 20px;
    min-height: 76vh;
    transition: all 0.3s;
  }

  .area h3{
    text-align: center;
  }

  form{
        margin: 35px 0px;
        border: 0px solid #ccc;
        box-shadow: -2px 5px 30px 10px black;
        border-radius: 25px;
        padding: 10px 0px;
        background-color:rgba(32,32,32,0.3);
        
    }

    .button{
        width: 80%;
    }
</style>

@section('content')
    <div class="area">
        <div class="row justify-content-center">
            
            <div class="col-md-7">
            
                <form method="POST" action="">
                    @csrf

                    <h3>Change Your Password!</h3>
                   <hr>

                    <div class="form-group row">
                        <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                        <div class="col-md-6">
                            <input id="current_password" type="password" class="form-control" name="current_password" value="{{ old('current_password') }}">

                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                        <div class="col-md-6">
                            <input id="new_password" type="password" class="form-control" name="new_password" value="{{ old('new_password') }}">

                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="confirm_password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="{{ old('confirm_password') }}">

                            
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                           <input type="submit" class="btn btn-primary col-md-6" value="Change Password">
                           <a href=""><input type="button" class="btn btn-warning col-md-5" value="Back"></a>
                        </div>

                    </div> 
                </form>    
          
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection   