        @extends('layouts.default')

        @section('title', 'Otel Servisleri')

@section('content')

        <!-- ========================  Facility ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container text-center">
                    <h2 class="title">Kahvaltı</h2>
                </div>
            </div>

            <div class="facility">

                <div class="container">
                    <div class="facility-gallery">
                        <div class="owl-slider owl-theme owl-slider-gallery">

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url({{ asset('public/assets/images/mutfak_1359.jpg') }})">
                                <img src="{{ asset('public/assets/images/item-2.jpg') }}" alt="" />
                            </div>

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url({{ asset('public/assets/images/mutfak_1367.jpg') }})">
                                <img src="{{ asset('public/assets/images/item-1.jpg') }}" alt="" />
                            </div>

                        </div> <!--/owl-slider-->

                    </div> <!--/facilty-gallery-->

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <!-- === facility-info === -->

                            <div class="facility-info">
                                <div class="row">
                                        <h2>Kahvaltı</h2>
                                        <p>
                                            The Resturant is the Colina Resort's iconic dining venue, serving breakfast, afternoon tea and an evening service complimented by
                                            the recent addition of a bar and craft cocktail program.
                                        </p>
                                </div>
                            </div>

                            <!-- === facility-addons === -->

                            <div class="facility-addons">

                                <!-- === nav-tabs === -->

                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#menus" aria-controls="menus" role="tab" data-toggle="tab">
                                            <i class="hotelicon hotelicon-kitchen"></i>
                                            <span class="visible-md visible-lg">Menu</span>
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
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-1216.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-1.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean" onclick="">Kahvaltı 1</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-1219.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-2.jpg"') }} alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">Kahvaltı 2</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-1220.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-3.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">Kahvaltı 3</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('public/assets/images/food-1223.jpg') }})">
                                                                <img src="{{ asset('public/assets/images/food-4.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">Kahvaltı 4</a>
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