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
@section('thumbnail')/uploads/posts/{{ $post->feature_image }}@endsection

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

<div class="slider-area" style="background-color:rgb(31, 30, 30)">
  <div class="slider-height2 d-flex align-items-center">
    <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <div class="hero-cap hero-cap2 pt-70">
            <h2 style="color:white">{{ $post->title }}</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="index.html">Post</a></li>
                  <li class="breadcrumb-item"><a href="index.html">{{ $post->title }}</a></li>
              </ol>
            </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->
</div>
  <!--? Blog Area Start -->
  <section class="blog_area single-post-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <div class="single-post">
            <div class="feature-img">
              <img class="img-fluid" src="/uploads/posts/{{$post->feature_image}}"  alt="" style="object-fit:cover;width:10000px">
            </div>
            <div class="blog_details">
              <!-- isi post -->
              <h2>{{$post->title}}</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
              </ul>
              <div class="postdetail">
              <?= $post->content ?>
              </div>
              <!-- end isi post -->
            </div>  
          </div>
          @include('page._partials.likeshare')
          @include('page._partials.navigationblog')
        </div>
      </div>
  </div>
    
    @include('page._partials.author')
    @include('page._partials.comment')
    </div>    
    @include('page._partials.sidebar')

@endsection()
