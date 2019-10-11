
@extends('layouts.app')

@section('content')      
    
<div class="view">
  <!-- Default form register -->
  <form id="registerandloginform" class="text-center border border-light p-5" class="form-signin" method="POST" action="{{ route('login') }}">
  {{csrf_field()}}

    <p class="h4 mb-4">Sign in</p>
        <!-- E-mail/Username -->
        <input type="text" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus >
        <label for="inputEmail">E-mail/Username</label>
        @error('email')
          <span  role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
        <!-- Password -->
        <input id="inputpassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label for="inputpassword">E-mail/Username</label>

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

      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
        @if (Route::has('password.request'))
          <a  href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        @endif
      <!-- Register -->
      <p>Not a member?
        <a href="#" onclick="window.location='{{ url('register') }}'">Sign up</a>
      </p>

      <!-- Social login -->
      <p>or sign in with:</p>
      <a type="button" class="btn-floating btn-fb btn-sm">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a>

  </form>
<!-- Default form register -->
</div>

@endsection



