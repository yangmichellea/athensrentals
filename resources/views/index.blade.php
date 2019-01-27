@extends('layouts.master')

@section('title', 'Home')

@section('content')

     <!-- Banner -->
     <section id="banner">
          <div class="inner">
               <h2>Athens Rentals</h2>
               <p>Find your next home<br />
          </div>
          <a href="#houses" class="more scrolly">Houses</a>
     </section>

     <!-- HOUSES -->
     <section id="houses" data-stellar-background-ratio="0.5" class="wrapper white">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Houses</h2>
                              <h4>Check out our house listings!</h4>
                         </div>
                    </div>

                    <div class="row">

                         <div class="col-md-6 col-sm-12">
                              <div class="house-info">
                                   <div class="wow fadeInUp" data-wow-delay="0.2s">
                                        <h3>SNELLVILLE, GA 30078</h3>
                                   </div>

                                   <div class="wow fadeInUp" data-wow-delay="0.4s">
                                        <p>Rocking Chair Porch, Corner Lot, Fenced Yard. Nice Family Room With Fireplace, Hardwood Floors throughout first floor. Updated Kitchen with stainless steel appliances, Huge Master Basement With 2 Car Garage. Excellent family neighborhood. Friendly family oriented neighbors. Excellent home for the price.</p>
                                   </div>
                                   <div class="wow fadeInUp house-details" data-wow-delay="0.6s">
                                        <div class="house-icon">
                                             <div class="icon fas fa-bed style1"></div>
                                             <span>3 Bedrooms</span> 
                                        </div>
                                        <div class="house-icon">
                                             <div class="icon fa fa-shower style1"></div>
                                             <span>2.5 Bathrooms</span>
                                        </div>
                                        <div class="house-icon">
                                             <div class="icon fas fa-map style1"><span></span></div>
                                             <span>2,346 sqft</span>
                                        </div>
                                        <div class="btn-details">
                                             <a href="#footer" class="section-btn">More details</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-6 col-sm-12">
                              <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                   <img src="{{ URL::asset('img/placeholder.jpg')}}" class="img-responsive" alt="">
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- OTHER-->
     <section id="other" data-stellar-background-ratio="0.5" class="wrapper white">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>We also offer pool and home services</h2>
                              <h4>Check out our previous projects</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- OTHER THUMB -->
                         <div class="other-thumb">
                              <a href="{{ URL::asset('img/other/image1.jpg')}}" class="image-popup" title="New tiles">
                                   <img src="{{ URL::asset('img/other/image1.jpg')}}" class="img-responsive" alt="">

                                   <div class="other-info">
                                        <div class="other-item">
                                             <h3>New tiles</h3>
                                             <p>Retile your pool</p>
                                        </div>
                                        <div class="other-price">
                                             <span>$25 / square ft</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- OTHER THUMB -->
                         <div class="other-thumb">
                              <a href="{{ URL::asset('img/other/image2.jpg')}}" class="image-popup" title="Pool water treatment">
                                   <img src="{{ URL::asset('img/other/image2.jpg')}}" class="img-responsive" alt="">

                                   <div class="other-info">
                                        <div class="other-item">
                                             <h3>Pool water treatment</h3>
                                             <p>Salt / chlorine water </p>
                                        </div>
                                        <div class="other-price">
                                             <span>$500</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- OTHER THUMB -->
                         <div class="other-thumb">
                              <a href="{{ URL::asset('img/other/image3.jpg')}}" class="image-popup" title="Cabinet installment">
                                   <img src="{{ URL::asset('img/other/image3.jpg')}}" class="img-responsive" alt="">

                                   <div class="other-info">
                                        <div class="other-item">
                                             <h3>Cabinet installment</h3>
                                             <p>Different Styles</p>
                                        </div>
                                        <div class="other-price">
                                             <span>$34 / hr</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- OTHER THUMB -->
                         <div class="other-thumb">
                              <a href="{{ URL::asset('img/other/image4.jpg')}}" class="image-popup" title="Garden">
                                   <img src="{{ URL::asset('img/other/image4.jpg')}}" class="img-responsive" alt="">

                                   <div class="other-info">
                                        <div class="other-item">
                                             <h3>Garden</h3>
                                             <p>Landscaping / Lawn care</p>
                                        </div>
                                        <div class="other-price">
                                             <span>$28</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- OTHER THUMB -->
                         <div class="other-thumb">
                              <a href="{{ URL::asset('img/other/image5.jpg')}}" class="image-popup" title="House keeping">
                                   <img src="{{ URL::asset('img/other/image5.jpg')}}" class="img-responsive" alt="">

                                   <div class="other-info">
                                        <div class="other-item">
                                             <h3>House keeping</h3>
                                             <p>Floor / window cleaning</p>
                                        </div>
                                        <div class="other-price">
                                             <span>$15 / hr</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- OTHER THUMB -->
                         <div class="other-thumb">
                              <a href="{{ URL::asset('img/other/image6.jpg')}}" class="image-popup" title="Wooden Cabinets">
                                   <img src="{{ URL::asset('img/other/image6.jpg')}}" class="img-responsive" alt="">

                                   <div class="other-info">
                                        <div class="other-item">
                                             <h3>Wooden Cabinets</h3>
                                             <p>INstalled new kitchen cabinets</p>
                                        </div>
                                        <div class="other-price">
                                             <span>Price Negotiable</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>


               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5" >
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Testimonials</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>Houses are beautiful and clean! My cousin and I had a great time.</p>
                                        <div class="tst-author">
                                             <h4>Michelle Y.</h4>
                                             <span>Previous tenant</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Feels like I am in my own home. I might never go back home!</p>
                                        <div class="tst-author">
                                             <h4>Kendall I.</h4>
                                             <span>Current resident</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>They did a good job on my pool. Met my expectations. Will recommend to my friends!</p>
                                        <div class="tst-author">
                                             <h4>John D.</h4>
                                             <span>Previous customer</span>
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>  


@include('includes.contact')
@stop

