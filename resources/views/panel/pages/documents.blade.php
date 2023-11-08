@extends('layouts.panel')
@section('title', 'Documents')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header-lg">
                    <h4>Documents</h4>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewDocument">Create Document</button>
                    <div class="modal fade" id="addNewDocument" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addNewDocumentLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNewDocumentLabel">Add Document</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="row gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input type="text" class="form-control">
                                                <div class="field-placeholder">Document Title</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                                    <option>Pdf</option>
                                                    <option>Excel</option>
                                                    <option>PPT</option>
                                                </select>
                                                <div class="field-placeholder">Document Type</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker-opens-left">
                                                    <span class="input-group-text">
                                                        <i class="icon-calendar1"></i>
                                                    </span>
                                                </div>
                                                <div class="field-placeholder">Created On</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper m-0">
                                                <textarea class="form-control" rows="3"></textarea>
                                                <div class="field-placeholder">Description</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Row start -->
                    <div class="row gutters">

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/zip.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">App Workflow</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/pdf.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Design Document</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/doc.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Monthly Income</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/xls.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Project Budget</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/ppt.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Presentation</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/zip.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Application</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/pdf.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Wireframes</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/doc.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Policies</div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="doc-block">
                                <div class="doc-icon">
                                    <img src="{{ asset('img/docs/xls.svg') }}" alt="Doc Icon">
                                </div>
                                <div class="doc-title">Payments</div>
                                <button class="btn btn-primary">Download</button>
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