<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
@extends ('layouts/main')

@section('title', 'Not found - Bojonegoro Institute')
@section('metadeskription', 'Bojonegoro Institute merupakan Bojonegoro institute, adalah organisasi masyarakat sipil atau Civil Society Organization (CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada tahun 2006.')
@section('metakeywords', 'bojonegoro institute, bi, bojonegoro, institute, Bojonegoro Institute, Institute Bojonegoro')

@section('container')


<div class="slider-area" style="background-color:rgb(31, 30, 30)">
    <div class="slider-height2 d-flex align-items-center">
    <div class="container">
    <div class="row">
        <div class="col-xl-8">
        <div class="hero-cap hero-cap2 pt-70">
            <h2 style="color:white">Not found</h2>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/">Post</a></li>
                <li class="breadcrumb-item"><a href="/">Not found</a></li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Hero End -->
    <!--? Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                      <div class="feature-img">
                          <!-- <img class="img-fluid" src="/assets/home1/img/blog/single_blog_1.png" alt=""> -->
                      </div>
                      <div class="blog_details">
                        <!-- isi post -->
                        <div class="row">
                          <div class="col">
                            <h1 style="margin-bottom: 0px">Post not found</h1>
                            <br><br>
                          </div>                        
                        </div>
                        <!-- end isi post -->
                      </div>  
                </div>
                <!-- like and share -->
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <!-- <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4 people like this</p> -->
                        
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                    </div>

                    <!-- share -->
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                    <!-- end share -->
                </div>
                <!-- end like and share -->

                <!-- next and previouse post -->
                <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-fluid" src="/assets/home1/img/post/preview.png" alt="">
                                </a>
                            </div>
                            
                            <div class="arrow">
                                <a href="#">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                </a>
                            </div>
                        <div class="detials">
                            <p>Prev Post</p>
                            <a href="#">
                            <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        <div class="detials">
                            <p>Next Post</p>
                            <a href="#">
                                <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                            </a>
                        </div>
                        <div class="arrow">
                            <a href="#">
                                <span class="lnr text-white ti-arrow-right"></span>
                            </a>
                        </div>
                        <div class="thumb">
                            <a href="#">
                            <img class="img-fluid" src="/assets/home1/img/post/next.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- end next and previouse post -->
            </div>
        </div>
    </div>

    </div>
    @include('page._partials.sidebar')


@endsection()
