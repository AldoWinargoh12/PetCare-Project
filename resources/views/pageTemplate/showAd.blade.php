@extends('layouts.app')

@section('content')
<h1 class="h1-responsive font-weight-bold wow text-center" data-wow-delay="0.3s">List of Advertisements</h1>

@foreach($advertisements as $row)
<div class="card-columns d-inline align-middle" id="adcol">
<div class="card mb-3" style="width: 680px;">
<div class="row no-gutters">
<div class="col-md-4 align-self-center" >  
    <img class="card-img-top" id="adpic"  src="/storage/img/petcare_ad.png"> 
    </div>
    <div class="col-md-8">
        <div class="card-body">  
        <h3 id="adTitle" class="card-title">{{$row['title']}}</h5>  
        <p id="adBody" class="card-text">Price: ${{$row['price']}} per day</p>  
        <p id="adBody" class="card-text">Location: {{$row['location']}}</p>
        <p id="adBody" class="card-text">Description: {{$row['description']}}</p>
        <a href="#" class="btn btn-info">See Add</a>  
        </div>  
    </div>
</div>
</div>
</div>

@endforeach




@endsection
