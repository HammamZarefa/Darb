@extends('layouts.front')

@section('meta')
  <!-- Primary Meta Tags -->
  <meta name="description" content="{{ $general->meta_desc }}">
  <meta name="keywords" content="{{ $general->keyword }}">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="127.0.0.1:8000">
  <meta property="og:title" content="{{ $general->title }}">
  <meta property="og:description" content="{{ $general->meta_desc }}">
  <meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="127.0.0.1:8000">
  <meta property="twitter:title" content="{{ $general->title }}">
  <meta property="twitter:description" content="{{ $general->meta_desc }}">
  <meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">

@endsection

@section('content')
  <!-- Start Landing Section -->
  <div class="landing">
    <div class="feature">
      <div class="image"><img src="front/img/featuers-services.svg" alt=""></div>
      <div class="intro-text">
        <h2>أبرز خدماتنا</h2>
        <p> {{ $banner[0]->title}}</p>
        <p class="lorem">{{ $banner[0]->desc}}</p>
        <a href="https://wa.me/+966562030309" target="_blank"><button class="botun">أتصل بنا<i class="fab fa-whatsapp"
                                                                                               aria-hidden="true"></i></button></a>
      </div>
      <div class="box">
      </div>
    </div>
  </div>
  <!-- End Landing Section -->
  <!-- Start About -->
  <div class="about" id="about">
    <div class="container">
      <h2 class="special-heading">من نحن</h2>
      <div class="about-content">
        <div class="image" data-aos="fade-left" data-aos-duration="1500">
          <img src="front/img/about.jpg" alt="" />
        </div>
        <div class="text" data-aos="fade-right" data-aos-duration="1500">
          <p>
            {{--<h2>{{ $about->title }}</h2>--}}
            {{--<h3>{{ $about->subject }}</h3>--}}
            {{ $about->title }}
          </p>
          <hr />
          <p>
            {{ $about->subject }}
          </p>
          {{--<p>--}}
          {{--{{ $about->desc }}--}}
          {{--</p>--}}
          <a href="https://wa.me/+966562030309" target="_blank"><button class="botun">من نحن<i class="fab fa-whatsapp" aria-hidden="true"></i></button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End About -->
  {{--@foreach ($portfolio as $portfolio)--}}
  {{--<div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->pcategory_id }}">--}}
  {{--<img src="{{ asset('storage/'.$portfolio->cover) }}" class="img-fluid" alt="">--}}
  {{--<div class="portfolio-info">--}}
  {{--<h4>{{ $portfolio->name }}</h4>--}}
  {{--<p>{{ $portfolio->pcategory->name }}</p>--}}
  {{--<a href="{{ asset('storage/'.$portfolio->cover) }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{ $portfolio->name }}"><i class="bx bx-plus"></i></a>--}}
  {{--<a href="{{ route('portfolioshow',$portfolio->slug) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--@endforeach--}}
  <!-- Start Portfolio -->
  <div class="portfolios" id="portfolio">
    <h2 class="special-heading un-color">أعمالنا</h2>
    <div class="image"><img src="front/img/screen-preview.svg" alt="" data-aos="fade-up" data-aos-duration="1000">
      <div class="slide-preview">
        <div class="swiper">
          <div class="swiper-wrapper">
            @foreach ($portfolio as $portfolio)
              <div class="swiper-slide"> <img src="{{ asset('storage/'.$portfolio->cover) }}" alt="">  <h4 class="project-name">{{ $portfolio->name }}</h4></div>

              {{--<div class="swiper-slide"> <img src="front/img/screen-preview1.webp" alt=""></div>--}}
              {{--<div class="swiper-slide"> <img src="front/img/screen-preview1.webp" alt=""></div>--}}
            @endforeach
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>

  </div>
  <!-- End Portfolio -->
  <!-- Start friendly brands -->
  <div class="brand" id="brand">
    <div class="container">
      <h2 class="special-heading">علامات تجارية صديقة</h2>
      <div class="swiper2" :breakpoints="breakpoints">
        <div class="swiper-wrapper">
          @foreach ($partner as $partner)
            <div class="swiper-slide"><a href="{{$partner->link}}">
              <!-- <img src="{{ asset('storage/'.$partner->cover) }}" alt=""> -->
                <img src="{{ asset('storage/'.$partner->cover) }}">
              </a>
              <h4 class="parnter-name">{{$partner->name}}</h4>
            </div>
        @endforeach
        <!-- Add Scrollbar -->
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </div>
    <!-- End friendly brands -->
  {{--@foreach ($service as $service)--}}
  {{--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">--}}
  {{--<div class="icon-box iconbox-blue">--}}
  {{--<div class="icon">--}}
  {{--<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
  {{--<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>--}}
  {{--</svg>--}}
  {{--<i class="{{ $service->icon }}"></i>--}}
  {{--</div>--}}
  {{--<h4><a href="{{ route('serviceshow',$service->slug) }}">{{ $service->title }}</a></h4>--}}
  {{--<p>{{ $service->quote }}</p>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--@endforeach--}}
  <!-- Start Services -->
    <div class="services" id="service">
      <div class="container">
        <h2 class="special-heading un-color">خدماتنا</h2>
        <div class="services-content">
          <div class="col-right">
            <!-- Start Services -->
            @foreach ($service as $service)
              <div class="icon-box iconbox-blue">
            <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <i class="{{ $service->icon }}"></i>
            </div>
            <h4><a href="{{ route('serviceshow',$service->slug) }}">{{ $service->title }}</a></h4>
            <p>{{ $service->quote }}</p>
            </div>
          @endforeach
          <!-- End Services -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Services -->
    <!-- Start Contact -->
    <div class="contact" id="contact">
      <div class="container">

        <div class="login-root">
          <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
              <h2 class="special-heading un-heading">أتصل بنا</h2>
              <div class="loginbackground-gridContainer">
                <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                  <div class="box-root"
                       style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">

                  </div>
                </div>


                <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                  <div class="box-root box-background--blue " style="flex-grow: 1;"></div>
                </div>

                <div class="box-root flex-flex" style="grid-area: 2 / 13 / auto / end;">
                  <div class="box-root box-background--cyan200  tans4s" style="flex-grow: 1;">
                    <img src="front/img/logo.jpg" alt="">
                  </div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                  <div class="box-root box-background--blue " style="flex-grow: 1;"></div>
                </div>

              </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">

              <div class="formbg-outer" data-aos="fade-up" data-aos-duration="1000">
                <div class="formbg">
                  <div class="formbg-inner padding-horizontal--48">
                    <form id="stripe-login" onsubmit="event.preventDefault();">
                      <div class="field padding-bottom--24">
                        <label for="email">الاسم</label>
                        <input type="email" name="email">
                      </div>
                      <div class="field padding-bottom--24">
                        <label for="email">الحساب</label>
                        <input type="email" name="email">
                      </div>
                      <div class="field padding-bottom--24">
                        <label for="email">الطلب</label>
                        <textarea name="requests" class="requests" cols="30" rows="10"></textarea>
                      </div>
                      <div class="field padding-bottom--24">
                        <input type="submit" name="submit" value="ارسال">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact -->
  {{--</div>--}}

@endsection
{{--<!-- ======= Hero Section ======= -->--}}
{{--<section id="hero">--}}
{{--<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">--}}

{{--<div class="carousel-inner" role="listbox">--}}

{{--@foreach ($banner as $key => $banner)--}}

{{--<div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{asset('storage/'.$banner->cover)}});">--}}
{{--<div class="carousel-container">--}}
{{--<div class="carousel-content animate__animated animate__fadeInUp">--}}
{{--<h2>{{ $banner->title }}</h2>--}}
{{--<p>{{ $banner->desc }}</p>--}}
{{--@isset($banner->link)--}}
{{--<div class="text-center">--}}
{{--<a href="{{ $banner->link }}" class="btn-get-started">Read More</a>--}}
{{--</div>--}}
{{--@endisset--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--@endforeach--}}


{{--</div>--}}

{{--<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">--}}
{{--<span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>--}}
{{--<span class="sr-only">Previous</span>--}}
{{--</a>--}}

{{--<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">--}}
{{--<span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>--}}
{{--<span class="sr-only">Next</span>--}}
{{--</a>--}}

{{--<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>--}}

{{--</div>--}}
{{--</section><!-- End Hero -->--}}

{{--<main id="main">--}}

{{--<!-- ======= About Us Section ======= -->--}}
{{--<section id="about-us" class="about-us">--}}
{{--<div class="container" data-aos="fade-up">--}}

{{--<div class="section-title">--}}
{{--<h2>About Us</strong></h2>--}}
{{--</div>--}}

{{--<div class="row content">--}}
{{--<div class="col-lg-6" data-aos="fade-right">--}}
{{--<h2>{{ $about->title }}</h2>--}}
{{--<h3>{{ $about->subject }}</h3>--}}
{{--</div>--}}
{{--<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">--}}
{{--<p>--}}
{{--{!! $about->desc !!}--}}
{{--</p>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</section><!-- End About Us Section -->--}}

{{--<!-- ======= Services Section ======= -->--}}
{{--<section id="services" class="services section-bg">--}}
{{--<div class="container" data-aos="fade-up">--}}

{{--<div class="section-title">--}}
{{--<h2>Services</strong></h2>--}}
{{--<p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p>--}}
{{--</div>--}}

{{--<div class="row">--}}

{{--@foreach ($service as $service)--}}
{{--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">--}}
{{--<div class="icon-box iconbox-blue">--}}
{{--<div class="icon">--}}
{{--<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
{{--<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>--}}
{{--</svg>--}}
{{--<i class="{{ $service->icon }}"></i>--}}
{{--</div>--}}
{{--<h4><a href="{{ route('serviceshow',$service->slug) }}">{{ $service->title }}</a></h4>--}}
{{--<p>{{ $service->quote }}</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}

{{--</div>--}}

{{--</div>--}}
{{--</section><!-- End Services Section -->--}}

{{--<!-- ======= Portfolio Section ======= -->--}}
{{--<section id="portfolio" class="portfolio">--}}
{{--<div class="container">--}}

{{--<div class="section-title" data-aos="fade-up">--}}
{{--<h2>Portfolio</h2>--}}
{{--</div>--}}

{{--<div class="row" data-aos="fade-up">--}}
{{--<div class="col-lg-12 d-flex justify-content-center">--}}
{{--<ul id="portfolio-flters">--}}
{{--<li data-filter="*" class="filter-active">All</li>--}}
{{--@foreach ($pcategories as $category)--}}
{{--<li data-filter=".{{ $category->id }}">{{ $category->name }}</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row portfolio-container" data-aos="fade-up">--}}

{{--@foreach ($portfolio as $portfolio)--}}
{{--<div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->pcategory_id }}">--}}
{{--<img src="{{ asset('storage/'.$portfolio->cover) }}" class="img-fluid" alt="">--}}
{{--<div class="portfolio-info">--}}
{{--<h4>{{ $portfolio->name }}</h4>--}}
{{--<p>{{ $portfolio->pcategory->name }}</p>--}}
{{--<a href="{{ asset('storage/'.$portfolio->cover) }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{ $portfolio->name }}"><i class="bx bx-plus"></i></a>--}}
{{--<a href="{{ route('portfolioshow',$portfolio->slug) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}

{{--</div>--}}

{{--</div>--}}
{{--</section><!-- End Portfolio Section -->--}}

{{--<!-- ======= Our Clients Section ======= -->--}}
{{--<section id="clients" class="clients">--}}
{{--<div class="container" data-aos="fade-up">--}}

{{--<div class="section-title">--}}
{{--<h2>Partners</h2>--}}
{{--</div>--}}

{{--<div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">--}}

{{--@foreach ($partner as $partner)--}}
{{--<div class="col-lg-3 col-md-4 col-6">--}}
{{--<div class="client-logo">--}}
{{--<a href="{{ $partner->link }}" target="_blank" rel="noopener noreferrer">--}}
{{--<img src="{{ asset('storage/'.$partner->cover) }}" class="img-fluid" alt="{{ $partner->name }}">--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}

{{--</div>--}}

{{--</div>--}}
{{--</section><!-- End Our Clients Section -->--}}

{{--</main><!-- End #main -->--}}
