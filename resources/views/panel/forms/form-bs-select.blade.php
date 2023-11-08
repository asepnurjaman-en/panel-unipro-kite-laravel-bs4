@extends('layouts.panel')
@section('title', 'Form Bootstrap Select')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        
        <div class="col-xl-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body pt-5">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="field-wrapper">
                                <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                    <option>Mobiles</option>
                                    <option>Books</option>
                                    <option>Clothing</option>
                                    <option>Electronics</option>
                                    <option>Food</option>
                                    <option>Games</option>
                                    <option>Gifts</option>
                                    <option>Laptops</option>
                                    <option>Mobiles</option>
                                    <option>Music</option>
                                    <option>Office</option>
                                    <option>Pharmacy</option>
                                    <option>Sports</option>
                                    <option>Toys</option>
                                </select>
                                <div class="field-placeholder">Single Select</div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="field-wrapper">
                                <select class="select-multiple js-states" title="Select Product Category" multiple="multiple">
                                    <option>Mobiles</option>
                                    <option>Books</option>
                                    <option>Clothing</option>
                                    <option>Electronics</option>
                                    <option>Food</option>
                                    <option>Games</option>
                                    <option>Gifts</option>
                                    <option>Laptops</option>
                                    <option>Mobiles</option>
                                    <option>Music</option>
                                    <option>Office</option>
                                    <option>Pharmacy</option>
                                    <option>Sports</option>
                                    <option>Toys</option>
                                </select>
                                <div class="field-placeholder">Multi Select</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="field-wrapper">
                                <select class="select-single js-states" title="Select Product Category" data-live-search="true" disabled="">
                                    <option>Mobiles</option>
                                    <option>Books</option>
                                    <option>Clothing</option>
                                    <option>Electronics</option>
                                    <option>Food</option>
                                    <option>Games</option>
                                    <option>Gifts</option>
                                    <option>Laptops</option>
                                    <option>Mobiles</option>
                                    <option>Music</option>
                                    <option>Office</option>
                                    <option>Pharmacy</option>
                                    <option>Sports</option>
                                    <option>Toys</option>
                                </select>
                                <div class="field-placeholder">Disabled Select Field</div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="field-wrapper">
                                <select class="select-multiple js-states" title="Select Product Category" multiple="multiple" disabled="">
                                    <option>Mobiles</option>
                                    <option>Books</option>
                                    <option>Clothing</option>
                                    <option>Electronics</option>
                                    <option>Food</option>
                                    <option>Games</option>
                                    <option>Gifts</option>
                                    <option>Laptops</option>
                                    <option>Mobiles</option>
                                    <option>Music</option>
                                    <option>Office</option>
                                    <option>Pharmacy</option>
                                    <option>Sports</option>
                                    <option>Toys</option>
                                </select>
                                <div class="field-placeholder">Disabled Multi Select</div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="field-wrapper">
                                <select class="select-single select-placeholder js-states" multiple="multiple">
                                    <option>Mobiles</option>
                                    <option>Books</option>
                                    <option>Clothing</option>
                                    <option>Electronics</option>
                                    <option>Food</option>
                                    <option>Games</option>
                                    <option>Gifts</option>
                                    <option>Laptops</option>
                                    <option>Mobiles</option>
                                    <option>Music</option>
                                    <option>Office</option>
                                    <option>Pharmacy</option>
                                    <option>Sports</option>
                                    <option>Toys</option>
                                </select>
                                <div class="field-placeholder">Placeholder</div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="field-wrapper">
                                <select class="select-tokenizer js-states" multiple="multiple"></select>
                                <div class="field-placeholder">Tokenization Tags</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="field-wrapper">
                                <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                    <optgroup label="Mobiles">
                                        <option>Apple</option>
                                        <option>Samsung</option>
                                        <option>Motorola</option>
                                    </optgroup>
                                    <optgroup label="Laptops">
                                        <option>Apple</option>
                                        <option>Dell</option>
                                        <option>Lenovo</option>
                                    </optgroup>
                                </select>
                                <div class="field-placeholder">Opt Groups</div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="field-wrapper">
                                <select class="select-multiple js-states" title="Select Product Category" multiple="multiple">
                                    <optgroup label="Mobiles">
                                        <option>Apple</option>
                                        <option>Samsung</option>
                                        <option>Motorola</option>
                                    </optgroup>
                                    <optgroup label="Laptops">
                                        <option>Apple</option>
                                        <option>Dell</option>
                                        <option>Lenovo</option>
                                    </optgroup>
                                </select>
                                <div class="field-placeholder">Opt Groups Multiple</div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body pt-5">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="field-wrapper-group">
                                <div class="field-wrapper">
                                    <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                        <option>Mobiles</option>
                                        <option>Books</option>
                                        <option>Clothing</option>
                                        <option>Electronics</option>
                                        <option>Food</option>
                                        <option>Games</option>
                                        <option>Gifts</option>
                                        <option>Laptops</option>
                                        <option>Mobiles</option>
                                        <option>Music</option>
                                        <option>Office</option>
                                        <option>Pharmacy</option>
                                        <option>Sports</option>
                                        <option>Toys</option>
                                    </select>
                                    <div class="field-placeholder">Select with Info</div>
                                </div>
                                <button type="button" class="input-icon-block btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Information">
                                    <i class="icon-info-with-circle m-0"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="field-wrapper-group">
                                <div class="field-wrapper">
                                    <select class="select-multiple js-states" title="Select Product Category" multiple="multiple">
                                        <option>Mobiles</option>
                                        <option>Books</option>
                                        <option>Clothing</option>
                                        <option>Electronics</option>
                                        <option>Food</option>
                                        <option>Games</option>
                                        <option>Gifts</option>
                                        <option>Laptops</option>
                                        <option>Mobiles</option>
                                        <option>Music</option>
                                        <option>Office</option>
                                        <option>Pharmacy</option>
                                        <option>Sports</option>
                                        <option>Toys</option>
                                    </select>
                                    <div class="field-placeholder">Multi Select with Info</div>
                                </div>
                                <button type="button" class="input-icon-block btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Information">
                                    <i class="icon-info-with-circle m-0"></i>
                                </button>
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
<!-- Bootstrap Select CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bs-select/bs-select.css') }}" />
@endpush

@push('script')
<!-- Bootstrap Select JS -->
<script src="{{ asset('vendor/bs-select/bs-select.min.js') }}"></script>
<script src="{{ asset('vendor/bs-select/bs-select-custom.js') }}"></script>
@endpush