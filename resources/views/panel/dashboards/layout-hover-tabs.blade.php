@extends('layouts.panel')
@section('title', 'Layout Hover Menu')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12">
            <!-- Card start -->
            <div class="card m-0">
                <div class="card-header">
                    <div class="card-title">Card Header</div>
                </div>
                <div class="card-body" style="min-height: calc(100vh - 185px);">
                    <!-- Place your content here -->

                    <img src="{{ asset('img/hover-on-tabs.svg') }}" class="hover-tabs-img" alt="Hover Tabs" />
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
@endpush

@push('script')
<script>
    // Tabs on Hover
    jQuery('.sidebar-tabs .nav a.nav-link').hover(function(e){
        e.preventDefault();
        jQuery('.tab-pane').removeClass('active');
        tabContentSelector = jQuery(this).attr('href');
        jQuery(this).tab('show');
        jQuery(tabContentSelector).addClass('active');
    });
</script>
@endpush