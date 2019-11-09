
@extends('layouts.app')

@section('content')      
    
<div class="view">
  <!-- Default form register -->
  <form id="registerandloginform" class="text-center p-5" class="form-signin" method="POST" action="{{ route('login') }}">
  {{csrf_field()}}

    <p class="h4 mb-4">Sign in</p>
        <!-- E-mail/Username -->
        <label for="inputEmail">E-mail/Username</label>
        <input type="text" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus >
        @error('email')
          <span  role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
</br>
        <!-- Password -->
        <label for="inputpassword">Password</label>
        <input id="inputpassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      
        <div class="d-flex justify-content-around">
          <div>
            <!-- Remember me -->
            <div class="form-check">
              <input  type="checkbox" name="remember" id="remember" class="form control {{ old('remember') ? 'checked' : '' }}" class="custom-control-input" id="customCheck1">
              <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
            </div>
          </div>
          <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
          </div>
        </div>

      <button class="btn btn-outline-info btn-rounded my-4 waves-effect z-depth-0" type="submit">Sign in</button>
      </br>
      <!-- Register -->
      <p>Not a member?
        <a href="#" onclick="window.location='{{ url('register') }}'">Sign up</a>
      </p>

  </form>
<!-- Default form register -->
</div>

@endsection



