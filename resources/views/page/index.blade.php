<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
@extends ('layouts/main')

@section('title', 'Home - Bojonegoro Institute')
@section('metadeskription', 'Bojonegoro Institute adalah Bojonegoro institute, adalah organisasi masyarakat sipil atau Civil Society Organization (CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada tahun 2006.')
@section('metakeywords', 'bojonegoro institute, bi, bojonegoro, institute, Bojonegoro Institute, Institute Bojonegoro')

@section('container')

    <!-- slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active dot-style">
            <!-- Single Slider -->
            <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".2s">Kunjungan dari Norwegia</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Bojonegoro Institute medapat kunjungan dari Norwegia terkait penelitian migas di Bojoengoro</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="/post/kunjungan-norwegia" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider hero-overly slider-height slider-bg2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".2s">Suara Perempuan Penggerak Kommunitas (SPeAK)</h1>
                                <P data-animation="fadeInUp" data-delay=".4s">Sebuah Koalisi organsasi perempuan yang diinisiasi oleh bojonegoro institute, transparency international, Hivos, dan EU</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="/post/speak" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider hero-overly slider-height slider-bg3 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".2s">Sekolah Keterbukaan dan Advokasi (SaKSI)</h1>
                                <P data-animation="fadeInUp" data-delay=".4s">Bojonegoro Institute Mengadakan Sekolah Keterbukaan dan Advokasi untuk meningkatkan kapasitas kaum muda Bojonegoro</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="/post/saksi" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? video_start -->
        <div class="video-area d-flex align-items-center justify-content-center">
            <div class="video-wrap position-relative">
                <div class="video-icon" >
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=mHQPimroY58"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <!-- video_end -->
    </div>
    <!-- slider Area End-->

    <!--? Tentang kami start -->
    <div class="visit-tailor-area fix" style="background-color: pink">
        <!--Right Contents  -->
        <div class="tailor-offers"></div>
        <!-- left Contents -->
        <div class="tailor-details">
            <span>Tentang Kami</span>
            <h2>BOJONEGORO INSTITUTE</h2><p>Bojonegoro institute, adalah organisasi masyarakat sipil atau Civil Society Organization (CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada  tahun 2006.</p>
            <p class="pera-bottom">Di awal pendiriannya, lembaga ini diharapkan dapat menjadi wakil masyarakat sipil dalam mengawal regulasi/kebijakan  dan pembaharuan tata pemerintahan lokal yang lebih baik, berkelanjutan dan berbasis pada kebutuhan dan keberpihakan pada masyarakat. Dengan mewujudkan kerangka demokratisasi dan desentralisasi, guna menuju relasi antara negara dan masyarakat yang kuat dan bermakna, serta kehidupan masyarakat sipil yang tangguh, semarak, dinamis dan partisipatif. <a href="/page/profile"><b>>>Selengkapnya</b></a></p>
            <div class="footer-tittles">
            </div>
        </div>
    </div>

    <!--? Fokus isu start -->
    <div class="service-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="/assets/home1/img/gallery/services1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Minyak & Gas</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-cat active text-center mb-30">
                        <div class="cat-icon">
                            <img src="/assets/home1/img/gallery/services2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Kemiskinan</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="/assets/home1/img/gallery/services3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Gender</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fokus isu End -->

    <!--? Kawal Proyek Start -->
    <section class="support-company-area fix pt-10">
        <div class="support-wrapper align-items-center">
            <div class="left-content">
                <!-- section tittle -->
                <div class="section-tittle section-tittle2 mb-30">
                    <span style="color:red">Bantu Kami</span>
                    <h2>Mengawal proyek di sekitar anda</h2>
                </div>
                <div class="support-caption">
                    <p class="pera-top">Mendorong masyarakat untuk melakukan pemantauan terhadap pelaksanaan pengadaan barang/jasa yang ada di sekitar mereka</p>
                    <a href="https://siipp.net/" class="border-btn">Ikut Pantau</a>
                </div>
            </div>
            <div class="right-content">
                <!-- img -->
                <div class="right-img">
                    <img src="/assets/home1/img/gallery/safe_in.png" alt="">
                </div>
                <div class="support-img-cap text-center d-flex">
                    <div class="single-one">
                        <span>1.400</span>
                        <p>Paket Pekerjaan</p>
                    </div>
                    <div class="single-two">
                        <span>108</span>
                        <p>Pengaduan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- kawal pengadaan End -->
    
    <!--? Berita terkini Start -->
    <div class="our-cases-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>Berita Terkini</h2>
                        <p class="pl-20 pr-20">Interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo 
                        cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($berita as $result)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="/uploads/posts/{{$result->feature_image}}" alt="{{$result->title}}" class="img-berita">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="/post/{{$result->slug}}">{{limit_words($result->title, 7)}}...</a></h3>
                            <p>{{limit_words($result->exercipt, 35)}}...</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Berita terkini End -->

@endsection()
