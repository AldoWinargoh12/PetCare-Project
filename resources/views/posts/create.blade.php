@extends('layouts.app')

@section('content')
  
<div class="view">
  <!-- Default form register -->
  <form id="registerandloginform" class="text-center border border-light p-5" method="post" action="{{ route('posts.store') }}">
  {{csrf_field()}}

    <p class="h4 mb-4">User Comments</p>
    <div >
      @if ($errors->any())
        <div >
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      </br>
      @endif
      <!-- Comment Title -->
      <input type="text" name="title" id="title" class="form-control" placeholder="Comment Title">
      </br>
      <!-- Password -->
      <textarea id="body" type="text" name="body" class="form-control" placeholder="Desciption"></textarea>

      <button class="btn btn-primary my-4" type="submit">Submit</button>
  </form>
<!-- Default form register -->
</div>
  
@endsection