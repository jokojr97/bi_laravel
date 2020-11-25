<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
@extends ('layouts/main')

@section('title') Video - {{ $site->title }} @endsection()
@section('metadeskription', 'Antikorupsi Indonesia (AKSI) merupakan sebuah lembaga non-government organization yang berfokus pada isu anti korupsi')
@section('metakeywords', 'AKSI, antikorupsi, indonesia, Antikorupsi Indonesia, relawan korupsi')

@section('container')
  
<div class="slider-area" style="background-color:rgb(31, 30, 30)">
  <div class="slider-height2 d-flex align-items-center">
    <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <div class="hero-cap hero-cap2 pt-70">
            <h2 style="color:white">Video</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="/">Publication</a></li>
                  <li class="breadcrumb-item"><a href="/">Video</a></li>
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
  <section class="blog_area single-post-area" style="margin-top:20px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 posts-list">
          <div class="single-post">
            <div class="blog_details">
              <!-- isi post -->
                <div class="form-row">
                    <div class="col-md-2">
                    <img src="<?= $youtubeprofilepicture ?>" width="150" class="img-thumbnail rounded-circle">                
                    </div>              
                    <div class="col-md-10">
                    <h5 class="mt-3"><?= $youtubeprofiletitle ?></h5>                
                    <p><?= $youtubesubscribers ?> Subcribers.</p>
                    <div class="g-ytsubscribe" data-channelid="{{ $urlchannel }}" data-layout="default" data-count="default"></div>
                    </div>
                </div>
                <div class="row mt-3 pb-3"> 
                    <div class="col p-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item mb-2 mt-2" src="https://www.youtube.com/embed/<?= $urllatestvideos[0] ?>?rel=0"allowfullscreen></iframe>
                    </div>
                    </div>
                </div> <!-- //form-row -->
                <div class="form-row">
                    @foreach($urllatestvideos as $hasil)
                    <div class="col-lg-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item mb-2 mt-2" src="https://www.youtube.com/embed/<?= $hasil ?>?rel=0"allowfullscreen></iframe>
                    </div>
                    </div>
                    @endforeach
                </div>
                <br>
                <center>
                    <a href="https://www.youtube.com/channel/{{ $urlchannel }}?sub_confirmation=1" class="btn btn-danger text-white">Show More <i class="fas fa-angle-double-right"></i></a>
                </center>
                <br>
              <!-- end isi post -->
            </div>  
          </div>
        </div>
      </div>
  </div>
  </div>    


@endsection()
