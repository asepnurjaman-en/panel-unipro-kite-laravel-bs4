@extends('layouts.panel')
@section('title', 'Datatables')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        
            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Basic Example</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basicExample" class="table custom-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i < 100; $i++)
                                <tr>
                                    <td>Anak ke {{ $i }} Pak Tarno</td>
                                    <td>Magic Architect</td>
                                    <td>Garut</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>Rp320,800</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">No Search Field</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="copy-print-csv" class="table custom-table">
                            <thead>
                                <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gani Dermawan</td>
                                    <td>System Architect</td>
                                    <td>Buahbatu</td>
                                    <td>31</td>
                                    <td>2011/04/25</td>
                                    <td>Rp320,800</td>
                                </tr>
                            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">API Call Backs</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="apiCallbacks" class="table custom-table">
                            <thead>
                                <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cintia Khoirunnisa</td>
                                    <td>System Architect</td>
                                    <td>Subang</td>
                                    <td>21</td>
                                    <td>2011/04/25</td>
                                    <td>Rp320,800</td>
                                </tr>
                            </tbody>
                    </table>
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
<!-- Data Tables -->
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/datatables/buttons.bs.css') }}" />
@endpush

@push('script')
<!-- Data Tables -->
<script src="{{ asset('vendor/datatables/dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- Custom Data tables -->
<script src="{{ asset('vendor/datatables/custom/custom-datatables.js') }}"></script>

<!-- Download / CSV / Copy / Print -->
<script src="{{ asset('vendor/datatables/buttons.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendor/datatables/html5.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.print.min.js') }}"></script>
@endpush