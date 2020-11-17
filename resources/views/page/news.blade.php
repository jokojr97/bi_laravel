<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

function get_bulan($date){
  $tgl = substr($date, 5, 2);
  $monthNum = $tgl;
  // Create date object to store the DateTime format 
  $dateObj = DateTime::createFromFormat('!m', $monthNum);
  // Store the month name to variable 
  $monthName = $dateObj->format('F');   
  $monthName = substr($monthName, 0, 3);
  // Display output 
  return $monthName; 
}
?>

@extends ('layouts/main')

@section('title', 'Berita - Bojonegoro Institute')
@section('metadeskription', 'Bojonegoro Institute merupakan Bojonegoro institute, adalah organisasi masyarakat sipil atau Civil Society Organization (CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada tahun 2006.')
@section('metakeywords', 'bojonegoro institute, bi, bojonegoro, institute, Bojonegoro Institute, Institute Bojonegoro')

@section('container')


<div class="slider-area" style="background-color:rgb(31, 30, 30)">
    <div class="slider-height2 d-flex align-items-center">
    <div class="container">
    <div class="row">
        <div class="col-xl-8">
        <div class="hero-cap hero-cap2 pt-70">
            <h2 style="color:white">Berita</h2>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Berita</a></li>
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
                          @if($ada == true)                          
                            @foreach($berita as $result)
                              <div class="col-md-6">
                                <article class="blog_item">
                                  <div class="blog_item_img">
                                      <img class="card-img rounded-0 img-berita" src="/uploads/posts/{{$result->feature_image}}" alt="">
                                      <a href="#" class="blog_item_date">
                                          <h3>{{ substr($result->published_at, 8, 2) }}</h3>
                                          <p>{{ get_bulan($result->published_at) }}</p>
                                      </a>
                                  </div>
                                  <div class="blog_details">
                                      <a class="d-inline-block" href="/post/{{$result->slug}}">
                                          <h2 class="blog-head" style="color: #2d2d2d;">{{$result->title}}</h2>
                                      </a>
                                      <p>{{$result->exercipt}}</p>
                                      <ul class="blog-info-link">
                                          <li><a href="#"><i class="fa fa-user"></i> {{$result->category->name}}</a></li>
                                          <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                      </ul>
                                  </div>
                                </article>    
                              </div>
                            @endforeach
                          @else
                            <h1>Berita Belum tersedia</h1>
                          @endif
                        </div>
                              <!-- end isi post -->
                      </div>  
                </div>
                <!-- like and share -->
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4 people like this</p>
                        
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
