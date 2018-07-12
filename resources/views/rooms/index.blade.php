        @extends('layouts.default')

        @section('title', 'Odalarımız')

@section('content')

        <!-- ========================  Rooms ======================== -->

        <section class="page">

            <!-- ========================  Page header ======================== -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">Rooms & Suites</h2>
                    <p>At home while on the road. </p>
                </div>
            </div>

            <!-- === rooms content === -->

            <div class="rooms rooms-category">
                <div class="container">

                    <div class="row">

                        <!-- === rooms item === -->

                        <div class="col-sm-6 col-md-6">
                            <div class="item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('public/assets/images/apartment-1.jpg') }}" alt="" />
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <h2 class="title"><a href="room-overview.html">Presidential Suite</a></h2>
                                            <p>Family room</p>
                                        </div>
                                        <div class="book">
                                            <div>
                                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                                            </div>
                                            <div>
                                                <span class="price h2">€ 299,00</span>
                                                <span>per night</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- === rooms item === -->

                        <div class="col-sm-6 col-md-6">
                            <div class="item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('public/assets/images/apartment-2.jpg') }}" alt="" />
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <h2 class="title"><a href="room-overview.html">Luxury appartment</a></h2>
                                            <p>Family room</p>
                                        </div>
                                        <div class="book">
                                            <div>
                                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                                            </div>
                                            <div>
                                                <span class="price h2">€ 199,00</span>
                                                <span>per night</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- === rooms item === -->

                        <div class="col-sm-6 col-md-4">
                            <div class="item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('public/assets/images/room-1.jpg') }}" alt="" />
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <h2 class="title"><a href="room-overview.html">Club Room</a></h2>
                                            <p>Single room</p>
                                        </div>
                                        <div class="book">
                                            <div>
                                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                                            </div>
                                            <div>
                                                <span class="price h2">€ 98,00</span>
                                                <span>per night</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- === rooms item === -->

                        <div class="col-sm-6 col-md-4">
                            <div class="item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('public/assets/images/room-2.jpg') }}" alt="" />
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <h2 class="title"><a href="room-overview.html">Classic Room</a></h2>
                                            <p>Double room</p>
                                        </div>
                                        <div class="book">
                                            <div>
                                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                                            </div>
                                            <div>
                                                <span class="price h2">€ 129,00</span>
                                                <span>per night</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- === rooms item === -->

                        <div class="col-sm-6 col-md-4">
                            <div class="item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('public/assets/images/room-3.jpg') }}" alt="" />
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <h2 class="title"><a href="room-overview.html">Superior Room</a></h2>
                                            <p>Queen size bed</p>
                                        </div>
                                        <div class="book">
                                            <div>
                                                <a href="room-overview.html" class="btn btn-main">Book now</a>
                                            </div>
                                            <div>
                                                <span class="price h2">€ 159,00</span>
                                                <span>per night</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>

                </div> <!--/container-->
            </div>
        </section>
@stop