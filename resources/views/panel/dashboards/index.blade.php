@extends('layouts.panel')
@section('title', 'Welcome to Dashboard Panel')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="stats-tile">
                <div class="sale-icon">
                    <i class="icon-shopping-bag1"></i>
                </div>
                <div class="sale-details">
                    <h2>25</h2>
                    <p>Products</p>
                </div>
                <div class="sale-graph">
                    <div id="sparklineLine1"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="stats-tile">
                <div class="sale-icon">
                    <i class="icon-shopping-bag1"></i>
                </div>
                <div class="sale-details">
                    <h2>32</h2>
                    <p>Orders</p>
                </div>
                <div class="sale-graph">
                    <div id="sparklineLine2"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="stats-tile">
                <div class="sale-icon">
                    <i class="icon-check-circle"></i>
                </div>
                <div class="sale-details">
                    <h2>19</h2>
                    <p>Customers</p>
                </div>
                <div class="sale-graph">
                    <div id="sparklineLine3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 cool-12">

            <div class="card">
                <div class="card-body">
                    <!-- Row start -->
                    <div class="row gutters">											
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                            <div class="reports-summary">
                                <div class="reports-summary-block">
                                    <h5>Great Sales</h5>
                                    <h6>Overall sales of the month</h6>
                                </div>
                                <div class="reports-summary-block">
                                    <h5>35 Millions</h5>
                                    <h6>Overall earnings</h6>
                                </div>
                                <div class="reports-summary-block">
                                    <h5>27 Millions</h5>
                                    <h6>Overall revenue</h6>
                                </div>
                                <div class="reports-summary-block">
                                    <h5>67k</h5>
                                    <h6>New customers</h6>
                                </div>
                                <button class="btn btn-info stripes-btn">Generate Report</button>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                            <div class="row gutters">
                                <div class="col-12">
                                    <div class="graph-day-selection mt-2" role="group">
                                        <button type="button" class="btn active">Today</button>
                                        <button type="button" class="btn">Yesterday</button>
                                        <button type="button" class="btn">7 days</button>
                                        <button type="button" class="btn">15 days</button>
                                        <button type="button" class="btn">30 days</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div id="salesGraph" class="chart-height-xl"></div>
                                </div>
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
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Visitors</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">Export</button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="visitorsGraph" class="chart-height-md"></div>

                    <ul class="stats-list-container">
                        <li class="stats-list-item primary">
                            <div class="stats-icon">
                                <i class="icon-calendar1"></i>
                            </div>
                            <div class="stats-info">
                                <h6 class="stats-title">Week 1</h6>
                                <p class="stats-amount">25</p>
                            </div>
                        </li>
                        <li class="stats-list-item primary">
                            <div class="stats-icon">
                                <i class="icon-calendar1"></i>
                            </div>
                            <div class="stats-info">
                                <h6 class="stats-title">Week 2</h6>
                                <p class="stats-amount">32</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Orders</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">View All</button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="ordersGraph" class="chart-height-md"></div>

                    <ul class="stats-list-container">
                        <li class="stats-list-item primary">
                            <div class="stats-icon">
                                <i class="icon-archive1"></i>
                            </div>
                            <div class="stats-info">
                                <h6 class="stats-title">New</h6>
                                <p class="stats-amount">15</p>
                            </div>
                        </li>
                        <li class="stats-list-item primary">
                            <div class="stats-icon">
                                <i class="icon-truck"></i>
                            </div>
                            <div class="stats-info">
                                <h6 class="stats-title">Delivered</h6>
                                <p class="stats-amount">10</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Earnings</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">Download</button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="earningsGraph" class="chart-height-md"></div>

                    <ul class="stats-list-container">
                        <li class="stats-list-item primary">
                            <div class="stats-icon">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="stats-info">
                                <h6 class="stats-title">Today</h6>
                                <p class="stats-amount">Rp25</p>
                            </div>
                        </li>
                        <li class="stats-list-item primary">
                            <div class="stats-icon">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="stats-info">
                                <h6 class="stats-title">Yesterday</h6>
                                <p class="stats-amount">Rp18</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Recent Orders</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">Export to Excel</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table products-table">
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Ordered Date</th>
                                    <th>Product</th>
                                    <th>Delivery Status</th>												
                                    <th>Amount</th>
                                    <th>Discount</th>
                                    <th>Location</th>
                                    <th>Est Delivery Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#55589</td>
                                    <td>20/11/2020</td>
                                    <td>
                                        <img class="user" src="img/products/bag.jpeg" alt="Product Image">
                                    </td>
                                    <td>
                                        <span class="badge">Moving</span>
                                    </td>
                                    <td>Rp385.00</td>
                                    <td>30%</td>
                                    <td>Bandung, Jawa barat</td>
                                    <td>22/11/2020</td>
                                </tr>
                                <tr>
                                    <td>#23198</td>
                                    <td>23/11/2020</td>												
                                    <td>
                                        <img class="user" src="img/products/toy.jpeg" alt="Product Image">
                                    </td>
                                    <td>
                                        <span class="badge">Shipped</span>
                                    </td>
                                    <td>Rp539.00</td>
                                    <td>25%</td>
                                    <td>Garut, Jawa barat</td>
                                    <td>27/11/2020</td>
                                </tr>
                                <tr>
                                    <td>#87324</td>
                                    <td>26/11/2020</td>												
                                    <td>
                                        <img class="user" src="img/products/pencils.jpeg" alt="Product Image">
                                    </td>
                                    <td>
                                        <span class="badge">Pending</span>
                                    </td>
                                    <td>Rp671.00</td>
                                    <td>35%</td>
                                    <td>Solo, Jawa tengah</td>
                                    <td>29/11/2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="goal-container">
                <div class="goal-info">
                    <h5>Today's Goal</h5>
                    <h6>70/100</h6>
                </div>
                <div class="goal-graph">
                    <div id="todaysTarget"></div>
                    <div class="circle-one"></div>
                    <div class="circle-two"></div>
                </div>
            </div>
        </div>							
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="graph-card">
                <h6>New Customers</h6>
                <h4>2500</h4>
                <div class="graph-placeholder">
                    <div id="customersGraph"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="payments-card">
                <h6>Balance</h6>
                <h4>Rp5699.89</h4>
                <div class="custom-btn-group mt-2">
                    <button class="btn btn-outline-primary"><i class="icon-credit-card"></i>Deposit</button>
                    <button class="btn btn-primary"><i class="icon-credit-card"></i>Withdraw</button>
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
<script src="{{ asset('vendor/apex/custom/home/salesGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home/ordersGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home/earningsGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home/visitorsGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home/customersGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home/sparkline.js') }}"></script>

<!-- Circleful Charts -->
<script src="{{ asset('vendor/circliful/circliful.min.js') }}"></script>
<script src="{{ asset('vendor/circliful/circliful.custom.js') }}"></script>
@endpush