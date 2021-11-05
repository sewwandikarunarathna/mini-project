
@extends('layouts.app')
<?php
    
    $title = 'Patient Profile';
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
 

  .details{
      padding: 10px 0px;
  }
 
</style>
@section('content')
 <div class="area">
    <h3>Patient Details</h3>
    <div class="row justify-content-center">
        <div class="col-md-5 details">
          <table class="table table-striped">
            <tr class="d-flex">
             <td class="text-left col-5">First Name</td> 
             <td class="col-1">:</td>
             <td class="col-6">Amali</td>
            </tr>
            <tr class="d-flex">
              <td class="text-left col-5">Last Name</td>
              <td class="col-1">:</td> 
              <td class="col-6">rangika</td>
            </tr>
            <tr class="d-flex">
            <td class="text-left col-5">NIC</td>  
            <td class="col-1">:</td>
            <td class="col-6">1996034596</td> 
            </tr>
            <tr class="d-flex">
             <td class="text-left col-5">Email</td> 
             <td class="col-1">:</td>
             <td class="col-6">amali12@gmail.com</td>
            </tr>
            <tr class="d-flex">
              <td class="text-left col-5">Contact Number</td>
              <td class="col-1">:</td>
              <td class="col-6">07024356</td>  
            </tr>
            <tr class="d-flex">
             <td class="text-left col-5">Date of Birth</td>
             <td class="col-1">:</td> 
             <td class="col-6">1996 12 08</td> 
            </tr>
            <tr class="d-flex">
             <td class="text-left col-5">Gender</td>
             <td class="col-1">:</td>
             <td class="col-6">Female</td> 
            </tr>
            <tr class="d-flex">
              <td class="text-left col-5">Blood Type</td>
              <td class="col-1">:</td>
              <td class="col-6">o+</td> 
             </tr>
             <tr class="d-flex">
              <td class="text-left col-5">Medical details</td>
              <td class="col-1">:</td>
              <td class="col-6">headeache</td> 
             </tr>
          </table>
        </div>
        
    </div>
    <div class="row justify-content-center">
      <div class="col-md-3">
        <a href="/doc/updatePatientProfile" class="btn btn-success">Update Medical Details</a>
        <a href="/doc/appointments" class="btn btn-warning">Back</a>
      </div>
    </div> 
  </div>
   
 



@include('layouts.footer')
@endsection

