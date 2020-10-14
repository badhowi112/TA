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
                        <h3>Galeri Foto</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <a href="{{asset('home/img/galeri/1.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/galeri/1.jpg')}});"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('home/img/galeri/2.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/galeri/2.jpg')}});"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('home/img/galeri/3.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/galeri/3.jpg')}});"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{asset('home/img/galeri/4.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/galeri/4.jpg')}});"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{asset('home/img/elements/g5.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/elements/g5.jpg')}});"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('home/img/elements/g6.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/elements/g6.jpg')}});"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('home/img/elements/g7.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/elements/g7.jpg')}});"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('home/img/elements/g8.jpg')}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('home/img/elements/g8.jpg')}});"></div>
                    </a>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ portfolio_image_area  -->


    <!-- testimonial_area  -->
    <!-- <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{asset('home/img/testmonial/quote.svg')}}" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{asset('home/img/testmonial/thumb.png')}}" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{asset('home/img/testmonial/quote.svg')}}" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{asset('home/img/testmonial/thumb.png')}}" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{asset('home/img/testmonial/quote.svg')}}" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{asset('home/img/testmonial/thumb.png')}}" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /testimonial_area  -->

    <!-- <div class="get_in_tauch_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Get in Touch</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Tour function information without cross action media value quickly maximize timely deliverables.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="touch_form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <input type="text" placeholder="Your Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                        <input type="email" placeholder="Email" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <input type="email" placeholder="Subject" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                       <textarea name="" id="" cols="30" placeholder="Message" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                        <button class="boxed-btn3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- footer start -->
    @include('sites.includes._footer')
    <!--/ footer end  -->

    <!-- JS here -->
    @include('sites.includes._js')
</body>

</html>