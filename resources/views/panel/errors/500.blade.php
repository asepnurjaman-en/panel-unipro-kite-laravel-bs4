
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
		<title>500 - {{ config('app.name') }} Error</title>


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
		<!-- Particles CSS -->		
		<link rel="stylesheet" href="{{ asset('vendor/particles/particles.css') }}">

	</head>

	<body class="error-page">

		<div id="particles-js"></div>
		<div class="countdown-bg"></div>

		<div class="error-screen">
			<h1>500</h1>
			<h5>We're sorry but it looks<br/>like that page doesn't works properly.</h5>
			<a href="{{ route('panel.dashboard.index') }}" class="btn stripes-btn">Go back to Dashboard</a>
		</div>

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('js/moment.js') }}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Particles JS -->		
		<script src="{{ asset('vendor/particles/particles.min.js') }}"></script>
		<script src="{{ asset('vendor/particles/particles-custom-error.js') }}"></script>

	</body>
</html>