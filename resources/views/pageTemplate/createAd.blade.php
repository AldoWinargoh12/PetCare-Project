@extends('layout.app')

@section('content')
<h1>View your Ads</h1>

<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('home') }}'">View Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('about') }}'">Create Advertisement</button>

        </nav>

<p>list of ads shown here
    </p>

    <div id=AdContainer>
        <div id=AdImage>
        <img src="/storage/img/petcare_ad.png">
        </div>

        <div id=AdHeader>
            <h4>Taking care of Golden Retreiver </h4>
        </div>

        <div id=AdPrice>
            <p>$15 per day</p>
        </div>

        <div id=AdLocation>
            <p>Carlton North, Victoria</p>
        </div>
        
        <div id=AdContent>
            <p>hi everyone, i need someone to take care of my golden retreiver, Maxwell for the weekend
                he is a very energetic dog and is very playful with everyone, he is housetrained and
                knows basic commands, msg if interested</p>
        </div>

    </div>



@endsection