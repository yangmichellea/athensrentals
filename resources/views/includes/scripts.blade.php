
<!-- jQuery -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js')}}"></script>

<!-- Tether -->
<script src="{{ URL::asset('js/tether.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="{{ URL::asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{ URL::asset('js/contact_me.js')}}"></script>

<!-- Theme JavaScript -->
<script src="{{ URL::asset('js/agency.min.js')}}"></script>

<script src="{{ URL::asset('js/unslider.js')}}"></script>

<script>
	jQuery(document).ready(function($) {
		$('.my-slider').unslider({
			infinite: true,
			autoplay: true,
			arrows: {
			//  Unslider default behaviour
			// prev: '<a class="unslider-arrow prev">Previous</a>',
			// next: '<a class="unslider-arrow next">Next</a>',
		}
		});
	});
</script>	