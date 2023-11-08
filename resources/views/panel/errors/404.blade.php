
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
		<title>404 - {{ config('app.name') }} Not Found</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	</head>

	<body>

		<div class="error-screen2">
			<img src="{{ asset('img/error-screen/globe.svg') }}" class="earth" alt="Earth" />
			<img src="{{ asset('img/error-screen/full-moon.png') }}" class="moon" alt="Moon" />
			<img src="{{ asset('img/error-screen/rocket.svg') }}" class="rocket" alt="Rocket" />
			<div class="contents">
				<h1>404</h1>
				<h5>We're sorry but it looks <br>like that page doesn't exist anymore.</h5>
				<a href="{{ route('panel.dashboard.index') }}" class="btn stripes-btn">Back to Home</a>
			</div>
			<div class="astronaut-container">
                <img class="astronaut" src="{{ asset('img/error-screen/astronaut.png') }}" alt="Uni Pro Admin">
            </div>
        </div>

	</body>
</html>