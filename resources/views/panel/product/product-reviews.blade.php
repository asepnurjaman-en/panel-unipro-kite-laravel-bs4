@extends('layouts.panel')
@section('title', 'Products Reviews')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="copy-print-scroll" class="table v-middle">
                            <thead>
                                <tr>
                                  <th>User</th>
                                  <th>Product</th>
                                  <th>Review</th>													  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user15.png') }}" class="media-avatar" alt="User">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Iis Suharti</a>
                                              <p>2020/09/18</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/bag.jpeg') }}" class="media-avatar-lg" alt="Product">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Leather Backpack</a>
                                              <p>ID: #FLM00987</p>
                                              <div class="rating-block">
                                                    <div class="rate2"></div>
                                                </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      Great Product. Very happy with the purchase and will surely shop for more with Leather Villa in the time to come.
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/user2.png') }}" class="media-avatar" alt="User">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">Ono</a>
                                              <p>2020/10/21</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="media-box">
                                          <img src="{{ asset('img/products/camera.jpeg') }}" class="media-avatar-lg" alt="Product">
                                          <div class="media-box-body">
                                              <a href="#" class="text-truncate">DSLR Camera</a>
                                              <p>ID: #FLM00990</p>
                                              <div class="rating-block">
                                                    <div class="rate1"></div>
                                                </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      This camera is a perfect choice if you are a beginner. The price range is decent, the camera is user friendly. 
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