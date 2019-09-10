@extends('layout')



@section('content')
<h1>create posts</h1>
    
    {!!Form ::open(['url' => 'PagesController@login','method' => 'POST' ])!!}
        @csrf
        <label for="username">{{ __('USERNAME') }}</label>
            <input id="username" type="username"  name="username" required autocomplete="username" autofocus>
            @error('username')
                <span>
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        <br>
        <label for="password">{{ __('PASSWORD') }}</label>
            <input id="password" type="password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password" autofocus>
            @error('password')
                <span>
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        <button type="submit">
        {{ __('Login') }}
        </button>
        {!!Form::close()!!}  
@endsection