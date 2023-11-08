@extends('layouts.panel-auth')
@section('title', 'Reset Password')
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
                    UniPro is an intelligent and communications tool, built for teams. It provides an integrated platform that makes team communication easy and efficient. 
                </div>
                <a href="reports.html" class="know-more">Know More <img src="{{ asset('img/right-arrow.svg') }}" alt="Uni Pro Admin"></a>

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login-wrapper">
                <form method="POST" action="{{ route('password.update') }}" class="was-validated">
                    @csrf
                    <div class="login-screen">
                        <div class="login-body pb-4">
                            <a href="reports.html" class="login-logo">
                                <img src="{{ asset('img/logo.svg') }}" alt="Uni Pro Admin">
                            </a>
                            <h6>In order to reset your password, please enter email you have registered and set new password.</h6>
                            <div class="field-wrapper mb-3">
                                <input type="text" name="email" required autofocus>
                                <div class="field-placeholder">Enter Email</div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="field-wrapper">
                                <input type="password" name="password" required>
                                <div class="field-placeholder">New Password</div>
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
                                <button type="submit" class="btn btn-danger ms-auto">Reset</button>
                            </div>
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
