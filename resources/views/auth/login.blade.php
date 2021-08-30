@extends('layouts.app')
<head>
<link rel="stylesheet" href="./assets/css/style.css">
</head>
@section('content')

<div class="hero-login">

    <div class="form-box-login">

        <div class="btn-loginf">
            
            <div id="btn-logf"></div>
            
            <button type="button" class="btn-logf-tog">Log In</button>
            <button type="button" class="btn-logf-tog" ><a href="{{ route('register') }}" >Register</a></button>

        </div>

        <div class="social-icons-logf">

                    <a href="{{route('login.facebook')}}"> <img src="assets/login-reg-img/loginfb.png" alt=""></a>
                    <a href="{{route('login.google')}}"> <img src="assets/login-reg-img/logingp.png" alt=""></a>

        </div>


        <form method="POST" action="{{ route('login') }}" class="input-group-logf">
            @csrf
                <input type="text" id="email"  class="input-field-logf @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password" type="password" class="input-field-logf @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password" >
                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                <input type="checkbox"  class="check-box-logf" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span>Remember me</span>

                <button type="submit" class="submit-btn-logf">Log In</button>
        </form>
    </div>

</div>





@endsection
