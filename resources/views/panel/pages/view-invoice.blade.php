@extends('layouts.panel')
@section('title', 'Invoice')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header-lg">
                    <h4>Create Invoice</h4>
                    <div class="text-end">
                        <a href="create-invoice.html" class="btn btn-primary">Create Invoice</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="invoice-container">

                        <div class="invoice-header">
                            <!-- Row start -->
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                    <a href="index.html" class="invoice-logo">
                                        <img src="{{ asset('img/logo.svg') }}" alt="Meow Admin Dashboard">
                                    </a>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                    <address class="text-right">
                                        Meow LLC, 2880 St. <br>
                                        Rose Pkwy, Suite 700<br>
                                        Ujung Berung, Bandung(BDG), 94102
                                    </address>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>

                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="invoice-details">
                                    <address class="m-0">
                                        Ojan Surojan,<br>
                                        1691 Oakdale Ave,<br>
                                        Sukamanah, Garut(GRT), 94124
                                    </address>

                                    <div class="invoice-num">
                                        <div>Invoice - #009</div>
                                        <div>January 10th 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->

                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-12">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Items</th>
                                                <th>Product ID</th>
                                                <th>Hours</th>
                                                <th>Amount (Net)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6>Creative Wordpress Template</h6>
                                                    <p>Create quality mockups and prototypes and Design mobile-based features.</p>
                                                </td>
                                                <td>
                                                    <h6>#651</h6>
                                                </td>
                                                <td>
                                                    <h6>40</h6>
                                                </td>
                                                <td>
                                                    <h6>$450.00</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Front-End Development</h6>
                                                    <p>Using markup languages like HTML to create user-friendly web pages.</p>
                                                </td>
                                                <td>
                                                    <h6>#429</h6>
                                                </td>
                                                <td>
                                                    <h6>60</h6>
                                                </td>
                                                <td>
                                                    <h6>$550.00</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                                <td>
                                                    <p class="m-0">Subtotal</p>
                                                    <p class="m-0">Discount</p>
                                                    <p class="m-0">VAT</p>
                                                    <h5 class="mt-2 text-danger">Total USD</h5>
                                                </td>
                                                <td>
                                                    <p class="m-0">$1000.00</p>
                                                    <p class="m-0">$10.00</p>
                                                    <p class="m-0">$5.00</p>
                                                    <h5 class="mt-2 text-danger">$1015.00</h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Row end -->

                        <!-- Row start -->
                        <div class="row gutters">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-start">
                                    <button class="btn btn-primary">Download</button>
                                    <button class="btn btn-light ms-1">Print</button>
                                </div>
                            </div>

                        </div>
                        <!-- Row end -->
                    
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
<!-- Bootstrap Select CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bs-select/bs-select.css') }}"/>

<!-- Date Range CSS -->
<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}"/>
@endpush

@push('script')
<!-- Bootstrap Select JS -->
<script src="{{ asset('vendor/bs-select/bs-select.min.js') }}"></script>
<script src="{{ asset('vendor/bs-select/bs-select-custom.js') }}"></script>

<!-- Date Range JS -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>
@endpush