@extends('layouts.app')

@section('content')
    <div class="text-white text-center py-5 px-4">
        <div>
            <h2 id="header2" class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>We will take care of your beloved pet!!!</strong></h2>
            <p id="text2" class="card-title h1-responsive pt-3 mb-5 font-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
            </p>
            <a id="homebutton" class="btn btn-outline-black btn-md" onclick="window.location='{{ url('about') }}'"><i class="fas fa-clone left"></i>About Us</a>
        </div>
    </div>
@endsection
