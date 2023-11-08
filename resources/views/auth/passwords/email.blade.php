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
                    UniPro a data dashboard is an information management tool that visually tracks, analyzes and displays key performance indicators (KPI), metrics and key data points to monitor the health of a business, department or specific process.
                </div>
                <a href="reports.html" class="know-more">Know More <img src="{{ asset('img/right-arrow.svg') }}" alt="Uni Pro Admin"></a>

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login-wrapper">
                <form method="POST" action="{{ route('password.email') }}" class="was-validated">
                    @csrf
                    <div class="login-screen">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="login-body pb-4">
                            <a href="reports.html" class="login-logo">
                                <img src="{{ asset('img/logo.svg') }}" alt="Uni Pro Admin">
                            </a>
                            <h6>In order to access your UniPro account, please enter the email id you provided during the registration process.</h6>
                            <div class="field-wrapper mb-3">
                                <input type="email" name="email" required autofocus placeholder="Enter your emial id">
                                <div class="field-placeholder">Email ID</div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="actions">
                                <button type="submit" class="btn btn-danger w-100">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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
