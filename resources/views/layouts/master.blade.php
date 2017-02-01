<!DOCTYPE html>
    <head>
		<!-- start: Meta -->
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Athens Rentals - @yield('title')</title> 
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
	<body id="page-top">

	    <!-- Navigation -->
	    <nav id="mainNav" class="navbar navbar-fixed-top">
	        <div class="container">
	            <a class="navbar-brand page-scroll" href="#page-top">Athens Rentals</a>
	            <button class="btn btn-primary btn-toggle hidden-md-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fa fa-bars"></i></button>
	            <!-- Clearfix with a utility class added to allow for better navbar responsiveness. -->
	            <div class="clearfix hidden-md-up"></div>
	            <div class="collapse navbar-toggleable-sm" id="navbarResponsive">
	                <ul class="nav navbar-nav float-md-right">
	                    <li class="nav-item">
	                        <a class="nav-link page-scroll" href="#houses">Houses</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link page-scroll" href="#contact">Contact</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </nav>

    	<!-- @yield('sidebar') -->

        @yield('content')	
        @include('partials.footer')
        @include('includes.scripts')
    </body>
</html>