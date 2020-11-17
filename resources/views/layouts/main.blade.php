<!doctype html>
<html class="no-js" lang="ind">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta content="@yield('metadeskription')" name="descriptison">
    <meta content="@yield('metakeywords')" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="/assets/home1/img/logo.png"> -->

    <!-- Favicons -->
    <link href="/img/home/icon-kecil.png" rel="icon">
    <link href="@yield('thumbnail')" rel="apple-touch-icon">

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/home1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/home1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/home1/css/slicknav.css">
    <link rel="stylesheet" href="/assets/home1/css/flaticon.css">
    <link rel="stylesheet" href="/assets/home1/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="/assets/home1/css/gijgo.css">
    <link rel="stylesheet" href="/assets/home1/css/animate.min.css">
    <link rel="stylesheet" href="/assets/home1/css/animated-headline.css">
    <link rel="stylesheet" href="/assets/home1/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/home1/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/home1/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/home1/css/slick.css">
    <link rel="stylesheet" href="/assets/home1/css/nice-select.css">
    <link rel="stylesheet" href="/assets/home1/css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- ionicon -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- end fontawesome -->
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/home1/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="/assets/home1/img/logo/logo.jpg" alt="" width="150"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            @include('page._partials.menu')
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-0">
                                        <a class="btn header-btn" id="btnsearch" style="color:white"><span class="fas fa-search" style="color:white"></span> Cari</a>
                                    </div>
                                    <div id="search" class="bg-dark text-white" style="padding: 20px;position:absolute;top:70px;display:none">
                                        <form>
                                          <div class="form-row">
                                            <div class="col-8">
                                              <input type="text" class="form-control" placeholder="Search" style="padding: 20px 10px;font-size: 16px;">
                                            </div>
                                            <div class="col-4">
                                              <button type="submit" class="btn"><span class="fas fa-search" style="color:white"></span> Cari</button>
                                            </div>
                                          </div>
                                        </form>
                                    </div>

                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

      @yield('container')

    </main>
    <footer>
        <div class="bg-dark">
           <!-- Footer Start-->
           <div class="footer-area footer-padding">
               <div class="container ">
                   <div class="row justify-content-between">
                       <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                           <div class="single-footer-caption mb-50">
                               <div class="single-footer-caption mb-30">
                                   <!-- logo -->
                                   <div class="footer-logo mb-35">
                                       <a href="index.html"><img src="/assets/home1/img/logo/logo.jpg" alt="" width="150"></a>
                                   </div>
                                   <div class="footer-tittle">
                                       <div class="footer-pera">
                                           <p>Untuk Keadilan dan Demokrasi.</p>
                                       </div>
                                   </div>
                                   <!-- social -->
                                   <div class="footer-social">
                                       <a href="#"><i class="fab fa-twitter"></i></a>
                                       <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                       <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                           <div class="single-footer-caption mb-50">
                               <div class="footer-tittle">
                                   <h4>Menu</h4>
                                   <ul>
                                       <li><a href="#">Berita Terkini</a></li>
                                       <li><a href="#">Kegiatan</a></li>
                                       <li><a href="#">Galeri</a></li>
                                       <li><a href="#">Akses Informasi</a></li>
                                       <!-- <li><a href="#">Hubungi Kami</a></li> -->
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                           <div class="single-footer-caption mb-50">
                               <div class="footer-tittle">
                                   <h4>Tentang Kami</h4>
                                   <ul>
                                       <li><a href="#">About</a></li>
                                       <li><a href="#">Profile</a></li>
                                       <li><a href="#">Struktur Organiasi</a></li>
                                       <li><a href="#">Visi Misi</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                           <div class="single-footer-caption mb-50">
                               <div class="footer-tittle">
                                   <h4>Contact us</h4>
                                   <ul>
                                       <li><a href="#">institute_bojonegoro@yahoo.com</a></li>
                                       <li><a href="#">Jl. Panglima Polim Gg. Mangga 1 No. 9, Kelurahan Sumbang, Kecamatan Bojonegoro, Kabupaten Bojonegoro.</a></li>
                                       <!-- <li><a href="#">Privacy Policy</a></li> -->
                                       <li class="number"><a href="#">(0353) 8888 557</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- footer-bottom area -->
           <div class="footer-bottom-area footer-wrapper">
               <div class="container">
                   <div class="footer-border">
                       <div class="row d-flex align-items-center">
                           <div class="col-xl-12 ">
                               <div class="footer-copy-right text-center">
                                   <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Bojonegoro Institute <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Footer End-->
          </div>
      </footer>
      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="/assets/home1/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="/assets/home1/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/home1/js/popper.min.js"></script>
    <script src="/assets/home1/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="/assets/home1/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="/assets/home1/js/owl.carousel.min.js"></script>
    <script src="/assets/home1/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="/assets/home1/js/wow.min.js"></script>
    <script src="/assets/home1/js/animated.headline.js"></script>
    <script src="/assets/home1/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="/assets/home1/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="/assets/home1/js/jquery.nice-select.min.js"></script>
    <script src="/assets/home1/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="/assets/home1/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="/assets/home1/js/jquery.counterup.min.js"></script>
    <script src="/assets/home1/js/waypoints.min.js"></script>
    <script src="/assets/home1/js/jquery.countdown.min.js"></script>
    <script src="/assets/home1/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="/assets/home1/js/contact.js"></script>
    <script src="/assets/home1/js/jquery.form.js"></script>
    <script src="/assets/home1/js/jquery.validate.min.js"></script>
    <script src="/assets/home1/js/mail-script.js"></script>
    <script src="/assets/home1/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="/assets/home1/js/plugins.js"></script>
    <script src="/assets/home1/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $("#search").hide();
            $("#btnsearch").click(function(){
                $("#search").toggle();
            });
        });
    </script>
    @yield('script_tambahan')
</body>
</html>