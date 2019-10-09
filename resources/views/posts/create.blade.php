@extends('layouts.app')

@section('content')
  
  <div >
    <div>
     <h1> Create User Comments </h1>
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
      <div id=createAd>
          <form method="post" action="{{ route('posts.store') }}">
          {{csrf_field()}}
          <div class="form-group">
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title Of Comment" />
          </div>
          <div class="form-group">
            <textarea id="body" type="text" name="body" class="form-control" placeholder="Enter Description of Ad" ></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" />
          </div>
          </form>
          </div>
    </div>
  </div>

  
@endsection