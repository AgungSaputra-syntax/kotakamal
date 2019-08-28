@extends('layouts.app')

@section('content')
<div class="body-login">
    <div class="container">
        <div class="login">
            <div class="img-login">
                <img src="img/coin.png">
            </div>
            <div class="form-login">
                <div class="top-login">
                    <h3 class="text-log">Login</h3>
                    <a href="index.html"><i class="fa fa-2x fa-times"></i></a> 
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="box">
                        <div class="inputBox1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <label for="email" class=""></label>
                        </div>

                        <div class="inputBox2">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password" class=""></label>
                        </div>
                    </div>

                    <div class="form-check remember">
                        <div class="warning">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- <div class="form-group row mb-0"> -->
                        <div class="">
                            <button type="submit" class="btn btn-danger">
                                {{ __('Login') }}
                            </button>
                        </div>
                    <!-- </div> -->
                    <div class="text-bawah-login">
                        <p class="text-daftar">Belum punya akun? daftar <a href="register.html" >disini.</a></p>
                        <p class="text-masuk">Atau masuk dengan </p>
                        <div class="link-masuk">
                            <button type="button" class="btn btn-fb"><img src="{{ asset('img/fb.png') }}" class="login-fb"></button>
                            <button type="button" class="btn btn-g"><img src="{{ asset('img/g.png') }}" class="login-fb"></button>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
