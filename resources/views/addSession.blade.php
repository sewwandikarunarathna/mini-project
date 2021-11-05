@extends('layouts.app')
<?php
    
    $title = 'add session';
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
  .area h4{
      text-align: right;
      padding: 10px 10px;
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

        <h4><a href="/viewSessions"><input type="button" class="btn btn-warning" value="Back"></a></h4>
        <div class="row justify-content-center">
            
            <div class="col-md-7">
            
                <form method="POST" action="">
                    @csrf

                    <h3>Create a Session!</h3>
                   <hr>

                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}">

                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="session" class="col-md-4 col-form-label text-md-right">{{ __('Session') }}</label>

                        <div class="col-md-6">
                            <select id="session" class="form-control" name="session" value="{{ old('session') }}">
                                <option value="4">4 - 5</option>
                                <option value="5">5 - 6</option>
                                <option value="6">6 - 7</option>
                                <option value="7">7 - 8</option>
                            </select>

                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="patient_limit" class="col-md-4 col-form-label text-md-right">{{ __('Patient Limit') }}</label>

                        <div class="col-md-6">
                            <select id="patient_limit" class="form-control" name="patient_limit" value="{{ old('patient_limit') }}">
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>

                            
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                           <input type="submit" class="btn btn-primary col-md-6" value="Create">
                           <a href=""><input type="button" class="btn btn-warning col-md-5" value="Reset"></a>
                        </div>

                    </div> 
                </form>    
          
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection   