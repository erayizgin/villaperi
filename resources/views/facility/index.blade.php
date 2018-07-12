        @extends('layouts.default')

        @section('title', 'Otel Servisleri')

@section('content')

        <!-- ========================  Facility ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container text-center">
                    <h2 class="title">Kahvaltı</h2>
                    <p>Restaurants & In-Room Dining</p>
                </div>
            </div>

            <div class="facility">

                <div class="container">
                    <div class="facility-gallery">
                        <div class="owl-slider owl-theme owl-slider-gallery">

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url({{ asset('public/assets/images/item-2.jpg') }})">
                                <img src="{{ asset('public/assets/images/item-2.jpg') }}" alt="" />
                            </div>

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url({{ asset('public/assets/images/item-1.jpg') }})">
                                <img src="{{ asset('public/assets/images/item-1.jpg') }}" alt="" />
                            </div>

                        </div> <!--/owl-slider-->

                    </div> <!--/facilty-gallery-->

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <!-- === facility-info === -->

                            <div class="facility-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Restaurants</h2>
                                        <p>
                                            The Resturant is the Colina Resort's iconic dining venue, serving breakfast, afternoon tea and an evening service complimented by
                                            the recent addition of a bar and craft cocktail program.
                                        </p>
                                        <!--<p>
                                    Enjoy the world’s finest wines, champagnes, caviar and other indulgences while
                                    overlooking Fifth Avenue and the famous Pulitzer Fountain.
                                </p>-->
                                    </div>
                                    <div class="col-md-6">
                                        <h2>In-room dining</h2>
                                        <p>
                                            A private meal in the comfort of your room or suite is one of the great pleasures of staying at The Plaza.  Enjoy our celebrated cuisine in the comfort of your own room 24-hours a day.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- === facility-addons === -->

                            <div class="facility-addons">

                                <!-- === nav-tabs === -->

                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#menus" aria-controls="menus" role="tab" data-toggle="tab">
                                            <i class="hotelicon hotelicon-kitchen"></i>
                                            <span class="visible-md visible-lg">Menus</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#chefs" aria-controls="chefs" role="tab" data-toggle="tab">
                                            <i class="hotelicon hotelicon-guestbook"></i>
                                            <span class="visible-md visible-lg">Chefs</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#events" aria-controls="events" role="tab" data-toggle="tab">
                                            <i class="hotelicon hotelicon-clock"></i>
                                            <span class="visible-md visible-lg">Events</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- === tab-panes === -->

                                <div class="tab-content">

                                    <!-- ============ tab #1 ============ -->

                                    <div role="tabpanel" class="tab-pane active" id="menus">
                                        <div class="content">

                                            <div class="cards">

                                                <div class="row">

                                                    <!-- === item === -->

                                                    <div class="col-xs-12 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-1.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-1.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean" onclick="">Breakfast</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-2.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-2.jpg"') }} alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">Lunch</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-3.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-3.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">Dinner</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-4.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-4.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">In-room</a>
                                                        </figure>
                                                    </div>

                                                </div> <!--/row-->

                                            </div> <!--/cards-->

                                        </div>
                                    </div>

                                    <!-- ============ tab #2 ============ -->

                                    <div role="tabpanel" class="tab-pane" id="chefs">
                                        <div class="content">

                                            <div class="image-blocks image-blocks-category">

                                                <!--=== item block === -->

                                                <div class="blocks blocks-left">
                                                    <div class="item">
                                                        <div class="text">
                                                            <h2 class="title">John Mike Doe <small>Executive pastry chef</small></h2>
                                                            <p>Gubergren eros stet est sit et et magna no praesent nam duo duo dolore dolore hendrerit takimata dolore duo gubergren stet sit commodo eleifend duo</p>
                                                            <p>Vero sed quis euismod et erat dolore elitr elitr invidunt facilisis amet labore nonumy sea at labore erat et iriure et stet sit dolore justo consetetur id dolor sed diam</p>
                                                            <p>Et no odio ipsum est eirmod lorem at accusam sit sea eros at sit justo sed suscipit doming sadipscing dolore aliquyam et no accusam dolores</p>
                                                        </div>
                                                    </div>
                                                    <div class="image" style="background-image:url({{ asset('public/assets/images/user-1.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/user-1.jpg') }}" alt="" />
                                                    </div>
                                                </div>

                                                <!--=== item block === -->

                                                <div class="blocks blocks-right">
                                                    <div class="item">
                                                        <div class="text">
                                                            <h2 class="title">John Mike Doe <small>Lead chef</small></h2>
                                                            <p>Gubergren eros stet est sit et et magna no praesent nam duo duo dolore dolore hendrerit takimata dolore duo gubergren stet sit commodo eleifend duo</p>
                                                            <p>Vero sed quis euismod et erat dolore elitr elitr invidunt facilisis amet labore nonumy sea at labore erat et iriure et stet sit dolore justo consetetur id dolor sed diam</p>
                                                            <p>Et no odio ipsum est eirmod lorem at accusam sit sea eros at sit justo sed suscipit doming sadipscing dolore aliquyam et no accusam dolores</p>
                                                        </div>
                                                    </div>
                                                    <div class="image" style="background-image:url({{ asset('public/assets/images/user-2.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/user-2.jpg') }}" alt="" />
                                                    </div>
                                                </div>

                                            </div> <!--/image-blocks-->
                                        </div> <!--/content-->
                                    </div>

                                    <!-- ============ tab #3 ============ -->

                                    <div role="tabpanel" class="tab-pane" id="events">
                                        <div class="content">

                                            <div class="image-blocks image-blocks-category">

                                                <!--=== item block === -->

                                                <div class="blocks blocks-left">
                                                    <div class="item">
                                                        <div class="text">

                                                            <!--=== events ===-->

                                                            <div class="events">

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>28</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Newly renovated by Master Architect Thierry Despont
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>22</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Ideal venue for cocktail style rehearsal dinners
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                            </div> <!--/events-->

                                                        </div> <!--/text-->
                                                    </div> <!--/item-->
                                                    <div class="image" style="background-image:url({{ asset('public/assets/images/event-1.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/event-1.jpg') }}" alt="" />
                                                    </div>
                                                </div> <!--/blocks-->
                                                <!--=== item block === -->

                                                <div class="blocks blocks-right">
                                                    <div class="item">
                                                        <div class="text">
                                                            <div class="events">

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>28</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Newly renovated by Master Architect Thierry Despont
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>22</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Ideal venue for cocktail style rehearsal dinners
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                            </div> <!--/events-->
                                                        </div>
                                                    </div>
                                                    <div class="image" style="background-image:url({{ asset('public/assets/images/event-2.jpg') }})">
                                                        <img src="{{ asset('public/assets/images/event-2.jpg') }}" alt="" />
                                                    </div>
                                                </div>

                                            </div> <!--/image-blocks-->

                                        </div> <!--/content-->
                                    </div>

                                </div> <!--/tab-content-->

                            </div> <!--/facility-addons-->
                        </div> <!--/col-md-10-->
                    </div> <!--/row-->

                </div> <!--/container-->
            </div>



        </section>
@stop