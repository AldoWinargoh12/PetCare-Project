@extends('layouts.app')

@section('content')

  <br />
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

<!-- Full Page Intro -->
<div class="view">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row mt-5">
                  <!--Grid column-->
                  <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Create Ad right now! </h1>
                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                    <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Put an advertisement for someone to take care fo your pet when you are away. When you go travelling,
                    business trip, or even too lazy too take care of your pet.
                    </h6>
                    <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s" onclick="window.location='{{ url('rules') }}'">Learn more</a>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6 col-xl-5 mb-4">
                    <!--Form-->
                    <form method="post" action="{{url('advertisements')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                      <div class="card-body">
                        <!--Header-->
                        <div class="text-center">
                          <h3 class="white-text">
                            <i class="fas fa-user white-text"></i>Create your advertisement</h3>
                          <hr class="hr-light">
                        </div>
                        <!--Body-->
                        <div class="md-form">
                          <i class="fas fa-user prefix white-text active"></i>
                          <label for="form3" class="active">Your Pet:</label>
                          <input type="text" name="title" id="form3" class="white-text form-control" placeholder="Enter your title...">
                        </div>
                        <div class="md-form">
                          <i class="fas fa-envelope prefix white-text active"></i>
                          <label for="form2" class="active">Price:</label>
                          <input type="text" name="price" id="form2" class="white-text form-control" placeholder="Enter your price...">
                        </div>
                        <div class="md-form">
                        <i class="fas fa-envelope prefix white-text active"></i>
                          <label for="form4">Location:</label>
                          <input  type="text" name="location" id="form4" class="white-text form-control" placeholder="Enter your location...">
                        </div>
                        <div class="md-form">
                        <i class="fas fa-envelope prefix white-text active"></i>
                          <label for="form4">Description:</label>
                          <textarea type="text" name="description" id="form5" class="white-text form-control" placeholder="Enter your description..."></textarea>
                        </div>
                        <div class="text-center mt-4">
                          <button type="submit" class="btn btn-indigo">Create Advertisement</button>
                          <hr class="hr-light mb-3 mt-4">
                          <div class="inline-ul text-center">
                            <a class="p-2 m-2 tw-ic">
                              <i class="fab fa-twitter white-text"></i>
                            </a>
                            <a class="p-2 m-2 li-ic">
                              <i class="fab fa-linkedin-in white-text"> </i>
                            </a>
                            <a class="p-2 m-2 ins-ic">
                              <i class="fas fa-instagram white-text"> </i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    </form>
                    <!--/.Form-->
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->

@endsection