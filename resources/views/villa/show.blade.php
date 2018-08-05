 @extends('layouts.admin')
 
  @section('title', 'Hakkımızda')
  
 @section('content')
<div class="col-md-12">

	<div class="box box-info">
		<form action="#" method="post" id="content-form">
			<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />  -->
    		<div class="box-header">
    			<h3 class="box-title">Peri Hotel</h3>
    			<!-- tools box -->
    			<div class="pull-right box-tools">
    				<button type="button" class="btn btn-info btn-sm"
    					data-widget="collapse" data-toggle="tooltip" title="Collapse">
    					<i class="fa fa-minus"></i>
    				</button>
    			</div>
    		</div>
    		<!-- /.box-header -->
    		<div class="box-body pad">
            		<div class="form-group">
                          <label for="main_title">Ana Başlık</label>
                          <input type="text" class="form-control" id="main_title" name="main_title" value="{!! $content->main_title !!}">
                    </div>
    				<textarea id="editor1" name="editor1" rows="10" cols="80">
                          {!! $content->description !!}
                    </textarea>
    		</div>
    		<div class="box-footer">
                    <button type="submit" id="savecontent" class="btn btn-primary">Kaydet</button>
            </div>
            <div class="alert alert-success alert-dismissible" id="contentmessage">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Başarılı!</h4>
                Kayıt başarıyla güncellenmiştir.
            </div>
        </form>
	</div>
	<!-- /.box -->

</div>
<!-- /.col-->
@stop

@section('pageinlinejs')
	 <script>
    	$(function() {
    		$('#contentmessage').hide();
    		$("#savecontent").click(function() {
    			$("#savecontent").attr('disabled', 'disabled');

    			for ( instance in CKEDITOR.instances )
    		        CKEDITOR.instances[instance].updateElement();

    			var dataString = $("#content-form").serializeArray();
    			
    			$.ajax({
    				type: "POST",
    				url: "{{ url('villa/show') }}",
    				data: dataString,
    				complete: function(){
    					$("#savecontent").removeAttr("disabled");
    					$('#contentmessage').show();
    				}
    			});
    
    			return false;
    			
    		});
    	});
			
	</script>
@stop
