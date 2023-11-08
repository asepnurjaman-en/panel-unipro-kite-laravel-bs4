@extends('layouts.panel')
@section('title', 'Gallery')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- Gallery start -->
                    <div class="baguetteBoxThree gallery">
                        <!-- Row start -->
                        <div class="row  g-2">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img1.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img1.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img2.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img2.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img3.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img3.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img4.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img4.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img5.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img5.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img6.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img6.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img7.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img7.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img8.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img8.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img9.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img9.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img10.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img10.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img11.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img11.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="img/stock/img12.jpg" class="effects">
                                    <img src="{{ asset('img/stock/img12.jpg') }}" class="img-fluid" alt="Uni Pro Admin">
                                    <div class="overlay">
                                        <span class="expand">+</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                    <!-- Gallery end -->

                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
    
</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Gallery css -->
<link rel="stylesheet" href="{{ asset('vendor/gallery/gallery.css') }}">
@endpush

@push('script')
<!-- Gallery JS -->
<script src="{{ asset('vendor/gallery/baguetteBox.js') }}"></script>
<script src="{{ asset('vendor/gallery/plugins.js') }}"></script>
<script src="{{ asset('vendor/gallery/custom-gallery.js') }}"></script>
@endpush