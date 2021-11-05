@extends('layouts.app')
<?php
    
    $title = 'home page';
    $page = 'home';
 ?>
 <style>
    /*banner*/
    header{
        height: 90%;
        width: 100%;  
    }
    .img-area1, .img-area2, .img-area3, .img-area4, .img-area5{
        height:550px;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .img-area1{
        background-image: url('https://wallpaperboat.com/wp-content/uploads/2019/06/medical-10.jpg');
    }
    .img-area2{
        background-image: url('https://media.istockphoto.com/photos/m-here-for-you-picture-id1027587952?k=6&m=1027587952&s=612x612&w=0&h=JqHFlboLsl-43kUmPeAnphQJMdZNe1A9YArUK20xEVM=');
    }
    .img-area3{
        background-image: url('https://st2.depositphotos.com/1518767/5392/i/600/depositphotos_53923403-stock-photo-smiling-doctors-all-standing-together.jpg');
    }
    .img-area4{
        background-image: url('https://img.freepik.com/free-photo/woman-talks-with-client-shows-something_85574-14818.jpg?size=626&ext=jpg');   
    }
    .img-area5{
        background-image: url('https://booxi-live-wp-storage.storage.googleapis.com/AdobeStock_949061862.png');
    }

    .img-txt1, .img-txt2, .img-txt3, .img-txt4, .img-txt5{
        position: relative;
        top: 50%;
        left: 45%;
        transform: translate(-50%, -50%);
        font-weight: bolder;
        color: black;
  text-shadow: 2px 2px 4px white;
    }   
    
    .img-area-heading1, .img-area-heading2, .img-area-heading3, .img-area-heading4, .img-area-heading5{
        animation-name: anime;
        animation-duration: 1s;
    }
    .img-area-par1, .img-area-par2, .img-area-par3, .img-area-par4, .img-area-par5{
        animation-name: anime;
        animation-duration: 1s;
        animation-delay: .5s;
        animation-fill-mode: backwards;
    }

    .lead{
        font-style: italic;
        font weight: bold;
    }
    @keyframes anime{
        0%{
            transform: translateX(-100px);
            opacity: 1;
        }
        100%{
            transform: translateX(0);
            opacity: 0; 
        }
    }
    /*end of banner*/
    /*welcome text*/
.welcome-txt{
    clear: both;
    text-align: center;
    height: auto;
   /* width: 100%;*/
    
    margin-top: auto;
    
   
    font-weight: bolder;
}

.welcome-txt .row{
    min-height: 300px;
}
/*end 0f welcome text*/

 </style>
@section('content')
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                       <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Signup</a>
                        @endif
                    @endauth
                </div> 
            @endif

            
        </div> -->

        <div class="img-area1 pic">
      <div class="img-txt1 text-md-right text-center">
      <h1 class="img-area-heading1 display-4">Best Medicare Service</h1>
       <p class="img-area-par2 lead display-5">Our passion is to provide patient's convienience</p>
   </div>
    </div>
    <div class="img-area2 pic">
      <div class="img-txt2 text-md-right text-center">
      <h1 class="img-area-heading2 display-4">We're here to care for your health</h1>
       <p class="img-area-par2 lead display-5">Health care is a basic human right</p>
    </div>
    </div>
    <div class="img-area3 pic">
      <div class="img-txt3 text-md-right text-center">
      <h1 class="img-area-heading3 display-4">The Best Service With Professional Doctors</h1>
       <p class="img-area-par3 lead display-5">We will support you for your healthy life</p>
    </div>
    </div>
    <div class="img-area4 pic">
      <div class="img-txt4 text-md-right text-center">
      <h1 class="img-area-heading4 display-4">Get an Efficient Service from Our Receptionists </h1>
       <p class="img-area-par4 lead display-5">We're commited to solve your health problems</p>
    </div>
    </div>
    <div class="img-area5 pic">
      <div class="img-txt5 text-md-right text-center">
      <h1 class="img-area-heading5 display-4">Stay Healthy and Happy</h1>
       <p class="img-area-par5 lead display-5">Stay home and make choices what you want</p>
    </div>
    </div>

    <div class="welcome-txt container">
      <div class="row align-items-center">
        <div class="display-3 col-md-12">Welcome to Outpatient Channeling Center</div>
      </div>
    </div>

   @include('layouts.footer')
@endsection

@section('scripts')

<script type="text/javascript">
    
 
</script>
<script src="{{asset('js/custom.js')}}"></script>
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
@endsection