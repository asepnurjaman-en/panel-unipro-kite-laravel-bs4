@extends('layouts.panel')
@section('title', 'Component Toasts')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Display fixed top</div>
                </div>
                <div class="card-body">
                    <div class="notify-notifications clearfix">
                        <div id="messages"></div>
                        <div class="custom-btn-group">
                            <button type="button" class="btn btn-primary add-message">Default</button>
                            <button type="button" class="btn btn-secondary add-sticky-message">Sticky</button>
                            <button type="button" class="btn btn-info add-info-message">Info</button>
                            <button type="button" class="btn btn-danger add-danger-message">Danger</button>
                            <button type="button" class="btn btn-warning add-warning-message">Warning</button>
                            <button type="button" class="btn btn-success add-success-message">Success</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Display top right</div>
                </div>
                <div class="card-body">
                    <div class="notify-notifications clearfix">
                        <div id="notes"></div>
                        <div class="custom-btn-group">
                            <button type="button" class="btn btn-primary add-noti">Default</button>
                            <button type="button" class="btn btn-secondary add-sticky-noti">Sticky</button>
                            <button type="button" class="btn btn-info add-info-noti">Info</button>
                            <button type="button" class="btn btn-danger add-danger-noti">Danger</button>
                            <button type="button" class="btn btn-warning add-warning-noti">Warning</button>
                            <button type="button" class="btn btn-success add-success-noti">Success</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Notify -->
<link rel="stylesheet" href="{{ asset('vendor/notify/notify-flat.css') }}" />
@endpush

@push('script')
<!-- Notify js -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('vendor/notify/notify.js') }}"></script>
<script src="{{ asset('vendor/notify/notify-custom.js') }}"></script>
@endpush