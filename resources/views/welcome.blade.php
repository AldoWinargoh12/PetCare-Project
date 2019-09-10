
@extends('layout')

@section('title')
    WELCOME PAGE
@endsection

@section('content')
    <h1>first {!!$foo!!} website</h1>
  
        
    <ul>
        @foreach ($tasks as $task) 
            <li>{{$task}}  </li>
        @endforeach  
    </ul>
@endsection
