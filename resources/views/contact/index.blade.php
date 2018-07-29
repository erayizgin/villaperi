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
                                                    <form action="#" method="post" id="contact-form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="name" value="" class="form-control" placeholder="İsminiz" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="email" name="email" value="" class="form-control" placeholder="Email Adresiniz" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">

                                                                <div class="form-group">
                                                                    <input type="text" value="" class="form-control" placeholder="Konu" required="required">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" name='message' placeholder="Mesajınız" rows="10"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" id="contact-send" class="btn btn-clean" value="Mesajı Gönder" />
                                                            </div>
                                                            
                                                            <div id="sendmessage" style="color:mediumspringgreen">
                                                                Mesajınız başarıyla gönderilmiştir.
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
                                                    <span>{!! $address !!}</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-sm-4">
                                            <figure class="text-center">
                                                <span class="icon icon-phone"></span>
                                                <figcaption>
                                                    <strong>Bizi Arayın</strong>
                                                    <span>
                                                         {!! $telephone1 !!} <br />
                                                         {!! $telephone2 !!}
                                                    </span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- <figure class="text-center">
                                                <span class="icon icon-clock"></span>
                                                <figcaption>
                                                    <strong>Çalışma saatleri</strong>
                                                    <span>
                                                        <strong>Pazartesi</strong> - 14 pm - 6 pm <br />
                                                        <strong>Pazar</strong> 12pm - 2 pm
                                                    </span>
                                                </figcaption>
                                            </figure>  -->
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
            '<p><img src="{{ asset('public/assets/images/logo-mobile.png') }}" alt=""></p>' +
            '<p><strong>Villa Peri Butik Hotel</strong></p>' +
            '<p><i class="fa fa-map-marker"></i> Alaçatı Mah. 11092 Sok. No:5/1, Çeşme 35930 İzmir</p>' +
            '<p><i class="fa fa-phone"></i> 05340890404</p>' +
            '' +
            '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            //set default pposition
            var myLatLng = { lat: 38.2899769, lng: 26.3703342 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: myLatLng,
                styles: [{ "featureType": "administrative.locality", "elementType": "all", "stylers": [{ "hue": "#2c2e33" }, { "saturation": 7 }, { "lightness": 19 }, { "visibility": "on" }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "simplified" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "off" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "hue": "#bbc0c4" }, { "saturation": -93 }, { "lightness": 31 }, { "visibility": "simplified" }] }, { "featureType": "road", "elementType": "labels", "stylers": [{ "hue": "#bbc0c4" }, { "saturation": -93 }, { "lightness": 31 }, { "visibility": "on" }] }, { "featureType": "road.arterial", "elementType": "labels", "stylers": [{ "hue": "#bbc0c4" }, { "saturation": -93 }, { "lightness": -2 }, { "visibility": "simplified" }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "hue": "#e9ebed" }, { "saturation": -90 }, { "lightness": -8 }, { "visibility": "simplified" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "hue": "#e9ebed" }, { "saturation": 10 }, { "lightness": 69 }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "hue": "#e9ebed" }, { "saturation": -78 }, { "lightness": 67 }, { "visibility": "simplified" }] }]
            });
            //set marker
            var image = '{{ asset('public/assets/images/map-icon.png') }}';
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: "VillaPeri Butik Hotel",
                icon: image
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script>
    	$(function() {
    		$('#sendmessage').hide();
    		$("#contact-send").click(function() {
    			$("#contact-send").attr('disabled', 'disabled');
        		
    			var name = $("#contact-form input[name='name']").val();
    			
    			var email = $("#contact-form input[name='email']").val();
    			var text = $("textarea[name='message']").val();
    			
    			var dataString = 'name='+ name + '&email=' + email + '&text=' + text;
    			$.ajax({
    				type: "POST",
    				url: "{{ url('/getmsg') }}",
    				data: dataString,
    				complete: function(){
    					$("#contact-send").removeAttr("disabled");
    					$('#sendmessage').show();
    				}
    			});
    
    			return false;
    			
    		});
    	});
			
	</script>
@stop



