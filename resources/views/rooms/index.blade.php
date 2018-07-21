        @extends('layouts.default')

        @section('title', 'Odalarımız')

@section('content')

        <!-- ========================  Rooms ======================== -->
		<!-- @foreach ($rooms as $room)
            {{ $room->picture }}    
        @endforeach -->
        <section class="page">

            <!-- ========================  Page header ======================== -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">ODALAR</h2>
                </div>
            </div>

            <!-- === rooms content === -->

            <div class="rooms rooms-category">
                <div class="container">

                    <div class="row">

                        <!-- === rooms item === -->
						@foreach ($rooms as $room)
                        <div class="col-sm-6 col-md-6">
                            <div class="item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('public/assets/images/'.$room->picture) }}" alt="" />
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <h2 class="title"><a href="{{ url('/roomsoverview/'.$room->id) }}">{{@$room->room_name}}</a></h2>
                                            <p>Aile Odası</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
						@endforeach

                        <!-- === rooms item === -->
						@foreach ($roomSubPart as $room)
                        <div class="col-sm-6 col-md-4">
                            <div class="item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('public/assets/images/'.$room->picture) }}" alt="" />
                                    </div>
                                    <div class="details">
                                        <div class="text">
                                            <h2 class="title"><a href="{{ url('/roomsoverview/'.$room->id) }}">{{@$room->room_name}}</a></h2>
                                            <p>Aile Odası</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
						@endforeach

                    </div>

                </div> <!--/container-->
            </div>
        </section>
@stop