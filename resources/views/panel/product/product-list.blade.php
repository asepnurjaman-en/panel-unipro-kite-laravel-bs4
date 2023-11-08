@extends('layouts.panel')
@section('title', 'Products')
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
                                  <th>Products</th>
                                  <th>Ratings</th>
                                  <th>Category</th>													  
                                  <th>Added Date</th>													  
                                  <th>Amount</th>
                                  <th>Qnty</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/bag.jpeg') }}" class="media-avatar" alt="Product">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Leather Backpack</a>
                                              <p>ID: #FLM00987</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="rating-block">
                                            <div class="rate2"></div>
                                        </div>
                                  </td>
                                  <td>
                                      Backpacks
                                  </td>													  
                                  <td>2020/09/18</td>
                                  <td>$21.00</td>
                                  <td>65</td>
                                  <td>
                                      <span class="badge bg-success">Available</span>
                                  </td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/camera.jpeg') }}" class="media-avatar" alt="Product">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">DSLR Camera</a>
                                              <p>ID: #FLM00990</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="rating-block">
                                            <div class="rate1"></div>
                                        </div>
                                  </td>
                                  <td>
                                      Cameras
                                  </td>													  
                                  <td>2020/10/21</td>
                                  <td>$567.00</td>
                                  <td>24</td>
                                  <td>
                                      <span class="badge bg-success">Available</span>
                                  </td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/clock.jpeg') }}" class="media-avatar" alt="Product">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Wall Clock</a>
                                              <p>ID: #FLM00324</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="rating-block">
                                            <div class="rate5"></div>
                                        </div>
                                  </td>
                                  <td>
                                      Clock
                                  </td>													  
                                  <td>2020/10/24</td>
                                  <td>$231.00</td>
                                  <td>15</td>
                                  <td>
                                      <span class="badge bg-success">Available</span>
                                  </td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/drone.jpeg') }}" class="media-avatar" alt="Product">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Drone</a>
                                              <p>ID: #FLM00876</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="rating-block">
                                            <div class="rate3"></div>
                                        </div>
                                  </td>
                                  <td>
                                      Drones
                                  </td>													  
                                  <td>2020/10/27</td>
                                  <td>$879.00</td>
                                  <td>34</td>
                                  <td>
                                      <span class="badge bg-success">Available</span>
                                  </td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
                                          </a>
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                              <i class="icon-x-circle text-danger"></i>
                                          </a>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/toy.jpeg') }}" class="media-avatar" alt="Product">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Toy</a>
                                              <p>ID: #FLM00760</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="rating-block">
                                            <div class="rate3"></div>
                                        </div>
                                  </td>
                                  <td>
                                      Toys
                                  </td>													  
                                  <td>2020/10/22</td>
                                  <td>$32.00</td>
                                  <td>98</td>
                                  <td>
                                      <span class="badge bg-success">Available</span>
                                  </td>
                                  <td>
                                      <div class="actions">
                                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                              <i class="icon-edit1 text-info"></i>
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
<!-- Rating JS -->
<script src="{{ asset('vendor/rating/raty.js') }}"></script>
<script src="{{ asset('vendor/rating/raty-custom.js') }}"></script>

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