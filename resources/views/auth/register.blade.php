@extends('layouts.app')

@section('content')               

          
<div class="view">
<!-- Default form register -->
<form id="registerandloginform" class="text-center p-5" method="post" action="{{url('register')}}">
{{csrf_field()}}

<p class="h4 mb-4">Sign up</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input id="firstname" type="text" class="form-control  @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="First name">
        @error('email')
            <span  role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col">
        <!-- Last name -->
        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus placeholder="Last name">
        @error('lastname')
            <span  role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<!-- E-mail -->
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="E-mail">
@error('email')
    <span  role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</br>
<!-- Username -->
<input id="username" type="text"  class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus  placeholder="Username">
@if ($errors->has('username'))
    <span >
        <strong>{{ $errors->first('username') }}</strong>
    </span>
@endif
</br>
<!-- Password -->
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    At least 8 characters and 1 digit
</small>
@error('password')
    <span  role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<!-- Confirm Passrowd -->
<input id="password-confirm" type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">

<!-- Sign up button -->
<button class="btn btn-primary my-4" type="submit">Sign Up</button>

<!-- Social register -->
<p>or sign up with:</p>

<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

<hr>

<!-- Terms of service -->
<p>By clicking
    <em>Sign up</em> you agree to our
    <a target="_blank">terms of service</a>

</form>
<!-- Default form register -->
</div>
@endsection
