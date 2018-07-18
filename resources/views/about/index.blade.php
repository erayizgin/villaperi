        @extends('layouts.default')

        @section('title', 'Hakkımızda')

@section('content')

        <!-- ======================== About ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">Peri Hotel</h2>
                    <p>Yer, servislerimiz & Takımımız</p>
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

                                                <div class="item" style="background-image:url({{ asset('public/assets/images/room-3.jpg') }})"></div>


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
                                        </p>
                                    </div>
                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>


                        <!--=== item block === -->

                        <div class="blocks blocks-left">
                            <div class="item">
                                <div class="text">
                                    <div class="h2">Hotel information</div>
                                    <ul>
                                        <li>Check-in Time: 3 PM</li>
                                        <li>Check-out Time: 12 PM</li>
                                        <li>Complimentary WiFi for All Members</li>
                                        <li>Valet Parking $65-$75/day</li>
                                        <li>Pets Welcome (fee)</li>
                                        <li>Early Check-In Available</li>
                                        <li>Best Prices Guaranteed</li>
                                        <li>Free parking for All Inclusive package</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image" style="background-image:url({{ asset('public/assets/images/slide-1.jpg') }})">
                                <img src="{{ asset('public/assets/images/slide-1.jpg') }}" alt="">
                            </div>
                        </div>

                        <!--=== item block === -->

                        <div class="blocks blocks-right">
                            <div class="item">
                                <div class="text">
                                    <div class="h2">Hotel features</div>
                                    <ul>
                                        <li>FIT ® Gym & Fitness</li>
                                        <li>Wired Business Center</li>
                                        <li>All Inclusive ® Service</li>
                                        <li>Bliss & Spa</li>
                                        <li>SPG Keyless</li>
                                        <li>Resturant & lounge bar</li>
                                        <li>Private rooms</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image" style="background-image:url({{ asset('public/assets/images/services-4.jpg') }})">
                                <img src="{{ asset('public/assets/images/services-4.jpg') }}" alt="" />
                            </div>
                        </div>

                        <!-- === text-card === -->

                        <div class="text-block">
                            <div class="row">
                                <div class="col-md-8 col-lg-offset-2">
                                    <h2>Luxury</h2>
                                    <p>
                                        Timeshare and destination clubs are a form of property ownership involving ownership of an individual unit
                                        of accommodation for seasonal usage. A motel is a small-sized low-rise lodging with direct access to individual
                                        rooms from the car park. Boutique hotels are typically hotels with a unique environment or intimate setting.
                                        A number of hotels have entered the public consciousness through popular culture, such as the Ritz Hotel in London.
                                    </p>
                                    <h2>Near by</h2>
                                    <p>
                                        Some hotels are built specifically as a destination in itself, for example at casinos and holiday resorts.
                                        Most hotel establishments are run by a General Manager who serves as the head executive (often referred to as
                                        the "Hotel Manager"), department heads who oversee various departments within a hotel (e.g., food service),
                                        middle managers, administrative staff, and line-level supervisors. The organizational chart and volume
                                        of job positions and hierarchy varies by hotel size, function and class, and is often determined by hotel
                                        ownership and managing companies.
                                    </p>

                                    <div class="cards cards-block">

                                        <div class="row">

                                            <!-- === item === -->

                                            <div class="col-xs-12 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('public/assets/images/activity-1.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/activity-1.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean" onclick="">Museums</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('public/assets/images/activity-2.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/activity-2.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Nightlife</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-12">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('public/assets/images/activity-3.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/activity-3.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Food & drink</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('public/assets/images/activity-4.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/activity-4.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Shopping</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('public/assets/images/activity-5.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/activity-5.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">The City</a>
                                                </figure>
                                            </div>

                                        </div> <!--/row-->

                                    </div> <!--/cards-->

                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>

                    </div> <!--/container-->

                </div>
            </div>
        </section>
        
        <!-- ================== Footer  ================== -->

        <footer>
            <div class="container">

                <!--footer links-->
                <div class="footer-links">
                    <div class="row">
                        <div class="col-sm-6 footer-left">
                            <a href="#">Sitemap</a> &nbsp; | &nbsp; <a href="#">Privacy policy</a> | &nbsp; <a href="#">Guest book</a>
                        </div>
                        <div class="col-sm-6 footer-right">
                            <a href="#">Gallery</a> &nbsp; | &nbsp; <a href="#">Reservations</a> | &nbsp; <a href="#">Help center</a>
                        </div>
                    </div>
                </div>

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