@extends('layouts.panel')
@section('title', 'Search Results')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Search results start -->
            <div class="search-results-container">

                <!-- Row start -->
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <div class="input-group">														
                                <input type="text" class="form-control" placeholder="Search Here">
                                <button class="btn btn-primary" type="button">Search</button>
                            </div>
                            <div class="field-placeholder">Search</div>
                        </div>
                        <!-- Field wrapper end -->
                    </div>
                </div>
                <!-- Row end -->

                <div class="search-results-header">
                    <div class="search-results-title">Results: <span>1-5 of 225</span></div>
                </div>
                <div class="search-results-body">
                    <div class="search-results-block">
                        <p class="title">Chocolate Cake</p>
                        <a class="link" href="#">https://www.chocolatecake.com</a>
                        <p class="desc">Smashing Magazine is a website and eBook publisher that offers editorial content and professional resources for web developers and web designers.</p>
                    </div>

                    <div class="search-results-block">
                        <p class="title">Choco Hazelnut</p>
                        <a class="link" href="#">https://www.chocohazelnut.com</a>
                        <p class="desc">The awards that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                    </div>

                    <div class="search-results-block">
                        <p class="title">Belgian Truffle</p>
                        <a class="link" href="#">https://www.belgiantruffle.com</a>
                        <p class="desc">Creative Bloq is a web design blog that delivers a daily balance of creative tips and help you find design inspiration across web design, graphic design, 3D and more.</p>
                    </div>

                    <div class="search-results-block">
                        <p class="title">Regal Raspberry</p>
                        <a class="link" href="#">https://regalraspberry.com</a>
                        <p class="desc">Dedignmodo is a design and web development blog. They provide design, web development, premium products, quality freebies.</p>
                    </div>

                    <div class="search-results-block">
                        <p class="title">Royal Framboise</p>
                        <a class="link" href="#">https://www.royaframboise.com</a>
                        <p class="desc">Web Design Resources for Web Designers. We include Photoshop Tutorials, WordPress Plugins, and Web Development tools. Download free icons, Photoshop brushes and tools for web and graphic designers.</p>
                    </div>

                    <div class="search-results-block">
                        <p class="title">Red Velvet</p>
                        <a class="link" href="#">https://redvelvet.net</a>
                        <p class="desc">If you’re looking for a different type of a font to make your design stand out, a cursive font can be a great choice. Cursive and script fonts aren’t new, but they’re a less common choice for many designers. This gives you a chance to use cursive fonts to add some originality to your next project.</p>
                    </div>

                    <div class="search-results-block">
                        <p class="title">Banana Walnut</p>
                        <a class="link" href="#">https://bananawalnut.com</a>
                        <p class="desc">Medium taps into the brains of the world’s most insightful writers, thinkers, and storytellers to bring you the smartest takes on topics that matter. So whatever your interest, you can always find fresh thinking and unique perspectives.</p>
                    </div>

                    <div class="search-results-footer">
                        <nav aria-label="Page Navigation">
                            <ul class="pagination m-0">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Search results end -->

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