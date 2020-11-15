<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
@extends ('layouts/main')

@section('title', 'Contact Us - Bojonegoro Institute')
@section('metadeskription', 'Bojonegoro Institute merupakan Bojonegoro institute, adalah organisasi masyarakat sipil atau Civil Society Organization (CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada tahun 2006.')
@section('metakeywords', 'bojonegoro institute, bi, bojonegoro, institute, Bojonegoro Institute, Institute Bojonegoro')

@section('container')

<!-- header -->
<section id="breadcrumbs" class="breadcrumbs" style="padding-top: 0;padding-bottom: 0">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center pb-3">
      <h5 style="margin-bottom: 0px">Contact Us</h5>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Contact Us</li>
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
        <div class="col-md-8" data-aos="fade-up" data-aos-delay="300">          
          <h2 style="margin-top: -5px">Form Contact Us</h2>
          <hr>
          @if(session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
          @endif
          @if(session('failed'))
          <div class="alert alert-danger" role="alert">
            {{ session('failed') }}
          </div>
          @endif
          <form action="/contact" method="POST">
            @csrf
            <input type="hidden" name="role" value="1">
            <div class="form-group">
              <!-- <label for="name">Name</label> -->
              <input type="text" name="name" class="form-control bg-light" id="name" placeholder="Your Name"/>
            </div>
            <div class="form-group">
              <!-- <label for="email">Email</label> -->
              <input type="email" class="form-control bg-light" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            </div>
            <div class="form-group">
              <!-- <label for="address">Address</label> -->
              <input type="text" name="address" class="form-control bg-light" id="address" placeholder="Your Address"/>
            </div>
            <div class="form-group">
              <!-- <label for="subject">Subject</label> -->
              <input type="text" class="form-control bg-light" name="subject" id="subject" placeholder="Subject"/>
            </div>
            <div class="form-group">
              <!-- <label for="message">Message</label> -->
              <textarea class="form-control bg-light" name="message" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="text-center float-right"><button type="submit">Send Message</button></div>
          </form>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="container">
          <div style="margin-left: -10px">
            <h2>LATEST</h2>
            <hr style="border: 3px solid orange;margin-top: -15px;margin-bottom: 0px">
          </div>
          <div class="row">
            @foreach($latest as $result)
            <div class="form-row">
              <div class="col-md-5 col-4 mt-2">
                @if ($result->feature_image)
                <a href="/post/{{ $result->slug}}"><img src="/uploads/posts/{{ $result->feature_image}}" class="pl-2 pt-2 img-fluid" alt="..."></a>
                @else
                <a href="/post/{{ $result->slug}}"><img src="/uploads/posts/AC_portfolio_1440x480.jpg" class="pl-2 pt-2 img-fluid" alt="..."></a>

                @endif
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
