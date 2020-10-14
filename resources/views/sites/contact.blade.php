<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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

  <div class="get_in_tauch_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-90">
                    <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Pengaduan Masyarakat</h3>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Kamis siap melayani pengaduan masyarakat kabupaten probolinggo.</p>
                </div>
                @if ($message = Session::get('sukses'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="touch_form">
                <form action="/data/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                    <input name="email" type="email" placeholder="Email" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                    <input name="nama" type="text" placeholder="Your Name" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <input name="subject" type="text" placeholder="Subject" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                   <textarea name="pengaduan" id="" cols="30" placeholder="Message" rows="10"></textarea>
                                   <input name="status" value="belum_verifikasi" type="text" placeholder="Subject" hidden/>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                              {{-- <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                  <input name="gambar" type="file" placeholder="Gambar" >
                              </div> --}}

                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                                  <label class="custom-file-label" for="exampleInputFile">Bukti Gambar</label>
                                </div>
                              </div>

                              {{-- <div class="input-group">
                                  <div class="custom-file">
                                      <input type="file" id="InputLabel" class="custom-file-input" name="gambar" >
                                      <label class="custom-file-label" for="InputLabel"></label>
                               </div>
                               </div> --}}

                              </div>
                          </div>
                          <br><br>  <br>
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
</div>


  <!-- bradcam_area  -->
  <!-- <div class="bradcam_area breadcam_bg_3">
    <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="bradcam_text">
                  <h3>Contact Us</h3>
              </div>
          </div>
      </div>
    </div>
  </div> -->
  <!-- /bradcam_area  -->

  <!-- ================ contact section start ================= -->
  <!-- <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ contact section end ================= -->

    <!-- footer start -->
    @include('sites.includes._footer')
  <!--/ footer end  -->

  <!-- JS here -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    @if(Session::has('sukses'))
    toastr.success("{{Session::get('sukses')}}", 'Sukses')
    @endif
    @if(Session::has('Failed'))
    toastr.error("{{Session::get('Failed')}}", 'Error')
    @endif
    @if(Session::has('Update'))
    toastr.success("{{Session::get('Update')}}", 'Updates')
    @endif
     </script>
  @include('sites.includes._js')
</body>

</html>