@extends('layouts.app')
<?php
    
    $title = 'add doctor';
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
          <a href="/admin/empRegister">Employee Registration</a>
        </li>
        <!-- <li>
          <a href="/userList">Users</a>
        </li> -->
        <li>
          <a href="/admin/doctorList" class="active">Doctors</a>
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
        
        <h4><a href="/admin/doctorList" class="btn btn-warning back">Back to Doctors</a></h4>

        <div class="row justify-content-center">
            <div class="col-md-7">

               
                        <form method="POST" action="/admin/saveDoctor">
                            @csrf
                            <h3>Add New Doctor!</h3>
                            <hr>
                            <div class="form-group row">
                                <label for="doc_firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="doc_firstname" type="text" class="form-control @error('doc_firstname') is-invalid @enderror" name="doc_firstname" value="{{ old('doc_firstname') }}" required autocomplete="name" autofocus>

                                    @error('doc_firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="doc_lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="doc_lastname" type="text" class="form-control @error('doc_lastname') is-invalid @enderror" name="doc_lastname" value="{{ old('doc_lastname') }}" required autocomplete="name" autofocus>

                                    @error('doc_lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Speciality') }}</label>
    
                                <div class="col-md-6">
                                    <select id="speciality" class="form-control @error('speciality') is-invalid @enderror" name="speciality" value="{{ old('speciality') }}" required autocomplete="name" autofocus>
                                        <option value="-1">Select one</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="Psycologist">Psycologist</option>
                                        <option value="Physiologist">Physiologist</option>
                                        <option value="Heart Surgon">Heart Surgon</option>
                                    </select>
    
                                    @error('speciality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="work_hosptl" class="col-md-4 col-form-label text-md-right">{{ __('Working Hospital') }}</label>

                                <div class="col-md-6">
                                    <input id="work_hosptl" type="text" class="form-control @error('work_hosptl') is-invalid @enderror" name="work_hosptl" value="{{ old('work_hosptl') }}" required autocomplete="name" autofocus>

                                    @error('work_hosptl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="doc_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="doc_email" type="email" class="form-control @error('doc_email') is-invalid @enderror" name="doc_email" value="{{ old('doc_email') }}" required autocomplete="email">

                                    @error('doc_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="doc_phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="doc_phone_no" type="text" class="form-control @error('doc_phone_no') is-invalid @enderror" name="doc_phone_no" value="{{ old('doc_phone_no') }}" required autocomplete="name" autofocus>

                                    @error('doc_phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            

                            <div class="form-group row">
                                <label for="doc_password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="doc_password" type="password" class="form-control @error('doc_password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('doc_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary button">
                                        {{ __('Add') }}
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
