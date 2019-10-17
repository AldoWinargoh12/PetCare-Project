@extends('layouts.app')

@section('content')
<h1 class="h1-responsive font-weight-bold wow text-center" data-wow-delay="0.3s">Your Comment</h1>
</br>
    <div >
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
     
    </div>

@foreach($posts as $post)

<div class="card-columns d-inline align-middle" id="adcol">
<div class="card mb-3" style="min-width: 300px; max-width: 675px; text-align:center;"">
<div class="row no-gutters">
<div class="col-md-4 align-self-center" >  
    <img class="card-img-top" id="adpic"  src="/storage/img/petcare_ad.png"> 
      </div>
        <div class="col-md-8">
            <div class="card-body">  
            <h3 id="adTitle" class="card-title">{{$post['title']}}</h5>  
            <p id="adBody" class="card-text">Post Id : {{$post->id}}</p>  
            <p id="adBody" class="card-text"><a href="{{ route('posts.show',$post->id) }}">Expand Post</a></p>
            <p id="adBody" class="card-text">{{$post->body}}</p>
            </div>  
        </div>
    </div>
  </div>
</div>
</br>
@endforeach
<a class="btn btn-primary" style="margin-left: 20px; margin-top: 20px;" href="{{ route('posts.create') }}"> Create New User Comment</a>

@endsection