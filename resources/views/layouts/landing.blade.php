<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fawaidac_</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/code.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/mag`nific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    

</head>
<body>
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
		@include('layouts.header');

	<!-- hero area -->
	@yield('container')
	<!-- end latest news -->

	<!-- footer -->
	@include('layouts.footerlanding')
	<!-- end-footer -->
	
	<!-- jquery -->
	<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ asset('assets/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ asset('assets/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>