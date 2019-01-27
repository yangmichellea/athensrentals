<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Athens Rentals - @yield('title')</title> 

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="description" content="Athens Rentals and Home Services">
		<meta name="keywords" content="HTML, Laravel, web, css3">
		<meta name="author" content="Michelle Yang">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- start: Facebook Open Graph -->
		<meta property="og:title" content="Athens Rentals"/>
		<meta property="og:description" content="Rentals and Home Services"/>
		<meta property="og:type" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:image" content=""/>
		<!-- end: Facebook Open Graph -->

		@include('includes.css')
	</head>
	<body class="landing">

<!-- Page Wrapper -->
	<div id="page-wrapper">
	     
			@include('partials.header')
			<!-- @yield('sidebar') -->

			@yield('content')	
			@include('partials.footer')
	</div>
	@include('includes.scripts')

	</body>
</html>