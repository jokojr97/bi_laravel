<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
@extends ('layouts/main')

@section('title', 'Kegiatan - Bojonegoro Institute')
@section('metadeskription', 'Bojonegoro Institute merupakan Bojonegoro institute, adalah organisasi masyarakat sipil atau Civil Society Organization (CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada tahun 2006.')
@section('metakeywords', 'bojonegoro institute, bi, bojonegoro, institute, Bojonegoro Institute, Institute Bojonegoro')

@section('container')

<!-- header -->
<section id="breadcrumbs" class="breadcrumbs" style="padding-top: 0;padding-bottom: 0">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center pb-3">
      <h5 style="margin-bottom: 0px">Kegiatan</h5>
      <ol>
        <li><a href="/">Home</a></li>
        <li>Kegiatan</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- end header -->
<main id="main">
  <!-- ======= Detail News Section ======= -->

  <section id="list" style="margin-top: -40px">
    <div class="container">
      <div class="row">
        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-danger mb-3">
            <div class="text-danger text-center bg-blues" style="border:8px solid orange">
              <h2 style="padding: 10px;color: white">Kegiatan</h2>
            </div>
          </div>
          @if($ada==true)
          @foreach($kegiatan as $result)
          <div class="form-row">
            <div class="col-md-3 col-4 mt-2">
              <div class="portfolio" style="background-color: #1f3983">
                <div class="portfolio-wrap">
                  @if ($result->feature_image)
                  <a href="/kegiatan/{{ $result->slug}}"><img src="/uploads/kegiatan/{{ $result->feature_image}}" class="pt-2 img-fluid img-news" alt="..."></a>
                  @else
                  <a href="/kegiatan/{{ $result->slug}}"><img src="/uploads/kegiatan/AC_portfolio_1440x480.jpg" class="pt-2 img-fluid img-news" alt="..."></a>

                  @endif
                </div>
              </div>
            </div>
            <div class="col-md-9 col-8 mt-3">                
              <a href="/kegiatan/{{ $result->slug}}" class="mt-2 pt-3 text-capitalize"><p class=" text-title"><b><?= strtolower($result->title) ?></b></p></a>
              <p class="card-text" style="font-size: 13px;margin-top: -10px">
                <?php 
                $pub = substr($result->published_at, 0,10);
                $pub = date('F, Y', strtotime($pub));
                $pub = str_replace(',', '', $pub);
                echo "<b>".$pub." - </b>";
                $cont = $result->content;
                $cont = str_replace('<div class="bl_copy">', '', $cont);
                $cont = str_replace('<p>', '', $cont);
                echo limit_words($cont, 20); ?></p>
            </div>   
          </div>  
          @endforeach
          <div class="row">
            <div class="col p-3">            
              {{ $kegiatan->links() }}
            </div>
          </div>

          @else
          <h3>Belum Tersedia</h3>
          @endif
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="container">
          <div style="margin-left: -10px">
            <h2>LATEST</h2>
            <hr style="border: 3px solid orange;margin-top: -15px;margin-bottom: 0px">
          </div>
          <div class="row">
            @foreach($latest as $result)
            <div class="form-row">
              <div class="col-md-5 col-4 mt-2">
                <div class="portfolio" style="background-color: #1f3983">
                  <div class="portfolio-wrap">
                    @if ($result->feature_image)
                    <a href="/posts/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="img-fluid" alt="..."></a>
                    @else
                    <a href="/posts/{{ $result->slug}}"><img src="/uploads/posts/AC_portfolio_1440x480.jpg" class="img-fluid" alt="..."></a>

                    @endif
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-8 mt-3">                
                <a href="/post/{{ $result->slug}}" class="pt-2 text-capitalize"><p style="line-height:1.2em;"><b><?php 
                $title = strtolower($result->title);
                $title = $title = substr($title, 0, 50);
                echo $title;
                ?>...</b></p></a>
              </div>   
            </div>  
            @endforeach
          </div>
          <br>
          <div class="row">
            <table class="table table-hover" data-aos="fade-up" data-aos-delay="400">
              <thead>
                <tr class="text-center">
                  <th><a href="#" class="h4 text-reds"><b>CATEGORY</b></a></th>
                </tr>
                @foreach($category as $hasil)
                <tr>
                  <th><a href="/category/{{ $hasil->slug }}" class="h6 text-reds text-capitalize"><b><?= strtolower($hasil->name) ?></b></a></th>
                </tr>
                @endforeach
                <tr class="text-center">
                  <th><a href="#" class="h4 text-reds"><b>MORE</b></a></th>
                </tr>
                @foreach($type as $hasil)
                <tr>
                  <th><a href="/type/{{ $hasil->slug }}" class="h6 text-reds text-capitalize"><b><?= strtolower($hasil->name) ?></b></a></th>
                </tr>
                @endforeach
              </thead>
            </table>
          </div>
        </div>
        </div>   

      </div>
    </div>
    
  </section>

@endsection()
