@extends('layouts.panel')
@section('title', 'Calendar Day Grid')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <div id="dayGrid"></div>

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
<!-- Calendar CSS -->
<link rel="stylesheet" href="{{ asset('vendor/calendar/css/main.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/calendar/css/custom.css') }}" />
@endpush

@push('script')
<!-- Calendar JS -->
<script src="{{ asset('vendor/calendar/js/main.min.js') }}"></script>
<script src="{{ asset('vendor/calendar/custom/daygrid-calendar.js') }}"></script>
@endpush