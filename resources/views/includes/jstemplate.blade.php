<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/jquery-ui.js') }}"></script>
<script src="{{ asset('public/js/jquery.bootstrap.js') }}"></script>
<script src="{{ asset('public/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('public/js/jquery.owl.carousel.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>

<script>
    $.ajaxSetup({
    	  headers: {
    	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	  }
	});
</script>

@yield('googlemapsapi')