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

@section('title')Hasil Pencarian {{ucfirst($ids)}} - Bojonegoro Institute @endsection
@section('metadeskription', 'Bojonegoro Institute merupakan Bojonegoro institute, adalah organisasi masyarakat sipil atau Civil Society Organization (CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada tahun 2006.')
@section('metakeywords', 'bojonegoro institute, bi, bojonegoro, institute, Bojonegoro Institute, Institute Bojonegoro')

@section('container')


<div class="slider-area" style="background-color:rgb(31, 30, 30)">
    <div class="slider-height2 d-flex align-items-center">
    <div class="container">
    <div class="row">
        <div class="col-xl-8">
        <div class="hero-cap hero-cap2 pt-70">
            <h2 style="color:white">Search::{{ucfirst($ids)}}</h2>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/">Search</a></li>
                <li class="breadcrumb-item"><a href="/">{{ucfirst($ids)}}</a></li>
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
                <h1 class="mb-10"><b>Hasil pencarian: {{$ids}}</b></h1>
                <br>
                <div class="form-row">
                  @if($ada == true)             
                  <div class="col-md-6">
                               
                  @foreach($post as $result)
                    @if($loop->iteration % 2 == 1)
                    <div class="col">
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
                    @endif
                  @endforeach
                  </div>
                  <div class="col-md-6">
                               
                  @foreach($post as $result)
                    @if($loop->iteration % 2 == 0)
                    <div class="col">
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
                    @endif
                  @endforeach
                </div>
                  @else
                    <h1>Postingan Belum tersedia</h1>
                  @endif
                </div>
                
                <div class="float-right">{{ $post->links() }}</div>
              </div>
            </div>
          </div>    
    @include('page._partials.sidebar')
    
@endsection()
