@extends('layouts.panel')
@section('title', 'Component Card')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

            <!-- Card start -->
            <div class="card">
                <img src="{{ asset('img/realestate/img1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="mb-3 text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
            <!-- Card end -->

        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

            <!-- Card start -->
            <div class="card">									
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="mb-3 text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
                <img src="{{ asset('img/realestate/img6.jpg') }}" class="card-img-bottom" alt="...">
            </div>
            <!-- Card end -->

        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

            <!-- Card start -->
            <div class="card">
                <img src="{{ asset('img/realestate/img10.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="mb-3 text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
            <!-- Card end -->

        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-light">
                    This is some text within a card body.
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="mb-3">Special Heading</h5>
                    <p class="mb-3 text-light">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    <small>2 days ago</small>
                </div>
              </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Left Align</h5>
                    <p class="mb-3 text-light">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-end">
                <div class="card-body">
                    <h5 class="card-title">Right Align</h5>
                    <p class="mb-3 text-light">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Left Align</h5>
                    <p class="mb-3 text-light">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Center Align</h5>
                    <p class="mb-3 text-light">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-end">
                <div class="card-body">
                    <h5 class="card-title">Right Align</h5>
                    <p class="mb-3 text-light">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Title</div>
                    <div class="graph-day-selection" role="group">
                        <button type="button" class="btn active">Today</button>
                        <button type="button" class="btn">Weekly</button>
                        <button type="button" class="btn">Monthly</button>
                    </div>
                </div>
                <div class="card-body">
                    <p class="mb-3 text-light">Body text</p>
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
@endpush