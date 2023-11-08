@extends('layouts.panel')
@section('title', 'Morris Graph')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Area Chart</div>
                </div>
                <div class="card-body">
                    <div id="areaChart" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">X Labels Diagonally</div>
                </div>
                <div class="card-body">
                    <div id="xLabelsDiagonally" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Day Data</div>
                </div>
                <div class="card-body">
                    <div id="dayData" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar Chart</div>
                </div>
                <div class="card-body">
                    <div id="barColors" class="chart-height"></div>
                </div>
            </div>
        </div>							
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Donut Chart</div>
                </div>
                <div class="card-body">
                    <div id="donutColors" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Donut Formatter</div>
                </div>
                <div class="card-body">
                    <div id="donutFormatter" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Negative Values</div>
                </div>
                <div class="card-body">
                    <div id="negativeValues" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar no Axis</div>
                </div>
                <div class="card-body">
                    <div id="barNoAxis" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar Chart</div>
                </div>
                <div class="card-body">
                    <div id="morrisBarChart" class="chart-height"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Stacked Bar Chart</div>
                </div>
                <div class="card-body">
                    <div id="stackedBarChart" class="chart-height"></div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Morris CSS -->
<link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}" />
@endpush

@push('script')
<!-- Morris Graphs -->
<script src="{{ asset('vendor/morris/raphael-min.js') }}"></script>
<script src="{{ asset('vendor/morris/morris.min.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/areaChart.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/xLabelsDiagonally.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/barColors.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/barNoAxis.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/dayData.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/donutColors.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/donutFormatter.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/morrisBarChart.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/negativeValues.js') }}"></script>
<script src="{{ asset('vendor/morris/custom/stackedBarChart.js') }}"></script>
@endpush