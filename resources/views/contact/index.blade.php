        @extends('layouts.default')

        @section('title', 'İletişim')

@section('content')

        <!-- ======================== Contact ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">İletişim</h2>
                    <p></p>
                </div>
            </div>

            <!-- ===  Contact === -->

            <div class="contact">

                <div class="container">

                    <!-- === Google map === -->

                    <div class="map" id="map"></div>

                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                            <!-- === Contact block === -->

                            <div class="contact-block">

                                <!-- === Contact banner === -->

                                <div class="banner">
                                    <div class="row">
                                        <div class="col-md-offset-1 col-md-10 text-center">
                                            <h2 class="title">Email gönderin</h2>
                                            <p>
                                                Herhangi bir sorunuz olduğunda aşağıdaki formu kullanabilirsiniz <br /> ve size en yakın zamanda geri dönüş yapacağız.
                                            </p>

                                            <div class="contact-form-wrapper">

                                                <a class="btn btn-clean open-form" data-text-open="Form ile bize ulaşın." data-text-close="Formu Kapat">Form ile bize ulaşın.</a>

                                                <div class="contact-form clearfix">
                                                    <form action="#" method="post">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="" class="form-control" placeholder="İsminiz" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="email" value="" class="form-control" placeholder="Email Adresiniz" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">

                                                                <div class="form-group">
                                                                    <input type="text" value="" class="form-control" placeholder="Konu" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" placeholder="Mesajınız" rows="10"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" class="btn btn-clean" value="Mesajı Gönder" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- === Contact info === -->

                                <div class="contact-info">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <figure class="text-center">
                                                <span class="icon icon-map-marker"></span>
                                                <figcaption>
                                                    <strong>Neredeyiz?</strong>
                                                    <span>200 12th Ave, New York, <br />NY 10001, USA</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-sm-4">
                                            <figure class="text-center">
                                                <span class="icon icon-phone"></span>
                                                <figcaption>
                                                    <strong>Bizi Arayın</strong>
                                                    <span>
                                                        <strong>T</strong> +1 222 333 4444 <br />
                                                        <strong>F</strong> +1 222 333 5555
                                                    </span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-sm-4">
                                            <figure class="text-center">
                                                <span class="icon icon-clock"></span>
                                                <figcaption>
                                                    <strong>Çalışma saatleri</strong>
                                                    <span>
                                                        <strong>Pazartesi</strong> - Sat: 10 am - 6 pm <br />
                                                        <strong>Pazar</strong> 12pm - 2 pm
                                                    </span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--/contact-block-->
                        </div><!--col-sm-8-->
                    </div> <!--/row-->
                </div> <!--/container-->
            </div> <!--/contact-->
        </section>
@stop

@section('googlemapsapi')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_UQuWHzqyOqHbp4IeFE7-Fa8m41uMTRg&callback=initMap"></script>
    <script>
        function initMap() {
            var contentString =
            '<div class="map-info-window">' +
            '<p><img src="{{ asset('public/assets/images/logo-dark.png') }}" alt=""></p>' +
            '<p><strong>Colina Resort</strong></p>' +
            '<p><i class="fa fa-map-marker"></i> 200 12th Ave, New York, NY 10001, USA</p>' +
            '<p><i class="fa fa-phone"></i> +12 33 444 555</p>' +
            '<p><i class="fa fa-clock-o"></i> 10am - 6pm</p>' +
            '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            //set default pposition
            var myLatLng = { lat: 38.289888, lng: 26.378286 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng,
                styles: [{ "featureType": "administrative.locality", "elementType": "all", "stylers": [{ "hue": "#2c2e33" }, { "saturation": 7 }, { "lightness": 19 }, { "visibility": "on" }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "simplified" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "off" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "hue": "#bbc0c4" }, { "saturation": -93 }, { "lightness": 31 }, { "visibility": "simplified" }] }, { "featureType": "road", "elementType": "labels", "stylers": [{ "hue": "#bbc0c4" }, { "saturation": -93 }, { "lightness": 31 }, { "visibility": "on" }] }, { "featureType": "road.arterial", "elementType": "labels", "stylers": [{ "hue": "#bbc0c4" }, { "saturation": -93 }, { "lightness": -2 }, { "visibility": "simplified" }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "hue": "#e9ebed" }, { "saturation": -90 }, { "lightness": -8 }, { "visibility": "simplified" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "hue": "#e9ebed" }, { "saturation": 10 }, { "lightness": 69 }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "hue": "#e9ebed" }, { "saturation": -78 }, { "lightness": 67 }, { "visibility": "simplified" }] }]
            });
            //set marker
            var image = '{{ asset('public/assets/images/map-icon.png') }}';
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: "Hello World!",
                icon: image
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
    </script>
@stop