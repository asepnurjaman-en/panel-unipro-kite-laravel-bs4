@extends('layouts.panel')
@section('title', 'Form Input Group')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="field-placeholder">Enter Username</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">@mail.com</span>
                                </div>
                                <div class="field-placeholder">Enter Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="field-placeholder">Amount</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Username">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Server">
                                </div>
                                <div class="field-placeholder">Name &amp; Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text">Enter Names</span>
                                    <input type="text" placeholder="First Name" class="form-control">
                                    <input type="text" placeholder="Last Name" class="form-control">
                                </div>
                                <div class="field-placeholder">First &amp; Last Name</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="field-placeholder">Amount</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <div class="field-placeholder">Total Amount</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text">Enter Description</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                                <div class="field-placeholder">Textarea</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                    </div>
                    <!-- Row end -->

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">														
                                    <input type="text" class="form-control" placeholder="Enter Email ID">
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </div>
                                <div class="field-placeholder">Enter Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">														
                                    <input type="text" class="form-control" placeholder="Enter Email ID">
                                    <button class="btn btn-dark" type="button">Reset</button>
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </div>
                                <div class="field-placeholder">Enter Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">														
                                    <input type="text" class="form-control" placeholder="Enter Email ID">
                                    <button class="btn btn-outline-primary" type="button">Subscribe</button>
                                </div>
                                <div class="field-placeholder">Enter Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">														
                                    <input type="text" class="form-control" placeholder="Enter Email ID">
                                    <button class="btn btn-outline-dark" type="button">Reset</button>
                                    <button class="btn btn-outline-primary" type="button">Subscribe</button>
                                </div>
                                <div class="field-placeholder">Enter Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                    </div>
                    <!-- Row end -->

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">														
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="field-placeholder">Enter Name</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">													
                                    <input type="text" class="form-control">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="field-placeholder">Enter Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                    </div>
                    <!-- Row end -->

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">														
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                    <button class="btn btn-outline-primary" type="button" id="inputGroupFile02">Upload</button>
                                </div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                    </div>
                    <!-- Row end -->

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