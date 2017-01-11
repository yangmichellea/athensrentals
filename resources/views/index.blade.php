@extends('layouts.master')
@include('partials.header')
@section('title', 'Home')
@section('content')

    <!-- Houses Section -->
    <section id="houses">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-xs-center">
                    <h2 class="section-heading">Houses</h2>
                    <h3 class="section-subheading text-muted">Take a peek at our available houses</h3>
                </div>
            </div>

            <div class="row text-xs-left">
                <div class="col-md-6">
                    <a href="{{route('show_house',['zpid'=>'58608274'])}}" class="portfolio-link">
                        <img src="img/houses/buford.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <h4 class="house-heading">2372 Saint Kennedy Ln,</h4>
                    <h4 class="house-subheading">Buford, GA 30518</h4>

                    <div class="house-details">
                        <span class="bg-circle">
	                    	<i class="fa fa-bed" aria-hidden="true"></i> 4 beds
	                    </span>
                        <span class="bg-circle">
	                    	<i class="fa fa-bath" aria-hidden="true"></i> 2.5 baths
	                    </span> 
                        <span class="bg-circle">
	                    	<i class="fa fa-map" aria-hidden="true"></i> 3,679 sqft
	                    </span>
	                    <h4 class="theme-color">$310,375</h4>
	                    <p class="text-muted">PRICE REDUCED AGAIN!NEW PAINT AND CARPET. Absolutely b'ful. Nicely laid out floor plan. Located in Windsor at Lanier, lots of space for your family here. Come inside and see the hdwds, frml living and dining rms to host your parties. Big bright and sunny kitchen with upgraded cherry cabinets and wonderful brkfst nook. Huge...</p>
                    </div>
                    <a href="{{route('show_house',['zpid'=>'58608274'])}}">Read more...</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray">
        <div class="container">
            <div class="row text-xs-left">
                <div class="col-md-6">
                    <a href="{{route('show_house',['zpid'=>'14712194'])}}" class="portfolio-link">
                        <img src="img/houses/snellville.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <h4 class="house-heading">2992 Summit Peak Way,</h4>
                    <h4 class="house-subheading">Snellville, GA 30078</h4>

                    <div class="house-details">
	                    <span class="bg-circle">
	                    	<i class="fa fa-bed" aria-hidden="true"></i> 3 beds
	                    </span>
                        <span class="bg-circle">
	                    	<i class="fa fa-bath" aria-hidden="true"></i> 2.5 baths
	                    </span> 
                        <span class="bg-circle">
	                    	<i class="fa fa-map" aria-hidden="true"></i> 2,346 sqft
	                    </span>
	                    <h4 class="theme-color">$178,162</h4>
                    	<p class="text-muted">Rocking Chair Porch, Corner Lot, Fenced Yard. Nice Family Room With Fireplace, Hardwood Floors throughout first floor. Eat In Kitchen, updated Kitchen with stainless steel appliances, Huge Master Basement With 2 Car Garage. Huge fenced in back yard.Beautiful home for the money. A MUST SEE!Neighborhood DescriptionExcellent...</p>
                    </div>
                    <a href="{{route('show_house',['zpid'=>'14712194'])}}">Read more...</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row text-xs-left">
                <div class="col-md-6">
                    <a href="{{route('show_house',['zpid'=>'42929416'])}}" class="portfolio-link">
                        <img src="img/houses/deerfield.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <h4 class="house-heading">332 SE 11th St,</h4>
                    <h4 class="house-subheading">Deerfield Beach, FL 33441</h4>

                    <div class="house-details">
                        <span class="bg-circle">
                            <i class="fa fa-bed" aria-hidden="true"></i> 3 beds
                        </span>
                        <span class="bg-circle">
                            <i class="fa fa-bath" aria-hidden="true"></i> 1.5 baths
                        </span> 
                        <span class="bg-circle">
                            <i class="fa fa-map" aria-hidden="true"></i> 1,398 sqft
                        </span>
                        <h4 class="theme-color">$257,578</h4>
                        <p class="text-muted">332 SE 11th St Deerfield Beach, FL is a single family home that contains 1,398 sq ft and was built in 1971. It contains 3 bedrooms and 1.5 bathrooms. This home last sold for $71,500 in June 1993. It contains 3 bedrooms and 1.5 bathrooms.</p>
                    </div>
                    <a href="{{route('show_house',['zpid'=>'42929416'])}}">Read more...</a>
                </div>
            </div>
        </div>
    </section>

@include('includes.contact')
@stop

