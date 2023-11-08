@extends('layouts.panel')
@section('title', 'Component Tabs')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body">

                    <div class="custom-tabs-container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="first-tab" data-bs-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">First Tab</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="second-tab" data-bs-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Second Tab</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="third-tab" data-bs-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Third Tab</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="first" role="tabpanel">

                                <p class="text-muter">
                                    In other words, UX design is the process of designing (digital or physical) products that are useful, easy to use, and delightful to interact with. It's about enhancing the experience that people have while interacting with your product, and making sure they find value in what you're providing.
                                </p>

                            </div>
                            <div class="tab-pane fade" id="second" role="tabpanel">
                                
                                <p class="text-muter">User experience is a person's emotions and attitudes about using a particular product, system or service. It includes the practical, experiential, affective, meaningful, and valuable aspects of human–computer interaction and product ownership.</p>

                            </div>
                            <div class="tab-pane fade" id="third" role="tabpanel">
                                
                                <p class="text-muter">User experience (UX) design is the process design teams use to create products that provide meaningful and relevant experiences to users. This involves the design of the entire process of acquiring and integrating the product, including aspects of branding, design, usability and function.</p>

                            </div>
                            <div class="tab-pane fade" id="fourth" role="tabpanel">
                                
                                <p class="text-muter">Websites and Web applications have become progressively more complex as our industry’s technologies and methodologies advance. What used to be a one-way static medium has evolved into a very rich and interactive experience.</p>

                            </div>
                            <div class="tab-pane fade" id="fifth" role="tabpanel">
                                
                                <p class="text-muter">User experience (abbreviated as UX) is how a person feels when interfacing with a system. The system could be a website, a web application or desktop software and, in modern contexts, is generally denoted by some form of human-computer interaction.</p>
                                
                            </div>
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
@endpush

@push('script')
@endpush