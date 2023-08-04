<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Satner Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
	<link rel="stylesheet" href="{{asset("assets/vendors/linericon/style.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}">
	<link rel="stylesheet" href="{{asset("assets/vendors/owl-carousel/owl.carousel.min.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}">
	<link rel="stylesheet" href="{{asset("assets/vendors/nice-select/css/nice-select.css")}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>

<body>

	<!--================ Start Header Area =================-->
        @include('includes.navbar')
	<!--================ End Header Area =================-->

    {{-- loading area  --}}
    <div class="d-none"  id="loading">
        <h2 class="">Loading</h2>
    </div>
    {{-- loading area end --}}

    {{-- content area  --}}
    <div class="" id="client_content">
        @yield('content')
    </div>
     {{-- content area  --}}

	<!--================Footer Area =================-->
    @include('includes.footer')
	<!--================End Footer Area =================-->


	<script src="{{asset("assets/js/jquery-3.2.1.min.js")}}"></script>
	<script src="{{asset("assets/js/popper.js")}}"></script>
	<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("assets/js/stellar.js")}}"></script>
	<script src="{{asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
	<script src="{{asset("assets/vendors/nice-select/js/jquery.nice-select.min.js")}}"></script>
	<script src="{{asset("assets/vendors/isotope/imagesloaded.pkgd.min.js")}}"></script>
	<script src="{{asset("assets/vendors/isotope/isotope-min.js")}}"></script>
	<script src="{{asset("assets/vendors/owl-carousel/owl.carousel.min.js")}}"></script>
	<script src="{{asset("assets/js/jquery.ajaxchimp.min.js")}}"></script>
	<script src="{{asset("assets/js/mail-script.js")}}"></script>
	<!--gmaps Js-->
	<script src="{{asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE")}}"></script>
	<script src="{{asset("assets/js/gmaps.min.js")}}"></script>
	<script src="{{asset("assets/>js/theme.js")}}"></script>
</body>

</html>