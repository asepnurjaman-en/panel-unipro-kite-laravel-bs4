@extends('layouts.panel')
@section('title', 'Component Alert')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                    A simple light alert—check it out!
                    </div>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Holy guacamole! You should check in on some of those fields below.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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