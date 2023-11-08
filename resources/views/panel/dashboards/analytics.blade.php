@extends('layouts.panel')
@section('title', 'Dashboard Analytics')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="stats-tile2">
                <div class="sale-icon">
                    <i class="icon-user1"></i>
                </div>
                <div class="sale-details">
                    <h2>21</h2>
                    <p>Customers</p>
                </div>
            </div>
            <div class="stats-tile2">
                <div class="sale-icon">
                    <i class="icon-shopping-bag1"></i>
                </div>
                <div class="sale-details">
                    <h2>67</h2>
                    <p>Orders</p>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="stats-tile2">
                <div class="sale-icon">
                    <i class="icon-tonality"></i>
                </div>
                <div class="sale-details">
                    <h2>95</h2>
                    <p>Revenue</p>
                </div>
            </div>
            <div class="stats-tile2">
                <div class="sale-icon">
                    <i class="icon-box"></i>
                </div>
                <div class="sale-details">
                    <h2>18</h2>
                    <p>Products</p>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Targets</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">Today</button>
                        <button type="button" class="btn">Weekly</button>
                        <button type="button" class="btn">Monthly</button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="targets"></div>
                </div>
            </div>

        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Orders</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">Today</button>
                        <button type="button" class="btn">Weekly</button>
                        <button type="button" class="btn">Monthly</button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="ordersGraph"></div>
                    <div class="stats-tiles-list">
                        <div class="tiles-list">
                            <img src="{{ asset('img/food/pizza.svg') }}" alt="Pizzas">
                            <h2>120</h2>
                            <p>Pizzas</p>
                        </div>
                        <div class="tiles-list">
                            <img src="{{ asset('img/food/donut.svg') }}" alt="Burgers">
                            <h2>320</h2>
                            <p>Donuts</p>
                        </div>
                        <div class="tiles-list">
                            <img src="{{ asset('img/food/biscuit.svg') }}" alt="Biscuits">
                            <h2>260</h2>
                            <p>Biscuits</p>
                        </div>
                        <div class="tiles-list">
                            <img src="{{ asset('img/food/ice-cream.svg') }}" alt="Ice Cream">
                            <h2>490</h2>
                            <p>Ice Cream</p>
                        </div>
                        <div class="tiles-list">
                            <img src="{{ asset('img/food/cupcake.svg') }}" alt="Cakes">
                            <h2>580</h2>
                            <p>Cakes</p>
                        </div>
                        <div class="tiles-list">
                            <img src="{{ asset('img/food/tea-cup.svg') }}" alt="Coffee">
                            <h2>310</h2>
                            <p>Coffee</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card h-350">
                <div class="card-header">
                    <div class="card-title">By Channel</div>
                </div>
                <div class="card-body">
                    <div id="byChannel"></div>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="card h-350">
                <div class="card-header">
                    <div class="card-title">Sale by Counrty</div>
                </div>
                <div class="card-body">
                    <div id="byCountry"></div>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="card h-350">
                <div class="card-header">
                    <div class="card-title">By Device</div>
                </div>
                <div class="card-body">
                    <div id="byDevice"></div>
                </div>
            </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

            <div class="card  h-380">
                <div class="card-header">
                    <div class="card-title">Top Customers</div>
                </div>
                <div class="card-body">

                    <div class="top-users-container">
                        <div class="top-user">
                            <img src="{{ asset('img/user8.png') }}" class="avatar" alt="Agent">
                            <div class="user-details">
                                <h6>Tari Utami</h6>
                                <div class="user-score">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="rank">Rank #1</div>
                                </div>
                            </div>
                        </div>
                        <div class="top-user">
                            <img src="{{ asset('img/user22.png') }}" class="avatar" alt="Agent">
                            <div class="user-details">
                                <h6>Ono</h6>
                                <div class="user-score">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="rank">Rank #2</div>
                                </div>
                            </div>
                        </div>
                        <div class="top-user">
                            <img src="{{ asset('img/user6.png') }}" class="avatar" alt="Agent">
                            <div class="user-details">
                                <h6>Rukman</h6>
                                <div class="user-score">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="rank">Rank #3</div>
                                </div>
                            </div>
                        </div>
                        <div class="top-user mb-0">
                            <img src="{{ asset('img/user20.png') }}" class="avatar" alt="Agent">
                            <div class="user-details">
                                <h6>Sukijah</h6>
                                <div class="user-score">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="rank">Rank #4</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

            <div class="card h-380">
                <div class="card-header">
                    <div class="card-title">Reviews</div>
                </div>
                <div class="card-body">
                    <ul class="customer-rating">
                        <li class="clearfix">
                            <div class="customer">
                                <img src="{{ asset('img/user2.png') }}" alt="Uni Pro Admin">
                            </div>
                            <div class="customer-review">
                                <div class="stars" id="rate2"></div>
                                <h5>Best Quality Template</h5>
                                <h6 class="by">By, <a href="#">Sari</a></h6>
                                <p>The atmosphere is excellent along with the greenery around. Market, hospital and schools are easily accessible.</p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="customer">
                                <img src="{{ asset('img/user3.png') }}" alt="Uni Pro Admin">
                            </div>
                            <div class="customer-review">
                                <div class="stars" id="rate3"></div>
                                <h5>Great Admin Template</h5>
                                <h6 class="by">By, <a href="#">Nana</a></h6>
                                <p>This Location has good connectivity with nearby schools, colleges and hospitals. Public transport is available.</p>
                            </div>
                        </li>
                    </ul>
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
<script src="{{ asset('vendor/apex/custom/analytics/ordersGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/analytics/targets.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/analytics/byChannelGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/analytics/byCountryGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/analytics/byDeviceGraph.js') }}"></script>

<!-- Daterange -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>

<!-- Rating JS -->
<script src="{{ asset('vendor/rating/raty.js') }}"></script>
<script src="{{ asset('vendor/rating/raty-custom.js') }}"></script>
@endpush