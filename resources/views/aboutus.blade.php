@extends('layouts.app')
<?php
    
    $title = 'aboutus page';
    $page = 'aboutus';
 ?>

 <style>
    .section{
       background-image:linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://media.istockphoto.com/photos/doctor-in-hospital-background-with-copy-space-picture-id949812160?k=6&m=949812160&s=612x612&w=0&h=q1UlHWfwdbvURzOeX01M1-vdfdaOz9uX54-7QK1TLoQ=');
       background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height:auto;
        width: 100%;
    }

    h2{
        text-align: center;
        padding: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    form{
        margin: 35px 0px;
        border: 0px solid #ccc;
        box-shadow: -2px 5px 30px 10px black;
        border-radius: 25px;
        padding: 10px 0px;
        background-color:rgba(32,32,32,0.3);
        
    }
    .para{
        height: 300px;
        font-size: 30px;
        margin: 35px 0px;
        border: 0px solid #ccc;
        box-shadow: -2px 5px 30px 10px black;
        border-radius: 25px;
        padding: 10px 10px;
        background-color:rgba(32,32,32,0.3);
    }
    hr{
        border: 2px solid #f1f1f1;
        
    }
    label{
        font-weight: 600;
    }
    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=date]:focus, select:focus {
        background-color: #d8d8d8;
    }
    .button{
        width: 100%;
    }
    h6{
        padding: 4px 0px;
    }
    h6 a{
        color: white;
        text-decoration: underline;
    }
    h6 a:hover{
        text-decoration: none;
    }
 </style>
@section('content')
<div class="section">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2>about us</h2>

            <h4>We are providing a better medical service in our channeling center.</h4>
                    <p class="para">We are a leading brand in private healthcare in Sri Lanka. Our people are some of the most dedicated, skilled and experienced healthcare providers and medical experts in the country. They are adept 
                        at using many of the most cutting-edge medical equipment and technology in the industry. </p>
             </div>   
           
        </div>
</div>
@include('layouts.footer')

@endsection
