@extends('layouts.app')
<?php
    
    $title = 'My Profile';
   $page = "";
 ?>


<style>
  .wrapper{
    display: flex;
    text-decoration: none;
    transition: all 0.3s;
    height: auto;
  }
  .sidebar{
    min-width: 250px;
    max-width: 250px;
    background: #655c56;
   
    transition: color 0.3s;
  }
  .sidebar .active{
   /* margin-left: -250px;*/
   background-color: #effcef;
   color: #655c56;
  }

  .components{
    padding: 30px 0px;
   
  }
  .sidebar ul li a{
    padding: 20px;
    font-size: 1.1em;
    display: block;
    border-bottom: 1px solid #94d3ac;
    color: #effcef;
  }
  .sidebar ul li a:hover{
    color: #655c56;
    background: #ccedd2;
    text-decoration: none;
  }
  
  
  .area{
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
  }

  .area h3{
    text-align: center;
  }
  @media (max-width: 768px) {
    .sidebar{
      margin-left: -250px;
    }
    .sidebar .active{
      margin-left: 0px;
    }
    #sidebarCollapse span{
      display: none;
    }
  }

  .details{
      padding: 10px 0px;
  }
 
</style>
@section('content')

<div class="wrapper"> 
  <nav class="sidebar">
    <ul class="lisst-unstyled components">
      <li class="">
        <a href="/makeAppt">Make Appointment</a>
      </li>
      <li>
        <a href="/channelDet">Channeling Details</a>
      </li>
      <li>
        <a href="/myAppt">My Appointments</a>
      </li>
      <li>
        <a href="/myProfile" class="active">My Profile</a>
      </li>
    </ul>

  </nav>
  
  <div class="area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
          <i class="fas fa-align-left"></i>
          <span>Toggle Menu</span>
        </button>
      </div>
    </nav>
    <br>
    
    <h3>(name) <br> (patient id) </h3>
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
        <a href="/updateProfile" class="btn btn-success">Update</a>
        <a href="/changePassword" class="btn btn-warning">Change Password</a>
        
      </div>
    </div> 
  </div>
   
 

</div>

@include('layouts.footer')
@endsection

@section('scripts')

<script>
  //sidebar toggle
  $(document).ready(function (){
    $("#sidebarCollapse").on('click', function(){
    $(".sidebar").toggleClass('active');
    });
  });
</script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
@endsection