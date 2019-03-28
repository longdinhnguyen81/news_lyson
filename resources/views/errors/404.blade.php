@extends('templates.news.master')
@section('content')
	 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>404 Page</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="">404 Page</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <p style="font-size: 75px;line-height: 100px;color:#fdc632">404|Not Found</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Không tìm thấy trang bạn yêu cầu</h4>
                <p>Có thể bạn yêu thích</p>
                <ul>
                  <li style="text-decoration:underline;list-style-type: square;color:#fdc632"><a style="color:#fdc632" href="/">Trang chủ</a></li>
                  <li style="text-decoration:underline;list-style-type: square;color:#fdc632"><a style="color:#fdc632" href="{{ route('news.index.aboutus') }}">Giới thiệu</a></li>
                  <li style="text-decoration:underline;list-style-type: square;color:#fdc632"><a style="color:#fdc632" href="{{ route('news.car.index') }}">Thuê xe</a></li>
                  <li style="text-decoration:underline;list-style-type: square;color:#fdc632"><a style="color:#fdc632" href="{{ route('news.news.news') }}">Cẩm nang</a></li>
                  <li style="text-decoration:underline;list-style-type: square;color:#fdc632"><a style="color:#fdc632" href="{{ route('news.tour.index') }}">Tour du lịch</a></li>
                  <li style="text-decoration:underline;list-style-type: square;color:#fdc632"><a style="color:#fdc632" href="{{ route('news.index.contact') }}">Liên hệ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop