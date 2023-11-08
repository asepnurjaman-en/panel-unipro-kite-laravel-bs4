@extends('layouts.panel')
@section('title', 'Calendar Dragable')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                            <div id='external-events'>
                                <h4>Draggable Events</h4>
                          
                                <div id='external-events-list'>
                                  <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>My Event 1</div>
                                  </div>
                                  <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>My Event 2</div>
                                  </div>
                                  <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>My Event 3</div>
                                  </div>
                                  <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>My Event 4</div>
                                  </div>
                                  <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>My Event 5</div>
                                  </div>
                                </div>
                          
                                <p>
                                  <input type='checkbox' id='drop-remove' />
                                  <label for='drop-remove'>Remove after drop</label>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
                            <div id="draggableCalendar"></div>
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
<!-- Calendar CSS -->
<link rel="stylesheet" href="{{ asset('vendor/calendar/css/main.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/calendar/css/custom.css') }}" />
@endpush

@push('script')
<!-- Calendar JS -->
<script src="{{ asset('vendor/calendar/js/main.min.js') }}"></script>
<script src="{{ asset('vendor/calendar/custom/draggable-calendar.js') }}"></script>
@endpush