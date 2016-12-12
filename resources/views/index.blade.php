@extends('layouts.master')

@section('title', 'Home')


@section('content')

    <!-- Houses Section -->
    <section id="houses">
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
	                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#portfolioModal1" class="portfolio-link">
                        <img src="img/houses/buford.jpg" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray">
        <div class="container">
            <div class="row text-xs-left">
                <div class="col-md-6">
                    <a href="#portfolioModal1" class="portfolio-link">
                        <img src="img/houses/snellville.jpg" class="img-fluid" alt="">
                    </a>
                </div>
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
                    	<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@include('includes.contact')
@stop

