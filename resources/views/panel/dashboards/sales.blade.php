@extends('layouts.panel')
@section('title', 'Dashboard Sales')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2>15M</h2>
                            <p>Orders</p>
                            <h5><span class="high"><i class="icon-trending-up"></i> 7.5%</span> since last week</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-package"></i>
                        </div>
                        <div class="sale-details">
                            <h2>32M</h2>
                            <p>Revenue</p>
                            <h5><span class="low"><i class="icon-trending-down"></i> 5.7%</span> since last week</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Revenue</div>
                            <div class="graph-day-selection" role="group">
                                <button type="button" class="btn active">Today</button>
                                <button type="button" class="btn">Weekly</button>
                                <button type="button" class="btn">Monthly</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="revenue"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tickets</div>
                        </div>
                        <div class="card-body">
                            <div id="tickets"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Earnings</div>
                        </div>
                        <div class="card-body">
                            
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="weekly-earnings">
                                        <div id="weeklyEarnings"></div>
                                        <p>Weekly Earnings</p>
                                        <h5>Rp1,590</h5>															
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="weekly-earnings">
                                        <div id="monthlyEarnings"></div>
                                        <p>Monthly Earnings</p>
                                        <h5>Rp4,750</h5>															
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>
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
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="orders" class="table v-middle">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>User ID</th>
                                    <th>Purchase Date</th>
                                    <th>Amount</th>
                                    <th>Payment Status</th>
                                    <th>Order Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/clock') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Gucci Wall Clock</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM009879986</td>
                                    <td>2020/09/18</td>
                                    <td>Rp217.00</td>
                                    <td>
                                    <span class="text-success"><i class="icon-check-circle"></i> Paid</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-success">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/ring') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Engagement Ring</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM004353345</td>
                                    <td>2020/09/21</td>
                                    <td>Rp465.00</td>
                                    <td>
                                    <span class="text-danger"><i class="icon-x-circle"></i> Failed</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-danger">Cancelled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/pencils') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Creative Pencils</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM008784342</td>
                                    <td>2020/10/25</td>
                                    <td>Rp874.00</td>
                                    <td>
                                    <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-info">Processing</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/camera') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Canon Camera</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM003703421</td>
                                    <td>2020/10/30</td>
                                    <td>Rp650.00</td>
                                    <td>
                                    <span class="text-success"><i class="icon-check-circle"></i> Paid</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-success">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/shirt') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Designer Shirt</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM009832778</td>
                                    <td>2020/10/10</td>
                                    <td>Rp550.00</td>
                                    <td>
                                    <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-info">Processing</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/clock') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Deey Wall Clock</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM007603452</td>
                                    <td>2020/10/15</td>
                                    <td>Rp749.00</td>
                                    <td>
                                    <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-info">Processing</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/toy') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Amazing Toy</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM004353321</td>
                                    <td>2020/10/12</td>
                                    <td>Rp883.00</td>
                                    <td>
                                    <span class="text-danger"><i class="icon-x-circle"></i> Failed</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-danger">Cancelled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="media-box">
                                        <img src="{{ asset('img/products/shoes') }}.jpeg" class="media-avatar" alt="Products">
                                        <div class="media-box-body">
                                            <a href="#" class="text-truncate">Reebok Shoes</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td>FLM008782321</td>
                                    <td>2020/10/11</td>
                                    <td>Rp875.00</td>
                                    <td>
                                    <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                    </td>
                                    <td>
                                    <span class="badge bg-info">Processing</span>
                                    </td>
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
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Chat</div>
                </div>
                <div class="card-body">
                    <div class="customScroll250">
                        <ul class="chats">
                            <li class="chats-left">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user5.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">Teh Nisa</div>
                                </div>
                                <div class="chats-text">Explore the history of the classic Lorem Ipsum passage and generate.</div>
                                <div class="chats-hour">08:55 <span class="icon-done_all"></span></div>
                            </li>
                            <li class="chats-right">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user12.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">You</div>
                                </div>
                                <div class="chats-text">Your own text using any number of characters, words, sentences or paragraphs.</div>
                                <div class="chats-hour">08:56 <span class="icon-done_all"></span></div>
                            </li>
                            <li class="chats-left">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user5.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">Teh Nisa</div>
                                </div>
                                <div class="chats-text">Commonly used as placeholder text in the graphic and print industries.</div>
                                <div class="chats-hour">08:57 <span class="icon-done_all"></span></div>
                            </li>
                            <li class="chats-right">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user12.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">You</div>
                                </div>
                                <div class="chats-text">Lorem Ipsum's origins extend far back to a scrambled Latin passage from Cicero in the middle ages.</div>
                                <div class="chats-hour">08:59 <span class="icon-done_all"></span></div>
                            </li>
                            <li class="chats-left">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user5.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">Teh Nisa</div>
                                </div>
                                <div class="chats-text">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements.</div>
                                <div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
                            </li>
                            <li class="chats-right">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user12.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">You</div>
                                </div>
                                <div class="chats-text">A graphic document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.</div>
                                <div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
                            </li>
                            <li class="chats-left">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user5.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">Teh Nisa</div>
                                </div>
                                <div class="chats-text">Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content.</div>
                                <div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
                            </li>
                            <li class="chats-right">
                                <div class="chats-avatar">
                                    <img src="{{ asset('img/user12.png') }}" alt="Uni Pro Admin">
                                    <div class="chats-name">You</div>
                                </div>
                                <div class="chats-text">Lorem ipsum has become the industry standard for design mockups and prototypes. By adding a little bit of Latin to a mockup.</div>
                                <div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
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
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />
@endpush

@push('script')
<!-- Apex Charts -->
<script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/sales/revenue.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/sales/tickets.js') }}"></script>

<!-- Circleful Charts -->
<script src="{{ asset('vendor/circliful/circliful.min.js') }}"></script>
<script src="{{ asset('vendor/circliful/circliful.custom.js') }}"></script>

<!-- Data Tables -->
<script src="{{ asset('vendor/datatables/dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- Custom Data tables -->
<script src="{{ asset('vendor/datatables/custom/custom-datatables.js') }}"></script>
@endpush