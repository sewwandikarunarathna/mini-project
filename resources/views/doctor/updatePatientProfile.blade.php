@extends('layouts.app')
<?php
    
    $title = 'Update Patient Profile';
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

    label{
        font-weight: 600;
    }
</style>

@section('content')
    <div class="area">
        <div class="row justify-content-center">
            
            <div class="col-md-8">
            
                <form method="POST" action="">
                    @csrf

                    <h3>Update Medical Details!</h3>
                   <hr>

                    <div class="form-group row">
                        <label for="medicalDetails" class="col-md-4 col-form-label text-md-right">{{ __('Medical Details') }}</label>

                        <div class="col-md-7">
                            <input id="medicalDetails" type="text" class="form-control" name="medicalDetails" value="{{ old('medicalDetails') }}">

                           
                        </div>
                    </div>

                   

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                           <input type="submit" class="btn btn-primary col-md-6" value="Update">
                           <a href="/doc/patientProfl"><input type="button" class="btn btn-warning col-md-4" value="Back to Patient Profile"></a>
                        </div>

                    </div> 
                </form>    
          
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection   