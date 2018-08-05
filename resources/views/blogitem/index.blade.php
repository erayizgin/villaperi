        @extends('layouts.default')

        @section('title', 'Bölgede Yaşam')

@section('content')

        <!-- ========================  Blog ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">Alaçatı</h2>
                    <p>Gezi</p>
                </div>
            </div>
            <div class="room">

                <!-- === Room gallery === -->

                <div class="room-gallery">
                    <div class="container">
                        <div class="owl-slider owl-theme owl-slider-gallery">

                            <!-- === slide item === -->
							@foreach ($blogDetails as $blog)
								<div class="item" style="background-image:url({{ asset('public/assets/images/'.$blog->picture) }})">
                                	<img src="{{ asset('public/assets/images/'.$blog->picture) }}" alt="" />
                            	</div>
                                  
                            @endforeach


                        </div> <!--/owl-slider-->

                    </div>
                </div>
            <!-- ===  Blog item === -->

            <div class="blog blog-item">
                <div class="container">

                    <div class="row">

                        <!-- === blog-content === -->

                        <div class="col-sm-8 col-md-12">

                            <article>

                                <!--=== blog content ===-->

                                <div class="content">

                                    <!--=== blog title ===-->

                                    <div class="h1 title">
                                        {!! $blogContent->main_title !!}
                                    </div>

                                    {!! $blogContent->description !!}
                                </div>


                            </article>

                        </div>
                    </div> <!--/row-->


                </div><!--/container-->
            </div> <!--/blog-item-->
        </section>
@stop