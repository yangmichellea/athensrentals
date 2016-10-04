<html>
    <head>
		<!-- start: Meta -->
		<meta charset="utf-8">
		<title>Athens Rentals - @yield('title')</title> 
		<meta name="description" content="Essentia Responsive Bootstrap Theme by Bootstrap Master"/>
		<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
		<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
		<!-- end: Meta -->
		
		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- end: Mobile Specific -->
		
		<!-- start: Facebook Open Graph -->
		<meta property="og:title" content=""/>
		<meta property="og:description" content=""/>
		<meta property="og:type" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:image" content=""/>
		<!-- end: Facebook Open Graph -->

        @include('includes.css')
    </head>
    <body>
    	@include('partials.header')
    	<!-- @yield('sidebar') -->

        @yield('content')	
        @include('partials.footer')
        @include('includes.scripts')

    </body>
</html>