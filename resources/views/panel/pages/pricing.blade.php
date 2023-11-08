@extends('layouts.panel')
@section('title', 'Pricing')
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
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            
                            <!-- Pricing plan start -->
                            <div class="pricing-plan">
                                <div class="pricing-header">
                                    <h4 class="pricing-title">Basic</h4>
                                    <div class="pricing-cost">$29.00</div>
                                    <div class="pricing-save">Save $5.00</div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-features">
                                        <li>5GB Linux Web Space</li>
                                        <li>5 MySQL Databases</li>
                                        <li>500 Emails</li>
                                        <li>250Gb mothly Transfer</li>
                                        <li class="text-muted"><del>24/7 Tech Support</del></li>
                                        <li class="text-muted"><del>Daily Backups</del></li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary btn-lg">Select Plan</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing plan end -->

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            
                            <!-- Pricing plan start -->
                            <div class="pricing-plan">
                                <div class="pricing-header">
                                    <h4 class="pricing-title">Business</h4>
                                    <div class="pricing-cost">$59.00</div>
                                    <div class="pricing-save">Save $11.00</div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-features">
                                        <li>10GB Linux Web Space</li>
                                        <li>10 MySQL Databases</li>
                                        <li>1000 Emails</li>
                                        <li>750Gb mothly Transfer</li>
                                        <li>24/7 Tech Support</li>
                                        <li class="text-muted"><del>Daily Backups</del></li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary btn-lg">Select Plan</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing plan end -->

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            
                            <!-- Pricing plan start -->
                            <div class="pricing-plan">
                                <div class="pricing-header secondary">
                                    <h4 class="pricing-title">Enterprise</h4>
                                    <div class="pricing-cost">$99.00</div>
                                    <div class="pricing-save">Save $29.00</div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-features">
                                        <li>50GB Linux Web Space</li>
                                        <li>100 MySQL Databases</li>
                                        <li>Unlimited Emails</li>
                                        <li>1000Gb mothly Transfer</li>
                                        <li>24/7 Tech Support</li>
                                        <li>Daily Backups</li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-secondary btn-lg">Select Plan</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing plan end -->

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
@endpush