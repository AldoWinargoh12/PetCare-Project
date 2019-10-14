@extends('layouts.app')

@section('content')

<div class="bg-transparent">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">About PetCare</h1>
        <p id="abouttext"class="lead mb-0">We take care of your beloved pets while you are away.</p>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="/storage/img/aboutpic1.jpg"></div>
    </div>
  </div>
</div>

<div class="bg-transparent py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/storage/img/travel.jpg"></div>
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">When you travelling,</h2>
        <p id="abouttext" class="font-italic mb-4">Do not worry when you travel, just put an Ad and we will find a pet taker to take care of your beloved pet.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm" onclick="window.location='{{ url('createAdvertisement') }}'">Create an Ad Now!!</a>
      </div>
     
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">When you are free,</h2>
        <p id="abouttext" class="font-italic mb-4">Just choose you favourite pet to take care and play with. You got paid as well :)</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
    </div>
  </div>
</div>
@endsection
       


     

       
    
        














