<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
@extends ('layouts/main')

@section('title'){{ $post->title }} - Bojonegoro Institute @endsection
@section('metadeskription'){{ $post->exercipt }} - Bojonegoro Institute @endsection
@section('metakeywords'){{ $post->keywords }} - Bojonegoro Institute @endsection

@section('container')

<?php  
$pub = substr($post->published_at, 0,10);
$pub = date('F, Y', strtotime($pub));
$pub = str_replace(',', '', $pub);
// $pub = str_replace(' ', ' - ', $pub);
// echo $pub;
if ($post->feature_image) {
  $post->feature_image = $post->feature_image;
}else {
  $post->feature_image = "AC_portfolio_1440x480.jpg";
}
?>

<!-- header -->
<section id="breadcrumbs" class="breadcrumbs">
  <div>    
    <img src="{{ url('/') }}/uploads/posts/<?= $post->feature_image ?>" class="d-block w-100 img-header" style="z-index: 0">
  </div>
</section>

<section class="judul-berita" id="judul">    
  <div class="container" style="z-index: 1">      
    <div class="form-row">
      <div class="col-md-10 offset-md-1">           
      <center>
        <a href="#" style="color: white;" class="category-news"><h5 class="news-category"><span style="font-weight: 1000;color: #f2ec30">{{ $post->category->name }}</span> <span>•</span> <span><?= $pub ?></span></h5></a>
        <h2 class="news-title">{{ $post->title }}</h2>        
        <div class="share-links">
          <a href="#" class="twitter text-white mr-1 bg-info rounded-circle pr-1 pl-1"><i class="icofont-twitter"></i></a>
          <a href="#" class="facebook text-white mr-1 bg-primary rounded-circle pr-1 pl-1"><i class="icofont-facebook"></i></a>
          <a href="#" class="instagram text-white mr-1 rounded-circle pr-1 pl-1"><i class="icofont-instagram"></i></a>
          <a href="#" class="google text-white mr-1 bg-danger rounded-circle pr-1 pl-1"><i class="icofont-google-plus"></i></a>
        </div>
      </center>
      </div>  
    </div>
  </div>
</section>
<!-- end header -->
<main id="main">
  <!-- ======= Detail News Section ======= -->
  <section id="news-details" class="news-details">
    <div class="container">
      <div class="form-row">
        <div class="col-md-10 offset-md-1">
          <!-- <center><h2 class="news-title">Corruption and Corona Virus</h2></center>            -->
          <div class="p-3">                
            <?php  
              $cont = $post->content;
              echo $cont;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Detail News Section -->

  <!-- ======= Latest Section ======= -->
  <section id="news" class="news bg-light">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Latest</h2>
      </div>
      <div class="form-row" style="margin-top: -30px">
        <div class="d-flex align-items-stretch">
          <div class="news">              
            <div class="form-row p-3">    
              @foreach ($posts as $result)
              <?php 
              $jumpos = count($posts);
              ?>
              @if($jumpos%2==0)
              @if($loop->iteration%2==1)

              <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card mt-3">
                  @if ($result->feature_image)
                  <a href="/news/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/news/{{ $result->slug}}" style="font-size: 13px"><b><?= strtolower($result->title) ?></b></a>
                  </div>
                </div>              

              @endif
              @if($loop->iteration%2==0)
                <div class="card mt-3">
                  @if ($result->feature_image)
                  <a href="/news/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/news/{{ $result->slug}}" style="font-size: 13px"><b><?= strtolower($result->title) ?></b></a>
                  </div>
                </div>
              </div>
              @endif
              @endif
              @if($jumpos%2==1)
              @if($loop->iteration%2==1)

              <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card mt-3">
                  @if ($result->feature_image)
                  <a href="/news/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/news/{{ $result->slug}}" style="font-size: 13px"><b><?= strtolower($result->title) ?></b></a>
                  </div>
                </div>              

              @endif
              @if($loop->iteration%2==0)
                <div class="card mt-3">
                  @if ($result->feature_image)
                  <a href="/news/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/news/{{ $result->slug}}" style="font-size: 13px"><b><?= strtolower($result->title) ?></b></a>
                  </div>
                </div>
              </div>
              @endif

              @endif
              @endforeach
              @if($jumpos%2==1)
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Latest Section -->
</main>
@endsection()
