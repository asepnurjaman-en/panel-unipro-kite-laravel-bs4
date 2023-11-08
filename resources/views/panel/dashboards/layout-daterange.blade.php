@extends('layouts.panel')
@section('title', 'Layout Date Range')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Breadcrumb container start -->
    <div class="breadcrumb-container">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="index.html">Dashboards</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Layout Breadcrumb</li>
                    </ol>
                </nav>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- Top Actions - DateRange and Buttons -->
                <div class="d-flex justify-content-end">
                    <!-- Field wrapper start -->
                    <div class="field-wrapper m-0">
                        <div class="input-group">
                            <input type="text" class="form-control custom-daterange2">
                            <span class="input-group-text">
                                <i class="icon-calendar1"></i>
                            </span>
                        </div>
                    </div>
                    <!-- Field wrapper end -->
                    <a href="#" class="btn btn-info"><i class="icon-download1"></i> Reports</a>
                </div>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Breadcrumb container end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Card Header</div>
                </div>
                <div class="card-body">
                    <!-- Place your content here -->
                </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Date Range CSS -->
<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}">
@endpush

@push('script')
<!-- Date Range JS -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>
@endpush