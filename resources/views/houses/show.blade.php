@extends('layouts.master')
@section('title', 'House')
@section('content')

    <section class="bg-theme-color">
        <div class="container">
            <div class="row text-xs-right">
                <div class="col-md-7">
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
                <div class="col-md-5">

					<div class="my-slider">
						<ul>
							<li><img src="{{ URL::asset('img/portfolio/dreams.png')}}" class="img-fluid" alt=""></li>
							<li><img src="{{ URL::asset('img/portfolio/dreams.png')}}" class="img-fluid" alt=""></li>
							<li><img src="{{ URL::asset('img/portfolio/dreams.png')}}" class="img-fluid" alt=""></li>
						</ul>
					</div>

                </div>
            </div>

		    <div class="row">
		    	<div>
		    		<ul>
		    			<li>OFF MARKET</li>
						<li>Zestimate®: $257,578</li>
						<li>Price this home</li>
						<li>Rent Zestimate®: $1,900 /mo</li>
					</ul>
		    	</div>

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
			</div>

        </div>
    </section>

@stop

