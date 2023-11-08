@extends('layouts.panel')
@section('title', 'Dashboard Reports')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-475">
                        <div class="p-0">
                            <div id="salesGraph"></div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="earnings-detail">
                                <div class="earnings-info">
                                    <p class="text-lighter">Weekly Earnings</p>
                                    <h5 class="text-info">Rp9500</h5>
                                </div>
                                <button class="earnings-icon">
                                    <i class="icon-download"></i>
                                </button>
                            </div>

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="image-stats-tile">
                                        <div class="image-stats-box">
                                            <img src="{{ asset('img/stock/img11.jpg') }}" class="img-fluid" alt="Food">
                                        </div>
                                        <div class="img-stats-details">
                                            <p>Appetizer</p>
                                            <h5>Rp2550.00</h5>
                                        </div>
                                        <div class="weekly-graph-details">
                                            <div id="sparklineBar1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="image-stats-tile">
                                        <div class="image-stats-box">
                                            <img src="{{ asset('img/stock/img13.jpg') }}" class="img-fluid" alt="Food">
                                        </div>
                                        <div class="img-stats-details">
                                            <p>Rolls</p>
                                            <h5>Rp4250.00</h5>
                                        </div>
                                        <div class="weekly-graph-details">
                                            <div id="sparklineBar2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="image-stats-tile mb-0">
                                        <div class="image-stats-box">
                                            <img src="{{ asset('img/stock/img14.jpg') }}" class="img-fluid" alt="Food">
                                        </div>
                                        <div class="img-stats-details">
                                            <p>Pizza</p>
                                            <h5>Rp3720.00</h5>
                                        </div>
                                        <div class="weekly-graph-details">
                                            <div id="sparklineBar3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="stats-tile3">
                        <div class="sale-icon3">
                            <img src="{{ asset('img/svg/customer.svg') }}" alt="Customers">
                        </div>
                        <div class="sale-details3">
                            <h3>8,500</h3>
                            <p>New Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="stats-tile3">
                        <div class="sale-icon3">
                            <img src="{{ asset('img/svg/box.svg') }}" alt="Customers">
                        </div>
                        <div class="sale-details3">
                            <h3>1,650</h3>
                            <p>New Products</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">								

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-475">
                        <div class="p-0">
                            <div id="ordersGraph"></div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="earnings-detail">
                                <div class="earnings-info">
                                    <p class="text-lighter">Top Rated Items</p>
                                    <h5 class="text-danger">375</h5>
                                </div>
                                <button class="earnings-icon red">
                                    <i class="icon-download"></i>
                                </button>
                            </div>

                            <div class="table-responsive">
                                <table class="table products-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Amount</th>
                                            <th>Discount</th>
                                            <th>Ratings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img class="media-avatar" src="{{ asset('img/products/bag.jpeg') }}" alt="Product Image">
                                                    <div class="media-box-body text-truncate">
                                                        <a href="#">Leather Bag</a>
                                                        <p>#FLM0582</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Rp385.00</td>
                                            <td><span class="badge">25%</span></td>
                                            <td>
                                                <div class="rating-block">
                                                    <div class="rate3"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img class="media-avatar" src="{{ asset('img/products/pencils.jpeg') }}" alt="Product Image">
                                                    <div class="media-box-body text-truncate">
                                                        <a href="#">Pencils</a>
                                                        <p>#FLM0568</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Rp63.00</td>
                                            <td><span class="badge">50%</span></td>
                                            <td>
                                                <div class="rating-block">
                                                    <div class="rate3"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img class="media-avatar" src="{{ asset('img/products/toy.jpeg') }}" alt="Product Image">
                                                    <div class="media-box-body text-truncate">
                                                        <a href="#">Wooden Toy</a>
                                                        <p>#FLM0760</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Rp176.00</td>
                                            <td><span class="badge">20%</span></td>
                                            <td>
                                                <div class="rating-block">
                                                    <div class="rate4"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="stats-tile3">
                        <div class="sale-icon3">
                            <img src="{{ asset('img/svg/income.svg') }}" alt="Sales">
                        </div>
                        <div class="sale-details3">
                            <h3>4.5M</h3>
                            <p>Today Sales</p>
                        </div>
                        <div id="sparklineLine1" class="stats-graph3"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="stats-tile3">
                        <div class="sale-icon3">
                            <img src="{{ asset('img/svg/commisions.svg') }}" alt="Commisions">
                        </div>
                        <div class="sale-details3">
                            <h3>2,500</h3>
                            <p>Commisions</p>
                        </div>
                        <div id="sparklineLine2" class="stats-graph3"></div>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Earnings</div>
                </div>
                <div class="card-body pt-0">
                    
                    <div id="sales2"></div>

                    <!-- Row start -->
                    <div class="row gutters justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                            <div class="monthly-earnings">
                                <p>Today Earnings</p>
                                <h4>Rp2,059</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                            <div class="monthly-earnings">
                                <p>Weekly Earnings</p>
                                <h4>Rp4,275</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                            <div class="monthly-earnings">
                                <p>Monthly Earnings</p>
                                <h4>Rp9,680</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">							
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="report-card">
                <div class="graph">
                    <div id="sparklineLine3"></div>
                </div>
                <div class="report-card-body">
                    <p>Create weekly reports and use them to perform tasks related to your finances.</p>
                    <button class="btn btn-success stripes-btn">Create</button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="followers-card">
                <p>Followers</p>
                <h3>69,697</h3>
                <button class="btn btn-danger stripes-btn">Reports</button>
                <img src="{{ asset('img/followers.jpg') }}" class="img-fluid" alt="Followers">
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="sales-card">
                <div class="sales-card-header">
                    <p>Revenue</p>
                    <h3>750M</h3>
                </div>
                <div class="sales-card-body">
                    <div class="graph">
                        <div id="revenue"></div>
                    </div>

                    <div class="earnings-badge-container">
                        <div class="earnings-badge">
                            <p>Net Profit</p>
                            <h4>980M</h4>
                        </div>
                        <div class="earnings-badge">
                            <p>Revenue</p>
                            <h4>750M</h4>
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
@endpush

@push('script')
<!-- Apex Charts -->
<script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/reports/sales.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/reports/sales2.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/reports/revenue.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/reports/orders.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/reports/sparkline.js') }}"></script>

<!-- Rating JS -->
<script src="{{ asset('vendor/rating/raty.js') }}"></script>
<script src="{{ asset('vendor/rating/raty-custom.js') }}"></script>
@endpush