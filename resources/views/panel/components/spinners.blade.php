@extends('layouts.panel')
@section('title', 'Component Spinners')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-border text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-border text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-border text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="text-center">
                        <div class="spinner-grow text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-grow text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-grow text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-grow text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-grow text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-grow text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-grow text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="spinner-grow text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="custom-btn-group">
                        <button class="btn btn-primary" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span class="visually-hidden">Loading...</span>
                        </button>
                        <button class="btn btn-primary" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>

                        <button class="btn btn-primary" type="button" disabled>
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            <span class="visually-hidden">Loading...</span>
                        </button>
                        <button class="btn btn-primary" type="button" disabled>
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>

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