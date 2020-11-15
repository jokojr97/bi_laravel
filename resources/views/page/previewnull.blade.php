<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
@extends ('layouts/main')

@section('title') - Bojonegoro Institute @endsection
@section('metadeskription') - Bojonegoro Institute @endsection
@section('metakeywords')- Bojonegoro Institute @endsection
@section('thumbnail') @endsection

@section('container')

<!-- header -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center pb-3">
        <h5 style="margin-bottom: 0px">Post not found</h5>
      </div>
    </div>
  </section>

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
                  <a href="/post/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/post/{{ $result->slug}}"><b><?= strtolower($result->title) ?></b></a>
                    <p class="card-text mt-2" style="font-size: 13px">
                      <?php 
                      $cont = $result->content;
                      $cont = str_replace('<div class="bl_copy">', '', $cont);
                      $cont = str_replace('<p>', '', $cont);
                      echo limit_words($cont, 30); ?></p>
                  </div>
                </div>              

              @endif
              @if($loop->iteration%2==0)
                <div class="card mt-3">
                  @if ($result->feature_image)
                  <a href="/post/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/post/{{ $result->slug}}"><b><?= strtolower($result->title) ?></b></a>
                    <p class="card-text mt-2" style="font-size: 13px">
                      <?php 
                      $cont = $result->content;
                      $cont = str_replace('<div class="bl_copy">', '', $cont);
                      $cont = str_replace('<p>', '', $cont);
                      echo limit_words($cont, 30); ?></p>
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
                  <a href="/post/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/post/{{ $result->slug}}"><b><?= strtolower($result->title) ?></b></a>
                    <p class="card-text mt-2" style="font-size: 13px">
                      <?php 
                      $cont = $result->content;
                      $cont = str_replace('<div class="bl_copy">', '', $cont);
                      $cont = str_replace('<p>', '', $cont);
                      $cont = str_replace('<h2>', '', $cont);
                      echo limit_words($cont, 30); ?></p>
                  </div>
                </div>              

              @endif
              @if($loop->iteration%2==0)
                <div class="card mt-3">
                  @if ($result->feature_image)
                  <a href="/post/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="card-img-top" alt="..."></a>
                  @endif
                  <div class="card-body">
                    <a class="card-title text-capitalize h5" href="/post/{{ $result->slug}}"><b><?= strtolower($result->title) ?></b></a>
                    <p class="card-text mt-2" style="font-size: 13px">
                      <?php 
                      $cont = $result->content;
                      $cont = str_replace('<div class="bl_copy">', '', $cont);
                      $cont = str_replace('<p>', '', $cont);
                      echo limit_words($cont, 30); ?></p>
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

@endsection()
