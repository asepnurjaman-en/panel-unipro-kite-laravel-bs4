@extends('layouts.panel')
@section('title', 'Form Input')
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
                                <input type="text" class="form-control" placeholder="Type Something">
                                <div class="field-placeholder">Input Type</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Enter your Email">
                                <div class="field-placeholder">Input Email</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="password" class="form-control" id="inputPwd" placeholder="Enter Password">
                                <div class="field-placeholder">Password</div>
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
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input class="form-control" id="inputReadOnly" type="text" readonly="">
                                <div class="field-placeholder">Readonly Input</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" id="disabledInput" class="form-control" disabled="">
                                <div class="field-placeholder">Disabled Input</div>
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
                                <input type="password" class="form-control" placeholder="Enter Password">
                                <div class="field-placeholder">Password</div>
                                <div id="passwordHelpBlock" class="form-text">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                </div>
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
                    <div class="row align-items-center gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <!-- Field wrapper start -->
                            <div class="field-wrapper m-0">
                                <input type="password" class="form-control" placeholder="Enter Password">
                                <div class="field-placeholder">Password</div>
                            </div>
                            <!-- Field wrapper end -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <span id="passwordHelpInline" class="form-text">
                                Must be 8-20 characters long.
                            </span>
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
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <select class="form-select" id="formSelect">
                                    <option value="">Select</option>
                                    <option value="">Select</option>
                                    <option value="">Select</option>
                                </select>
                                <div class="field-placeholder">Dropdown</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <select class="form-select" id="formSelect2" disabled>
                                    <option value="">Select</option>
                                    <option value="">Select</option>
                                    <option value="">Select</option>
                                </select>
                                <div class="field-placeholder">Dropdown Disabled</div>
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
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- Field wrapper start -->
                            <div class="field-wrapper m-0">
                                <textarea class="form-control"></textarea>
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
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <!-- Field wrapper start -->
                            <div class="field-wrapper m-0">
                                <input type="text" class="form-control" list="datalistOptions" />
                                <datalist id="datalistOptions">
                                    <option value="San Francisco">
                                    <option value="New York">
                                    <option value="Seattle">
                                    <option value="Los Angeles">
                                    <option value="Chicago">
                                </datalist>
                                <div class="field-placeholder">Datalist</div>
                            </div>
                            <!-- Field wrapper end -->
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="field-wrapper m-0">
                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#1273eb" title="Choose your color">
                            </div>
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