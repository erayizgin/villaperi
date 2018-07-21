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
										<!--
                                        <p>
                                            <img src="{{ asset('public/assets/images/room-2.jpg') }}" alt="Colina Hotel - Resort & accommodation" />
                                        </p>
										 
                                        <p><strong class="text-center">Facilities</strong></p>
                                        <p>
                                            A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a
                                            modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a fridge and
                                            other kitchen facilities, upholstered chairs, a flatscreen television and en-suite bathrooms. Small, lower-priced
                                            hotels may offer only the most basic guest services and facilities.
                                        </p>

                                        <p>
                                            Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business centre
                                            (with computers, printers and other office equipment), childcare, conference and event facilities, tennis or basketball
                                            courts, gymnasium, restaurants, day spa and social function services.
                                            Hotel rooms are usually numbered (or named in some smaller hotels and B&Bs) to allow guests to
                                            identify their room. Some boutique, high-end hotels have custom decorated rooms. Some hotels offer meals as part of
                                            a room and board arrangement. In the United Kingdom, a hotel is required by law to serve food and drinks to all guests
                                            within certain stated hours. In Japan, capsule hotels provide a tiny room suitable only for sleeping and shared
                                            bathroom facilities.
                                        </p>
                                        <p><strong class="text-center">A bit of history</strong></p>
                                        <p>
                                            The precursor to the modern hotel was the inn of medieval Europe. For a period of about 200 years from the mid-17th
                                            century, coaching inns served as a place for lodging for coach travelers. Inns began to cater to richer clients in
                                            the mid-18th century. One of the first hotels in a modern sense was opened in Exeter in 1768. Hotels proliferated
                                            throughout Western Europe and North America in the early 19th century, and luxury hotels began to spring up in the
                                            later part of the 19th century.
                                        </p>  -->
                                    </div>
                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>


                        <!--=== item block === -->

                        <div class="blocks blocks-left">
                            <div class="item">
                                <div class="text">
                                    <div class="h2">Hotel bilgileri</div>
                                    <ul>
                                        <li>Check-in : 13:00 PM</li>
                                        <li>Check-out: 12 PM</li>
                                        <li>Klima</li>
                                        <li>TV</li>
                                        <li>Mini Bar</li>
                                        <li>Kettle</li>
                                        <li>Saç Kurutma</li>
                                        <li>Ütü</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image" style="background-image:url({{ asset('public/assets/images/slide-1.jpg') }})">
                                <img src="{{ asset('public/assets/images/slide-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <!-- === text-card === -->

                        <p>&nbsp;</p>
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