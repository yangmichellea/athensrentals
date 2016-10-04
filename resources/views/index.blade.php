@extends('layouts.master')

@section('title', 'Home')



@section('content')

	<!-- start: 4th Page - Portfolio -->
	<div id="houses" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
	
							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>Athens Rentals</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Flexslider -->
			<a href="{{URL::route('houses')}}">
				<div class="slider">
					<div id="flex1" class="flexslider">
						<ul class="slides">

							<li><div class="picture"><img src="img/slider/slider1.jpg" alt="" /></div></li>

							<li><div class="picture"><img src="img/slider/slider2.jpg" alt="" /></div></li>

							<li><div class="picture"><img src="img/slider/slider3.jpg" alt="" /></div></li>

						</ul>
					</div>
				</div>
			</a>
			<!-- end: Flexslider -->

			<!-- start: Portfolio -->
			<div id="portfolio-wrapper" class="row-fluid">
			
				@foreach($houses as $house)				
				<div class="span4 portfolio-item website html5 css3 responsive">
					
					<div class="picture"><a href="http://smart.bootstrapmaster.com" title="Smart Responsive Template"><img src="img/placeholder.jpg" alt=""/><div class="image-overlay-link"></div></a>
					
						<div class="item-description alt">
							<h5><a href="http://smart.bootstrapmaster.com">{{$house->address->city}}, {{$house->address->state}}</a></h5>
							<p>
								{{str_limit($house->homeDescription, $limit = 200, $end='...')}} 
							</p>
						</div>
					</div>	
				</div>
				@endforeach

			</div>
			<!-- end: Portfolio -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 4th Page - Portfolio -->
@include('includes.contact')
@stop

