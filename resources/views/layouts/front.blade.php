<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="{{ $general->meta_desc }}" name="description">
    <meta content="{{ $general->keyword }}" name="keywords">
    <title>
        @yield('title')
        {{ $general->title }}</title>
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="icon">
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="stylesheet" href="front/css/all.css" />
    <link rel="stylesheet" href="front/package/swiper-bundle.min.css" />
    <link href="front/vendor/aos-master/dist/aos.css" rel="stylesheet">
    <!-- for prevent favicon.ico requests -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

</head>

  @yield('meta')


  <!-- Template Main CSS File -->
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
  
  {{-- Sharethis --}}
  {!! $general->sharethis !!}

  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<body style="direction: rtl;">
<!-- Start Header -->
<div class="header" id="header">
  <div class="container">
   <a href="/"> <img class="logo" src="{{ asset('storage/'.$general->logo) }}" alt="" /></a>
    <div class="nav"><a href="#about">من نحن</a></div>
    <div class="nav"><a href="#portfolio">أعمالنا</a></div>
    <div class="nav"><a href="#brand">علامات تجارية</a></div>
    <div class="nav"><a href="#service">خدماتنا</a></div>
    <div class="nav"><a href="#contact">اتصل بنا</a></div>
    {{--<div class="nav"><a href="/blog">مدونة درب</a></div>--}}
    <div class="links" id="links">

      <ul class="menu">
        <li>
            <span class="icon">
              <span></span>
              <span></span>
              <span></span>
            </span>

          <ul id="ul_links">
            <li><a href="#about">من نحن</a></li>
            <li><a href="#portfolio">أعمالنا</a></li>
            <li><a href="#brand">علامات تجارية</a></li>
            <li><a href="#service">خدماتنا</a></li>
            <li><a href="#contact">اتصل بنا</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</div>
</body>

  @yield('content')

  <!-- ======= Footer ======= -->
<!-- Start Footer -->

<div class="footer">
    <div class="top-footer">
        <ul>
            <h3>الشركة</h3>
            <ul>
                <li><a href="#about"> من نحن</a></li>
                <li><a href="#service"> الخدمات </a></li>
                <li><a href="/testimonials">آراء العملاء</a></li>
                <li><a href="/blog">مدونة درب</a></li>
            </ul>
        </ul>
        <ul>
            <h3>تواصل معنا</h3>
            <ul>
                <li><a href="#">انضم لنا</a></li>
                <li><a href="#contact">تواصل معنا</a></li>
            </ul>
        </ul>
        <ul>
            <h3>الأنظمة</h3>
            <ul>
                @foreach ($link as $link)
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ $link->link }}">{{ $link->name }}</a></li>
                @endforeach
            </ul>
        </ul>
        <div class="left-social">
            <div class="logo"> <a href="#header"> <img src="{{ asset('storage/'.$general->logo) }}" alt=""></a></div>
            <div class="social">
                <a href="{{ $general->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="{{ $general->facebook }}" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                <a href="{{ $general->twitter }}" target="_blank"> <i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div> © 2021{{ $general->footer }}. جميع الحقوق محفوظة.</div>
    </div>
</div>
<!-- End Footer -->



<script src="front/js/main.js"></script>
<script src="front/vendor/aos-master/dist/aos.js"></script>
<script src="front/package/swiper-bundle.min.js"></script>

<script>
    document.querySelector('html').classList.remove('no-js');
    if (!window.Cypress) {
        const scrollCounter = document.querySelector('.js-scroll-counter');

        AOS.init({
            mirror: true
        });

        document.addEventListener('aos:in', function (e) {
            console.log('in!', e.detail);
        });
    }
    var swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        speed: 800,
        effect: 'coverflow',
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
    var swiper2 = new Swiper('.swiper2', {
        // Optional parameters
        direction: 'horizontal',
        speed: 1000,
        loop: true,
        breakpoints: {

            300: {  // when window width from 300px to 576px
                slidesPerView: 2,
                spaceBetween: 50
            },
            576: {  // when window width from 576px to 767px
                slidesPerView: 3,
                spaceBetween: 50
            },
            767: { // when window width from 767px to 991px
                slidesPerView: 3,
                spaceBetween: 50
            },

            991: { // when window width from 991px to 1200px
                slidesPerView: 4,
                spaceBetween: 50
            },
            1200: { // when window width from 1200px to higher
                slidesPerView: 4,
                spaceBetween: 50
            },
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
        },

    });
</script>


</html>
