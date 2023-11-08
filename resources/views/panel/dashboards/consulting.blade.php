@extends('layouts.panel')
@section('title', 'Dashboard Consulting')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <h5 class="m-0">Welcome Back, John!</h5>

            <!-- Consultants banner start -->
            <div class="consulting-banner">
                <div class="consulting-banner-bg"></div>
                <div class="consulting-body">
                    <div class="consulting-content">
                        <h4>Our consultants are online!</h4>
                        <p>Book your desired date and time to take<br />advantage of more opportunites.</p>
                    </div>
                </div>
            </div>
            <!-- Consultants banner end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-4">Monthly Schedule</h5>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">                                                
                            
                            <div class="schedule-calendar">
                                <div id="customScheduleCal"></div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Card end -->
            
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Consultants card start -->
            <div class="consulting-card">
                <div class="consulting-card-bg"></div>
                <div class="consulting-card-body">
                    <h4>Consulting</h4>
                    <p>Talk and consulting to us for better results.</p>
                    <button class="btn btn-info stripes-btn" data-bs-toggle="modal" data-bs-target="#scheduleModal">Reserve</button>                                        
                </div>
            </div>
            <!-- Consultants card end -->

            <!-- Subscription card start -->
            <div class="subscription-card">
                <div class="subscription-card-body">
                    <h4>Subscription</h4>
                    <p>You can get unlimited free services.</p>
                    <button class="btn btn-success stripes-btn">Subscribe</button>
                </div>
            </div>
            <!-- Subscription card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Appointments</div>
                </div>
                <div class="card-body">
                    <ul class="tickets-container">
                        <li>
                            <img src="{{ asset('img/user5.png') }}" class="avatar" alt="Avatar">
                            <div class="ticket-details">
                                <h6>Randi</h6>
                                <span class="ticket-time">10/02/2020 - 9:00 AM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-success">Completed</span>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/user2.png') }}" class="avatar" alt="Avatar">
                            <div class="ticket-details">
                                <h6>Umar</h6>
                                <span class="ticket-time">14/02/2020 - 9:30 AM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-info">Processing</span>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/user24.png') }}" class="avatar" alt="Avatar">
                            <div class="ticket-details">
                                <h6>Siti Anisa</h6>
                                <span class="ticket-time">14/02/2020 - 10:30 AM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-info">Processing</span>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/user12.png') }}" class="avatar" alt="Avatar">
                            <div class="ticket-details">
                                <h6>Tia Nurjanah</h6>
                                <span class="ticket-time">25/02/2020 - 11:00 AM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-danger">Pending</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Card end -->
            
        </div>
    </div>
    <!-- Row end -->
    
    <!-- Modal start -->
    <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scheduleModalLabel">Schedule a Session</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Field wrapper start -->
                    <div class="field-wrapper mb-4">
                        <input type="text" class="form-control" placeholder="Enter Name">
                        <div class="field-placeholder">Name</div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper mb-4">
                        <input type="text" class="form-control" placeholder="Enter Phone">
                        <div class="field-placeholder">Phone</div>
                    </div>
                    <!-- Field wrapper end -->

                    <!-- Field wrapper start -->
                    <div class="field-wrapper mb-0">
                        <select class="select-single js-states" title="Select Time">
                            <option>9:00 AM</option>
                            <option>9:30 AM</option>
                            <option>10:00 AM</option>
                            <option>10:30 AM</option>
                            <option>11:00 AM</option>
                            <option>11:30 AM</option>
                            <option>12:00 PM</option>
                            <option>2:00 PM</option>
                            <option>2:30 PM</option>
                            <option>3:00 PM</option>
                            <option>3:30 PM</option>
                            <option>4:00 PM</option>
                        </select>
                        <div class="field-placeholder">Select Time</div>
                    </div>
                    <!-- Field wrapper end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Reserve</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Bootstrap Select CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bs-select/bs-select.css') }}" />

<!-- Calendar CSS -->
<link rel="stylesheet" href="{{ asset('vendor/calendar/css/main.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/calendar/css/custom.css') }}" />
@endpush

@push('script')
<!-- Bootstrap Select JS -->
<script src="{{ asset('vendor/bs-select/bs-select.min.js') }}"></script>
<script src="{{ asset('vendor/bs-select/bs-select-custom.js') }}"></script>
        
<!-- Calendar JS -->
<script src="{{ asset('vendor/calendar/js/main.min.js') }}"></script>
<script src="{{ asset('vendor/calendar/custom/custom-schedule-calendar.js') }}"></script>
@endpush