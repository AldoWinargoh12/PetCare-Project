@extends('layouts.app')

@section('content')

<h1> Comment Section </h1>
<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('registerpets') }}'"> Pets</button>
        <button class="button buttonAdSelect" onclick="window.location='{{ url('posts') }}'">Comments</button>
      </nav>

<a class="btn btn-primary" href="{{ route('posts.create') }}"> Create New User Comment</a>
</br>
</br>


    <div >

    <div >
    </div>
  
    <div >
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
     
    </div>
  </div>

  @foreach($posts as $post)
    <div id=PostContainer>
        <div id=AdImage>
        <img src="/storage/img/petcare_ad.png">
        </div>

        <div id=PostHeader>
            <h4>{{$post['title']}}</h4>
        </div>

        <div id=PostID>
            <p>Post Id : {{$post->id}}</p>
        </div>

        <div id=PostExpand>
            <p><a href="{{ route('posts.show',$post->id) }}">Expand Post</a></p>
        </div>
        
        <div id=PostContent>
            <p>{{$post->body}}</p>
        </div>

    </div>

@endforeach
  
@endsection