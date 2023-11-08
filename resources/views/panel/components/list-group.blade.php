@extends('layouts.panel')
@section('title', 'Component List Group')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <ul class="list-group m-0">
                        <li class="list-group-item">List Item Text</li>
                        <li class="list-group-item">List Item Text</li>
                        <li class="list-group-item">List Item Text</li>
                    </ul>
                </div>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <ul class="list-group m-0">
                        <li class="list-group-item active">List Item Text Active</li>
                        <li class="list-group-item">List Item Text</li>
                        <li class="list-group-item">List Item Text</li>
                    </ul>
                </div>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <ul class="list-group m-0">
                        <li class="list-group-item disabled">List Item Text Disabled</li>
                        <li class="list-group-item">List Item Text</li>
                        <li class="list-group-item">List Item Text</li>
                    </ul>
                </div>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <div class="list-group m-0">
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            List Item Link
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">List Item Link</a>
                        <a href="#" class="list-group-item list-group-item-action">List Item Link</a>
                    </div>
                </div>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <div class="list-group m-0">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            List Item Link Active
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">List Item Link</a>
                        <a href="#" class="list-group-item list-group-item-action">List Item Link</a>
                    </div>
                </div>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <div class="list-group m-0">
                        <a href="#" class="list-group-item list-group-item-action disabled" aria-current="true">
                            List Item Link Disabled
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">List Item Link</a>
                        <a href="#" class="list-group-item list-group-item-action">List Item Link</a>
                    </div>
                </div>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <ul class="list-group m-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          List Item With Badge
                          <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            List Item With Badge
                          <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            List Item With Badge
                          <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <ul class="list-group m-0">
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            List Item With Checkbox
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            List Item With Checkbox
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            List Item With Checkbox
                        </li>
                    </ul>
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