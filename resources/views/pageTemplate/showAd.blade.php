@extends('layouts.app')

@section('content')
<h1>View your Ads</h1>

<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('advertisements') }}'">View Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('createAdvertisement') }}'">Create Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('live_search') }}'">Live Search</button>
        </nav>

<p>list of ads shown here
 </p>

       

       

@foreach($advertisements as $row)
    <div id=AdContainer>
        <div id=AdImage>
        <img src="/storage/img/petcare_ad.png">
        </div>

        <div id=AdHeader>
            <h4>{{$row['title']}}</h4>
        </div>

        <div id=AdPrice>
            <p>${{$row['price']}} per day</p>
        </div>

        <div id=AdLocation>
            <p>{{$row['location']}}</p>
        </div>
        
        <div id=AdContent>
            <p>{{$row['description']}}</p>
        </div>

    </div>

@endforeach




@endsection