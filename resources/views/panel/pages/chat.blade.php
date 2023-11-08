@extends('layouts.panel')
@section('title', 'Chat')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Chat wrapper start -->
            <div class="chat-wrapper">
                
                <!-- Chat users container start -->
                <div class="chat-users-container">

                    <!-- Search Container Start -->
                    <div class="search-chat-container">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" />
                        </div>
                    </div>
                    <!-- Search Container End -->

                    <!-- Users Container Start -->
                    <div class="users-container">

                        <!-- Users container scroll start -->
                        <div class="usersContainerScroll">
                            <ul class="users-list">
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status online"></span>
                                            <img src="{{ asset('img/user12.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Arif Budiman</h6>
                                                <p class="text-truncate">Hey! there I'm available.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="count">7</span>
                                                <span class="time">5 Mins</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status away"></span>
                                            <img src="{{ asset('img/user5.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Anggi Lestari</h6>
                                                <p class="text-truncate">Are we going to meet today?</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">22 Mins</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status busy"></span>
                                            <img src="{{ asset('img/user21.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Maya</h6>
                                                <p class="text-truncate">Looking for some help.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="count">3</span>
                                                <span class="time">48 Mins</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>											
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status away"></span>
                                            <img src="{{ asset('img/user22.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Astri</h6>
                                                <p class="text-truncate">What time is our meeting?</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">3 Hours</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <div class="chat-avatar">
                                            <span class="status away"></span>
                                            <img src="{{ asset('img/user23.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Noval Kurnadi</h6>
                                                <p class="text-truncate">I have sent you important files.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">7 Hours</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status away"></span>
                                            <div class="bg-avatar green">DS</div>
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Dudung Sudirman</h6>
                                                <p class="text-truncate">Great App :)</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">12 Hours</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status online"></span>
                                            <div class="bg-avatar yellow">OM</div>
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Odi Maryono</h6>
                                                <p class="text-truncate">Sharing 3 more files now.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="count">2</span>
                                                <span class="time">15 Hours</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status offline"></span>
                                            <img src="{{ asset('img/user16.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Yusuf Hadi</h6>
                                                <p class="text-truncate">Very good Morning.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="count">2</span>
                                                <span class="time">18 Hours</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status offline"></span>
                                            <img src="{{ asset('img/user24.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Anna Qomariyah</h6>
                                                <p class="text-truncate">How can I help you?</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">22 Hours</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status busy"></span>
                                            <div class="bg-avatar green">BW</div>
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Bambang Wulung Sewo</h6>
                                                <p class="text-truncate">Going to watch football match.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">2 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <div class="chat-avatar">
                                            <span class="status away"></span>
                                            <img src="{{ asset('img/user12.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Koni Irawan</h6>
                                                <p class="text-truncate">The best App I have ever seen.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="count">7</span>
                                                <span class="time">5 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status away"></span>
                                            <img src="{{ asset('img/user15.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Nona</h6>
                                                <p class="text-truncate">Three more days to go live.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">8 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status offline"></span>
                                            <div class="bg-avatar blue">IA</div>
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Isma Azizah</h6>
                                                <p class="text-truncate">Amazing Product.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">10 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status busy"></span>
                                            <div class="bg-avatar orange">KF</div>
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Kaysa Fauziah</h6>
                                                <p class="text-truncate">Lets meet.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="count">4</span>
                                                <span class="time">12 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status online"></span>
                                            <img src="{{ asset('img/user13.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Asep Nurjaman</h6>
                                                <p class="text-truncate">See you soon.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">16 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status offline"></span>
                                            <img src="{{ asset('img/user19.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Anisa</h6>
                                                <p class="text-truncate">I am buying new Macbook.</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="time">18 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="chat-avatar">
                                            <span class="status away"></span>
                                            <img src="{{ asset('img/user20.png') }}" alt="Avatar" />
                                        </div>
                                        <div class="users-list-body">
                                            <div class="chat-msg">
                                                <h6 class="text-truncate">Icha Putri</h6>
                                                <p class="text-truncate">Can you send photos?</p>
                                            </div>
                                            <div class="chat-time">
                                                <span class="count">2</span>
                                                <span class="time">25 Days</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Users container scroll end -->

                    </div>
                    <!-- Users Container End -->

                </div>
                <!-- Chat users container end -->

                <!-- Empty chat screen start -->
                <div class="empty-chat-screen">
                    
                    <!-- Option to display logged in user avatar -->
                    <!--
                        <img src="img/user2.png" class="my-avatar" alt="My Avatar">
                        <h5>Hey, <span>Katherine</span></h5>
                        <h6>Welcome to Uni Pro App</h6>
                        <p>Please select a chat to start messaging.</p>
                    -->

                    <!-- Display Image -->
                    <img src="{{ asset('img/empty-chat-display.svg') }}" class="empty-chat-display" alt="My Avatar">
                    <p>Please select a chat to start messaging.</p>

                </div>
                <!-- Empty chat screen end -->
                
                <!-- Content wrapper start -->
                <div class="chat-content-wrapper d-none">

                    <!-- Active User Chatting Start -->
                    <div class="active-user-chatting">

                        <div class="active-user-info">
                            <div class="bg-chat-avatar pink">AN</div>
                            <div class="avatar-info">
                                <h5>Asep Nurjaman</h5>
                                <div class="typing">Typing ...</div>
                            </div>
                        </div>
                        <div class="chat-actions">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#videoCall">
                                <i class="icon-video"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#audioCall">
                                <i class="icon-phone1"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Active User Chatting End -->

                    <!-- Chat Container Start -->
                    <div class="chat-container">
                        <div class="chatContainerScroll">
                            <ul class="chat-box">
                                <li class='chat-left'>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user21.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>Asep</div>
                                    </div>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>Hello, good morning.</p>
                                            <div class='chat-hour read'>08:55 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class='chat-right'>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>Hi Sep<br />
                                            Good morning 😃. How are you?</p>
                                            <div class='chat-hour read'>08:56 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user24.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>You</div>
                                    </div>
                                </li>
                                <li class="divider">Oct 18, 2020</li>
                                <li class='chat-left'>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user21.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>Asep</div>
                                    </div>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>Are we meeting today 😊😊</p>
                                            <div class='chat-hour read'>08:57 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class='chat-right'>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>Well, that's great 😃</p>
                                            <div class='chat-hour read'>08:59 <span>&#10003;</span></div>
                                        </div>
                                        <div class='chat-text'>
                                            <div class="shared-files">
                                                <a href="#" class="shared-files">
                                                    <div class="attached-folder">
                                                        <img src="{{ asset('img/folder.svg') }}" alt="Folder" />
                                                    </div>
                                                    <div class="attached-link">new-design.zip</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user24.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>You</div>
                                    </div>
                                </li>
                                <li class="divider">Oct 21, 2020</li>
                                <li class='chat-left'>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user21.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>Asep</div>
                                    </div>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>The rest of the team is not here yet.<br />Maybe in an hour or so?</p>
                                            <div class='chat-hour read'>08:57 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class='chat-right'>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>Have you faced any problems at the last phase of the project?</p>
                                            <div class='chat-hour read'>08:59 <span>&#10003;</span></div>
                                        </div>
                                        <div class='chat-text'>
                                            <p>Lets discuss.</p>
                                            <div class='chat-hour read'>09:00 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user24.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>You</div>
                                    </div>
                                </li>
                                <li class="divider">Oct 25, 2020</li>
                                <li class='chat-left'>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user21.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>Asep</div>
                                    </div>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>Actually everything was fine.<br />I'm very excited to show this to our team.</p>
                                            <div class='chat-hour read'>07:00 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li class='chat-right'>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <p>From next week I am going to work on new and exiting project.</p>
                                            <div class='chat-hour read'>07:01 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user24.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>You</div>
                                    </div>
                                </li>
                                <li class='chat-left'>
                                    <div class='chat-avatar'>
                                        <img src="{{ asset('img/user21.png') }}" alt="Uni Pro Admin" />
                                        <div class='chat-name'>Asep</div>
                                    </div>
                                    <div class="chat-text-wrapper">
                                        <div class='chat-text'>
                                            <div class="chat-img-thumbnail">
                                                <img src="{{ asset('img/stock/img1.jpg') }}" class="img-fluid chat-thumbnail" alt="Uni Pro Admin" />
                                                <a href="#" class="download">
                                                    <i class="icon-download"></i>
                                                </a>
                                            </div>
                                            <div class='chat-hour'>07:02 <span>&#10003;</span></div>
                                        </div>
                                        <div class='chat-text'>
                                            <p>Great. Thanks 😊😊</p>
                                            <div class='chat-hour'>07:03 <span>&#10003;</span></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>						
                    </div>
                    <!-- Chat Container End -->

                    <!-- Chat form start -->
                    <div class="chat-form">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Typing..."></textarea>
                        </div>
                        <div class="chat-form-actions">
                            <a href="#" class="action-icon" data-bs-toggle="modal" data-bs-target="#attachFile">
                                <i class="icon-paperclip"></i>
                                <span class="action-icon-tooltip">Attach</span>
                            </a>
                        </div>
                        <button class="btn btn-primary">
                            <i class="icon-send1"></i>
                        </button>
                    </div>
                    <!-- Chat form end -->

                </div>
                <!-- Content wrapper end -->

                <!-- Audio Call Modal -->
                <div class="modal fade" id="audioCall" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="audioCallLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="call-container" id="audioCallLabel">
                                    <div class="current-user">
                                        <img src="{{ asset('img/user7.png') }}" alt="Avatar" >
                                    </div>
                                    <h5 class="calling-user-name">
                                        Kia Marrison <span class="calling">Calling...</span>
                                    </h5>
                                    <div class="calling-btns">
                                        <button class="btn btn-danger" data-bs-dismiss="modal">
                                            <i class="icon-x"></i>
                                        </button>
                                        <button class="btn btn-success">
                                            <i class="icon-phone-call"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Call Modal -->
                <div class="modal fade" id="videoCall" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoCallLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="call-container" id="videoCallLabel">
                                    <div class="current-user">
                                        <img src="{{ asset('img/user20.png') }}" alt="Avatar" >
                                    </div>
                                    <h5 class="calling-user-name">
                                        Amy Marrison <span class="calling">Calling...</span>
                                    </h5>
                                    <div class="calling-btns">
                                        <button class="btn btn-danger" data-bs-dismiss="modal">
                                            <i class="icon-x"></i>
                                        </button>
                                        <button class="btn btn-success">
                                            <i class="icon-video"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attach File Modal -->
                <div class="modal fade" id="attachFile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="attachFileLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="attachFileLabel">Attach File</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Attach file start -->
                                <div id="dropzone-sm">
                                    <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

                                        <div class="dz-message needsclick">
                                            <button type="button" class="dz-button">Update Image.</button>
                                        </div>

                                    </form>
                                </div>
                                <!-- Attach file end -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Chat wrapper end -->

        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Date Range CSS -->
<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}"/>

<!-- Uploader CSS -->
<link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.min.css') }}"/>
@endpush

@push('script')
<!-- Date Range JS -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>

<!-- Dropzone JS -->
<script src="{{ asset('vendor/dropzone/dropzone.min.js') }}"></script>
@endpush