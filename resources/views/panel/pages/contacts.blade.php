@extends('layouts.panel')
@section('title', 'Contacts')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header-lg">
                    <h4>Contacts</h4>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewContact">Add Contact</button>
                    <div class="modal fade" id="addNewContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addNewContactLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNewContactLabel">Add Contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <div id="dropzone-sm" class="mb-3">
                                                <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

                                                    <div class="dz-message needsclick">
                                                        <button type="button" class="dz-button">Upload Image.</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                            <div class="row gutters">
                                                <div class="col-6">
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input type="text" class="form-control">
                                                        <div class="field-placeholder">Full Name</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input type="text" class="form-control">
                                                        <div class="field-placeholder">Phone</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                </div>
                                                <div class="col-6">
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input type="text" class="form-control">
                                                        <div class="field-placeholder">Email</div>
                                                    </div>
                                                    <!-- Field wrapper end -->																		
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker-opens-left">
                                                            <span class="input-group-text">
                                                                <i class="icon-calendar1"></i>
                                                            </span>
                                                        </div>
                                                        <div class="field-placeholder">Birthday</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper m-0">
                                                        <textarea class="form-control" rows="2"></textarea>
                                                        <div class="field-placeholder">Message</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <figure class="user-card">
                                <figcaption>
                                    <a href="#" class="edit-card" data-bs-toggle="modal" data-bs-target="#editContact">
                                        <i class="icon-mode_edit"></i>
                                    </a>
                                    <img src="{{ asset('img/user21.png') }}" alt="Le Meilleur Admin" class="profile">
                                    <h5>Lina</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item"><span>Email: </span>lina@meow.com</li>
                                        <li class="list-group-item"><span>Phone: </span>+62 300-223-4567</li>
                                        <li class="list-group-item"><span>Location: </span>Garut</li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <figure class="user-card">
                                <figcaption>
                                    <a href="#" class="edit-card" data-bs-toggle="modal" data-bs-target="#editContact">
                                        <i class="icon-mode_edit"></i>
                                    </a>
                                    <img src="{{ asset('img/user2.png') }}" alt="Le Meilleur Admin" class="profile">
                                    <h5>Andri</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item"><span>Email: </span>andri@meow.com</li>
                                        <li class="list-group-item"><span>Phone: </span>+62 300-678-6789</li>
                                        <li class="list-group-item"><span>Location: </span>Solo</li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>						
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <figure class="user-card">
                                <figcaption>
                                    <a href="#" class="edit-card" data-bs-toggle="modal" data-bs-target="#editContact">
                                        <i class="icon-mode_edit"></i>
                                    </a>
                                    <img src="{{ asset('img/user6.png') }}" alt="Le Meilleur Admin" class="profile">
                                    <h5>Hasan</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item"><span>Email: </span>hasan@meow.com</li>
                                        <li class="list-group-item"><span>Phone: </span>+62 300-332-7753</li>
                                        <li class="list-group-item"><span>Location: </span>Padang</li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- Row end -->
                    <div class="modal fade" id="editContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editContactLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editContactLabel">Edit Contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <div id="dropzone-sm1" class="mb-3">
                                                <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload1">

                                                    <div class="dz-message needsclick">
                                                        <button type="button" class="dz-button">Update Image.</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                            <div class="row gutters">
                                                <div class="col-6">
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input type="text" class="form-control" value="Andri">
                                                        <div class="field-placeholder">Full Name</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input type="text" class="form-control" value="+62 300-678-6789">
                                                        <div class="field-placeholder">Phone</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                </div>
                                                <div class="col-6">
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input type="text" class="form-control" value="andri@meow.com">
                                                        <div class="field-placeholder">Email</div>
                                                    </div>
                                                    <!-- Field wrapper end -->																		
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker-opens-left">
                                                            <span class="input-group-text">
                                                                <i class="icon-calendar1"></i>
                                                            </span>
                                                        </div>
                                                        <div class="field-placeholder">Birthday</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper m-0">
                                                        <textarea class="form-control" rows="2"></textarea>
                                                        <div class="field-placeholder">Message</div>
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save Contact</button>
                                </div>
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
<!-- Date Range CSS -->
<link rel="stylesheet" href="{{ asset('vendor/daterange/daterange.css') }}"/>

<!-- Uploader CSS -->
<link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.min.css') }}"/>
@endpush

@push('script')
<!-- Date Range JS -->
<script src="{{ asset('vendor/daterange/daterange.js') }}"></script>
<script src="{{ asset('vendor/daterange/custom-daterange.js') }}"></script>

<!-- Dropzone JS -->
<script src="{{ asset('vendor/dropzone/dropzone.min.js') }}"></script>
@endpush