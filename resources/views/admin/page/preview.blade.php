@extends ('layouts/main')

@section('title'){{ $page->title }} - Bojonegoro Institute @endsection
@section('metadeskription'){{ $page->description }} - Bojonegoro Institute @endsection
@section('metakeywords'){{ $page ->keywords }} - Bojonegoro Institute @endsection

@section('container')
<!-- <?= $page->content ?> -->

<!--? Hero Start -->
<div class="slider-area" style="background-color:rgb(31, 30, 30)">
<div class="slider-height2 d-flex align-items-center">
<div class="container">
<div class="row">
    <div class="col-xl-8">
    <div class="hero-cap hero-cap2 pt-70">
        <h2 style="color:white">Profile</h2>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="index.html">Profil</a></li>
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
                    <h2 style="color: red;text-transform: uppercase;"><center>Bojonegoro Institute</center></h2>
                    <br>
                    <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Page, Profile</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                    </ul>

                    <p class="excert">Bojonegoro institute, adalah organisasi masyarakat sipil atauCivil Society Organization(CSO) yang berdiri pada tanggal 20 Februari 2005. Dengan Akte Notaris Didiek wahju indarta, SH. No 208 Tahun 2005. Selanjutnya didaftarkan pada Badan Kesbanglinmas Bojonegoro pada tahun 2006.</p>
                    
                    <p>Di awal pendiriannya, lembaga ini diharapkan dapat menjadi wakil masyarakat sipil dalam mengawal regulasi/kebijakan dan pembaharuan tata pemerintahan lokal yang lebih baik, berkelanjutan dan berbasis pada kebutuhan dan keberpihakan pada masyarakat. Dengan mewujudkan kerangka demokratisasi dan desentralisasi, guna menuju relasi antara negara dan masyarakat yang kuat dan bermakna, serta kehidupan masyarakat sipil yang tangguh, semarak, dinamis dan partisipatif.</p>

                    <p>Mandat besar ini, tentu tidak semata sebagai bentuk respon dari cita-cita masa depan menujuhuman-well being. Tetapi prinsip-prinsip kemanusiaan, kesejahteraan dan keadilan yang diidamkan oleh seluruh bangsa Indonesia, tidak akan tercapai bila tidak ditopang olehgovernanceyang demokratis dan otonom. Demikianlah BOJONEGORO INSTITUTE &ndash; yang didirikan oleh para pegiat/aktifis social ini &ndash; akan berkarya untuk memberikan kontribusi terhadap cita-cita mulia ini</p>

                    <p>Pendiri dan pegiat BOJONEGORO INSTITUTE percaya, bahwa demokratisasi adalah upaya membawa negara lebih dekat ke masyarakat, membagun kapasitas dan partisipasi masyarakat dalam kehidupan sehari-hari. Hal ini diwujudkan dengan pertanggungjawaban pemerintah, transparansi (kebijakan, keuangan dan pelayanan), perbaikan pelayanan publik yang mudah dijangkau oleh masyarakat bawah.</p>

                    <h2><center>Visi Misi</center></h2>
                    
                    <h3>Visi</h3>
                    <p>Menjadi lembaga non pemerintah yang tangguh dan terpercaya dalam mempromosikan masyarakat yang merdeka dan pluralis, serta tata pemerintahan lokal yang baik.</p>

                    <h3>Misi</h3>
                    <ul class="ml-20 mb-3">
                        <li class="lis">Mengembangkan gagasan-gagasan kritis dan sikap demokratis warga masyarakat.</li>
                        <li class="lis">Memperkuat kapasitas masyarakat untuk bersuara (voice) dan keluar (exit) dari lingkungan yang tidak demokratis dan sentralistik.</li>
                        <li class="lis">Mendorong terciptanya kemitraan lokal yang berbasis pada prinsip saling percaya diantara stake holder pemerintahan lokal melalui perluasan ruang publik yang bebas, otonom dan dialogis.</li>
                    </ul>

                    <h2><center>Program Utama</center></h2>
                    <p>Untuk mewujudkan cita-cita diatas, BOJONEGORO INSTITUTE memiliki dua program utama sebagai manifestasi dari mandat sosial (social mandatory). Yakni :</p>

                    <ul class="ml-ul">
                        <li class="lis bold">Program Good Governance dan Otonomi Lokal</li>
                    </ul>

                    <p class="ml-20">Untuk mewujudkan pemerintahan yang baik (Good Governance), maka strategi dan langkah-langkah Bojonegoro Institute adalah dengan:</p>

                    <ol>
                        <li class="lis ml-20">Mendorong tercipatanya transparansi, responsifitas dan akuntabilitas pemerintah lokal.</li>
                        <li class="lis ml-20">Mendorong reformasi pelayanan publik menjadi lebih terbuka, efisien, efektif dan mudah dijangkau oleh masyarakat.</li>
                        <li class="lis ml-20">Memperkuat kapasitas dan otonomi pemerintah lokal dalam melakukan perencanaan pembangunan dan mengelola pemerintahan, pembangunan dan kemasyarakatan.</li>

                    </ol>

                    <ul class="ml-ul mt-20">
                        <li class="lis bold">Program Demokrasi dan Penguatan Civil Society</li>
                    </ul>
                    <ol>
                        <li class="lis ml-20">Menyebarluaskan ide-ide dan nilai-nilai demokrasi kepada masyarakat</li>
                        <li class="lis ml-20">Mengembangkan model demokrasi alternatif yang sesuai dengan keragaman kebiasaan dan kultur lokal</li>
                        <li class="lis ml-20">Memperkuat kultur demokratis antar warga masyarakat</li>
                        <li class="lis ml-20">Memperkuat modal sosial sebagai basis desentralisasi dan demokrasi lokal</li>
                        <li class="lis ml-20">Mendorong partisipasi masyarakat dalam pemerintah dan pembangunan</li>
                        <li class="lis ml-20">Mengembangkan forum warga ditingkat lokal yang mewadahi komunikasi dialogis antara unsur pemerintah dan masyarakat</li>
                        <li class="lis ml-20">Membangun kerja sama dan jaringan antar institusi lokal</li>
                    </ol>

                    
                    <h2 class="mt-20"><center>Aktivitas Utama</center></h2>
                    <p>Untuk menggerakkan dua program diatas, BOJONEGORO INSTITUTE merancang beberapa aktifitas utama :</p>
                    <ol>
                        <li class="lis">Penelitian aksi yang bersifat kritis dan partisipatif terhadap berbagai fenomena ketidakberdayaan masyarakat, terutama untuk mengidentifikasi dan menganalisi masalah serta kebutuhan masyarakat. Hasil-hasil penelitian senantiasa dirumuskan sebagai modal untuk keperluan program aksi dan perubahan dalam masyarakat.</li>
                        <li class="lis">Pendidikan, pelatihan dan pendampingan yang merupakan wahana mendiseminasikan pemikiran kritis dan mendorong terciptanya partisipasi masyarakat dalam kebijakan publik. Pendidikan dan pelatihan juga menjadi media assistensi untuk meningkatkan kapasitas aktor-aktor strategis seperti aktifis sosial, mahasiswa, birokrasi desa dan lain-lain.</li>
                        <li class="lis">Publikasi yang merupakan sarana artikulasi dan sosialisasi ide-ide kritis yang ditimba dari berbagai pemikiran dan aktifitas kelembagaan. Bentuk dan hasil publikasi ini adalah Media Massa dan Buku.</li>
                        <li class="lis">Advokasi, yaitu gerakan bersama melalui analisis kebijakan, dialog, dan public hearing untuk melakukan perubahan kebijakan publik di pemerintah daerah dan pengorganisasian dalam arena masyarakat sipil (desa).</li>
                    </ol>
                    
                    <h2 class="mt-20"><center>Strategi</center></h2>
                    <p>Dalam melakukan penelitian, pendidikan dan pemberdayaan masyarakat, BOJONEGORO INSTITUTE mengambil berbagai strategi :</p>
                    <ol>
                        <li class="lis">Berpihak, yakni kajian-kajian ilmiah yang digelar tidak semata-mata bersandar pada prinsip obyektifitas, tetapi lebih pada intersubjektifitas yang berpihak demi kepentingan dan perubahan masyarakat.</li>
                        <li class="lis">Dekonstruksi, yakni sebagai upaya membangun wacana-wacana tandingan atas wacana-wacana hegemonik yang bersumber pada rezim global, negara, masyarakat dalam konteks sosio kultur.</li>
                        <li class="lis">Diseminasi, yakni wacana-wacana tandingan yang di bangun dengan dekonstruksi disebarluaskan ke publik melaui opini, publikasi, seminar, diskusi, pelatihan dan lain sebagainya.</li>
                        <li class="lis">Fasilitasi, yaitu memberikan ruang dialog antar segmen dan sekaligus mendorong pembentukan maupun penguatan institusi-institusi lokal yang demokratis.</li>
                        <li class="lis">Partisipasi – intervensi, yakni proses pendidikan politik yang menggunakan kombinasi antara partisipasi kelompok sasaran dan intervensi intelektual. Partisipasi dimaksudkan sebagai upaya penggalian kearifan lokal, sedangkan intervensi intelektual merupakan upaya transfer pengetahuan dan kebajikan untuk membangun kesadaran kolektif masyarakat.</li>
                        <li class="lis">Asistensi, yakni bentuk transfer pengetahuan dan penguatan ketrampilan melalui media pelatihan untuk meningkatkan kapasitas para pengelola local governance.</li>
                        <li class="lis">Advokasi, yaitu yakni kampanye bersama untuk melakukan perubahan kebijakan di ranah negara dan rekayasa budaya di ranah sosio-kultur.</li>
                    </ol>

                    <h2 class="mt-20"><center>Program Experience</center></h2>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-red"><center>Program</center></th>
                                    <th class="text-red" style="width: 30%;"><center>Mitra</center></th>
                                    <th class="text-red" style="width:20%;"><center>Tahun</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p>Riset aksi Participating Intersest</p></td>
                                    <td><center>-</center></td>
                                    <td><center>2005</center></td>
                                </tr>
                                <tr>
                                    <td><p>Studi; need assasment masyarakat sekitar tambang minyak</p></td>
                                    <td><center><p>LP3ES</p></center></td>
                                    <td><center>2005</center></td>
                                </tr>
                                <tr>
                                    <td><p>Pendampingancivil community development(9 Desa) sekitar tambang minyak</p></td>
                                    <td>
                                        <center><p>&ndash;</p></center>
                                    </td>
                                    <td><center>2005</center></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Pembentukan Organisasi Petani Bojonegoro</p>
                                    </td>
                                    <td><center>-</center></td>
                                    <td><center>2006</center></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Riset Pengembangan Usaha Kecil Menengah</p>
                                    </td>
                                    <td>
                                        <p><center>PUPUK-Surabaya</center></p>
                                    </td>
                                    <td><center>2006</center></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Government Advocation for Participating InterestBasedLocalShare</p>
                                    </td>
                                    <td>
                                        <p><center>-</center></p>
                                    </td>
                                    <td><center>2007</center></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Study Implementasi saham rakyat (Cepu Block Invesment)</p>
                                    </td>
                                    <td>
                                        <p><center>-</center></p>
                                    </td>
                                    <td><center>2007</center></td>
                                </tr>
                                <tr>
                                    <td><p>Community Emergency Respon Management</p></td>
                                    <td>
                                        <p><center>OXFAM GB</center></p>
                                    </td>
                                    <td><center>2008</center></td>
                                </tr>
                                <tr>
                                    <td><p>Facilitating Better Local Governance of Oil Revenue For Improved Social and Economic Development in Bojonegoro</p></td>
                                    <td>
                                        <p><center>Revenue Watch Institute <br>LGI-Pattiro</center></p>
                                    </td>
                                    <td><center>2008-2012</center></td>
                                </tr>
                                <tr>
                                    <td><p>Pendidikan Pemilih untuk Pemilu 2009</p></td>
                                    <td>
                                        <p><center>DEPDAGRI</center></p>
                                    </td>
                                    <td><center>2009</center></td>
                                </tr>
                                <tr>
                                    <td><p>Pelatihan Kewirasusahaan Pemuda Melalui Lembaga Kepemudaan</p></td>
                                    <td>
                                        <p><center>Kemenpora-Depdiknas</center></p>
                                    </td>
                                    <td><center>2009</center></td>
                                </tr>
                                <tr>
                                    <td><p>Pembuatan Film Dokumenter&ldquo;People, Oil, Policy; Playing between welfare and curse&rdquo;</p></td>
                                    <td>
                                        <p><center>RWI-LGI-Pattiro-LPAW</center></p>
                                    </td>
                                    <td><center>2009</center></td>
                                </tr>
                                <tr>
                                    <td><p>Community Score Card</p></td>
                                    <td>
                                        <p><center>RWI-ANSA-EAP</center></p>
                                    </td>
                                    <td><center>2011</center></td>
                                </tr>
                                <tr>
                                    <td><p>Penguatan Parlemen</p></td>
                                    <td>
                                        <p><center>RWI-IPC</center></p>
                                    </td>
                                    <td><center>2011</center></td>
                                </tr>
                                <tr>
                                    <td><p>Program Promoting Transparency &amp; Accountability Of Subnational Oil &amp; Gas Management For Sustainable Development In Bojonegoro</p></td>
                                    <td>
                                        <p><center>Revenue Watch Institute</center></p>
                                    </td>
                                    <td><center>2013</center></td>
                                </tr>
                                <tr>
                                    <td><p>Studi Lapangan Peserta Pelatihan Tatakelola Industri Ekstraktif se-Asia Pacific di Bojonegoro</p></td>
                                    <td>
                                        <p><center>Polgov UGM-RWI-USAID</center></p>
                                    </td>
                                    <td><center>2014</center></td>
                                </tr>
                                <tr>
                                    <td><p>Reversing the Resource Curse Throught Poverty Alleviation</p></td>
                                    <td>
                                        <p><center>Ford Foundation <br>
                                            Publish What You Pay-Ind.</center></p>
                                    </td>
                                    <td><center>2014-2015</center></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2><center>Alamat</center></h2>
                    
                    Kantor: Jln. Panglima Polim Gg. Mangga I – Bojonegoro, 62115. Jawa Timur. Telp / Fax 0353 888557 / Mobile 082335823234
                    <p class="mtb-0 mt-3">Email : institute_bojonegoro@yahoo.co.id</p>
                    <p class="mtb-0">Website : www.bi.or.id</p>
            </div>
            <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">
                    <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4 people like this</p>
                    
                    <div class="col-sm-4 text-center my-2 my-sm-0">
                    <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                </div>

                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
            <div class="navigation-area">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        <div class="thumb">
                            <a href="#">
                                <img class="img-fluid" src="/assets/home1/img/post/preview.png" alt="">
                            </a>
                        </div>
                        
                        <div class="arrow">
                            <a href="#">
                                <span class="lnr text-white ti-arrow-left"></span>
                            </a>
                        </div>
                    <div class="detials">
                        <p>Prev Post</p>
                        <a href="#">
                        <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                    <div class="detials">
                        <p>Next Post</p>
                        <a href="#">
                            <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                        </a>
                    </div>
                    <div class="arrow">
                        <a href="#">
                            <span class="lnr text-white ti-arrow-right"></span>
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="#">
                        <img class="img-fluid" src="/assets/home1/img/post/next.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-author">
    <div class="media align-items-center">
        <img src="/assets/home1/img/blog/author.png" alt="">
        <div class="media-body">
            <a href="#">
                <h4>Harvard milan</h4>
            </a>
            <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
        </div>
    </div>
