@extends('layouts.app')
<?php
    
    $title = 'update employee';
    $page = '';
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
  .area h4{
      text-align: right;
      padding: 5px 20px;
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


    
    form{
        margin: 35px 0px;
        border: 0px solid #ccc;
        box-shadow: -2px 5px 30px 10px black;
        border-radius: 25px;
        padding: 10px 0px;
        background-color:rgba(32,32,32,0.3);
        
    }
    hr{
        border: 2px solid #f1f1f1;
        
    }
    label{
        font-weight: 600;
    }
    
    .button{
        width: 100%;
    }
   
   
   
 </style>
@section('content')
<div class="wrapper"> 
    <nav class="sidebar">
      <ul class="lisst-unstyled components">
        <li class="">
          <a href="/admin/empRegister" class="active">Employee Registration</a>
        </li>
        <!-- <li>
          <a href="/admin/userList">Users</a>
        </li> -->
        <li>
          <a href="/admin/doctorList">Doctors</a>
        </li>
        <li>
          <a href="/admin/patientList">Patients</a>
        </li>
        <li>
          <a href="/admin/changePassword">Change Password</a>
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
        
        <h4><a href="/admin/empRegister" class="btn btn-warning back">Back to Employees</a></h4>

        <div class="row justify-content-center">
            <div class="col-md-7">

               
                        <form method="POST" action="/admin/updateeachemp">
                            @csrf
                            <h3>Update Employee Details!</h3>
                            <hr>
                            <div class="col-md-6">
                            <input type="hidden" class="form-control" name="id" value="{{ $upemp->id }}">

                           
                            </div>
                            <div class="form-group row">
                                <label for="emp_firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="emp_firstname" type="text" class="form-control" name="emp_firstname" value="{{$upemp->firstname}}">

                                   
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="emp_lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="emp_lastname" type="text" class="form-control" name="emp_lastname" value="{{$upemp->lastname}}">

                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="emp_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="emp_email" type="email" class="form-control" name="emp_email" value="{{$upemp->email}}">

                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="emp_nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC Number') }}</label>

                                <div class="col-md-6">
                                    <input id="emp_nic" type="text" class="form-control" name="emp_nic" value="{{$upemp->nic}}">

                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="emp_phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="emp_phone_no" type="text" class="form-control" name="emp_phone_no" value="{{$upemp->phone_no}}">

                                   
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary button">
                                        {{ __('Update') }}
                                    </button>

                                </div>
                            </div>
                            
                        </form>
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
