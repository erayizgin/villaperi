        @extends('layouts.default')

        @section('title', 'Hakkımızda')

@section('content')

        <!-- ======================== About ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">Peri Hotel</h2>
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

                                    <div class="text">
                                        <h2>Peri Hotel Hakkında</h2>

                                        <!-- ===  Gallery === -->

                                        <div class="gallery">

                                            <div class="owl-slider owl-slider-gallery">

                                                <!-- === slide item === -->

                                                <div class="item" style="background-image:url({{ asset('public/assets/images/slide-2.jpg') }})"></div>

                                                <!-- === slide item === -->

                                                <div class="item" style="background-image:url({{ asset('public/assets/images/about_images_1204.jpg') }})"></div>


                                                <!-- === slide item === -->

                                                <div class="item" style="background-image:url({{ asset('public/assets/images/slide-3.jpg') }})"></div>


                                            </div> <!--/owl-slider-->

                                        </div>

                                        <p><strong class="text-center">Peri Hotel</strong></p>
                                        <p>
                                            İzmirin taşevleri, yel değirmenleri, eşsiz koy ve beachleriyle meşhur şehri  Alaçatı da tatil yapmak isteyen konuklarımızı taş otelimizde ağırlamaktan mutluluk duyarız.

											Gün sonunda tatlı yorgunluğunuzu, renklerin enerjisiyle bütünleştirdiğimiz butik otelimizde evinizde ki huzur ve konforu hissederek  atabilirsiniz.
                                        </p>
                                        <p>
                                        	Alaçatı merkeze 5 dk yürüme mesafesinde olan Butik Otelimiz 8 farklı konseptli oda tipine sahiptir. 
                                        	Double ,Twin, Süperior ve Deluxe olmak üzere 4 tip yatak kapasitesine sahiptir. Bir adet açık yüzme havuzu iki ön ve arka olmak üzere 
                                        	bahçesi bulunmaktadır. Açılabilir kahvaltı alanına sahiptir.
                                    	</p>
                                    </div>
                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>

                        <!-- === text-card === -->

                        <p>&nbsp;</p>

                    </div> <!--/container-->

                </div>
            </div>
        </section>
        
        <!-- ================== Footer  ================== -->

        <footer>
            <div class="container">

                <!--footer social-->

                <div class="footer-social">
                    <div class="row">
                        <div class="col-sm-12 text-center hidden">
                            <a href="" class="footer-logo"><img src="{{ asset('public/assets/images/logo.png') }}" alt="Alternate Text" /></a>
                        </div>
                        <div class="col-sm-12 icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 copyright">
                            <small>Copyright &copy; 2018 &nbsp; | &nbsp; <a href="#">Peri Hotel</a></small>
                        </div>
                        <div class="col-sm-12 text-center">
                            <img src="{{ asset('public/assets/images/logo-footer.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </footer>
@stop