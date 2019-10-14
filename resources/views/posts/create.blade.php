@extends('layouts.app')

@section('content')
  
</br>
<div class="view">
  <!-- Default form register -->
  <form id="registerandloginform" method="post" action="{{ route('posts.store') }}">
  {{csrf_field()}}

  <div class="form-group">
    <div class="card wow fadeInRight" data-wow-delay="0.3s">
      <div class="card-body">
        <!--Header-->
        <div class="text-center">
          <h3 class="white-text">
            <i class="fas fa-user white-text"></i>Create your advertisement</h3>
          <hr class="hr-light">
        </div>
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
      <div class="md-form">
        <i class="fas fa-user prefix white-text active"></i>
        <label for="form3" class="active">Your Pet:</label>
        <input type="text" name="title" id="title" class="white-text form-control" placeholder="Comment Title">
      </div>
      </br>
      <!-- Password -->
      <div class="md-form">
      <i class="fas fa-envelope prefix white-text active"></i>
        <label for="form4">Description:</label>
        <textarea type="text" name="body" id="body" class="white-text form-control"  placeholder="Desciption"></textarea>
      </div>
      <div class="text-center mt-4">
      <button class="btn btn-primary my-4" type="submit">Submit</button>
      </div>
  </form>
<!-- Default form register -->
</div>
</div>
</div>
</div>
  
@endsection