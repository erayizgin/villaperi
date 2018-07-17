        @extends('layouts.default')

        @section('title', '')

@section('content')

        <section class="frontpage-slider">
            <div class="owl-slider owl-slider-header owl-slider-fullscreen">

                <!-- === slide item === -->

                <div class="item" style="background-image:url({{ asset('public/assets/images/slide-3.jpg') }})">
                    <div class="box text-center">
                        <div class="container">
                            <div class="rating animated" data-animation="fadeInDown">
                                <!-- <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>  -->
                            </div>
                            <h2 class="title animated h1" data-animation="fadeInDown">
                                <!-- A moment of <br /> <span>pure prestige</span>  -->
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp">
                                <!-- Lavish social and business events  -->
                            </div>
                            <div class="desc animated" data-animation="fadeInUp">
                                <!-- and unforgettable weddings.  -->
                            </div>
                            <!-- <div class="animated" data-animation="fadeInUp">
                                <a href="https://themeforest.net/item/colina-hotel-website-template/20977257" class="btn btn-clean">Buy this template</a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url({{ asset('public/assets/images/slide-1.jpg') }})">
                    <div class="box text-center">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">
                                <!-- The privacy and <br />
                                individuality of a custom  -->
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp">
                                <!-- The Residences have their own dedicated private entrance as well <br />
                                as an anonymous "celebrity" entrance, for ultimate privacy.  -->
                            </div>
                            <div class="animated" data-animation="fadeInUp">
                                <!-- <a href="#" class="btn btn-clean"> Virtual tour  </a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url({{ asset('public/assets/images/slide-2.jpg') }})">
                    <div class="box text-center">
                        <div class="container">
                            <div class="rating animated" data-animation="fadeInDown">
                                <!-- <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>  -->
                            </div>
                            <h2 class="title animated h1" data-animation="fadeInDown"><!-- Fairmont managed!  --></h2>
                            <div class="desc animated" data-animation="fadeInUp"><!--The elegant Champagne Bar, the stylish Colina Club.  --></div>
                            <div class="desc animated" data-animation="fadeInUp"> <!--Guestrooms and luxurious suites --></div>
                            <div class="animated" data-animation="fadeInUp">
                                <!-- <a href="#" class="btn btn-clean"><!-- Get insipred </a> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--/owl-slider-->
        </section>

        <!-- ======================== Booking ======================== -->

        <section class="booking booking-inner">

            <div class="section-header hidden">
                <div class="container">
                    <h2 class="title">Booking & reservations</h2>
                </div>
            </div>

            <div class="booking-wrapper">

                <div class="container">
                    <div class="row">

                        <!--=== date arrival ===-->

                        <div class="col-xs-4 col-sm-3">
                            <!-- <div class="date" id="dateArrival" data-text="Arrival">
                                <input class="datepicker" readonly="readonly" />
                                <div class="date-value"></div>
                            </div>  -->
                        </div>

                        <!--=== date departure ===-->

                        <div class="col-xs-4 col-sm-3">
                            <!-- <div class="date" id="dateDeparture" data-text="Departure">
                                <input class="datepicker" readonly="readonly" />
                                <div class="date-value"></div>
                            </div> -->
                        </div>

                        <!--=== guests ===-->

                        <div class="col-xs-4 col-sm-2">

                            <div class="guests" data-text="" style="opacity: 0">
                                 <div class="result">
                                    <input class="qty-result" type="text" value="2" id="qty-result" readonly="readonly" />
                                    <div class="qty-result-text date-value" id="qty-result-text"></div>
                                </div> 
                                <!--=== guests list ===-->
                                <ul class="guest-list">

                                    <li class="header">
                                        Please choose number of guests <span class="qty-apply"><i class="icon icon-cross"></i></span>
                                    </li>

                                    <!--=== adults ===-->

                                    <li class="clearfix">

                                        <!--=== Adults value ===-->

                                        <div>
                                            <input class="qty-amount" value="2" type="text" id="ticket-adult" data-value="2" readonly="readonly" />
                                        </div>

                                        <div>
                                            <span>Adults <small>16+ years</small></span>
                                        </div>

                                        <!--=== Add/remove quantity buttons ===-->

                                        <div>
                                            <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-adult" />
                                            <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-adult" />
                                        </div>

                                    </li>

                                    <!--=== chilrens ===-->

                                    <li class="clearfix">

                                        <!--=== Adults value ===-->

                                        <div>
                                            <input class="qty-amount" value="0" type="text" id="ticket-children" data-value="0" readonly="readonly" />
                                        </div>

                                        <!--=== Label ===-->

                                        <div>
                                            <span>Children <small>2-11 years</small></span>
                                        </div>


                                        <!--=== Add/remove quantity buttons ===-->

                                        <div>
                                            <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-children" />
                                            <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-children" />
                                        </div>

                                    </li>

                                    <!--=== Infants ===-->

                                    <li class="clearfix">

                                        <!--=== Adults value ===-->

                                        <div>
                                            <input class="qty-amount" value="0" type="text" id="ticket-infants" data-value="0" readonly="readonly" />
                                        </div>

                                        <!--=== Label ===-->

                                        <div>
                                            <span>Infants <small>Under 2 years</small></span>
                                        </div>

                                        <!--=== Add/remove quantity buttons ===-->

                                        <div>
                                            <input class="qty-btn qty-minus" value="-" type="button" data-field="ticket-infants" />
                                            <input class="qty-btn qty-plus" value="+" type="button" data-field="ticket-infants" />
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <!--=== button ===-->

                        <div class="col-xs-12 col-sm-4 ">
                            <!--<a href="#" class="btn btn-clean" style="opacity: 0;">
                                Book now
                                <small>Best Prices Guaranteed</small>
                            </a> -->
                        </div>

                    </div> <!--/row-->
                </div><!--/booking-wrapper-->
            </div> <!--/container-->
        </section>

        <!-- ========================  Rooms ======================== -->

        <section class="rooms rooms-widget">

            <!-- === rooms header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Odalar konaklama <a href="rooms-category.html" class="btn btn-sm btn-clean-dark">View all</a></h2>
                    <p>Designed as a privileged almost private place where you'll feel right at home</p>
                </div>
            </div>

            <!-- === rooms content === -->

            <div class="container">

                <div class="owl-rooms owl-theme">

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="{{ asset('public/assets/images/room-1.jpg') }}" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="room-overview.html">Club Room</a></h3>
                                    <p>Single room</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="room-overview.html" class="btn btn-main">Book now</a>
                                    </div>
                                    <div>
                                        <span class="price h4">$ 98,00</span>
                                        <span>per night</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="{{ asset('public/assets/images/room-2.jpg') }}" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="room-overview.html">Classic Room</a></h3>
                                    <p>Double room</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="room-overview.html" class="btn btn-main">Book now</a>
                                    </div>
                                    <div>
                                        <span class="price h4">$ 129,00</span>
                                        <span>per night</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="{{ asset('public/assets/images/room-3.jpg') }}" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="">Superior Room</a></h3>
                                    <p>Queen size bed</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="room-overview.html" class="btn btn-main">Book now</a>
                                    </div>
                                    <div>
                                        <span class="price h4">$ 159,00</span>
                                        <span>per night</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === rooms item === -->

                    <div class="item">
                        <article>
                            <div class="image">
                                <img src="{{ asset('public/assets/images/room-4.jpg') }}" alt="" />
                            </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="room-overview.html">Family Suite</a></h3>
                                    <p>Family room</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="room-overview.html" class="btn btn-main">Book now</a>
                                    </div>
                                    <div>
                                        <span class="price h4">$ 199,00</span>
                                        <span>per night</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </div><!--/owl-rooms-->

            </div> <!--/container-->

        </section>
@stop