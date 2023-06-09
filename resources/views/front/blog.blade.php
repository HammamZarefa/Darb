@extends('layouts.front')

@section('title')
Blog - 
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          @isset($category)
        <h2>تصنيفات المدونة {{ $category->name }}</h2>
        @endisset
        @isset($tag)
        <h2>العلامات:  {{ $tag->name }}</h2>
        @endisset
        @isset($query)
        <h2>Hasil Pencarian: {{ $query }}</h2>
        @endisset
        @if (!isset($tag) && !isset($category) && !isset($query))
        <h2>المدونة</h2>
        @endif
          <ol>
            <li><a href="/">الرئيسية</a></li>
            <li>المدونة</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            @foreach ($posts as $post)
            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img src="{{ asset('storage/'.$post->cover) }}" alt="{{ $post->title }}" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ route('blogshow',$post->slug) }}">{{ $post->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('blogshow',$post->slug)}}">{{ $post->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('blogshow',$post->slug)}}"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-eye"></i> <a href="{{route('blogshow',$post->slug)}}">{{ $post->views }} Views</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{ Str::limit( strip_tags( $post->body ), 250 ) }}
                </p>
                <div class="read-more">
                  <a href="{{ route('blogshow',$post->slug) }}">قراءة المزيد</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach

            <div class="blog-pagination">
              <ul class="justify-content-center">
                {{ $posts->links() }}
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">بحث</h3>
              <div class="sidebar-item search-form">
                <form action="{{ route("search") }}" method="GET">
                  <input type="text" name="query">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">التصنيفات</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach ($categories as $category)
                  <li><a href="{{ route('category',$category->slug) }}">{{ $category->name }} <span>({{ $category->count() }})</span></a></li>
                  @endforeach
                  
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">المقالات الحديثة</h3>
              <div class="sidebar-item recent-posts">

                @foreach ($recent as $recent)
                <div class="post-item clearfix">
                  <img src="{{ asset('storage/'.$recent->cover) }}" alt="">
                  <h4><a href="{{route('blogshow',$recent->slug)}}">{{ $recent->title }}</a></h4>
                  <time datetime="2020-01-01">{{ Carbon\Carbon::parse($recent->created_at)->format("d F, Y") }}</time>
                </div>
                @endforeach
 
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">العلامات المرجعية</h3>
              <div class="sidebar-item tags">
                <ul>
                  @foreach ($tags as $tag)
                   <li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>
                  @endforeach 
                </ul>

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection