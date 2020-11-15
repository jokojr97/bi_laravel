<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
@extends ('layouts/main')

@section('title'){{ $kegiatan->title }} - Bojonegoro Institute @endsection
@section('metadeskription'){{ $kegiatan->exercipt }} - Bojonegoro Institute @endsection
@section('metakeywords'){{ $kegiatan->keywords }} - Bojonegoro Institute @endsection
@section('thumbnail')/uploads/kegiatan/{{ $kegiatan->feature_image }}@endsection

@section('container')

<?php  
$pub = substr($kegiatan->published_at, 0,10);
$pub = date('F, Y', strtotime($pub));
$pub = str_replace(',', '', $pub);
// $pub = str_replace(' ', ' - ', $pub);
// echo $pub;
if ($kegiatan->feature_image) {
  $kegiatan->feature_image = $kegiatan->feature_image;
}else {
  $kegiatan->feature_image = "AC_portfolio_1440x480.jpg";
}
?>

<!-- header -->
<section id="breadcrumbs" class="breadcrumbs">
  <div>    
    <img src="/uploads/kegiatan/<?= $kegiatan->feature_image ?>" class="d-block w-100 img-header" style="z-index: 0">
  </div>
</section>

<section class="judul-berita" id="judul">    
  <div class="container" style="z-index: 1">      
    <div class="form-row">
      <div class="col-md-10 offset-md-1">           
      <center>
        <a href="#" style="color: white;" class="category-news"><h5 class="news-category"><span style="font-weight: 1000;color: #f2ec30">Kegiatan</span> <span>•</span> <span><?= $pub ?></span></h5></a>
        <h2 class="news-title">{{ $kegiatan->title }}</h2>        
        <div class="share-links">
          <a href="http://twitter.com/share?url={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="twitter text-white mr-1 bg-info rounded-circle pr-1 pl-1" target="_blank"><i class="icofont-twitter"></i></a>
          <a href="http://www.facebook.com/sharer.php?u={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="facebook text-white mr-1 bg-primary rounded-circle pr-1 pl-1" target="_blank"><i class="icofont-facebook"></i></a>
          <a href="https://api.whatsapp.com/send?text={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="text-white mr-1 bg-success rounded-circle pr-1 pl-1"  data-action="share/whatsapp/share" target="_blank"><i class="fab fa-whatsapp"></i></a>
          <a href="https://plus.google.com/share?url={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="google text-white mr-1 bg-danger rounded-circle pr-1 pl-1" target="_blank"><i class="icofont-google-plus"></i></a>
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
          <div class="p-3 kode_news_detail">                
            <?php  
              $cont = $kegiatan->content;
              echo $cont;
            ?>
          </div>
          <p><strong>Share :</strong></p>
          <div class="share-links">
            <a href="http://twitter.com/share?url={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="twitter text-white bg-info pr-2 pl-2 pt-1 pb-1" target="_blank"><i class="icofont-twitter"></i></a>
            <a href="http://www.facebook.com/sharer.php?u={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="facebook text-white bg-primary pr-2 pl-2 pt-1 pb-1" target="_blank"><i class="icofont-facebook"></i></a>
            <a href="https://api.whatsapp.com/send?text={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="text-white bg-success pr-2 pl-2 pt-1 pb-1"  data-action="share/whatsapp/share" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://plus.google.com/share?url={{url('/') }}/kegiatan/{{ $kegiatan->slug }}" class="google text-white bg-danger pr-2 pl-2 pt-1 pb-1" target="_blank"><i class="icofont-google-plus"></i></a>
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

              @php              
              $pub = substr($result->published_at, 0,10);
              $pub = date('F, Y', strtotime($pub));
              $pub = str_replace(',', '', $pub);
              @endphp

              <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card mt-3">
                  @if ($result->feature_image)
                  <a href="/post/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body" style="border-bottom: 5px solid #1f3983">
                    <p class="text-secondary" style="font-size: 12px;margin-bottom: 2px"><i class="fas fa-user"> Admin</i> &nbsp; <i class="fas fa-clock"></i> {{ $pub }}</p>
                    <a class="card-title text-capitalize h5" href="/post/{{ $result->slug}}"><b><p style="font-size: 14px;"><?= strtolower($result->title) ?></p></b></a>
                  </div>
                </div>   
              </div>  
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Latest Section -->

@endsection()
