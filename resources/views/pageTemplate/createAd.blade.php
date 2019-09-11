@extends('layout.app')

@section('content')
<h1>create your Advertisement</h1>

<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('createAd') }}'">View Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('showAd') }}'">Create Advertisement</button>

        </nav>

<p>create your Advertisement
    </p>
@include('messages')

{!!Form::open(['action'=>'PagesController@store','method'=>'POST'])!!}
<div>
{{Form::label('title','Title')}}
{{Form::text('title','',['class'=>'form-control'])}}
<br>
{{Form::label('Username','username')}}
{{Form::text('username','')}}
<br>
{{Form::label('body','Body')}}
{{Form::textarea('body','')}}
<br>
{{Form::submit('SUBMIT')}}

</div>

{!!Form::close()!!}


@endsection