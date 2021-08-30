@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    

@section('content')

<div class="hero-reg">
            <div class="form-box-reg">
                <div class="btn-regf">
                    <div id="btn-regf"></div>
                    
                    <button type="button" class="btn-regf-tog"><a href="{{ route('login') }}" >Log In</a></button>
                    <button type="button" class="btn-regf-tog" ><a href="{{ route('register') }}" >Register</a></button>

                </div>

                <div class="social-icons-regf">

                <a href="{{route('login.facebook')}}"> <img src="assets/login-reg-img/loginfb.png" alt=""></a>
                    <a href="{{route('login.google')}}"> <img src="assets/login-reg-img/logingp.png" alt=""></a>

                </div>

                <form method="POST" action="{{ route('register') }}" class="input-group-regf">
                @csrf

                    <input id="name" type="text" class="input-field-regf @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <input type="text" id="email"  class="input-field-regf @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="input-field-regf @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password" >
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password-confirm" type="password" class="input-field-regf" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                    <div class="pt-4"></div>
                    <button type="submit" class="submit-btn-regf">Register</button>

                    <button type="submit" class="submit-btn-regf"><a href="{{ route('login.google') }}" >Continue With Google</a></button>
                    <button type="submit" class="submit-btn-regf"><a href="{{ route('login.facebook') }}" >Continue With  Facebook</a></button>
                </form>
            </div>
        </div>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
</body>
</html>