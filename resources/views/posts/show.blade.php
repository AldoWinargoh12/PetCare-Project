@extends('layouts.app')

@section('content')

  <div >
    <div >
      View Comments for user
      <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
    </div>
    <div>
      <div>
        <div>
          <div>
            <strong>Title:</strong>
              {{ $post->title }}
          </div>
        </div>
        <div>
          <div>
            <strong>Comment:</strong>
              {{ $post->body }}
          </div>
        </div>

      </div>
      
    </div>
  </div>
@endsection