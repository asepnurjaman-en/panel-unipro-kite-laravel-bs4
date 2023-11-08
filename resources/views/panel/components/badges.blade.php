@extends('layouts.panel')
@section('title', 'Component Badges')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary">Primary</span>
                    <span class="badge rounded-pill bg-secondary">Secondary</span>
                    <span class="badge rounded-pill bg-success">Success</span>
                    <span class="badge rounded-pill bg-danger">Danger</span>
                    <span class="badge rounded-pill bg-warning">Warning</span>
                    <span class="badge rounded-pill bg-info">Info</span>
                    <span class="badge rounded-pill bg-light">Light</span>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <span class="badge bg-primary">Primary</span>
                    <span class="badge bg-secondary">Secondary</span>
                    <span class="badge bg-success">Success</span>
                    <span class="badge bg-danger">Danger</span>
                    <span class="badge bg-warning">Warning</span>
                    <span class="badge bg-info">Info</span>
                    <span class="badge bg-light">Light</span>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary">
                        Messages <span class="badge rounded-pill bg-light">9</span>
                    </button>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                    <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                    <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                    <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                    <h5>Example heading <span class="badge bg-secondary">New</span></h5>
                    <h6>Example heading <span class="badge bg-secondary">New</span></h6>
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
@endpush

@push('script')
@endpush