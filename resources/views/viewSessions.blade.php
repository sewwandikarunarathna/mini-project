@extends('layouts.app')
<?php
    
    $title = 'view sessions';
   $page = "";
 ?>


<style>
 
  .area{
     background:linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.2)), url('https://image.freepik.com/free-photo/white-color-medical-equipment-clean-concept_117856-1892.jpg');
    background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
  }

  table{
    background-color:rgba(32,32,32,0.3);
  }

  .area h2{
      text-align: center;
      letter-spacing: 1px;
  }
  .area h4{ 
    text-align: right;
    padding: 15px 10px;
  }

  .area h3{ 
    text-align: left;
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


  
  <div class="area">
    
    <h2>Sessions</h2>
    
    <h4><a href="/addSession" class="btn btn-info">+Create a Session</a>&nbsp;&nbsp;<a href="" class="btn btn-warning">Back</a></h4> 
    
    <div class="row justify-content-center">
      <div class="col-md-8 table-responsive">
        <h3>Doctor (name)</h3>
        <table class="table table-striped">
          <tr>
              <th>Date</th>
              <th>Session</th>
              <th>Patient Limit</th>
              <th>Action</th> 
          </tr> 
          
          <tr>
              <td>23/12/2020</td>
              <td>6-7</td>
              <td>6</td>
              <td><a href="" class="btn btn-danger">Cancel</a></td>   
          </tr>  
          <tr>
            <td>23/12/2020</td>
            <td>6-7</td>
            <td>6</td>
            <td><a href="" class="btn btn-danger">Cancel</a></td>  
        </tr>
        <tr>
            <td>23/12/2020</td>
              <td>6-7</td>
              <td>6</td>
              <td><a href="" class="btn btn-danger">Cancel</a></td>  
      </tr>

        </table>
      </div>
    </div>
  </div>
   
 

</div>

@include('layouts.footer')
@endsection

