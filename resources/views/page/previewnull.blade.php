<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
@extends ('layouts/main')

@section('title')Not Found - Bojonegoro Institute @endsection
@section('metadeskription')Not Found - Bojonegoro Institute @endsection
@section('metakeywords')Not Found - Bojonegoro Institute @endsection
@section('thumbnail')/uploads/posts/Not Found @endsection

@section('container')

<div class="slider-area" style="background-color:rgb(31, 30, 30)">
  <div class="slider-height2 d-flex align-items-center">
    <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <div class="hero-cap hero-cap2 pt-70">
            <h2 style="color:white">Not Found</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="/">Post</a></li>
                  <li class="breadcrumb-item"><a href="/">Not Found</a></li>
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
            </div>
            <div class="blog_details">
              <!-- isi post -->
              <h1><b>Post Not Found</b></h1>
              <!-- end isi post -->
            </div>  
          </div>
          @include('page._partials.likeshare')
  </div>
    
    @include('page._partials.comment')
    </div>    
    @include('page._partials.sidebar')

@endsection()
