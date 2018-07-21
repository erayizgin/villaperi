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

            <!-- ===  Blog item === -->

            <div class="blog blog-item">
                <div class="container">

                    <div class="row">

                        <!-- === blog-content === -->

                        <div class="col-sm-8 col-md-12">

                            <article>

                                <!--=== blog image ===-->

                                <div class="image">
                                    <img src="{{ asset('public/assets/images/alacati.jpg') }}" alt="" />
                                </div>

                                <!--=== blog content ===-->

                                <div class="content">

                                    <!--=== blog title ===-->

                                    <div class="h1 title">
                                        Alaçatı
                                    </div>

                                    <p>
                                        Herkesin tatil hayallerini süsleyen bir bölge. 
                                        Her yıl açılan yeni mekânları, butik otelleri, aktiviteleri ve lezzetleri ile Alaçatı, 
                                        denize kıyısı olmasa da yakındaki plajlarıyla deniz, kum, güneş arayanlar için de çokça alternatif sunmakta.
                                    </p>

                                    <h2>Hacımemiş Mahallesi</h2>
                                    <p>
                                        Hacımemiş Mahallesi, şirin kafe ve restoranları, antikacı dükkanları, galerileri, seramik ve cam işçiliği atölyeleri 
                                        ve daha bir çok farklı mekânlarıyla Alaçatı’nın yükselen yıldızı. Kemalpaşa Caddesi gibi sıkış sıkış bir kalabalık, 
                                        sokağa taşan gürültülü mekânlar yer almamakta, daha sakin ve dingin bir yer. Özgün ürünler sunan antika dükkanları
                                        bolca vardır.
                                    </p>
                                    <h2>Alaçatı Pazarı</h2>
                                    <p>
                                        Her cumartesi çok geniş bir alanda kurulan Alaçatı Pazarı, sebze meyvenin dışında, kaliteli giyim ürünleri ve 
                                        el yapımı reçellerin, baharatların bulunabileceği çok renkli bir yer. Yakın köylerde üretim yapan köylülerin 
                                        lezzetli doğal ürünlerini alın. Pazarda Reçelci Niko’ya uğrayın, hangi ürünlerden nasıl leziz reçeller 
                                        yapıldığını görün..
                                    </p>
                                    <h2>Rüzgâr sörfü</h2>
                                    <p>
                                    </p>
                                    <p>
                                        Uluslararası yarışmalara da ev sahipliği yapan Alaçatı, dünyanın en iyi rüzgâr sörfü yerlerinden birisi olarak 
                                        gösteriliyor. Alaçatı Yumru Koyu dünyanın sayılı sörf yerlerinden biri ve 
                                        burada her yıl Dünya Windsurf Şampiyonası yapılıyor. Ben de rüzgar sörfü yapmayı bilmiyorum ama alanında 
                                        uzman isimlerin eğitim verdiği okullarda, harikulade sörf yapanları izlemek keyif verici. 
                                        Alaçatı, yılın 330 günü rüzgarlı olduğundan, her yıl pek çok rüzgar sörfü müdaviminin akınına uğruyor. 
                                        İster profesyonel olun.
                                    </p>
                                </div>


                            </article>

                        </div>
                    </div> <!--/row-->


                </div><!--/container-->
            </div> <!--/blog-item-->
        </section>
@stop