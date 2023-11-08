@extends('layouts.panel-auth')
@section('title', 'Register')
@section('content')
<!-- *************
    ************ Login container start *************
************* -->
<div class="login-container">

    <div class="container-fluid h-100">
    
    <!-- Row start -->
    <div class="row no-gutters h-100">
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
                <a href="{{ route('login') }}" class="know-more">Know More <img src="{{ asset('img/right-arrow.svg') }}" alt="Uni Pro Admin"></a>

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login-wrapper">
                <form method="POST" action="{{ route('register') }}" class="was-validated">
                    @csrf
                    <div class="login-screen">
                        <div class="login-body">
                            <a href="#" class="login-logo">
                                <img src="{{ asset('img/logo.svg') }}" alt="Uni Pro Admin">
                            </a>
                            <h6>Welcome to UniPro dashboard,<br>Create your account.</h6>
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
                            <div class="field-wrapper mb-3">
                                <input type="password" name="password_confirmation" required>
                                <div class="field-placeholder">Confirm Password</div>
                            </div>
                            <div class="actions">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="login-footer">
                            <span class="additional-link">
                                Have an account? 
                                <a href="{{ route('login') }}" class="btn btn-light">
                                    {{ __('Login') }}
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
