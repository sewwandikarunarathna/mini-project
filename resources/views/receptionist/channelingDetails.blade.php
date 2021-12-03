@extends('layouts.app')
<?php
    
    $title = 'Channeling Details';
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
        <a href="/recep/patientDetails">Patient Details</a>
      </li>
      <li>
      <a href="/recep/channelDet" class="active">Channeling Details</a>

      </li>
      <li>
        <a href="/recep/changePassword">Change Password</a>
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
    
    <!-- <h3>Choose a Date!</h3> -->
  
            <form method="POST" action="/searchSessionRecep" role="search">
                    @csrf

                    
                    <div class="form-group row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Choose a Date') }}</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control" name="date" value="">

                           
                        </div>
                    </div>
        <!-- 
                    <div class="form-group row">
                        <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Choose a Doctor') }}</label>

                        <div class="col-md-6">
                            <input id="doctor" type="text" class="form-control" name="doctor" value="">

                            
                        </div>
                    </div> -->

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                           <input type="submit" class="btn btn-primary col-md-6" value="View details">
                        </div>

                    </div> 
                </form>
    
                <div class="row justify-content-center">
                <div class="col-md-10 table-responsive">
                  @if(isset($details))
                     
                  <h2>Sessions for {{ $query }}</h2>
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Session</th>
                              <th>Doctor</th>
                              <th>Patient Limit</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($details as $datas)
                          <tr>
                              <td>{{$datas->session}}</td>
                              <td>{{$datas->doctor}}</td>
                              <td>{{$datas->patient_limit}}</td>
                              <td>
                                @if($datas->status)
                                <button class="btn btn-warning">Filled</button>
                                @else
                                <button class="btn btn-success">Available</button>
                                @endif
                              </td>
                              
                              <td>
                                @if($datas->status)
                                <a href=""><input type="submit" class="btn btn-primary col-md-6" value="Book" disabled></a>
                                @else
                                <a href="/recep/makeApptRecep"><input type="submit" class="btn btn-primary col-md-6" value="Book"></a>
                                @endif
                              </td>
                              
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  @endif
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