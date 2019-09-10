@extends('layouts.app')

@section('content')


                <div>{{ __('Register') }}</div>

                <div >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- first name and last name  -->
                        
                        <div >
                            <label for="firstname" >{{ __('First Name') }}</label>

                            <div >
                                <input id="firstname" type="text"  @error('First Name') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" autofocus>

                                @error('FirstName')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div >
                            <label for="lastname" >{{ __('Last Name') }}</label>

                            <div >
                                <input id="lastname" type="text"  @error('lastname') is-invalid @enderror name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>

                                @error('lastname')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- email address  -->
                        <div >
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="email" type="email" c @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- username  -->
                        <div >
                            <label for="name" >{{ __('Username') }}</label>
                            <div >
                                <input id="username" type="text" {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))
                                    <span >
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- password and confirm password  -->
                        <div >
                            <label for="password" >{{ __('Password') }}</label>

                            <div >
                                <input id="password" type="password"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password">

                                @error('password')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div >
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <div >
                                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div >
                            <div >
                                <button type="submit" c>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            
@endsection
