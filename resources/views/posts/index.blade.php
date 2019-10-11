@extends('layouts.app')

@section('content')

<a class="btn btn-primary" style="margin-left: 20px; margin-top: 20px;" href="{{ route('posts.create') }}"> Create New User Comment</a>
</br>
</br>
  
    <div >
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
     
    </div>

@foreach($posts as $post)

<div class="card-columns">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">  
        <img class="card-img-top"  src="/storage/img/petcare_ad.png"> 
      </div>
        <div class="col-md-8">
            <div class="card-body">  
            <h3 class="card-title">{{$post['title']}}</h5>  
            <p class="card-text">Post Id : {{$post->id}}</p>  
            <p class="card-text"><a href="{{ route('posts.show',$post->id) }}">Expand Post</a></p>
            <p class="card-text">{{$post->body}}</p>
            </div>  
        </div>
    </div>
  </div>
</div>

@endforeach
  
@endsection