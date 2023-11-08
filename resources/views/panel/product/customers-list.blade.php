@extends('layouts.panel')
@section('title', 'Customers')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="copy-print-csv" class="table v-middle">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                  <th>Customer</th>
                                  <th>Phone</th>
                                  <th>Status</th>
                                  <th>Orders</th>
                                  <th>Last Order</th>													  
                                  <th>Amount</th>
                                  <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/flags/1x1/id.svg') }}" class="img-flag" alt="Country">
                                    </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user5.png') }}" class="media-avatar" alt="Customer">
                                          <div class="media-box-body">
                                              <a href="#">Faisal</a>
                                              <p>ID: #FLM00987</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>030-998-03437</td>
                                  <td>
                                      <span class="badge bg-success">Active</span>
                                  </td>
                                  <td>61</td>
                                  <td>2020/09/18</td>
                                  <td>$12309</td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block">
                                              <i class="icon-slash text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/flags/1x1/id.svg') }}" class="img-flag" alt="Country">
                                    </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user2.png') }}" class="media-avatar" alt="Customer">
                                          <div class="media-box-body">
                                              <a href="#">Susanti</a>
                                              <p>ID: #FLM00763</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>067-676-98320</td>
                                  <td>
                                      <span class="badge bg-success">Active</span>
                                  </td>
                                  <td>87</td>
                                  <td>2020/10/25</td>
                                  <td>$32800</td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block">
                                              <i class="icon-slash text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/flags/1x1/sy.svg') }}" class="img-flag" alt="Country">
                                    </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user8.png') }}" class="media-avatar" alt="Customer">
                                          <div class="media-box-body">
                                              <a href="#">Sarah</a>
                                              <p>ID: #FLM00582</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>009-543-77650</td>
                                  <td>
                                      <span class="badge bg-success">Active</span>
                                  </td>
                                  <td>34</td>
                                  <td>2020/10/22</td>
                                  <td>$65890</td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block">
                                              <i class="icon-slash text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/flags/1x1/my.svg') }}" class="img-flag" alt="Country">
                                    </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user12.png') }}" class="media-avatar" alt="Customer">
                                          <div class="media-box-body">
                                              <a href="#">Kak Ros</a>
                                              <p>ID: #FLM00554</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>067-676-98320</td>
                                  <td>
                                      <span class="badge bg-success">Active</span>
                                  </td>
                                  <td>21</td>
                                  <td>2020/10/10</td>
                                  <td>$25678</td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block">
                                              <i class="icon-slash text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/flags/1x1/sg.svg') }}" class="img-flag" alt="Country">
                                    </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user19.png') }}" class="media-avatar" alt="Customer">
                                          <div class="media-box-body">
                                              <a href="#">Jon Pantau</a>
                                              <p>ID: #FLM00831</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>002-434-66659</td>
                                  <td>
                                      <span class="badge bg-success">Active</span>
                                  </td>
                                  <td>55</td>
                                  <td>2020/10/21</td>
                                  <td>$24571</td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block">
                                              <i class="icon-slash text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/flags/1x1/se.svg') }}" class="img-flag" alt="Country">
                                    </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user16.png') }}" class="media-avatar" alt="Customer">
                                          <div class="media-box-body">
                                              <a href="#">Kuyun</a>
                                              <p>ID: #FLM00831</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>334-789-54545</td>
                                  <td>
                                      <span class="badge bg-success">Active</span>
                                  </td>
                                  <td>87</td>
                                  <td>2020/10/30</td>
                                  <td>$7769</td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block">
                                              <i class="icon-slash text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
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

</div>
<!-- Content wrapper end -->
@endsection

@push('style')
<!-- Data Tables -->
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />
<link href="{{ asset('vendor/datatables/buttons.bs.css') }}" rel="stylesheet" />
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