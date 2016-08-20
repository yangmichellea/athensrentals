
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/isotope.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.imagesloaded.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/flexslider.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/carousel.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/fancybox.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/twitter.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/modernizr.custom.79639.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.ba-cond.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.slitslider.js')}}"></script>

<script type="text/javascript" src="{{ URL::asset('js/excanvas.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.flot.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.flot.pie.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.flot.stack.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.flot.resize.min.js')}}"></script>

<script defer="defer" src="{{ URL::asset('js/custom.js')}}"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>
<!-- end: Java Script -->
