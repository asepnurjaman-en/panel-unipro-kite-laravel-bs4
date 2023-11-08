@extends('layouts.panel')
@section('title', 'Form Dropzone')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Dropzone</div>
                </div>
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div id="dropzone">
                                <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

                                    <div class="dz-message needsclick">
                                        <button type="button" class="dz-button">Drop files here or click to upload.</button><br>
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                    </div>

                                </form>
                                <div class="mt-3">
                                    <button class="btn btn-light" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="button">Upload</button>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Row end -->

                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Uploader CSS -->
<link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.min.css') }}" />
@endpush

@push('script')
<!-- Dropzone JS -->
<script src="{{ asset('vendor/dropzone/dropzone.min.js') }}"></script>
@endpush