<!DOCTYPE html>
<html lang="en"></head>
<head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" href="{{asset('LoginAssets/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="{{asset('LoginAssets/css/util.css')}}">
        <link rel="stylesheet" href="{{asset('LoginAssets/css/main.css')}}">
        <!--===============================================================================================-->
    </head>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url('{{ asset('LoginAssets/banner3.jpg') }}');">
                <span class="login100-form-title-1">
                    Sign Up
                </span>
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="wrap-input100 validate-input m-b-7" data-validate="Name is required">
                    <span class="label-input100">Name</span>
                    <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter your name" id="name" value="{{ old('name') }}" required>
                </div>
                @error('name')
                        <p style="color:red; font-style:italic; font-size:11px; margin-top:-5px">{{ $message }}</p>
                @enderror

                <div class="wrap-input100 validate-input m-b-7" data-validate="Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter your email" id="email" value="{{ old('email') }}" required>
                </div>
                @error('email')
                        <p style="color:red; font-style:italic; font-size:11px; margin-top:-5px">{{ $message }}</p>
                @enderror

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" required>
                </div>
                @error('password')
                    <p style="color:red; font-style:italic; font-size:11px; margin-top:-5px">{{ $message }}</p>
                @enderror
                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password confirmation is required">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100 @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                @error('password_confirmation')
                    <p style="color:red; font-style:italic; font-size:11px; margin-top:-5px">{{ $message }}</p>
                @enderror

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn"> Sign Up </button>
                </div>
                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('login') }}">
                        Already have an account?
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>