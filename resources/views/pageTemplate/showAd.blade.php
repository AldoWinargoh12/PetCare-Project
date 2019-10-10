@extends('layouts.app')

@section('content')

@foreach($advertisements as $row)

<div class="card-columns">
<div class="card mb-3" style="max-width: 540px;">
<div class="row no-gutters">
<div class="col-md-4">  
    <img class="card-img-top"  src="/storage/img/petcare_ad.png"> 
    </div>
    <div class="col-md-8">
        <div class="card-body">  
        <h3 class="card-title">{{$row['title']}}</h5>  
        <p class="card-text">Price: ${{$row['price']}} per day</p>  
        <p class="card-text">Location: {{$row['location']}}</p>
        <p class="card-text">Description: {{$row['description']}}</p>
        <a href="#" class="btn btn-info">See Add</a>  
        </div>  
    </div>
</div>
</div>
</div>

@endforeach




@endsection
