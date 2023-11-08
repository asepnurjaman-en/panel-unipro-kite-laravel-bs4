@extends('layouts.panel')
@section('title', 'Dashboard Saas')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12">

            <!-- Dashboard header start -->
            <div class="dashboard-header">
                <div class="dashboard-header-content">

                    <!-- Top Actions - DateRange and Buttons -->
                    <div class="d-flex justify-content-end">
                        <!-- Field wrapper start -->
                        <div class="field-wrapper m-0">
                            <div class="input-group">
                                <input type="text" class="form-control custom-daterange2">
                                <span class="input-group-text">
                                    <i class="icon-calendar1"></i>
                                </span>
                            </div>
                            <div class="field-placeholder">Select Date</div>
                        </div>
                        <!-- Field wrapper end -->
                        <a href="#" class="btn"><i class="icon-download1"></i> <span>Reports</span></a>
                    </div>

                    <!-- Welcome Title -->
                    <div class="welcome-title">
                        <h1>Welcome to <span>UniPro</span>
                            <span class="winner-icon">
                                <img src="{{ asset('img/trophy.svg') }}" alt="trophy">
                            </span>
                        </h1>
                    </div>

                    <!-- Sales Tiles COntainer -->
                    <div class="sales-tile-container">
                        <div class="sales-tile">
                            <h1>21</h1>
                            <h6>Sales</h6>
                        </div>
                        <div class="sales-tile">
                            <h1>35</h1>
                            <h6>Orders</h6>
                        </div>
                        <div class="sales-tile">
                            <h1>60</h1>
                            <h6>Products</h6>
                        </div>
                        <div class="sales-tile">
                            <h1>29</h1>
                            <h6>Signups</h6>
                        </div>
                        <div class="sales-tile">
                            <h1>78</h1>
                            <h6>Reviews</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard header end -->

        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Weekly Sales</div>
                </div>
                <div class="card-body">
                    <div id="sales"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Revenue</div>
                </div>
                <div class="card-body">
                    <div id="revenue"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Statistics</div>
                </div>
                <div class="card-body">
                    <ul class="statistics">
                        <li>
                            <span class="stat-icon">
                                <i class="icon-eye1"></i>
                            </span>
                            A new ticket opened.
                        </li>
                        <li>
                            <span class="stat-icon">
                                <i class="icon-thumbs-up1"></i>
                            </span>
                            That's A great idea!
                        </li>
                        <li>
                            <span class="stat-icon">
                                <i class="icon-star2"></i>
                            </span>
                            Tell us what you think.
                        </li>
                        <li>
                            <span class="stat-icon">
                                <i class="icon-shopping-bag1"></i>
                            </span>
                            A new item sold.
                        </li>
                        <li>
                            <span class="stat-icon">
                                <i class="icon-check-circle"></i>
                            </span>
                            Design approved.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Todo's</div>
                </div>
                <div class="card-body">
                    <div class="todo-container">
                        <ul class="todo-body">
                            <li class="todo-list done">
                                <div class="todo-info">
                                    <span class="dot blue"></span>
                                    <p>Team Meeting</p>
                                    <p class="dt">@ 9:30 AM</p>
                                </div>
                            </li>												
                            <li class="todo-list done">
                                <div class="todo-info">
                                    <span class="dot orange"></span>
                                    <p>Interview</p>
                                    <p class="dt">@ 11:30 AM</p>
                                </div>
                            </li>
                            <li class="todo-list done">
                                <div class="todo-info">
                                    <span class="dot yellow"></span>
                                    <p>Product Launch</p>
                                    <p class="dt">@ 12:30 PM</p>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot blue"></span>
                                    <p>Team Meeting</p>
                                    <p class="dt">@ 2:30 PM</p>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot green"></span>
                                    <p>Code Review</p>
                                    <p class="dt">@ 5:00PM</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Top Rated Items</div>
                </div>
                <div class="card-body">

                    <div class="top-items-container">
                        <div id="topRatedItems" class="carousel carousel-fade slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/stock/img9.jpg') }}" class="img-fluid top-item-img" alt="...">
                                    <div class="top-item-details">
                                        <h6>Coffee Crunch</h6>
                                        <div class="rating-block">																
                                            <div class="rate2"></div>
                                            <div class="rating-count">(97)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/stock/img10.jpg') }}" class="img-fluid top-item-img" alt="...">
                                    <div class="top-item-details">
                                        <h6>Fruit Salad</h6>
                                        <div class="rating-block">
                                            <div class="rate4"></div>
                                            <div class="rating-count">(25)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/stock/img9.jpg') }}" class="img-fluid top-item-img" alt="...">
                                    <div class="top-item-details">
                                        <h6>Vegetable Salad</h6>
                                        <div class="rating-block">																
                                            <div class="rate3"></div>
                                            <div class="rating-count">(43)</div>
                                        </div>
                                    </div>
                                </div>
                          </div>
                            <a class="carousel-control-prev" href="#topRatedItems" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" href="#topRatedItems" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
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
<!-- Date Range CSS -->
<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}">
@endpush

@push('script')
<!-- Date Range JS -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>

<!-- Apex Charts -->
<script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/saas/sales.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/saas/revenue.js') }}"></script>

<!-- Rating JS -->
<script src="{{ asset('vendor/rating/raty.js') }}"></script>
<script src="{{ asset('vendor/rating/raty-custom.js') }}"></script>
@endpush