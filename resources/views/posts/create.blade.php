@extends('layouts.app')

@section('content')
  
  <div >
    <div>
      Create User Comments
    </div>
    <div >
      @if ($errors->any())
        <div >
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('posts.store') }}">
            <div >
                @csrf
                <label for="title">Title:</label>
                <input type="text"  name="title" id="title" />
            </div>
            <div >
                <label for="body">Comment:</label>
                <textarea name="body" id="body" ></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
@endsection