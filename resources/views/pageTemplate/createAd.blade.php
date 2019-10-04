@extends('layout.app')

@section('content')
<h1>create your Advertisement</h1>

<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('advertisements') }}'">View Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('createAdvertisement') }}'">Create Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('live_search') }}'">Live Search</button>
        </nav>

  <br />
  <h3 aling="center">fill your Advertisement Info here</h3>
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

<div id=createAd>
  <form method="post" action="{{url('advertisements')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="Enter Title Of Ad" />
   </div>
   <div class="form-group">
    <input type="text" name="price" class="form-control" placeholder="Enter the price" />
   </div>
   <div class="form-group">
    <input type="text" name="location" class="form-control" placeholder="Enter The location" />
   </div>
   <div class="form-group">
    <textarea id="desc" type="text" name="description" class="form-control" placeholder="Enter Description of Ad" ></textarea>
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
  </div>
</div>

@endsection