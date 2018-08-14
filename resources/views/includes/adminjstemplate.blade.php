<!-- jQuery 3 -->
<script src="{{ asset('public/css/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('public/css/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('public/css/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/css/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/css/admin/dist/js/demo.js') }}"></script>
<!-- CK Editor -->
<script src="{{ asset('public/css/admin/bower_components/ckeditor/ckeditor.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('public/css/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<script>
    $.ajaxSetup({
    	  headers: {
    	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	  }
	});
</script>


@yield('pageinlinejs')

<script type="text/javascript">
        var SITE_URL = "{{ env('APP_URL') }}";
    </script>
    <!-- Fonts -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/analytics-laravel/app.css') }}" />