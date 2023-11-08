@extends('layouts.panel')
@section('title', 'Dashboard CRM')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card h-180">
                <div class="card-header">
                    <div class="card-title">Create Discount</div>
                </div>
                <div class="card-body">
                    <div class="create-offer-container">
                        <textarea class="form-control" rows="3">Today's Offer, </textarea>
                        <div class="share-thoughts-footer">
                            <div class="share-icons">
                                <a href="#">
                                    <i class="icon-map2"></i>
                                </a>
                                <a href="#">
                                    <i class="icon-link"></i>
                                </a>
                                <a href="#">
                                    <i class="icon-camera2"></i>
                                </a>
                                <a href="#">
                                    <i class="icon-users"></i>
                                </a>
                            </div>
                            <button class="btn btn-primary btn-sm">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="social-tile h-180">
                <div class="social-graph">
                    <div id="chart1"></div>
                </div>
                <p>Reviews</p>
                <h2>250</h2>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
            <div class="social-tile h-180">
                <div class="social-graph">
                    <div id="chart2"></div>
                </div>
                <p>Ratings</p>
                <h2>180</h2>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
            <div class="social-tile h-180">
                <div class="social-graph">
                    <div id="chart3"></div>
                </div>
                <p>Signups</p>
                <h2>90</h2>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="stats-tile">
                <div class="sale-icon">
                    <i class="icon-package"></i>
                </div>
                <div class="sale-details">
                    <h2>70</h2>
                    <p>Products</p>
                    <h5><span class="high"><i class="icon-trending-up"></i> 7.2%</span> since last week</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="stats-tile">
                <div class="sale-icon">
                    <i class="icon-shopping-bag1"></i>
                </div>
                <div class="sale-details">
                    <h2>650</h2>
                    <p>Orders</p>
                    <h5><span class="high"><i class="icon-trending-up"></i> 7.5%</span> since last week</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="stats-tile">
                <div class="sale-icon">
                    <i class="icon-briefcase"></i>
                </div>
                <div class="sale-details">
                    <h2>995</h2>
                    <p>Revenue</p>
                    <h5><span class="low"><i class="icon-trending-down"></i> 5.7%</span> since last week</h5>
                </div>
            </div>
        </div>							
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Sales</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">Today</button>
                        <button type="button" class="btn">Weekly</button>
                        <button type="button" class="btn">Monthly</button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="sales"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Orders</div>
                </div>
                <div class="card-body">
                    <div class="customScroll250">
                        <ul class="recent-orders">
                            <li>
                                <div class="order-img">
                                    <img src="{{ asset('img/stock/img5.jpg') }}" alt="Food">
                                    <span class="badge bg-primary">Delivered</span>
                                </div>
                                <div class="order-details">
                                    <h5 class="order-title">Cake</h5>
                                    <p class="order-desc">Wedding cake with macarons.</p>
                                    <span class="order-date">21 mins ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="order-img">
                                    <img src="{{ asset('img/stock/img2.jpg') }}" alt="Food">
                                    <span class="badge bg-warning">Processing</span>
                                </div>
                                <div class="order-details">
                                    <h5 class="order-title">Martabak</h5>
                                    <p class="order-desc">Cheese cake with peanuts cream</p>
                                    <span class="order-date">10 mins ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="order-img">
                                    <img src="{{ asset('img/stock/img6.jpg') }}" alt="Food">
                                    <span class="badge bg-danger">On Hold</span>
                                </div>
                                <div class="order-details">
                                    <h5 class="order-title">Stacker</h5>
                                    <p class="order-desc">Creamy stacker with pie</p>
                                    <span class="order-date">32 mins ago</span>
                                </div>
                            </li>												
                            <li>
                                <div class="order-img">
                                    <img src="{{ asset('img/stock/img4.jpg') }}" alt="Food">
                                    <span class="badge bg-primary">Delivered</span>
                                </div>
                                <div class="order-details">
                                    <h5 class="order-title">Spaghetti</h5>
                                    <p class="order-desc">Cheese spaghetti with almonds</p>
                                    <span class="order-date">17 mins ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="order-img">
                                    <img src="{{ asset('img/stock/img7.jpg') }}" alt="Food">
                                    <span class="badge bg-danger">On Hold</span>
                                </div>
                                <div class="order-details">
                                    <h5 class="order-title">Barbeque</h5>
                                    <p class="order-desc">Guilt Free BBQ chicken</p>
                                    <span class="order-date">12 mins ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="order-img">
                                    <img src="{{ asset('img/stock/img3.jpg') }}" alt="Food">
                                    <span class="badge bg-warning">Processing</span>
                                </div>
                                <div class="order-details">
                                    <h5 class="order-title">Pecan</h5>
                                    <p class="order-desc">Homemade pecan with olives</p>
                                    <span class="order-date">15 mins ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Todo's</div>
                </div>
                <div class="card-body">
                    <div class="todo-container">
                        <ul class="todo-body">
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot blue"></span>
                                    <p>Team Meeting</p>
                                    <p class="dt">@ 9:30 AM</p>
                                </div>
                            </li>												
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot orange"></span>
                                    <p>Interview</p>
                                    <p class="dt">@ 11:30 AM</p>
                                </div>
                            </li>
                            <li class="todo-list">
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
                            <li class="todo-list done">
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
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
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
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Top Rated Items</div>
                </div>
                <div class="card-body">


                    <div class="top-items-container">
                        <div id="topRatedItems" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/stock/img1.jpg') }}" class="img-fluid top-item-img" alt="...">
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

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Cakes Stock</div>
                </div>
                <div class="card-body">
                    <ul class="cakes-list">
                        <li>
                            <a href="#"><span class="badge badge-info">12</span>Choco Hazelnut</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">10</span>Black Forest</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">9</span>Belgian Truffle</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">4</span>White Forest</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">18</span>Irish Coffee</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">7</span>Royal Framboise</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">3</span>Butter Scotch</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">2</span>Le Chocolatier</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">11</span>Regal Raspberry</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">24</span>Strawberry</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">19</span>Chocolate</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">10</span>Red Velvet</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info">15</span>Banana Walnut</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card h-320">
                <div class="card-header">
                    <div class="card-title">Tickets</div>
                </div>
                <div class="card-body">
                    
                    <ul class="tickets-container">
                        <li>
                            <img src="{{ asset('img/user5.png') }}" class="avatar" alt="Avatar" />
                            <div class="ticket-details">
                                <h6>Udin</h6>
                                <span class="ticket-time">10/12/2020 - 10:30 AM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-success">Completed</span>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/user2.png') }}" class="avatar" alt="Avatar" />
                            <div class="ticket-details">
                                <h6>Ust. Haris</h6>
                                <span class="ticket-time">14/12/2020 - 12:45 PM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-info">Processing</span>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/user24.png') }}" class="avatar" alt="Avatar" />
                            <div class="ticket-details">
                                <h6>Oki</h6>
                                <span class="ticket-time">21/12/2020 - 08:20 AM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-info">Processing</span>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/user12.png') }}" class="avatar" alt="Avatar" />
                            <div class="ticket-details">
                                <h6>Budi</h6>
                                <span class="ticket-time">25/12/2020 - 11:30 AM</span>
                            </div>
                            <div class="ticket-status">
                                <span class="badge bg-danger">Pending</span>
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
<script src="{{ asset('vendor/apex/custom/crm/sparkline-graphs.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/crm/sales.js') }}"></script>

<!-- Rating JS -->
<script src="{{ asset('vendor/rating/raty.js') }}"></script>
<script src="{{ asset('vendor/rating/raty-custom.js') }}"></script>
@endpush