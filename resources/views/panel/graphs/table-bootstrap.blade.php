@extends('layouts.panel')
@section('title', 'Table Bootstrap')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Items Bought</th>
                                    <th>Money Spent</th>
                                    <th>Last Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#00001</td>
                                    <td>Dadan</td>
                                    <td>Koswara</td>
                                    <td>+143-148-60985</td>
                                    <td>dankos@unipro.com</td>
                                    <td>250</td>
                                    <td>Rp4500</td>
                                    <td>10/10/2019 4:30pm</td>
                                </tr>
                                <tr>
                                    <td>#00002</td>
                                    <td>Nur</td>
                                    <td>Santi</td>
                                    <td>+278-119-88790</td>
                                    <td>nursanti@unipro.com</td>
                                    <td>390</td>
                                    <td>Rp3500</td>
                                    <td>12/10/2019 2:37am</td>
                                </tr>
                                <tr>
                                    <td>#00003</td>
                                    <td>Hana</td>
                                    <td>Jumariah</td>
                                    <td>+125-117-88763</td>
                                    <td>hajum@unipro.com</td>
                                    <td>135</td>
                                    <td>Rp2400</td>
                                    <td>14/10/2019 7:50pm</td>
                                </tr>
                                <tr>
                                    <td>#00004</td>
                                    <td>Abdul</td>
                                    <td>Soni</td>
                                    <td>+334-676-66530</td>
                                    <td>abson@unipro.com</td>
                                    <td>765</td>
                                    <td>Rp7890</td>
                                    <td>18/10/2019 9:30pm</td>
                                </tr>
                                <tr>
                                    <td>#00005</td>
                                    <td>Riki</td>
                                    <td>Amirul</td>
                                    <td>+435-667-99808</td>
                                    <td>rikul@unipro.com</td>
                                    <td>763</td>
                                    <td>Rp5690</td>
                                    <td>21/10/2019 3:20pm</td>
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
                        <table class="table table-hover table-bordered m-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Module</th>
                                    <th>Reporter</th>
                                    <th>Status</th>
                                    <th>Owner</th>
                                    <th>Severity</th>
                                    <th class="text-right">Created</th>
                                    <th class="text-right">Updated</th>
                                    <th class="text-right">Due</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>App crashes</td>
                                    <td>Main App</td>
                                    <td>Lewis</td>
                                    <td><span class="badge bg-danger">Open</span></td>
                                    <td>Micheal</td>
                                    <td class="text-danger">High</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saving file</td>
                                    <td>Form Screen</td>
                                    <td>James</td>
                                    <td><span class="badge bg-info">In Progress</span></td>
                                    <td>Donald</td>
                                    <td class="text-info">Low</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Login fail</td>
                                    <td>Main App</td>
                                    <td>Powell</td>
                                    <td><span class="badge bg-danger">Open</span></td>
                                    <td>Glory</td>
                                    <td class="text-danger">High</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Saving file</td>
                                    <td>Form Screen</td>
                                    <td>James</td>
                                    <td><span class="badge bg-info">In Progress</span></td>
                                    <td>Donald</td>
                                    <td class="text-info">Low</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Login fail</td>
                                    <td>Main App</td>
                                    <td>Powell</td>
                                    <td><span class="badge bg-info">In Progress</span></td>
                                    <td>Glory</td>
                                    <td class="text-danger">High</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
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
                        <table class="table table-bordered table-striped m-0">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Languages</th>
                                    <th>Population</th>
                                    <th>Median Age</th>
                                    <th>Area (Km²)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset('img/flags/1x1/id.svg') }}" class="flag-img" alt="Indonesia">Indonesia</td>
                                    <td>Indonesia (official), Sunda, Jawa, Minang, English</td>
                                    <td>7,39,000</td>
                                    <td>31.3</td>
                                    <td>1106</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/flags/1x1/sg.svg') }}" class="flag-img" alt="Singapore">Singapore</td>
                                    <td>English 79%, native and other languages</td>
                                    <td>23,630,169</td>
                                    <td>37.3</td>
                                    <td>7,739,983</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/flags/1x1/my.svg') }}" class="flag-img" alt="Malaysia">Malaysia</td>
                                    <td>Melayu (national), English, Arabic</td>
                                    <td>57,353,670</td>
                                    <td>39.1</td>
                                    <td>945,086</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/flags/1x1/ru.svg') }}" class="flag-img" alt="Russia">Russia</td>
                                    <td>Russian, others</td>
                                    <td>142,467,651</td>
                                    <td>38.4</td>
                                    <td>17,076,310</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" class="text-center">Data retrieved from <a href="#" class="link">UniPro</a> and <a href="#" class="link">Me</a>.</td>
                                </tr>
                            </tfoot>
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
                        <table class="table table-sm m-0">
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Items Bought</th>
                                    <th>Money Spent</th>
                                    <th>Last Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#00001</td>
                                    <td>Dadan</td>
                                    <td>Koswara</td>
                                    <td>+143-148-60985</td>
                                    <td>dankos@unipro.com</td>
                                    <td>250</td>
                                    <td>Rp4500</td>
                                    <td>10/10/2019 4:30pm</td>
                                </tr>
                                <tr>
                                    <td>#00002</td>
                                    <td>Nur</td>
                                    <td>Santi</td>
                                    <td>+278-119-88790</td>
                                    <td>nursanti@unipro.com</td>
                                    <td>390</td>
                                    <td>Rp3500</td>
                                    <td>12/10/2019 2:37am</td>
                                </tr>
                                <tr>
                                    <td>#00003</td>
                                    <td>Hana</td>
                                    <td>Jumariah</td>
                                    <td>+125-117-88763</td>
                                    <td>hajum@unipro.com</td>
                                    <td>135</td>
                                    <td>Rp2400</td>
                                    <td>14/10/2019 7:50pm</td>
                                </tr>
                                <tr>
                                    <td>#00004</td>
                                    <td>Abdul</td>
                                    <td>Soni</td>
                                    <td>+334-676-66530</td>
                                    <td>abson@unipro.com</td>
                                    <td>765</td>
                                    <td>Rp7890</td>
                                    <td>18/10/2019 9:30pm</td>
                                </tr>
                                <tr>
                                    <td>#00005</td>
                                    <td>Riki</td>
                                    <td>Amirul</td>
                                    <td>+435-667-99808</td>
                                    <td>rikul@unipro.com</td>
                                    <td>763</td>
                                    <td>Rp5690</td>
                                    <td>21/10/2019 3:20pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
@endpush