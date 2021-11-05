@extends('layouts.app')
<?php
    
    $title = 'daily sessions';
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
    padding: 15px 0px;
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
        <a href="/recep/dailySessions" class="active">Daily Sessions</a>
      </li>
      <li>
        <a href="/recep/patientDetails">Patient Details</a>
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
    
    <h3>Sessions: (currentDate)</h3>
    <div class="row justify-content-center">
        <div class="col-md-10 table-responsive">
            <table class="table table-striped">
              <th>Session</th>
              <th>Doctors</th>
              <th>Patient Limit</th>
              <th>Status</th>
              
            
              <tr>
                  <td>4-5</td>
                  <td><li>doctor B</li>
                    <li>doctor C</li></td>
                  <td><li>6</li><li>7</li></td>
                  <td><li>N/A</li><li>Available</li></td>
              </tr>  
              <tr>
                <td>4-5</td>
                  <td><li>doctor A</li>
                    <li>doctor C</li></td>
                  <td><li>5</li><li>7</li></td>
                  <td><li>available</li><li>N/A</li></td>
            </tr>
            <tr>
              <td>4-5</td>
              <td><li>doctor B</li>
                <li>doctor C</li></td>
              <td><li>6</li><li>7</li></td>
              <td><li>N/A</li><li>N/A</li></td>
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