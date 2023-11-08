@extends('layouts.panel')
@section('title', 'Account Settings')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header-lg">
                    <h4>Account Settings</h4>
                </div>
                <div class="card-body">

                    <div class="row gutters">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="row gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <img src="{{ asset('img/user1.png') }}" class="img-fluid change-img-avatar" alt="Image">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                    <div id="dropzone-sm" class="mb-4">
                                        <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

                                            <div class="dz-message needsclick">
                                                <button type="button" class="dz-button">Change Image.</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="First name">
                                        <div class="field-placeholder">First  Name</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="Last name">
                                        <div class="field-placeholder">Last  Name</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="Email">
                                        <div class="field-placeholder">Email</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="Phone number">
                                        <div class="field-placeholder">Phone</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="Address">
                                        <div class="field-placeholder">Address</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="City">
                                        <div class="field-placeholder">City</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="State">
                                        <div class="field-placeholder">State</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="Zip code">
                                        <div class="field-placeholder">Zip Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                            <option>Indonesia</option>
                                            <option>Singapore</option>
                                            <option>Papua</option>
                                            <option>Malaysia</option>
                                            <option>Maroco</option>
                                            <option>Japan</option>
                                            <option>England</option>
                                            <option>Brazil</option>
                                        </select>
                                        <div class="field-placeholder">Country</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="password" class="form-control" placeholder="Enter Password">
                                        <div class="field-placeholder">Password</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="account-settings-block">
                                <div class="settings-block">
                                    <div class="settings-block-title">Change Plan</div>
                                    <div class="settings-block-body">
                                        <div class="pricing-chnage-plan">
                                            <a href="#" class="active-plan">
                                                <h5>$29</h5>
                                                <h6>Basic</h6>
                                            </a>
                                            <a href="#">
                                                <h5>$59</h5>
                                                <h6>Business</h6>
                                            </a>
                                            <a href="#">
                                                <h5>$99</h5>
                                                <h6>Enterprise</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings-block">
                                    <div class="settings-block-title">Other Settings</div>
                                    <div class="settings-block-body">
                                        <div class="list-group">
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>Show desktop notifications</div>
                                                <div class="form-switch">
                                                    <input class="form-check-input" type="checkbox" id="showNotifications">
                                                    <label class="form-check-label" for="showNotifications"></label>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>Show email notifications</div>
                                                <div class="form-switch">
                                                    <input class="form-check-input" type="checkbox" id="showEmailNotifications" checked>
                                                    <label class="form-check-label" for="showEmailNotifications"></label>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>Show chat notifications</div>
                                                <div class="form-switch">
                                                    <input class="form-check-input" type="checkbox" id="showChatNotifications">
                                                    <label class="form-check-label" for="showChatNotifications"></label>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>Show purchase history</div>
                                                <div class="form-switch">
                                                    <input class="form-check-input" type="checkbox" id="showPurchaseNotifications">
                                                    <label class="form-check-label" for="showPurchaseNotifications"></label>
                                                </div>
                                            </div>                                                                
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>Show orders</div>
                                                <div class="form-switch">
                                                    <input class="form-check-input" type="checkbox" id="showOrders">
                                                    <label class="form-check-label" for="showOrders"></label>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>Show alerts</div>
                                                <div class="form-switch">
                                                    <input class="form-check-input" type="checkbox" id="showAlerts">
                                                    <label class="form-check-label" for="showAlerts"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary mb-3">Save Settings</button>
                        </div>
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
<!-- Uploader CSS -->
<link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.min.css') }}" />

<!-- Bootstrap Select CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bs-select/bs-select.css') }}" />
@endpush

@push('script')
<!-- Dropzone JS -->
<script src="{{ asset('vendor/dropzone/dropzone.min.js') }}"></script>

<!-- Bootstrap Select JS -->
<script src="{{ asset('vendor/bs-select/bs-select.min.js') }}"></script>
<script src="{{ asset('vendor/bs-select/bs-select-custom.js') }}"></script>
@endpush