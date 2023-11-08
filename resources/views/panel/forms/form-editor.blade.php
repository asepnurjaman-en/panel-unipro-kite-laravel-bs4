@extends('layouts.panel')
@section('title', 'Form Text Editor')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <div class="field-wrapper mb-2">
                        <div class="summernote"></div>
                        <div class="field-placeholder">WYSIWYG Editor <span class="text-danger">*</span></div>
                    </div>
                    <div>
                        <button class="btn btn-light" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Save Changes</button>
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
<!-- Summernote CSS -->
<link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.css') }}" />
@endpush

@push('script')
<!-- Summernote JS -->
<script src="{{ asset('vendor/summernote/summernote-bs4.js') }}"></script>

<script>

    // Summernote
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 210,
            tabsize: 2,
            focus: true,
            toolbar: [
      ['font', ['bold', 'underline', 'clear']],
      ['para', ['ul', 'ol']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']],
    ]
        });
    });			

</script>
@endpush