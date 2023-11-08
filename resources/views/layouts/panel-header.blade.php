<!-- Page header starts -->
<div class="page-header">
    
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

            <!-- Search container start -->
            <div class="search-container">

                <!-- Toggle sidebar start -->
                <div class="toggle-sidebar" id="toggle-sidebar">
                    <i class="icon-menu"></i>
                </div>
                <!-- Toggle sidebar end -->

                <!-- Mega Menu Start -->
                <div class="cd-dropdown-wrapper">
                    <a class="cd-dropdown-trigger" href="#0"><i class="icon-menu menu-icon"></i><span class="menu-text">Megamenu</span></a>
                    <nav class="cd-dropdown">

                        <ul class="cd-dropdown-content">

                            <li class="has-children">
                                <a href="#">Graphs &amp; Tables</a>

                                <ul class="cd-secondary-dropdown is-hidden">

                                    <li class="has-children">
                                        <a href="#">Graphs</a>
                                        <ul class="is-hidden">
                                            <li>
                                                <a href="{{ route('panel.graphs.apex') }}">Apex Graphs</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('panel.graphs.morris') }}">Morris Graphs</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('panel.graphs.vector-map') }}">Vector Maps</a>
                                            </li>													
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="#">Tables</a>
                                        <ul class="is-hidden">
                                            <li>
                                                <a href="{{ route('panel.table.bootstrap') }}">Bootstrap Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('panel.table.custom') }}">Custom Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('panel.table.datatable') }}">Data Tables</a>
                                            </li>												
                                        </ul>
                                    </li>												
                                </ul>
                            </li>
                            
                            <li>
                                <a href="{{ route('panel.pages.account-settings') }}">Account Settings</a>
                            </li>
                            <li>
                                <a href="/404"> 404 - Page Not Found</a>
                            </li>
                        </ul>
                        
                    </nav>
                </div>
                <!-- Mega Menu End -->

                <!-- Search input group start -->
                <div class="ui fluid category search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Search">
                        <i class="search icon icon-search1"></i>
                    </div>
                    <div class="results"></div>
                </div>
                <!-- Search input group end -->

            </div>
            <!-- Search container end -->

        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

            <!-- Header actions start -->
            <ul class="header-actions">
                <li class="dropdown">
                    <a href="#" id="taskss" data-toggle="dropdown" aria-haspopup="true">
                        <i class="icon-check-square"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="taskss">
                        <div class="dropdown-menu-header">
                            Tasks (7/10)
                        </div>
                        <div class="customScroll">
                            <ul class="activity">
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <p class="date">Today</p>
                                        <p class="info">Messages accepted with attachments</p>
                                    </div>
                                </li>
                                <li class="activity-list danger">
                                    <div class="detail-info">
                                        <p class="date">Today</p>
                                        <p class="info">Send email notifications of subscriptions and deletions to list owner</p>
                                    </div>
                                </li>
                                <li class="activity-list success">
                                    <div class="detail-info">
                                        <p class="date">Yesterday</p>
                                        <p class="info">Required change logs activity reports</p>
                                    </div>
                                </li>
                                <li class="activity-list warning">
                                    <div class="detail-info">
                                    <p class="date">2 Days Ago</p>
                                        <p class="info">Strategic partnership plan</p>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <p class="date">2 days ago</p>
                                        <p class="info">Send email notifications of subscriptions and deletions to list owner</p>
                                    </div>
                                </li>
                                <li class="activity-list danger">
                                    <div class="detail-info">
                                        <p class="date">3 days ago</p>
                                        <p class="info">Required change logs activity reports</p>
                                    </div>
                                </li>
                                <li class="activity-list success">
                                    <div class="detail-info">
                                    <p class="date">7 days ago</p>
                                        <p class="info">Strategic partnership plan</p>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <p class="date">2 weeks ago</p>
                                        <p class="info">Required change logs activity reports</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                        <i class="icon-alert-triangle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
                        <div class="dropdown-menu-header">
                            Notifications (4)
                        </div>
                        <div class="customScroll">
                            <ul class="header-notifications">
                                <li>
                                    <a href="#">
                                        <div class="user-img online">
                                            <img src="{{ asset('img/user6.png') }}" alt="User">
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Samsul</div>
                                            <div class="noti-details">Check out every table in detail.</div>
                                            <div class="noti-date">April 25, 04:00 pm</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-img busy">
                                            <img src="{{ asset('img/user10.png') }}" alt="User">
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Juhri</div>
                                            <div class="noti-details">Approved new design.</div>
                                            <div class="noti-date">April 10, 12:00 am</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-img away">
                                            <img src="{{ asset('img/user21.png') }}" alt="User">
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Asep</div>
                                            <div class="noti-details">Membership has been ended.</div>
                                            <div class="noti-date">March 20, 07:30 pm</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-img busy">
                                            <img src="{{ asset('img/user15.png') }}" alt="User">
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Icha</div>
                                            <div class="noti-details">Design Review.</div>
                                            <div class="noti-date">April 18, 09:30 am</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                        <span class="avatar">
                            <img src="{{ asset('img/user.svg') }}" alt="User Avatar">
                            <span class="status busy"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <a href="{{ route('panel.pages.user-profile') }}"><i class="icon-user1"></i>Profile</a>
                            <a href="{{ route('panel.pages.account-settings') }}"><i class="icon-settings1"></i>Settings</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="icon-log-out1"></i>Logout</a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <!-- Header actions end -->

        </div>
    </div>
    <!-- Row end -->					

</div>
<!-- Page header ends -->
