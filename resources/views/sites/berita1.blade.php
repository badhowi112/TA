<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>StartUp</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   @include('sites.includes._css')
   <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
   <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->
    <header>
        @include('sites.includes._header')
  </header>
  <!-- header-end -->
 
  <!-- bradcam_area  -->
  <div class="bradcam_area breadcam_bg_3">
   <div class="container">
     <div class="row">
         <div class="col-xl-12">
             <div class="bradcam_text">
                 <h3>single blog</h3>
             </div>
         </div>
     </div>
   </div>
 </div>
 <!-- /bradcam_area  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('home/img/berita/berita1.jpg')}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Dinsos Kab Probolinggo Verifikasi-Validasi 227 Ribu Penerima Bantuan Sosial
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                     </ul>
                     <p class="excert">
                        Dinas Sosial (Dinsos) Kabupaten Probolinggo berupaya memaksimalkan dan mewujudkan pemberian bantuan sosial dari pusat secara tepat. Upaya verifikasi dan validasi terhadap Basis Data Terpadu (BDT) terus di-update. Hal ini dilakukan untuk mencegah terjadinya data ganda penerima bantuan sosial.
                        Kabid Perlindungan dan Jaminan Sosial Dinsos Sudjianto mengatakan bahwa kemungkinan data ganda ditemukan. Sebab, penerima bantuan sosial yang ada mencapai ribuan orang. Namun demikian, upaya penghapusan data ganda dan pembaruan data tetap dilakukan secara berkala.
                     </p>
                     <p>
                        “Data ganda memang beberapa kali pernah ditemukan. Ketika menemukan data ganda, akan dilakukan penghapusan sehingga hanya tersisa data tunggal,” ujarnya.
                        Pembaruan data dilakukan pada beberapa kali untuk memperoleh data terkini. Dimana data ini nantinya akan digunakan sebagai acuan data untuk pemberian bantuan sosial. “Dari data Kemensos ada sekitar 227 ribu keluarga penerima manfaat. Ini masih kami lakukan verifikasi dan validasi,” tuturnya.
                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            Sementara itu, Kepala Dinas Sosial Achmad Arif mengatakan, peningkatan kinerja Tenaga Kesejahteraan Sosial Kecamatan (TKSK) perlu dilakukan. Utamanya dalam pelaksanaan verifikasi dan validasi terhadap BDT, agar bantuan sosial yang diberikan sesuai sasaran.
                            “Verifikasi dan validasi harus dilaksanakan, kinerja TKSK harus lebih ditingkatkan. Penerima bantuan sosial juga perlu diverifikasi supaya tidak ada data ganda,” ujarnya.
                        </div>
                     </div>
                     <p>
                        Menurutnya, penanganan penyandang masalah kesejahteraan sosial, khususnya penanganan fakir miskin melalui Bantuan Pangan Non Tunai (BPNT) dan Program Keluarga Harapan (PKH), dapat berjalan dengan baik, jika koordinasi dilakukan secara baik.
                     </p>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        </div>
                  </div> 
                  <div class="navigation-area">
                     <div class="row">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <!-- <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside> -->
                  <!-- <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
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
                  </aside> -->
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                        <img src="{{asset('home/img/post/post_1.png')}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="{{asset('home/img/post/post_2.png')}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="{{asset('home/img/post/post_3.png')}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Astronomy Or Astrology</h3>
                           </a>
                           <p>03 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="{{asset('home/img/post/post_4.png')}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Asteroids telescope</h3>
                           </a>
                           <p>01 Hours ago</p>
                        </div>
                     </div>
                  </aside>
                  <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
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
                  </aside> -->
                  <!-- <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{asset('home/img/post/post_5.png')}}" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{asset('home/img/post/post_6.png')}}" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{asset('home/img/post/post_7.png')}}" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{asset('home/img/post/post_8.png')}}" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{asset('home/img/post/post_9.png')}}" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{asset('home/img/post/post_10.png')}}" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside> -->
                  <!-- <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

 
    <!-- footer start -->
    @include('sites.includes._footer')
  <!--/ footer end  -->


   <!-- JS here -->
   @include('sites.includes._js')
</body>

</html>