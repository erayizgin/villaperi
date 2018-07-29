        @extends('layouts.default')

        @section('title', 'Galeri')

@section('content')
		<!-- ======================== About ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">Galeri</h2>
                    <p>&nbsp;</p>
                </div>
            </div>

            <div class="image-blocks image-blocks-category">

                <div class="container">
                    <div class="about">

                        <!--text-block-->

                        <div class="text-block">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <!-- ===  Gallery === -->

                                    <div class="gallery">
                                        <div class="row">
                                            <div class="open-popup-gallery">
                                            	@foreach ($galleries as $gallery)
                                            		<a href="{{ asset('public/assets/images/gallery/'.$gallery->photo) }}" title="Villaperi Butik Hotel">
                                                		<img src="{{ asset('public/assets/images/gallery/thumbs/'.$gallery->thumbs) }}" width="75" height="75">
                                            		</a>
                                            	@endforeach
                                            </div>
                                        </div>

                                    </div>

                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>


                    </div> <!--/container-->

                </div>
            </div>
        </section>



	<style>
        .open-popup-gallery img {
            width: auto;
            height: 130px;
            margin-bottom: 3px;
        }
        .mfp-wrap {
            z-index:99999;
        }
    </style>
@stop
