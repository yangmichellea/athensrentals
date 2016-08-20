@extends('layouts.master')

@section('title', 'Page Title')



@section('content')
	<!-- start: 1st Page - Home -->
	<div id="home">

		<div class="demo-1">

	        <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<a href="">
								<div class="deco" data-icon="S"></div>
							</a>
							<h2>Snellville</h2>
							<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="D"></div>
							<h2>Deerfield</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-4" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="B"></div>
							<h2>Buford</h2>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
						</div>
					</div>

				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

	    </div>

	</div>
	<!-- end: 1st Page - Home -->

	<!-- start: 4th Page - Portfolio -->
	<div id="portfolio" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
	
							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>Homes</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Flexslider -->
			<div class="slider">
				<div id="flex1" class="flexslider">
					<ul class="slides">

						<li><div class="picture"><img src="img/slider/slider1.jpg" alt="" /></div></li>

						<li><div class="picture"><img src="img/slider/slider2.jpg" alt="" /></div></li>

						<li><div class="picture"><img src="img/slider/slider3.jpg" alt="" /></div></li>

					</ul>
				</div>
			</div>
			<!-- end: Flexslider -->

			<!-- start: Portfolio -->
			<div id="portfolio-wrapper" class="row-fluid">
								
				<div class="span4 portfolio-item website html5 css3 responsive">
					
					<div class="picture"><a href="http://smart.bootstrapmaster.com" title="Smart Responsive Template"><img src="img/portfolio/smart.png" alt=""/><div class="image-overlay-link"></div></a>
					
						<div class="item-description alt">
							<h5><a href="http://smart.bootstrapmaster.com">Smart Responsive Bootstrap Template</a></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>	
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture">
						<a href="http://acme.bootstrapmaster.com" title="Title"><img src="img/portfolio/great.png" alt=""/><div class="image-overlay-link"></div></a>
							<div class="item-description alt">
								<h5><a href="http://acme.bootstrapmaster.com">Great Responsive Bootstrap Template</a></h5>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							</p>
						</div>
					</div>
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="http://magnus.bootstrapmaster.com" title="Title"><img src="img/portfolio/magnus.png" alt=""/><div class="image-overlay-link"></div></a>
						<div class="item-description alt">
							<h5><a href="http://magnus.bootstrapmaster.com">Magnus Responsive Bootstrap Template</a></h5>
							<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							</p>
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
	<!-- end: 4th Page - Portfolio -->
@stop