@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">{{ __('Login') }}</h5>
              <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-label-group">
                  <input  type="text" id="inputEmail" class="form-control" placeholder="Email address" {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus >
                  <label for="inputemail" >Email/Username</label>
                  
                      @error('email')
                      <span  role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
                <div class="form-label-group" >
                  <input id="inputpassword" class="form-control" type="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  <label for="inputpassword" >{{ __('Password') }}</label>
                  
                    @error('password')
                      <span  role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                                
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">
                    {{ __('Remember Me') }}
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >{{ __('Login') }}</button>
                  @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                    </a>
                  @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <body>
  
  



@endsection