</div>
<div class="comments-area">
    <h4>05 Comments</h4>
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="/assets/home1/img/blog/comment_1.png" alt="">
                    </div>
                    
                    <div class="desc">
                        <p class="comment">Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser</p>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">Emilly Blunt</a>
                                </h5>
                                <p class="date">December 4, 2017 at 3:12 pm </p>
                            </div>
                            
                            <div class="reply-btn">
                                <a href="#" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="/assets/home1/img/blog/comment_2.png" alt="">
                    </div>
                    <div class="desc">
                        <p class="comment">Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">Emilly Blunt</a>
                                </h5>
                                <p class="date">December 4, 2017 at 3:12 pm </p>
                            </div>
                            <div class="reply-btn">
                                <a href="#" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="/assets/home1/img/blog/comment_3.png" alt="">
                    </div>
                    
                    <div class="desc">
                        <p class="comment">Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser </p>
                        
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                            <h5><a href="#">Emilly Blunt</a></h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                        </div>
                    <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="#" id="commentForm">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                </div>
            </div>
            
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
        </div>
    </form>
</div>
</div>
<div class="col-lg-4"><div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="#">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword'onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
        </form>
    </aside>
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
        <ul class="list cat-list">
            <li>
                <a href="#" class="d-flex">
                    <p>Resaurant food</p>
                    <p>(37)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Travel news</p>
                    <p>(10)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Modern technology</p>
                    <p>(03)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Product</p>
                    <p>(11)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Inspiration</p>
                    <p>(21)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Health Care</p>
                    <p>(21)</p>
                </a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
        <div class="media post_item">
            <img src="/assets/home1/img/post/post_1.png" alt="post">
            <div class="media-body">
                <a href="blog_details.html">
                    <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                </a>
                <p>January 12, 2019</p>
            </div>
        </div>
        <div class="media post_item">
            <img src="/assets/home1/img/post/post_2.png" alt="post">
            <div class="media-body">
                <a href="blog_details.html">
                    <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                </a>
                <p>02 Hours ago</p>
            </div>
        </div>
        <div class="media post_item">
            <img src="/assets/home1/img/post/post_3.png" alt="post">
            <div class="media-body">
                <a href="blog_details.html">
                    <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                </a>
                <p>03 Hours ago</p>
            </div>
        </div>
        <div class="media post_item">
            <img src="/assets/home1/img/post/post_4.png" alt="post">
            <div class="media-body">
                <a href="blog_details.html">
                    <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                </a>
                <p>01 Hours ago</p>
            </div>
        </div>
    </aside>

    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
        <ul class="list">
            <li>
                <a href="#">project</a>
            </li>
            <li>
                <a href="#">love</a>
            </li>
            <li>
                <a href="#">technology</a>
            </li>
            <li>
                <a href="#">travel</a>
            </li>
            <li>
                <a href="#">restaurant</a>
            </li>
            <li>
                <a href="#">life style</a>
            </li>
            <li>
                <a href="#">design</a>
            </li>
            <li>
                <a href="#">illustration</a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                <img class="img-fluid" src="/assets/home1/img/post/post_5.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="/assets/home1/img/post/post_6.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="/assets/home1/img/post/post_7.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="/assets/home1/img/post/post_8.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="/assets/home1/img/post/post_9.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="/assets/home1/img/post/post_10.png" alt="">
                </a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
        </form>
    </aside>
</div>
<!-- Blog Area End -->

@endsection()

