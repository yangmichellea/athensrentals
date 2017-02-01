@extends('layouts.master')
@section('title', $house->address->city)
@section('content')

<div id="show-house" class="color white">
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
	
							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>{{$house->address->street}} {{$house->address->city}} {{$house->address->state}}</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->

			@if($house->images)

			<div class="row-fluid">

				<div class="slider">
					<div id="flex1" class="flexslider">
						<ul class="slides">

							<!-- @foreach($house->images->image->url as $url) -->
								<!-- <li><div class="picture"><img src="{{$url}}"></div></li> -->
							<!-- @endforeach -->

						</ul>
					</div>
				</div>

			</div>

			@endif

			<!-- start: Portfolio -->
			<div id="portfolio-wrapper" class="row-fluid">
								
				<div class="span12">
					<p>{{$house->homeDescription}}</p>
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					
					<div>

						<div class="item-description alt">
							<ul>
								<li>Bedrooms: 				{{$house->editedFacts->bedrooms}}</li>
								<li>Bathrooms: 				{{$house->editedFacts->bathrooms}}</li>
								<li>Year built: 			{{$house->editedFacts->yearBuilt}}</li>
								<li>Floors: 				{{$house->editedFacts->numFloors}}</li>
								<li>Rooms: 					{{$house->editedFacts->numRooms}}</li>
								<li>Roof: 					{{$house->editedFacts->roof}}</li>
								<li>Exterior: 				{{$house->editedFacts->exteriorMaterial}}</li>
								<li>Parking: 				{{$house->editedFacts->parkingType}}</li>
								<li>Covered parking spaces: {{$house->editedFacts->coveredParkingSpaces}}</li>
								<li>Heating sources: 		{{$house->editedFacts->heatingSources}}</li>
								<li>Cooling system: 		{{$house->editedFacts->coolingSystem}}</li>
								<li>Appliances: 			{{$house->editedFacts->appliances}}</li>
								<li>Floor covering: 		{{$house->editedFacts->floorCovering}}</li>
								<li>Rooms: 					{{$house->editedFacts->rooms}}</li>
							</ul>
						</div>
					</div>	
				</div>

				<div class="span7 portfolio-item website html5 css3 responsive">
					<div class="picture">
							<div class="item-description alt">
								<h5>${{$zestimate->zestimate->amount}}</h5>
						</div>
					</div>
				</div>

			</div>
			<!-- end: Portfolio -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>

@stop

