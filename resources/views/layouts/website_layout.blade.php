<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="@yield('description','Swachha Dombivli Abhiyan')">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:image" content="{{asset('website/img/core-img/logo.jpg')}}">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	@stack('meta')
	<!-- Title -->
	<title>Swachha Dombivli Abhiyan | @yield('title')</title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicons/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('favicons/manifest.json')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{asset('/ms-icon-144x144.png')}}">
	<meta name="theme-color" content="#ffffff">
	<!-- Core Stylesheet -->
	<link rel="stylesheet" rel="preload" href="{{url(mix('css/vendor.css'))}}">
	<link rel="stylesheet" rel="preload" href="{{url(mix('css/website.css'))}}">
	@stack('styles')
</head>
<body>
	<!-- Preloader -->
	<!-- <div class="preloader d-flex align-items-center justify-content-center">
		<div class="spinner"></div>
	</div> -->
	@include('includes.navbar')
	@yield('page_content')
	@include('includes.footer')
	<!-- ##### All Javascript Files ##### -->
	<script src="{{url(mix('js/vendor.js'))}}"></script>
	@stack('scripts')
	@if (App::environment()=='production')
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-147507803-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-147507803-1');
	</script>
	@endif
</body>
</html>