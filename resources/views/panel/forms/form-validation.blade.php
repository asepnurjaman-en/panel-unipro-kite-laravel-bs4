@extends('layouts.panel')
@section('title', 'Form Validation')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Validation Option 1</div>
                </div>
                <div class="card-body mt-4">
                    
                    <form class="needs-validation" novalidate>
                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Ujang" required>
                                    <div class="field-placeholder">First Name</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Tata" required>
                                    <div class="field-placeholder">Last Name</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" id="inputPwd" required>
                                    <div class="field-placeholder">Username</div>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit Form</button>
                            </div>
                        </div>
                        <!-- Row end -->
                    </form>

                </div>
            </div>
            <!-- Card end -->
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Validation Option 2</div>
                </div>
                <div class="card-body mt-4">
                    
                    <form class="needs-validation" novalidate>
                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Ujang" required>
                                    <div class="field-placeholder">First Name</div>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Tata" required>
                                    <div class="field-placeholder">Last Name</div>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" id="inputPwd2" required>
                                    <div class="field-placeholder">Username</div>
                                    <div class="invalid-tooltip">Please choose a username.</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-12">
                                <button class="btn btn-success" type="submit">Submit Form</button>
                            </div>
                        </div>
                        <!-- Row end -->
                    </form>

                </div>
            </div>
            <!-- Card end -->

        </div>

    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <form class="was-validated">
                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Ujang" required>
                                    <div class="field-placeholder">First Name</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Tata" required>
                                    <div class="field-placeholder">Last Name</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" id="inputPwd3" required>
                                    <div class="field-placeholder">Username</div>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                        </div>
                        <!-- Row end -->
                    </form>

                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-body mt-4">
                    
                    <form class="was-validated">
                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Ujang" required>
                                    <div class="field-placeholder">First Name</div>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" value="Tata" required>
                                    <div class="field-placeholder">Last Name</div>
                                    <div class="valid-tooltip">Looks good!</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="text" class="form-control" id="inputPwd4" required>
                                    <div class="field-placeholder">Username</div>
                                    <div class="invalid-tooltip">Please choose a username.</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                        </div>
                        <!-- Row end -->
                    </form>

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
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>
@endpush