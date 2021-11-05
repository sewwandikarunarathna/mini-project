@extends('layouts.app')
<?php
    
    $title = 'patient details';
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
    text-align: right;
    padding: 15px 10px;
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

 
</style>
@section('content')

<div class="wrapper"> 
  <nav class="sidebar">
    <ul class="lisst-unstyled components">
      <li class="">
        <a href="/recep/apptDetails">Appointment Details</a>
      </li>
      <li>
        <a href="/recep/docDetails">Doctor Details</a>
      </li>
      <li>
        <a href="/recep/dailySessions">Daily Sessions</a>
      </li>
      <li>
        <a href="/recep/patientDetails" class="active">Patient Details</a>
      </li>
      <li>
        <a href="/recep/makeApptRecep">Make Appointment</a>
      </li>
      <li>
        <a href="/recep/changePasswordRecep">Change Password</a>
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
    
    <h3><a href="/addPatient" class="btn btn-info">+Add New</a></h3>
    <div class="row justify-content-center">
        <div class="col-md-10 table-responsive">
            <table class="table table-striped">
              <tr>
                  <th>Name</th>
                  <th>Contact Number</th>
                  <th>Date of Birth</th>
                  <th>Gender</th>
              </tr> 
              
              <tr>
                  <td>asd</td>
                  <td>07834678577</td>
                  <td>15/05/1967</td>
                  <td>Female</td>
              </tr>  
              <tr>
                <td>fgh</td>
                <td>07834678577</td>
                <td>15/05/1967</td>
                <td>Female</td>
            </tr>
            <tr>
                <td>yui</td>
                  <td>07834678577</td>
                  <td>15/05/1967</td>
                  <td>Female</td>
          </tr>
    
            </table>
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