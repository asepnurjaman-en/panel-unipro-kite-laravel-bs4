@extends('layouts.panel')
@section('title', 'Apex Graph')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Stacked Area Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-area-stack-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Candlestick Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-candlestick-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Column Stack Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-column-stack-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Column Stack Graph Full Height</div>
                </div>
                <div class="card-body">
                    <div id="basic-column-stack-graph-fullheight"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Stacked Bar Graph Full Width</div>
                </div>
                <div class="card-body">
                    <div id="basic-bar-stack-graph-full-width"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Area Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-area-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Spline Area Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-area-spline-graph"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Stacked Bar Graph Negative Values</div>
                </div>
                <div class="card-body">
                    <div id="basic-bar-negative-values"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-bar-graph" class="primary-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar Graph Grouped</div>
                </div>
                <div class="card-body">
                    <div id="basic-bar-graph-grouped"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Stacked Bar Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-bar-stack-graph"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Column Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-column-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Column Graph With Datatables</div>
                </div>
                <div class="card-body">
                    <div id="basic-column-graph-datalables"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Basic Line Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-line-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Line with Data Labels</div>
                </div>
                <div class="card-body">
                    <div id="line-with-data-labels"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Dashed Line Chart</div>
                </div>
                <div class="card-body">
                    <div id="stepLineChart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Donut Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-donut-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Donut Graph Gradient</div>
                </div>
                <div class="card-body">
                    <div id="basic-donut-graph-gradient"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Donut Graph Monochrome</div>
                </div>
                <div class="card-body">
                    <div id="basic-donut-graph-monochrome"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Donut Graph Monochrome Gradient</div>
                </div>
                <div class="card-body">
                    <div id="basic-donut-graph-monochrome-gradient"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Pie Graph</div>
                </div>
                <div class="card-body">
                    <div id="basic-pie-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Pie Graph Gradient</div>
                </div>
                <div class="card-body">
                    <div id="basic-pie-graph-gradient"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Pie Graph Monochrome</div>
                </div>
                <div class="card-body">
                    <div id="basic-pie-graph-monochrome"></div>
                </div>
            </div>
        </div>						
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Pie Graph Monochrome Gradient</div>
                </div>
                <div class="card-body">
                    <div id="basic-pie-graph-monochrome-gradient"></div>
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
<!-- Apex Charts -->
<script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
<!-- Area Graphs -->
<script src="{{ asset('vendor/apex/examples/area/basic-area-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/area/basic-area-graph-spline.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/area/basic-area-graph-stacked.js') }}"></script>
<!-- Bar Graphs -->
<script src="{{ asset('vendor/apex/examples/bar/basic-bar-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/bar/basic-bar-graph-grouped.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/bar/basic-bar-stack-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/bar/basic-bar-stack-graph-full-width.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/bar/basic-bar-negative-values.js') }}"></script>
<!-- Candlest ') }}Graphs -->
<script src="{{ asset('vendor/apex/examples/candlestick/basic-candlestick-graph.js') }}"></script>
<!-- Column Graphs -->
<script src="{{ asset('vendor/apex/examples/column/basic-column-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/column/basic-column-graph-datalables.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/column/basic-column-stack-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/column/basic-column-stack-graph-fullheight.js') }}"></script>
<!-- Line Graphs -->
<script src="{{ asset('vendor/apex/examples/line/basic-line-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/line/line-with-data-labels.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/line/stepline.js') }}"></script>
<!-- Donut Graphs -->
<script src="{{ asset('vendor/apex/examples/pie/basic-donut-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/pie/basic-donut-graph-gradient.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/pie/basic-donut-graph-monochrome-gradient.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/pie/basic-donut-graph-monochrome.js') }}"></script>
<!-- Pie Graphs -->
<script src="{{ asset('vendor/apex/examples/pie/basic-pie-graph.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/pie/basic-pie-graph-gradient.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/pie/basic-pie-graph-monochrome.js') }}"></script>
<script src="{{ asset('vendor/apex/examples/pie/basic-pie-graph-monochrome-gradient.js') }}"></script>
@endpush