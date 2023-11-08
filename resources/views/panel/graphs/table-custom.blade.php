@extends('layouts.panel')
@section('title', 'Custom Table')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered v-middle m-0">
                            <thead>
                                <tr>
                                    <th>User &amp; Project</th>
                                    <th>Experience</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Ratings</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <img src="{{ asset('img/user8.png') }}" class="img-36" alt="Avatar">
                                            </div>
                                            <div >
                                                <b>Yusuf Mansur</b>
                                                <div>
                                                    <small class="text-muted">UI Mockups</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>5 Years</td>
                                    <td>Rp4500.00</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating-block-lg">
                                            <div class="stars rate4"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Action</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <img src="{{ asset('img/user5.png') }}" class="img-36" alt="Avatar">
                                            </div>
                                            <div >
                                                <b>Joko Mardono</b>
                                                <div>
                                                    <small class="text-muted">App Design, HTML/CSS</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>7 Years</td>
                                    <td>Rp6500.00</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating-block-lg">
                                            <div class="stars rate3"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Action</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <img src="{{ asset('img/user18.png') }}" class="img-36" alt="Avatar">
                                            </div>
                                            <div >
                                                <b>Cia Syifa Abdillah</b>
                                                <div>
                                                    <small class="text-muted">Mobile Design, HTML/CSS</small>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>9 Years</td>
                                    <td>Rp2500.00</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating-block-lg">
                                            <div class="stars rate2"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Action</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->
    
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th>State</th>
                                    <th>Sessions</th>
                                    <th>Users</th>
                                    <th>Price</th>
                                    <th>Sessions</th>
                                    <th>Value</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>74%<br><small>of Total:<br>80.00% (10)</small></td>
                                    <td>57%<br><small>Avg for View:<br>90.00% (-16.67%)</small></td>
                                    <td>32%<br><small>Avg for View:<br>50.00% (70.00%)</small></td>
                                    <td>35.32<br><small>Avg for View:<br>2.70 (75.93%)</small></td>
                                    <td>79<br><small>Avg for View:<br>0.00% (0.00%)</small></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>1. Garut</td>
                                    <td>327</td>
                                    <td>229</td>
                                    <td>Rp139.85</td>
                                    <td>21.55%</td>
                                    <td>IDR 980</td>
                                    <td>
                                        <div class="td-actions">
                                            <a href="#" class="icon blue" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Row">
                                                <i class="icon-circle-with-plus"></i>
                                            </a>
                                            <a href="#" class="icon green" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Save Row">
                                                <i class="icon-save"></i>
                                            </a>
                                            <a href="#" class="icon red" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Row">
                                                <i class="icon-cancel"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. Bogor</td>
                                    <td>578</td>
                                    <td>375</td>
                                    <td>Rp89,319</td>
                                    <td>46.90%</td>
                                    <td>IDR 887</td>
                                    <td>
                                        <div class="td-actions">
                                            <a href="#" class="icon blue" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Row">
                                                <i class="icon-circle-with-plus"></i>
                                            </a>
                                            <a href="#" class="icon green" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Save Row">
                                                <i class="icon-save"></i>
                                            </a>
                                            <a href="#" class="icon red" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Row">
                                                <i class="icon-cancel"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. Bekasi</td>
                                    <td>126</td>
                                    <td>845</td>
                                    <td>Rp68.00</td>
                                    <td>16.25%</td>
                                    <td>IDR 685</td>
                                    <td>
                                        <div class="td-actions">
                                            <a href="#" class="icon blue" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Row">
                                                <i class="icon-circle-with-plus"></i>
                                            </a>
                                            <a href="#" class="icon green" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Save Row">
                                                <i class="icon-save"></i>
                                            </a>
                                            <a href="#" class="icon red" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Row">
                                                <i class="icon-cancel"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="table-container light-green">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Earnings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Figma Mockups</td>
                            <td>2 days ago.</td>
                            <td>Rp 250</td>
                        </tr>
                        <tr>
                            <td>Material Icons Set</td>
                            <td>3 days ago.</td>
                            <td>Rp 120</td>
                        </tr>
                        <tr>
                            <td>Material Design System</td>
                            <td>4 days ago.</td>
                            <td>Rp 310</td>
                        </tr>
                        <tr>
                            <td>IOS Toolkit</td>
                            <td>7 days ago.</td>
                            <td>Rp 470</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

            <div class="table-container light-blue">
                <table class="table v-middle m-0">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Date</th>
                            <th>Visitors</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Indonesia</td>
                            <td>2 days ago.</td>
                            <td>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Malaysia</td>
                            <td>4 days ago.</td>
                            <td>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Indonesia</td>
                            <td>7 days ago.</td>
                            <td>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Egypt</td>
                            <td>9 days ago.</td>
                            <td>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
@endpush

@push('script')
<!-- Rating JS -->
<script src="{{ asset('vendor/rating/raty.js') }}"></script>
<script src="{{ asset('vendor/rating/raty-custom.js') }}"></script>
@endpush