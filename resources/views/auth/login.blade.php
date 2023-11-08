@extends('layouts.panel-auth')
@section('title', 'Login')
@section('content')
<!-- *************
    ************ Login container start *************
************* -->
<div class="login-container">

    <div class="container-fluid h-100">

    <!-- Row start -->
    <div class="row g-0 h-100">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login-about">
                <div class="slogan">
                    <span>Design</span>
                    <span>Made</span>
                    <span>Simple.</span>
                </div>
                <div class="about-desc">
                    UniPro a data dashboard is an information management tool that visually tracks, analyzes and displays key performance indicators (KPI), metrics and key data points to monitor the health of a business, department or specific process.
                </div>
                <a href="{{ route('register') }}" class="know-more">Know More <img src="{{ asset('img/right-arrow.svg') }}" alt="Uni Pro Admin"></a>

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login-wrapper">
                <form method="POST" action="{{ route('login') }}" class="was-validated">
                    @csrf
                    <div class="login-screen">
                        <div class="login-body">
                            <a href="#" class="login-logo">
                                <img src="{{ asset('img/logo.svg') }}" alt="iChat">
                            </a>
                            <h6>Welcome back,<br>Please login to your account.</h6>
                            <div class="field-wrapper">
                                <input type="email" name="email" required autofocus>
                                <div class="field-placeholder">Email ID</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="field-wrapper">
                                <input type="password" name="password" required>
                                <div class="field-placeholder">Password</div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="actions">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="login-footer">
                            <span class="additional-link">
                                No Account? 
                                <a href="{{ route('register') }}" class="btn btn-light">
                                    {{ __('Create new') }}
                                </a>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Row end -->

    </div>
</div>
<!-- *************
    ************ Login container end *************
************* -->
@endsection
