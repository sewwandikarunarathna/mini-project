@extends('layouts.app')
<?php
    
    $title = 'Update Profile';
   $page = "";
 ?>


<style>
    
  .area{
    width: 100%;
    padding: 20px;
    min-height: 100vh;
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
            
                <form method="POST" action="/updateData">
                    @csrf

                    <h3>Update Your Details!</h3>
                   <hr>

                    <div class="form-group row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                        <div class="col-md-6">
                            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">

                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">

                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC Number') }}</label>

                        <div class="col-md-6">
                            <input id="nic" type="text" class="form-control" name="nic" value="{{ old('nic') }}">

                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ old('phone_no') }}">

                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                        <div class="col-md-6">
                            <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}">

                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                        <div class="col-md-6">
                            <select id="gender" class="form-control" name="gender" value="{{ old('gender') }}">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>    
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                           <input type="submit" class="btn btn-primary col-md-6" value="Update">
                           <a href="/myProfile"><input type="button" class="btn btn-warning col-md-5" value="Back to Profile"></a>
                        </div>

                    </div> 
                </form>    
          
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection   