@extends('templates.news.master')
@section('content')
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Thuê xe đến Cảng Sa Kỳ</h2>
                <div class="page_link">
                  <a href="{{ route('news.index.index') }}">Home</a>
                  <a href="">Thuê xe</a>
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
          @foreach($travels as $travel)
          <div class="col-md-6 col-lg-4">
            <div class="single_course">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="/upload/{{ $travel->picture }}" alt="{{ $travel->title }}" class="img-fluid" />
                </div>
                <div class="event_details p-2">
                  <div class="d-flex mb-4">
                    <div class="date"><span>{{ $travel->distance }}</span>km</div>

                    <div class="time-location" style="font-size: 20px;">
                      <p>
                        {{ $travel->travel_from }}
                      </p>
                      <p>
                        {{ $travel->travel_to }}
                      </p>
                    </div>
                  </div>
                  <p>{!! str_limit($travel->description, 50) !!}</p>
                  <a href="{{ route('news.car.detail', $travel->slug) }}" class="primary-btn small genric-btn px-4">Xem thêm</a>
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
            <div class="row">
              <div class="col-lg-3 col-md-6 mt-4">
                <div class="shadow p-3 card-icon">
                  <div class="icon text-center"><i class="fas fa-building icon-custom"></i></div>
                  <div class="desc text-center">
                    <p class="mt-3 mb-2 text-with-divider">Khách sạn</p>
                    <p>
                      khách sạn giá rẻ, code giảm giá tại Lý Sơn
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-4">
                <div class="shadow p-3 card-icon">
                  <div class="icon text-center"><i class="fas fa-plane-departure icon-custom"></i></div>
                  <div class="desc text-center">
                    <p class="mt-3 mb-2 text-with-divider">Máy bay</p>
                    <p>
                      Vé máy bay giá rẻ, thông tin khuyến mãi
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-4">
                <div class="shadow p-3 card-icon">
                  <div class="icon text-center"><i class="fas fa-car icon-custom"></i></div>
                  <div class="desc text-center">
                    <p class="mt-3 mb-2 text-with-divider">Xe du lịch</p>
                    <p>
                      Thuê xe du lịch giá rẻ, ưu đãi thuê xe tới Lý Sơn
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mt-4">
                <div class="shadow p-3 card-icon">
                  <div class="icon text-center"><i class="fas fa-map-marked-alt icon-custom"></i></div>
                  <div class="desc text-center">
                    <p class="mt-3 mb-2 text-with-divider">Tàu biển đông</p>
                    <p>
                      Vé tàu super biển đông, đi từ cảng Sa Kỳ đến Lý Sơn
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap py-2 mt-4">
      <div class="container">
       <div class="row">
          <div class="testi_slider owl-carousel">
            <div class="testi_item shadow">
              <div class="row">
                <div class="col-12">
                  <div class="testi_text">
                    <p class="color-secondary" style="font-size:25px;">Anh Nguyễn Thành Trung</p>
                    <div class="d-flex flex-row reviews justify-content-between">
                        <span>Khách đặt xe du lịch Lý Sơn</span>
                        <div class="star color-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <p class="pt-3"><span style="font-size:30px;">"</span>
                      Lý Sơn Trip là một dịch vụ tốt, xe ở đây mới, sạch sẽ. Tài xế nhiệt tình, chu đáo và đúng giờ Chuyến du lịch của tôi thật tuyệt vời. Cảm ơn Lysontrip!
                    <span style="font-size:30px;">"</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item shadow">
              <div class="row">
                <div class="col-12">
                  <div class="testi_text">
                    <p class="color-secondary" style="font-size:25px;">Anh Nguyễn Văn Luân</p>
                    <div class="d-flex flex-row reviews justify-content-between">
                        <span>Khách đặt xe du lịch Lý Sơn</span>
                        <div class="star color-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="pt-3"><span style="font-size:30px;">"</span>
                      Một người bạn đã giới thiệu tôi đi xe của Lý Sơn Trip. Tôi đã có một chuyến đi vui vẻ với
                      anh tài xế thân thiện, giá tiền phù hợp với tôi.
                    <span style="font-size:30px;">"</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item shadow">
              <div class="row">
                <div class="col-12">
                  <div class="testi_text">
                    <p class="color-secondary" style="font-size:25px;">Anh Nguyễn Minh Tài</p>
                    <div class="d-flex flex-row reviews justify-content-between">
                        <span>Khách đặt tour du lịch Lý Sơn</span>
                        <div class="star color-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <p class="pt-3"><span style="font-size:30px;">"</span>
                      Tôi đã từng đi Lý Sơn 1 lần trước đó nhưng chuyến đi Lý Sơn lần này với Lý Sơn Trip rẻ hơn nhiều 
                      so với suy nghĩ của tôi.
                    <span style="font-size:30px;">"</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item shadow">
              <div class="row">
                <div class="col-12">
                  <div class="testi_text">
                    <p class="color-secondary" style="font-size:25px;">Anh Lê Hồng Phong</p>
                    <div class="d-flex flex-row reviews justify-content-between">
                        <span>Khách đặt xe du lịch Lý Sơn</span>
                        <div class="star color-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="pt-3"><span style="font-size:30px;">"</span>
                      Tôi đã có 1 chuyến du lịch vui vẻ với gia đình nhờ sử dụng dịch vụ ở Lý Sơn Trip. Nếu có dịp, tôi sẽ quay
                      lại Lý Sơn.
                    <span style="font-size:30px;">"</span></p>
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
    <meta property="og:url" itemprop="url" content="{{ route('news.car.index') }}">

    <meta itemprop="name" content="Du lịch Lý Sơn giá rẻ" />
    <meta itemprop="description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta itemprop="image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />@endsection