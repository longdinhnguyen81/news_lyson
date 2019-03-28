@extends('templates.news.master')
@section('content')
  <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach($details as $new)
                        <article class="row blog_item">
                            <div class="col-12">
                                <div class="blog_post">
                                    <img src="/upload/{{ $new->detail->picture }}" alt="{{ $new->detail->title }}" />
                                    <div class="blog_details">
                                        <a href="{{ route('news.news.detail', ['slug' => str_slug($new->detail->title), 'id' => $new->detail->id]) }}">
                                            <h2>{{ $new->detail->title }}</h2>
                                        </a>
                                        <div class="entry-meta">
                                            <span><i class="far fa-calendar-alt"></i>{{ date_format($new->detail->updated_at,'M d, y') }}</span>
                                            <span><i class="fas fa-user"></i>By <a href="#">Admin</a></span>
                                            <span><i class="far fa-folder-open"></i>
                                                @foreach($new->detail->tag as $tag)
                                                <a href="{{ route('news.news.tag', str_slug($tag->name)) }}">{{ $tag->name }}</a>,
                                                @endforeach
                                            </span>
                                        </div><!-- End .entry-meta -->
                                        <p>{!! str_limit($new->detail->description, 70) !!}</p>
                                        <a href="{{ route('news.news.detail', ['slug' => str_slug($new->detail->title), 'id' => $new->detail->id]) }}" class="blog_btn">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $details->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
                @include('templates.news.rightbar')
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    
@stop
@section('meta')
<title>Du lịch Lý Sơn giá rẻ</title>
    <meta name="keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son" />
    <meta name="description" content='Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn ' />
    <meta name="news_keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son ">

    <meta property="og:title" content="Du lịch Lý Sơn giá rẻ" />
    <meta property="og:description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta property="og:image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />
    <meta property="og:url" itemprop="url" content="{{ route('news.news.tag', str_slug($tagss)) }}">

    <meta itemprop="name" content="Du lịch Lý Sơn giá rẻ" />
    <meta itemprop="description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta itemprop="image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />@endsection