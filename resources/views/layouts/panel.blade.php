<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="{{ asset('img/fav.png') }}" />

		<!-- Title -->
		<title>@yield('title') | {{ config('app.name') }}</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset('fonts/style.css') }}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Mega Menu -->
		<link rel="stylesheet" href="{{ asset('vendor/megamenu/css/megamenu.css') }}">

		<!-- Search Filter JS -->
		<link rel="stylesheet" href="{{ asset('vendor/search-filter/search-filter.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/search-filter/custom-search-filter.css') }}">
		@stack('style')
	</head>
	<body>

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
            @include('layouts.panel-nav')

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

                @include('layouts.panel-header')

                <!-- Content wrapper scroll start -->
                <div class="content-wrapper-scroll">

				    @yield('content')
                    
                    <!-- App footer start -->
                    <div class="app-footer">© Uni Pro Admin 2021</div>
                    <!-- App footer end -->

                </div>
                <!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('js/modernizr.js') }}"></script>
		<script src="{{ asset('js/moment.js') }}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->
		
		<!-- Megamenu JS -->
		<script src="{{ asset('vendor/megamenu/js/megamenu.js') }}"></script>
		<script src="{{ asset('vendor/megamenu/js/custom.js') }}"></script>

		<!-- Slimscroll JS -->
		<script src="{{ asset('vendor/slimscroll/slimscroll.min.js') }}"></script>
		<script src="{{ asset('vendor/slimscroll/custom-scrollbar.js') }}"></script>

		<!-- Search Filter JS -->
		<script src="{{ asset('vendor/search-filter/search-filter.js') }}"></script>
		<script src="{{ asset('vendor/search-filter/custom-search-filter.js') }}"></script>

        @stack('script')

		<!-- Main Js Required -->
		<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>