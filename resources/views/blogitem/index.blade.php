        @extends('layouts.default')

        @section('title', 'Bölgede Yaşam')

@section('content')

        <!-- ========================  Blog ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('public/assets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">Alaçatı</h2>
                    <p>Gezi</p>
                </div>
            </div>
            <div class="room">

                <!-- === Room gallery === -->

                <div class="room-gallery">
                    <div class="container">
                        <div class="owl-slider owl-theme owl-slider-gallery">

                            <!-- === slide item === -->
							@foreach ($blogDetails as $blog)
								<div class="item" style="background-image:url({{ asset('public/assets/images/'.$blog->picture) }})">
                                	<img src="{{ asset('public/assets/images/'.$blog->picture) }}" alt="" />
                            	</div>
                                  
                            @endforeach


                        </div> <!--/owl-slider-->

                    </div>
                </div>
            <!-- ===  Blog item === -->

            <div class="blog blog-item">
                <div class="container">

                    <div class="row">

                        <!-- === blog-content === -->

                        <div class="col-sm-8 col-md-12">

                            <article>

                                <!--=== blog content ===-->

                                <div class="content">

                                    <!--=== blog title ===-->

                                    <div class="h1 title">
                                        Alaçatı
                                    </div>

                                    <p>
                                        Çeşme ilçesi sınırlarında yer alan, son yıllarda Ege Bölgesinde bulunan en gözde tatil yeri ve turizm merkezidir.                                      
                                    </p>

                                    <p>
                                        Akdeniz sıcağını sevmeyenlerin başlıca tatil adreslerinden biridir. Rüzgarı bol Alaçatının deniz suyu hem daha serin 
                                        hem daha az tuzludur. Rengarenk taş evleri ve hayat dolu sokaklarıyla kendi küçük ünü büyük belde rüzgar sörfü 
                                        tutkunlarının da uğrak yeridir.
                                    </p>
                                    <p>
                                        Türkiyenin sörf cenneti olan Alaçatıdan  canlı gece hayatı,denizi,plajları,dinamik turist nüfusu,
                                        butik otel ve dükkanları için günlerce ayrılmak istemeyeceksiniz.
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Alaçatı sadece yazın değil kışın da sörf tutkunlarının ortak adresidir.Ancak bunun da ötesinde görmeniz gereken çok sayıda noktaya sahiptir.
                                        Meşhur Alaçatı pazarından Alaçatı değirmenlerine, eşsiz koylarında mutlaka ziyaret etmelisiniz.
                                        Hem yılın yorgunluğunu atmak hem hayat dolu kalabalık içinde eğlenmek istiyorsanız burası, Türkiye de gidebileceğiniz 
                                        en iyi rotalardan biridir. 
                                    </p>
                                </div>


                            </article>

                        </div>
                    </div> <!--/row-->


                </div><!--/container-->
            </div> <!--/blog-item-->
        </section>
@stop