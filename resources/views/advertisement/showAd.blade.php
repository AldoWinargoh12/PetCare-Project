@extends('layouts.app')

@section('content')
<h1 class="h1-responsive font-weight-bold wow text-center" data-wow-delay="0.3s">List of Advertisements</h1>

@foreach($advertisements as $row)
<div class="card-columns d-inline align-middle" id="adcol">
<div class="card mb-3" style="min-width: 300px; max-width: 675px; text-align:center;">
<div class="row no-gutters">
<div class="col-md-4 align-self-center" >  
    <img class="card-img-top" id="adpic"  src="/storage/img/petcare_ad.png"> 
    </div>
    <div class="col-md-8"> 
        <div class="card-body">  
        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col" colspan="2">{{$row['title']}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Price: ${{$row['price']}} per day</td>
      <td>Location: {{$row['location']}}</td>
    </tr>
    <tr>
      <td>Starting Date: {{$row['startdate']}}</td>
      <td>Duration: {{$row['duration']}} day</td>
    </tr>
    <tr>
      <td colspan="2" style="overflow: hidden;">Description: {{$row['description']}}</td>
    </tr>
    <tr>
      <td colspan="2">Created By: {{$row['username']}}</td>
    </tr>
  </tbody>
</table>
        </div>  
    </div>
</div>
</div>
</div>

@endforeach




@endsection
