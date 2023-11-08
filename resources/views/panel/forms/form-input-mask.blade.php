@extends('layouts.panel')
@section('title', 'Form Input Mask')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="Enter credit card number" id="input-credit-card" />
                                <div id="creditCardType">
                                    <div class="visa credit-card">
                                        <img src="{{ asset('img/cards/mastercard.png') }}" alt="Uni Pro Admin" />
                                    </div>
                                    <div class="mastercard credit-card">
                                        <img src="{{ asset('img/cards/visa.png') }}" alt="Uni Pro Admin" />
                                    </div>
                                    <div class="amex credit-card">
                                        <img src="{{ asset('img/cards/american-express') }}.png" alt="Uni Pro Admin" />
                                    </div>
                                    <div class="jcb credit-card">
                                        <img src="{{ asset('img/cards/jcb.png') }}" alt="Uni Pro Admin" />
                                    </div>
                                    <div class="diners credit-card">
                                        <img src="{{ asset('img/cards/diners.png') }}" alt="Uni Pro Admin" />
                                    </div>
                                    <div class="discover credit-card">
                                        <img src="{{ asset('img/cards/discover.png') }}" alt="Uni Pro Admin" />
                                    </div>
                                </div>
                                <div class="field-placeholder">Credit Card Format</div>
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

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text">US (+1)</span>
                                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-us" />
                                </div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text">IND (+91)</span>
                                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-in" />
                                </div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <span class="input-group-text">BRZ (+55)</span>
                                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-br" />
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

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting" />
                                <div class="field-placeholder">Date Format</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="MM-YY" id="date-formatting2" />
                                <div class="field-placeholder">Date Format 2</div>
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

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="HH-MM-SS" id="time-formatting" />
                                <div class="field-placeholder">Time Format</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="HH-MM" id="time-formatting2" />
                                <div class="field-placeholder">Time Format 2</div>
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

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="Enter Number" id="input-numeral-thousand" />
                                <div class="field-placeholder">Input Numeral Thousand Format</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="Enter Number" id="input-numeral-lakh" />
                                <div class="field-placeholder">Input Numeral Lakh Format</div>
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

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <!-- Card start -->
            <div class="card">
                <div class="card-body">
                    
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="Delimiters: [4444.333.333.4444]" id="input-blocks" />
                                <div class="field-placeholder">Blocks</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">
                                <input type="text" class="form-control" placeholder="Delimiters: [333.333.333]" id="input-delimiter" />
                                <div class="field-placeholder">Delimiter</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">													
                                <input type="text" class="form-control" placeholder="Delimiters: [333.333.333.22]" id="input-delimiter2" />
                                <div class="field-placeholder">Delimiter</div>
                            </div>
                            <!-- Field wrapper end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            
                            <!-- Field wrapper start -->
                            <div class="field-wrapper">													
                                <input type="text" class="form-control" placeholder="Delimiters: [4444.4444.4444]" id="input-prefix" />
                                <div class="field-placeholder">Prefix</div>
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
<!-- Input Mask JS -->
<script src="{{ asset('vendor/input-masks/cleave.min.js') }}"></script>
<script src="{{ asset('vendor/input-masks/cleave-phone.js') }}"></script>
<script src="{{ asset('vendor/input-masks/cleave-custom.js') }}"></script>
@endpush