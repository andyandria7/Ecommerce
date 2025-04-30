<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets/uploads/favicon.png') }}">

	<!-- Stylesheets -->
	<link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }}>
	<link rel="stylesheet" href={{ asset('assets/css/font-awesome.min.css') }}>
	<link rel="stylesheet" href={{ asset("assets/css/owl.carousel.min.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/owl.theme.default.min.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/jquery.bxslider.min.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/magnific-popup.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/rating.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/spacing.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/bootstrap-touch-slider.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/animate.min.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/tree-menu.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/select2.min.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/main.css") }}>
	<link rel="stylesheet" href={{ asset("assets/css/responsive.css") }}>

	
		<title>@yield('title')</title>
		<meta name="keywords" content="">
		<meta name="description" content="">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

</head>
<body>
    @include('layouts.header')
	@yield('content')
	@include('layouts.footer')
</body>
</html>