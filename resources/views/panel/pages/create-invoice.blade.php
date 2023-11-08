@extends('layouts.panel')
@section('title', 'Create Invoice')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header-lg">
                    <h4>Create Invoice</h4>
                    <div class="text-end">
                        <a href="view-invoice.html" class="btn btn-light">View Invoice</a>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Row start -->
                    <div class="row justify-content-between">

                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">

                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-12">
                                    <div class="form-section-header light-bg">Customer Details</div>
                                </div>
                                <div class="col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Customer Name <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <textarea class="form-control" rows="3"></textarea>
                                        <div class="field-placeholder">Address <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Country</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                            </div>
                            <!-- Row end -->

                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-7 col-sm-7 col-12">

                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-12">
                                    <div class="form-section-header light-bg">Date and Invoice Number</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker">
                                            <span class="input-group-text">
                                                <i class="icon-calendar1"></i>
                                            </span>
                                        </div>
                                        <div class="field-placeholder">Invoice Date</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control">
                                        <div class="field-placeholder">Invoice No</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select class="select-single js-states" title="Select Term" data-live-search="true">
                                            <option>Monthly</option>
                                            <option>Quarterly</option>
                                            <option>Yearly</option>
                                        </select>
                                        <div class="field-placeholder">Payment Terms</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker-opens-left">
                                            <span class="input-group-text">
                                                <i class="icon-calendar1"></i>
                                            </span>
                                        </div>
                                        <div class="field-placeholder">Due Date</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <textarea class="form-control" rows="3"></textarea>
                                        <div class="field-placeholder">Notes</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                            </div>
                            <!-- Row end -->

                        </div>

                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="7" class="pt-3 pb-3">Invoice Details</th>
                                        </tr>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Unit</th>
                                            <th>Price</th>
                                            <th>VAT</th>
                                            <th>Amount (Net)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <select class="select-single js-states w-100" data-live-search="true">
                                                        <option>Select Product</option>
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
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input type="number" class="form-control" placeholder="Qty">
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text">
                                                            <i class="icon-dollar-sign"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text">
                                                            <i class="icon-dollar-sign"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <button class="btn btn-light">
                                                        <i class="icon-trash-2"></i>
                                                    </button>
                                                    <button class="btn btn-light">
                                                        <i class="icon-edit-3"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <select class="select-single js-states w-100" data-live-search="true">
                                                        <option>Select Product</option>
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
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input type="number" class="form-control" placeholder="Qty">
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text">
                                                            <i class="icon-dollar-sign"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text">
                                                            <i class="icon-dollar-sign"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <button class="btn btn-light">
                                                        <i class="icon-trash-2"></i>
                                                    </button>
                                                    <button class="btn btn-light">
                                                        <i class="icon-edit-3"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button class="btn btn-light">
                                                    Add New
                                                </button>
                                            </td>
                                            <td colspan="6">
                                                <div class="row gutters justify-content-end">
                                                    <div class="col-auto">
                                                        <label class="col-form-label">Discount % of Total Amount</label>
                                                    </div>
                                                    <div class="col-auto" style="max-width: 90px;">
                                                        <input type="text" class="form-control" placeholder="0%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp;</td>
                                            <td colspan="2">
                                                <p class="m-0">Subtotal</p>
                                                <p class="m-0">Discount</p>
                                                <p class="m-0">VAT</p>
                                                <h5 class="mt-2">Total USD</h5>
                                            </td>
                                            <td>
                                                <p class="m-0">$0.00</p>
                                                <p class="m-0">$0.00</p>
                                                <p class="m-0">$0.00</p>
                                                <h5 class="mt-2">$0.00</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row gutters">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-actions-footer">
                                <div class="text-end">
                                    <button class="btn btn-light">Save as Draft</button>
                                    <button class="btn btn-primary ms-1">Create Invoice</button>
                                </div>
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
<link rel="stylesheet" href="{{ asset('vendor/bs-select/bs-select.css') }}"/>

<!-- Date Range CSS -->
<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}"/>
@endpush

@push('script')
<!-- Bootstrap Select JS -->
<script src="{{ asset('vendor/bs-select/bs-select.min.js') }}"></script>
<script src="{{ asset('vendor/bs-select/bs-select-custom.js') }}"></script>

<!-- Date Range JS -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>
@endpush