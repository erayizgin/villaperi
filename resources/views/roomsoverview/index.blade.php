        @extends('layouts.default')

        @section('title', 'Odalarımız')

@section('content')
        <!-- ========================  Room ======================== -->
		
        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">{{@$roomDetails[0]->room_name}}</h2>
                </div>
            </div>

            <div class="room">

                <!-- === Room gallery === -->

                <div class="room-gallery">
                    <div class="container">
                        <div class="owl-slider owl-theme owl-slider-gallery">

                            <!-- === slide item === -->
							@foreach ($roomDetails as $room)
								<div class="item" style="background-image:url({{ asset('public/assets/images/'.$room->picture) }})">
                                	<img src="{{ asset('public/assets/images/'.$room->picture) }}" alt="" />
                            	</div>
                                  
                            @endforeach
                            

                            <!-- === slide item === 

                            <div class="item" style="background-image:url({{ asset('public/assets/images/room-2.jpg') }})">
                                <img src="{{ asset('public/assets/images/room-2.jpg') }}" alt="" />
                            </div>
                            -->

                            <!-- === slide item === 

                            <div class="item" style="background-image:url({{ asset('public/assets/images/room-1.jpg') }})">
                                <img src="{{ asset('public/assets/images/room-1.jpg') }}" alt="" />
                            </div> -->


                        </div> <!--/owl-slider-->

                    </div>
                </div> <!--/room-gallery-->
                <!-- === Booking === -->

                <div class="booking booking-inner">

                    <div class="container">

                        <div class="booking-wrapper">
                            <div class="row">

                                <!--=== date arrival ===-->

                                <div class="col-xs-4 col-sm-3">
                                    <div class="date" id="dateArrival" data-text="Arrival" style="opacity: 0">
                                        <div class="date-value"></div>
                                    </div>
                                </div>

                                <!--=== guests ===-->

                                <div class="col-xs-4 col-sm-2">

                                    <div class="guests" data-text="Guests"  style="opacity: 0">
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

                                <!--=== button ===

                                <div class="col-xs-12 col-sm-4">
                                    <a href="reservation-1.html" class="btn btn-clean">
                                        Book now
                                        <small>Best Prices Guaranteed</small>
                                    </a>
                                </div>
                                -->
                            </div> <!--/row-->
                        </div><!--/booking-wrapper-->
                    </div> <!--/container-->
                </div> <!--/booking-->
                <!-- ===  Room overview === -->

                <div class="room-overview">
					
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                <!-- === Room aminities === -->

                                <div class="room-block room-aminities">

                                    <h2 class="title">Oda İmkanları</h2>

                                    <div class="row">

                                        <!--=== item ===-->

                                        <div class="col-xs-6 col-sm-2">
                                            <figure>
                                                <figcaption>
                                                    <span class="hotelicon hotelicon-air-condition"></span>
                                                    <p>Klima</p>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <!--=== item ===-->

                                        <div class="col-xs-6 col-sm-2">
                                            <figure>
                                                <figcaption>
                                                    <span class="hotelicon hotelicon-king-bed"></span>
                                                    <p>Yatak</p>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <!--=== item ===-->

                                        <div class="col-xs-6 col-sm-2">
                                            <figure>
                                                <figcaption>
                                                    <span class="hotelicon hotelicon-guest"></span>
                                                    <p>2 Kişi</p>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <!--=== item ===-->

                                        <div class="col-xs-6 col-sm-2">
                                            <figure>
                                                <figcaption>
                                                    <span class="hotelicon hotelicon-wifi"></span>
                                                    <p>Internet</p>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <!--=== item ===-->

                                        <div class="col-xs-6 col-sm-2">
                                            <figure>
                                                <figcaption>
                                                    <span class="hotelicon hotelicon-dining"></span>
                                                    <p>Mini Bar</p>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <!--=== item ===-->

                                        <div class="col-xs-6 col-sm-2">
                                            <figure>
                                                <figcaption>
                                                    <span class="hotelicon hotelicon-hangers"></span>
                                                    <p>Ütü</p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                </div>

                                <!-- === Room block === -->
								<!-- 
                                <div class="room-block">
                                    <h2 class="title">Room overview</h2>
                                    <p>
                                        The Superior Rooms pay tribute to fashion and craftsmanship. The rooms are approximately 19m2 with views of Rue d'Alger and Jardin des Tuileries.
                                        The selection and pairing of materials has been carefully chosen to give you a cool experience. The super soft bed topper is simply extravagant!
                                        Every room is different but the colour palette uses unique and expertly matched hues.
                                        An openwork brass screen separates the bathroom from the bedroom. This original feature helps make every room your very own cosy and peaceful haven.
                                        Bathrobes, slippers and SOTHYS toiletries are provided in the bathroom to pamper you.
                                    </p>
                                </div>
                                 -->
                                <!-- === Room block === -->

                                <div class="room-block">

                                    <h2 class="title">Oda Bilgileri</h2>

                                    <!-- === box === -->

                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong>Check-In</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>14:00</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- === box === -->

                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong>Check-out</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>12:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                

                            </div> <!--/col-sm-10-->
                        </div> <!--/row-->
                        
                        
                    </div> <!--/container-->
                </div> <!--/room-overview-->
                
                <div class="image-blocks image-blocks-category">
                	<div class="container">
                    	<!--=== item block === -->
    				
                        <div class="blocks blocks-left">
                            <div class="item">
                                <div class="text">
                                    <div class="h2">Hotel bilgileri</div>
                                    <ul>
                                        <li>Check-in : 14.00</li>
                                        <li>Check-out: 12:00</li>
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
                    </div>
                </div>
            </div>

        </section>
@stop