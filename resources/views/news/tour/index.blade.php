@extends('templates.news.master')
@section('content')
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Tour Lý Sơn</h2>
                <div class="page_link">
                  <a href="{{ route('news.index.index') }}">Home</a>
                  <a href="{{ route('news.tour.index') }}">Tour Lý Sơn</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <div class="popular_courses mt-5 pb-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="main_title">
              <h2 class="mb-3">Các cách di chuyển để đi đến Cảng Sa Kỳ - Đảo Lý Sơn</h2>
              <p>
                Để đi đến đảo Lý Sơn, các bạn cần phải đi tàu, hoặc máy bay đến Quảng Ngãi, Sân bay Chu Lai, Sân bay Đà Nẵng, sau đó các bạn di chuyển đến cảng Sa Kỳ, tỉnh Quảng Ngãi bằng xe ô tô hoặc xe Khách. Sau đó sẽ đặt vé tàu siêu tốc đi từ cảng Sa Kỳ đến Đảo Lý Sơn
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          @foreach($tours as $tour)
          <div class="col-md-6 col-lg-4">
            <div class="single_course my-3">
              <div class="course_head">
                <a href="{{ route('news.tour.detail', $tour->slug) }}"><img class="img-fluid" src="/upload/{{ $tour->picture }}" alt="{{ $tour->title }}" /></a>
              </div>
              <div class="course_content">
                <span class="price">-40%</span>
                @if($tour->seat)
                  <span class="tag mb-2 d-inline-block background-secondary">Xe Đưa đón</span>
                @endif
                @if($tour->ticket)
                  <span class="tag mb-2 d-inline-block">Vé tàu</span>
                @endif
                <h4 class="mb-3">
                  <a href="{{ route('news.tour.detail', $tour->slug) }}">{{ $tour->title }}<span class="tip tip-hot">Hot!</span></a>
                </h4>
                <p>Đi du lịch {{ $tour->title }} với các tiện ích sau</p>
                <div class="row">
                  <div class="col-7">
                    <ul class="unordered-list">
                      @if($tour->seat)
                      <li>Xe ôtô {{ $tour->seat }} chỗ</li>
                      @endif
                      <li>Khách sạn {{ $tour->hotel }}</li>
                      @if($tour->ticket)
                      <li>Vé tàu cao tốc ra vô đảo Lý Sơn</li>
                      @endif
                      <li>Áp dụng cho {{ $tour->people }} người</li>
                    </ul>
                  </div>
                  <div class="col-5 my-auto px-1">
                    <div class="price-tours my-2">
                      <p class="price-service text-center"><span>{{ $tour->time }}</span></p>
                      <p class="price-service text-center pt-3"><span>{{ number_format($tour->recost, 0, ',','.') }} VND</span></p>
                    </div>
                  </div>
                </div>
                <div class="col mx-auto">
                  <a href="{{ route('news.tour.detail', $tour->slug) }}" class="primary-btn small genric-btn mt-3 px-4 shadow">Xem thêm</a>
                  <a href="tel:18000079" class="primary-btn small genric-btn mt-3 px-4 shadow">Hotline</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="divider">
    </div>
    <!--================ Start About Area =================-->
    <section class="about_area section_gap py-3">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" alt="Du lịch Lý Sơn" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Chào mừng bạn đến với dịch vụ thuê xe của chúng tôi</h4>
                <p>
                  Lời đầu tiên chúng tôi xin cảm ơn quý khách đã tin tưởng và ủng hộ dịch
                  vụ của chúng tôi. Chúng tôi hy vọng dịch vụ của chúng tôi có thể nhận được
                  sự ủng hộ của tất cả mọi người đặc biệt là khách du lịch trên toàn quốc.
                </p>
                <p>
                  Chúng tôi tự tin cung cấp những dòng xe mới, không hư hỏng với giá thuê đảm bảo
                  cạnh tranh và rẻ hơn so với thị trường. Ngoài ra chúng tôi còn cung cấp những tour du lịch
                  Lý Sơn 2 ngày 1 đêm, 3 ngày 2 đêm giá rẻ thời gian thoải mái để tiện phục vụ quý khách. Mọi
                  chi tiết xin liên hệ hot line: 1800 0079 (miễn phí).
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End About Area =================-->
    <section class="">
      <div class="container">
        <div class="row mt-3">
          <div class="col-lg-3 col-6">
            <div class="single_feature shadow py-3" style="background-color: #fdc632">
              <div class="row">
                <div class="col-4 my-auto pl-0 color-secondary">
                  <i class="fas fa-building" style="font-size:40px;padding-left:0px"></i>
                </div>
                <div class="col-8 pl-1 my-auto mx-auto">
                  <div class="desc">
                    <h4 class="">Khách sạn</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="single_feature shadow py-3" style="background-color: #fdc632">
              <div class="row">
                <div class="col-4 my-auto pl-0 color-secondary">
                  <i class="fas fa-plane-departure" style="font-size:40px;padding-left:0px;"></i>
                </div>
                <div class="col-8 pl-1 my-auto mx-auto">
                  <div class="desc">
                    <h4 class="">Vé Máy Bay</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="single_feature shadow py-3" style="background-color: #fdc632">
              <div class="row">
                <div class="col-4 my-auto pl-0 color-secondary">
                  <i class="fas fa-car" style="font-size:40px;padding-left:0px;"></i>
                </div>
                <div class="col-8 pl-1 my-auto mx-auto">
                  <div class="desc">
                    <h4 class="">Xe du lịch</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="single_feature shadow py-3" style="background-color: #fdc632">
              <div class="row">
                <div class="col-4 my-auto pl-0 color-secondary">
                  <i class="fas fa-ship" style="font-size:40px;padding-left:0px;"></i>
                </div>
                <div class="col-8 pl-1 my-auto mx-auto">
                  <div class="desc">
                    <h4 class="">Tàu cao tốc</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap pt-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Đánh giá từ khách hàng</h2>
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t1.jpg" alt="Khách hàng trải nghiệm tại Lý Sơn Trip" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Anh Nguyễn Thành Trung</h4>
                    <p>
                      Lý Sơn Trip là một dịch vụ tốt, mang đến cho tôi những trải nghiệm mới khi đi du lịch
                      Lý Sơn. Thật tuyệt vời!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t2.jpg" alt="Khách hàng trải nghiệm tại Lý Sơn Trip" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Anh Nguyễn Văn Luân</h4>
                    <p>
                      Một người bạn đã giới thiệu tôi đi xe của Lý Sơn Trip. Tôi đã có một chuyến đi vui vẻ với
                      anh tài xế thân thiện, giá tiền phù hợp với tôi.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t3.jpg" alt="Khách hàng trải nghiệm tại Lý Sơn Trip" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Anh Nguyễn Minh Tài</h4>
                    <p>
                      Tôi đã từng đi Lý Sơn 1 lần trước đó nhưng chuyến đi Lý Sơn lần này với Lý Sơn Trip rẻ hơn nhiều 
                      so với suy nghĩ của tôi.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t4.jpg" alt="Khách hàng trải nghiệm tại Lý Sơn Trip" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Anh Lê Hồng Phong</h4>
                    <p>
                      Tôi đã có 1 chuyến du lịch vui vẻ với gia đình nhờ sử dụng dịch vụ ở Lý Sơn Trip. Nếu có dịp, tôi sẽ quay
                      lại Lý Sơn.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
@section('meta')
<title>Du lịch Lý Sơn giá rẻ</title>
    <meta name="keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son" />
    <meta name="description" content='Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn ' />
    <meta name="news_keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son ">

    <meta property="og:title" content="Du lịch Lý Sơn giá rẻ" />
    <meta property="og:description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta property="og:image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />
    <meta property="og:url" itemprop="url" content="{{ route('news.tour.index') }}">

    <meta itemprop="name" content="Du lịch Lý Sơn giá rẻ" />
    <meta itemprop="description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta itemprop="image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />@endsection