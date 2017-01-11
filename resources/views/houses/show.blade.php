@extends('layouts.master')
@section('title', 'House')
@section('content')


    <section class="bg-theme-color">
        <div class="container">
            <div class="row text-xs-right">
                <div class="col-md-6">
                    <h4 class="house-heading">2992 Summit Peak Way,</h4>
                    <h4 class="house-subheading">Snellville, GA 30078</h4>

                    <div class="house-details">
	                    <span>
	                    	<i class="fa fa-bed" aria-hidden="true"></i> 3 beds
	                    </span>
	                    <span>
	                    	<i class="fa fa-bath" aria-hidden="true"></i> 2.5 baths
	                    </span> 
	                    <span>
	                    	<i class="fa fa-map" aria-hidden="true"></i> 2,346 sqft
	                    </span>
	                    <h4 class="theme-color">$178,162</h4>
                    	<p class="text-muted">Rocking Chair Porch, Corner Lot, Fenced Yard. Nice Family Room With Fireplace, Hardwood Floors throughout first floor. Eat In Kitchen, updated Kitchen with stainless steel appliances, Huge Master Basement With 2 Car Garage. Huge fenced in back yard.Beautiful home for the money. A MUST SEE!Neighborhood DescriptionExcellent...</p>
                    </div>
                </div>
                <div class="col-md-6">

					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
                        		<img src="{{ URL::asset('img/portfolio/dreams.png')}}" class="img-fluid" alt="">
							</div>

							<div class="item">
                        		<img src="{{ URL::asset('img/portfolio/dreams.png')}}" class="img-fluid" alt="">
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
                </div>
            </div>
        </div>
    </section>

<section>

2992 Summit Peak Way,
Snellville, GA 30078
3 beds 2.5 baths 2,346 sqft Edit

 OFF MARKET
Zestimate®: $257,578
Price this home
Rent Zestimate®: $1,900 /mo

	<p>Rocking Chair Porch, Corner Lot, Fenced Yard. Nice Family Room With Fireplace, Hardwood Floors throughout first floor. Eat In Kitchen, updated Kitchen with stainless steel appliances, Huge Master Basement With 2 Car Garage. Huge fenced in back yard.Beautiful home for the money. A MUST SEE!Neighborhood DescriptionExcellent family neighborhood. Friendly family oriented neighbors.1 year lease with deposit of one month plus first month.Excellent home for the price.Need to rent ASAP.</p>

	<div class="item-description alt">
		<ul>
			<li>Bedrooms: 				3</li>
			<li>Bathrooms: 				2.5</li>
			<li>Year built: 			1992</li>
			<li>Floors: 				2</li>
			<li>Rooms: 					6</li>
			<li>Roof: 					Shake / Shingle</li>
			<li>Exterior: 				Vinyl</li>
			<li>Parking: 				Garage - Attached</li>
			<li>Covered parking spaces: 2</li>
			<li>Heating sources: 		Gas</li>
			<li>Cooling system: 		Central</li>
			<li>Appliances: 			Dishwasher, Garbage disposal, Range / Oven</li>
			<li>Floor covering: 		Hardwood</li>
			<li>Rooms: 					Master bath, Family room, Dining room</li>
		</ul>
	</div>
	
</section>

@stop

