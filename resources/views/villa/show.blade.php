        @extends('layouts.admin')


@section('content')
	<div class="col-md-12">
		  <!--
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Peri Hotel Resim</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body pad">
              	<img src="slide-2.jpg" height="300" width="500">
              	<p>&nbsp;</p> 
              	<div class="form-group">
                  <label for="exampleInputFile">Resim Değiştir</label>
                  <input type="file" id="exampleInputFile">
                </div>
            </div>
          </div>
          -->
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Peri Hotel</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                       İzmirin taşevleri, yel değirmenleri, eşsiz koy ve beachleriyle meşhur şehri Alaçatı da tatil yapmak isteyen konuklarımızı 
                       taş otelimizde ağırlamaktan mutluluk duyarız. Gün sonunda tatlı yorgunluğunuzu, renklerin enerjisiyle bütünleştirdiğimiz 
                       butik otelimizde evinizde ki huzur ve konforu hissederek atabilirsiniz.
                    </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->

    </div>
    <!-- /.col-->
@stop