<!-- jQuery 3 -->
<script src="{{ asset('public/css/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('public/css/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('public/css/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->{{ asset('public/css/admin/dist/js/adminlte.min.js') }}
<script src="{{ asset('public/css/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/css/admin/dist/js/demo.js') }}"></script>
<!-- CK Editor -->
<script src="{{ asset('public/css/admin/bower_components/ckeditor/ckeditor.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('public/css/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>