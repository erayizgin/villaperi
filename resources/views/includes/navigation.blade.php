 <header>
 <div class="container">

    <!-- === navigation-top === -->

    <nav class="navigation-top clearfix">

        <!-- navigation-top-left -->

        <div class="navigation-top-left">
            <a class="box" href="https://www.facebook.com/villaperi.butikotel.7" target="_blank" >
                <i class="fa fa-facebook"></i>
            </a>
            <a class="box" href="https://www.instagram.com/villapeributikotel" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
        </div>

        <!-- navigation-top-right -->

        <div class="navigation-top-right">
            <a class="box" href="https://www.reseliva.com/hotel/Villa-Peri-Butik-Otel/" target="_blank">
                <i class="icon icon-tag"></i> 
                Rezervasyon
            </a>
            <a class="box" href="#">
                <i class="icon icon-phone-handset"></i> 
                05340890404
            </a>
        </div>
    </nav>

    <!-- === navigation-main === -->

    <nav class="navigation-main clearfix">

        <!-- logo -->

        <div class="logo animated fadeIn">
            <a href="{{ url('/') }}">
                <img class="logo-desktop" src="{{ asset('public/assets/images/logo.png') }}" alt="Alternate Text" />
                <img class="logo-mobile" src="{{ asset('public/assets/images/logo-mobile.png') }}" alt="Alternate Text" />
            </a>
        </div>

        <!-- toggle-menu -->

        <div class="toggle-menu"><i class="icon icon-menu"></i></div>

        <!-- navigation-block -->

        <div class="navigation-block clearfix">

            <!-- navigation-left -->

            <ul class="navigation-left">
                <li>
                    <a href="{{ url('/') }}">Anasayfa</a>
                    <!-- <ul>
                        <li><a href="index.html">Home - Booking intro</a></li>
                        <li><a href="index-2.html">Home - Booking box</a></li>
                        <li><a href="index-3.html">Home - Rooms intro</a></li>
                    </ul>  -->
                </li>
                <li>
                    <a href="{{ url('/about') }}">Hakkımızda</a>
                </li>
                <li>
                    <a href="{{ url('/rooms') }}">ODALAR</a>
                    <!-- <ul>
                        <li><a href="rooms-category.html">Oda Kategorileri</a></li>
                        <li><a href="reservation-2.html">Booking step 2</a></li>
                        <li><a href="reservation-3.html">Booking step 3</a></li>
                    </ul>  -->
                </li>
                <li>
                    <a href="{{ url('gallery') }}">Galeri</a>
                </li>
            </ul>

            <!-- navigation-right -->

            <ul class="navigation-right">
                <li>
                    <a href="{{ url('/facility') }}">Peri Mutfak</a>
                </li>
                <li>
                    <a href="#">Alaçatı <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="{{ url('/blogitem') }}">Bölgede Yaşam</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">İletişim</a>
                </li>
            </ul>    

        </div> <!--/navigation-block-->

    </nav>
</div> <!--/container-->
</header>