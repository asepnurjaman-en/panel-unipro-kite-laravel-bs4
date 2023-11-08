@extends('layouts.panel')
@section('title', 'Orders')
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
                                  <th>Order</th>
                                  <th>User ID</th>
                                  <th>Purchase Date</th>
                                  <th>Amount</th>
                                  <th>Payment Status</th>
                                  <th>Order Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/ring.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Ring</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00435</td>
                                  <td>2020/09/21</td>
                                  <td>$46.00</td>
                                  <td>
                                      <span class="text-danger"><i class="icon-x-circle"></i> Failed</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-danger">Cancelled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/pencils.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Pencils</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00878</td>
                                  <td>2020/10/25</td>
                                  <td>$87.00</td>
                                  <td>
                                      <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-info">Processing</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/camera.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Camera</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00370</td>
                                  <td>2020/10/30</td>
                                  <td>$65.00</td>
                                  <td>
                                      <span class="text-success"><i class="icon-check-circle"></i> Paid</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-success">Delivered</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/shirt.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Shirt</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00983</td>
                                  <td>2020/10/10</td>
                                  <td>$55.00</td>
                                  <td>
                                      <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-info">Processing</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/clock.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Wall Clock</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00760</td>
                                  <td>2020/10/15</td>
                                  <td>$74.00</td>
                                  <td>
                                      <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-info">Processing</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/toy.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Toy</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00435</td>
                                  <td>2020/10/12</td>
                                  <td>$88.00</td>
                                  <td>
                                      <span class="text-danger"><i class="icon-x-circle"></i> Failed</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-danger">Cancelled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/shoes.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Shoes</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00878</td>
                                  <td>2020/10/11</td>
                                  <td>$87.00</td>
                                  <td>
                                      <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-info">Processing</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/ring.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Gold Ring</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00435</td>
                                  <td>2020/09/21</td>
                                  <td>$46.00</td>
                                  <td>
                                      <span class="text-danger"><i class="icon-x-circle"></i> Failed</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-danger">Cancelled</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/shirt.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Pens</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00878</td>
                                  <td>2020/10/25</td>
                                  <td>$87.00</td>
                                  <td>
                                      <span class="text-info"><i class="icon-slash"></i> Awaiting</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-info">Processing</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/shoes.jpeg') }}" class="media-avatar" alt="Products">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Dslr Camera</a>
                                          </div>
                                      </div>
                                  </td>
                                  <td>FLM00370</td>
                                  <td>2020/10/30</td>
                                  <td>$65.00</td>
                                  <td>
                                      <span class="text-success"><i class="icon-check-circle"></i> Paid</span>
                                  </td>
                                  <td>
                                      <span class="badge bg-success">Delivered</span>
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