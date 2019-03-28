@extends('templates.news.master')
@section('content')
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>{{ $news->title }}</h2>
                <div class="page_link">
                  <a href="/">Trang chủ</a>
                  <a href="{{ route('news.news.news') }}">Blog</a>
                  <a href="">{{ $news->title }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="/upload/{{ $news->picture }}" alt="{{ $news->title }}">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 blog_details">
                            <h1>{{ $news->title }}</h1>
                            <div class="entry-meta">
                                <span><i class="far fa-calendar-alt"></i>June 29, 2018</span>
                                <span><i class="fas fa-user"></i>By <a href="#">Admin</a></span>
                                <span><i class="far fa-folder-open"></i>
                                    @foreach($news->tag as $tag)
                                    <a href="/tin-tuc?tag={{ $tag->slug_name }}">{{ $tag->name }}</a>,
                                    @endforeach
                                </span>
                                <div class="fb-like" data-href="https://lysontrip.vn/{{ str_slug($news->title).'-'.$news->id }}.html" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                            </div><!-- End .entry-meta -->       
                        <p>{!!  $news->detail !!}</p>                 
                        </div>
                        <div class="col-lg-12">
                            <div class="blog_right_sidebar">
                                <h4 class="widget-title title_decor shadow">Các chủ đề liên quan</h4>
                                <ul class="list">
                                    @foreach($sames as $same)
                                    <li><a href="{{ route('news.news.detail', ['slug'=>str_slug($same->title), 'id'=>$same->id]) }}">{{ $same->title }}<span class="tip tip-hot">Hot!</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                           <div style="width:100%" class="fb-comments" data-href="https://lysontrip.vn{{ str_slug($news->title).'-'.$news->id }}" data-numposts="5"></div>
                        </div>
                    </div>
                    
                    
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        @if($pre))
                                <div class="thumb">
                                    <a href="{{ route('news.news.detail', ['slug'=>str_slug($pre->title), 'id'=>$pre->id]) }}"><img class="img-fluid" src="/upload/{{ $pre->picture }}" alt="{{ $pre->title }}"></a>
                                </div>
                                <div class="arrow">
                                    <a href="{{ route('news.news.detail', ['slug'=>str_slug($pre->title), 'id'=>$pre->id]) }}"><i class="text-white ti-arrow-left"></i></a>
                                </div>
                                <div class="detials">
                                    <p>Bài trước</p>
                                    <a href="{{ route('news.news.detail', ['slug'=>str_slug($pre->title), 'id'=>$pre->id]) }}">
                                        <h4>{{ $news->title }}</h4>
                                    </a>
                                </div>
                        @endif
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        @if($next)
                                <div class="detials">
                                    <p>Bài kế tiếp</p>
                                    <a href="{{ route('news.news.detail', ['slug'=>str_slug($next->title), 'id'=>$next->id]) }}">
                                        <h4>{{ $news->title }}</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{ route('news.news.detail', ['slug'=>str_slug($next->title), 'id'=>$next->id]) }}"><i class="text-white ti-arrow-right"></i></a>
                                </div>
                                <div class="thumb">
                                    <a href="{{ route('news.news.detail', ['slug'=>str_slug($next->title), 'id'=>$next->id]) }}"><img class="img-fluid" src="/upload/{{ $news->picture }}" alt="{{ $news->title }}"></a>
                                </div>
                        @endif
                            </div>
                        </div>
                    </div>
                </div>
                @include('templates.news.rightbar')
            </div>
        </div>
    </section>
@stop

@section('meta')
<title>{{$news->title}}</title>
    <meta name="keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son" />
    <meta name="description" content='Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn ' />
    <meta name="news_keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son ">

    <meta property="og:title" content="{{$news->title}}" />
    <meta property="og:description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta property="og:image" content= "/upload/{{ $news->picture }}" />
    <meta property="og:url" itemprop="url" content="{{ route('news.news.detail', ['slug' => str_slug($news->title), 'id' => $news->id]) }}">

    <meta itemprop="name" content="{{$news->title}}" />
    <meta itemprop="description" content="{{$news->description}}" />
    <meta itemprop="image" content= "/upload/{{ $news->picture }}" />@endsection