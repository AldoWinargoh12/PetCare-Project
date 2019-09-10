@extends('layout')



@section('content')
<h1>create posts</h1>
    {!!Form ::open(['action' => 'PagesController@about','method' => 'POST' ])!!}
        <div>
            {{Form::label('firstname','First Name')}}
            {{Form::text('title','')}}
            <br>
            {{Form::label('LastName','Last Name')}}
            {{Form::text('username','')}}
            <br>
            {{Form::label('body','Body')}}
            {{Form::textarea('body','')}}
            <br>
            {{Form::submit('SUBMIT')}}



        </div>
    {!!Form::close()!!}    

@endsection

       


     

       
    
        














