@extends('layouts.panel')
@section('title', 'Form Date Time Picker')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control custom-daterange">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Custom Date Range</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control custom-daterange2">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Custom Date Range Auto</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                    </div>
                    <!-- Row end -->

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Datepicker</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-week-numbers">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Week Numbers</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-iso-week-numbers">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">ISO Week Numbers</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-time">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Datepicker Time</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-time-24">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Datepicker 24 Hours Time</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-time-seconds">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Datepicker Time Seconds</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                    </div>
                    <!-- Row end -->

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Datepicker Range</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-auto-apply">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Date Range Auto Apply</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-week-numbers">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Range Week Numbers</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-iso-week-numbers">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>													
                                <div class="field-placeholder">Range ISO Week Numbers</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-time">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Datepicker Range Time</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-time-24">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Datepicker Range 24 Hours Time</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-right">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Date Range Opens Right</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-left">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Date Range Opens Left</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-top-right">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Date Range Opens Top Right</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker-range-top-left">
                                    <span class="input-group-text">
                                        <i class="icon-calendar1"></i>
                                    </span>
                                </div>
                                <div class="field-placeholder">Date Range Opens Top Left</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                    </div>
                    <!-- Row end -->

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