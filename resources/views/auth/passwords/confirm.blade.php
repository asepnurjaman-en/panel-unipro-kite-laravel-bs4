@extends('layouts.panel-auth')
@section('title', 'Lockscreen')
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
                
                <div id="carouselLockScreen" class="carousel slide carousel-login" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselLockScreen" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselLockScreen" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselLockScreen" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-quotes">
                                <p>“The happiest people don’t have the best of everything, they just make the best of everything.”</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-quotes">
                                <p>“The only way to do great work is to love what you do. If you haven’t found it yet, keep looking. Don’t settle.”</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-quotes">
                                <p>“Think big and don’t listen to people who tell you it can’t be done. Life’s too short to think small.”</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselLockScreen" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselLockScreen" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login-wrapper">
                <form method="POST" action="{{ route('password.confirm') }}" class="was-validated">
                    @csrf
                    <div class="login-screen">
                        <div class="login-body">
                            <a href="reports.html" class="login-logo">
                                <img src="{{ asset('img/logo.svg') }}" alt="Uni Pro Admin">
                            </a>
                            <h6>Welcome back,<br>Please enter your password to unlock the screen!</h6>
                            <div class="field-wrapper mb-3">
                                <input type="password" name="password" required>
                                <div class="field-placeholder">Enter Password</div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="actions">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-danger">Unlock</button>
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
