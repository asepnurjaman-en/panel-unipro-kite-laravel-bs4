@extends('layouts.panel')
@section('title', 'Vector Map')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Markers on World Map</div>
                </div>
                <div class="card-body">
                    <div id="world-map-markers" class="chart-height-xl"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">World Map</div>
                </div>
                <div class="card-body">
                    <div id="world-map-gdp" class="chart-height-xl"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Asia</div>
                </div>
                <div class="card-body">
                    <div id="mapAsia" class="chart-height-xl"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Denmark</div>
                </div>
                <div class="card-body">
                    <div id="mapDenmark" class="chart-height-xl"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Region Selection</div>
                </div>
                <div class="card-body">
                    <div id="regionSelection" class="chart-height-xl"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
@endpush

@push('script')
<!-- jVector Maps -->
<script src="{{ asset('vendor/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/asia-mill.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/world-mill-en.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/gdp-data.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/dk-mill.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/asia-merc.js') }}"></script>

<!-- Custom JVector Maps -->
<script src="{{ asset('vendor/jvectormap/custom/world-map-markers.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/custom/regions-selection.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/custom/custom-denmark.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/custom/map-asia.js') }}"></script>
<script src="{{ asset('vendor/jvectormap/custom/world-map-gdp.js') }}"></script>
@endpush