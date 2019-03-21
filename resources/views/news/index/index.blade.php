@extends('templates.news.master')
@section('content')
	  <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="text-with-background-opacity banner_content text-center">
                <p class="text-uppercase">
                  Công ty TNHH Du lịch Lý Sơn 
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  Chào mừng đến với Lý Sơn
                </h2>
                <div>
                  <a href="#" class="primary-btn ml-sm-3 ml-0">Tìm hiểu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
    <!--================ Start Tiện ích =================-->
    <section class="">
      <div class="container">
        <div class="row mt-3">
          <div class="col-lg-3 col-md-6">
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
          <div class="col-lg-3 col-md-6">
            <div class="single_feature shadow py-3" style="background-color: #fdc632">
              <div class="row">
                <div class="col-4 my-auto pl-0 color-secondary">
                  <i class="fas fa-plane-departure" style="font-size:40px;padding-left:0px;"></i>
                </div>
                <div class="col-8 pl-1 my-auto mx-auto">
                  <div class="desc">
                    <h4 class="">Máy Bay</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single_feature shadow py-3" style="background-color: #fdc632">
              <div class="row">
                <div class="col-4 my-auto pl-0 color-secondary">
                  <i class="fas fa-car" style="font-size:40px;padding-left:0px;"></i>
                </div>
                <div class="col-8 pl-1 my-auto mx-auto">
                  <div class="desc">
                    <h4 class="">Xe ôtô</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single_feature shadow py-3" style="background-color: #fdc632">
              <div class="row" >
                <div class="col-4 my-auto pl-0 color-secondary" >
                  <i class="fas fa-ship" style="font-size:40px;padding-left:0px;"></i>
                </div>
                <div class="col-8 pl-1 my-auto mx-auto">
                  <div class="desc">
                    <h4 class="">Tàu Super</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Tiện ích =================-->
    <!--================ Start Tiện ích thuê xe =================-->
    <div class="popular_courses mt-5 pb-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="main_title">
              <h2 class="mb-3">Các cách di chuyển để đi đến Cảng Sa Kỳ - Đảo Lý Sơn</h2>
              <p>
                Để đi đến đảo Lý Sơn, các bạn cần phải đi tàu, hoặc máy bay đến Quảng Ngãi, Sân bay Chu Lai, Sân bay Đà Nẵng, sau đó các bạn di chuyển đến cảng Sa Kỳ, tỉnh Quảng Ngãi bằng xe ô tô hoặc xe Khách. Sau đó sẽ đặt vé tàu siêu tốc đi từ cảng Sa Kỳ đến Đảo Lý Sơn.
              </p>
              <p>
                Dưới đây là các cách thuê xe ô tô và đi xe ké để đến được cảng Sa Kỳ - Đảo Lý Sơn
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="single_event position-relative">
                  <div class="event_thumb">
                    <img src="/templates/news/img/san-bay-chu-lai.png" alt="" />
                  </div>
                  <div class="event_details p-2">
                    <div class="d-flex mb-4">
                      <div class="date"><span>47</span>km</div>

                      <div class="time-location" style="font-size: 20px;">
                        <p>
                          Sân Bay Chu Lai
                        </p>
                        <p>
                          Cảng Sa Kỳ
                        </p>
                      </div>
                    </div>
                    <p>Hướng dẫn di chuyển từ sân Bay Chu Lai đến Cảng Sa Kỳ 47km,...</p>
                    <a href="thue-xe-chi-tiet.html" class="primary-btn small genric-btn px-4">Xem thêm</a>
                  </div>
                </div>
              </div>
              <div class="single_course">
                <div class="single_event position-relative">
                  <div class="event_thumb">
                    <img src="/templates/news/img/san-bay-da-nang.png" alt="" />
                  </div>
                  <div class="event_details p-2">
                    <div class="d-flex mb-4">
                      <div class="date"><span>122</span>km</div>

                      <div class="time-location" style="font-size: 20px;">
                        <p>
                          Sân bay Đà Nẵng
                        </p>
                        <p>
                          Cảng Sa Kỳ
                        </p>
                      </div>
                    </div>
                    <p>Sân Bay Chu Lai đi Cảng Sa Kỳ 47km, 1h12p,...</p>
                    <a href="thue-xe-chi-tiet.html" class="primary-btn small genric-btn px-4">Xem thêm</a>
                  </div>
                </div>
              </div>
              <div class="single_course">
                <div class="single_event position-relative">
                  <div class="event_thumb">
                    <img src="/templates/news/img/thanh-pho-da-nang.png" alt="" />
                  </div>
                  <div class="event_details p-2">
                    <div class="d-flex mb-4">
                      <div class="date"><span>47</span>km</div>

                      <div class="time-location" style="font-size: 20px;">
                        <p>
                          Thành Phố Đà Nẵng
                        </p>
                        <p>
                          Cảng Sa Kỳ
                        </p>
                      </div>
                    </div>
                    <p>Sân Bay Chu Lai đi Cảng Sa Kỳ 47km, 1h12p,...</p>
                    <a href="thue-xe-chi-tiet.html" class="primary-btn small genric-btn px-4">Xem thêm</a>
                  </div>
                </div>
              </div>
              <div class="single_course">
                <div class="single_event position-relative">
                  <div class="event_thumb">
                    <img src="/templates/news/img/thanh-pho-hoi-an.png" alt="" />
                  </div>
                  <div class="event_details p-2">
                    <div class="d-flex mb-4">
                      <div class="date"><span>47</span>km</div>

                      <div class="time-location" style="font-size: 20px;">
                        <p>
                          Thành Phố Hội An
                        </p>
                        <p>
                          Cảng Sa Kỳ
                        </p>
                      </div>
                    </div>
                    <p>Sân Bay Chu Lai đi Cảng Sa Kỳ 47km, 1h12p,...</p>
                    <a href="thue-xe-chi-tiet.html" class="primary-btn small genric-btn px-4">Xem thêm</a>
                  </div>
                </div>
              </div>
              <div class="single_course">
                <div class="single_event position-relative">
                  <div class="event_thumb">
                    <img src="/templates/news/img/thanh-pho-hue.png" alt="" />
                  </div>
                  <div class="event_details p-2">
                    <div class="d-flex mb-4">
                      <div class="date"><span>47</span>km</div>

                      <div class="time-location" style="font-size: 20px;">
                        <p>
                          Thành Phố Huế
                        </p>
                        <p>
                          Cảng Sa Kỳ
                        </p>
                      </div>
                    </div>
                    <p>Các đi từ sân Bay Chu Lai đến Cảng Sa Kỳ 47km,...</p>
                    <a href="thue-xe-chi-tiet.html" class="primary-btn small genric-btn px-4">Xem thêm</a>
                  </div>
                </div>
              </div>
              <div class="single_course">
                <div class="single_event position-relative">
                  <div class="event_thumb">
                    <img src="/templates/news/img/ga-quang-ngai.png" alt="" />
                  </div>
                  <div class="event_details p-2">
                    <div class="d-flex mb-4">
                      <div class="date"><span>47</span>km</div>

                      <div class="time-location" style="font-size: 20px;">
                        <p>
                          Ga TP Quảng Ngãi
                        </p>
                        <p>
                          Cảng Sa Kỳ
                        </p>
                      </div>
                    </div>
                    <p>Sân Bay Chu Lai đi Cảng Sa Kỳ 47km, 1h12p,...</p>
                    <a href="thue-xe-chi-tiet.html" class="primary-btn small genric-btn px-4">Xem thêm</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->
    <div class="divider">
    </div>
    <!--================ End Testimonial Area =================-->
    <div class="testimonial_area section_gap pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title mb-5">
              <h2 class="mb-3">Các thông tin bổ ích trước và trong khi đi du lịch đảo Lý Sơn</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6">
            <div class="sidebar-wrapper p-4 shadow" style="background-color: #fff">
              <div class="widget widget-categories">
                <h4 class="widget-title title_decor shadow rounded">5 điều cần biết</h4>

                <ul class="list-custom">
                    <li><a href="tin-tuc-chi-tiet.html">Các cách di chuyển đến đảo Lý Sơn từ A-Z<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Cách book khách sạn, vé máy bay, vé tàu và xe rẻ nhất<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Giá và giờ tàu ra và vô đảo Lý Sơn</a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Các thông tin khuyến mãi</a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Địa điểm cần check-in</a></li>
                </ul>
              </div><!-- End .widget -->
              <div class="col-lg-12 text-center pt-3">
                <a href="tin-tuc.html" class="">Xem thêm ---></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="sidebar-wrapper p-4 shadow" style="background-color: #fff">
              <div class="widget widget-categories">
                <h4 class="widget-title title_decor shadow rounded">5 kinh nghiệm cần biết</h4>

                <ul class="list-custom">
                    <li><a href="tin-tuc-chi-tiet.html">Các cách di chuyển đến đảo Lý Sơn từ A-Z<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Cách book khách sạn, vé máy bay, vé tàu và xe rẻ nhất<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Giá và giờ tàu ra và vô đảo Lý Sơn</a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Các thông tin khuyến mãi</a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Địa điểm cần check-in</a></li>
                </ul>
              </div><!-- End .widget -->
              <div class="col-lg-12 text-center pt-3">
                <a href="tin-tuc.html" class="">Xem thêm ---></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="sidebar-wrapper p-4 shadow" style="background-color: #fff">
              <div class="widget widget-categories">
                <h4 class="widget-title title_decor shadow rounded">5 bài viết hay nhất</h4>

                <ul class="list-custom">
                    <li><a href="tin-tuc-chi-tiet.html">Các cách di chuyển đến đảo Lý Sơn từ A-Z<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Cách book khách sạn, vé máy bay, vé tàu và xe rẻ nhất<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Giá và giờ tàu ra và vô đảo Lý Sơn</a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Các thông tin khuyến mãi</a></li>
                    <li><a href="tin-tuc-chi-tiet.html">Địa điểm cần check-in</a></li>
                </ul>
              </div><!-- End .widget -->
              <div class="col-lg-12 text-center pt-3">
                <a href="tin-tuc.html" class="">Xem thêm ---></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row">
              
            </div>
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Thông tin thuê nhà, Home Stay, và khách sạn ở Lý Sơn</h1>
                <p>
                  There is a moment in the life of any aspiring astronomer that
                  it is time to buy that first telescope. It’s exciting to think
                  about setting up your own viewing station.
                  There is a moment in the life of any aspiring astronomer that
                  it is time to buy that first telescope. It’s exciting to think
                  about setting up your own viewing station.
                </p>
              </div>
              <div class="col clockinner1 clockinner">
                <a href="">
                  <h1 class="days">150</h1>
                  <span class="smalltext">Days</span>
                </a>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">23</h1>
                <span class="smalltext">Hours</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">47</h1>
                <span class="smalltext">Mins</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">59</h1>
                <span class="smalltext">Secs</span>
              </div>
            </div>
            <div class="row pt-5">
          <!-- single course -->
                  
               
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Đăng ký tư vấn</h3>
              <p>Chúng tôi sẽ gọi ngay để tư vấn, hoặc có thể chát online messenger với chúng tôi hoặc hotline miễn phí cuộc gọi đến 1800 0076</p>
              <form
                class="form_area"
                id="myForm"
                action="mail.html"
                method="post"
              >
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="Họ và tên"
                      placeholder="Tên của Anh Chị"
                      required=""
                      type="text"
                    />
                    <input
                      name="tel"
                      placeholder="Số điện thoại"
                      pattern="[0-9]{8,20}"
                      required=""
                      type="tel"
                    />
                    <div class="single-element-widget pt-3 pl-1">
                      <p><strong>Chọn thông tin cần hỗ trợ</strong></p>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>01. Hỏi đáp du lịch Lý Sơn</p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_1">
                          <label for="question_1"></label>
                        </div>
                      </div>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>02. Thuê xe ôtô đi Cảng Sa Kỳ</p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_2">
                          <label for="question_2"></label>
                        </div>
                      </div>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>03. Thuê khách sạn tại Lý Sơn</p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_3">
                          <label for="question_3"></label>
                        </div>
                      </div>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>04. Cách di chuyển đến đảo Lý Sơn </p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_4">
                          <label for="question_4"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial_area section_gap py-4 mt-5">
      <div class="container">
        <div class="row">
          <div class="testi_slider owl-carousel">
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t1.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Elite Martin</h4>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t2.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Davil Saden</h4>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t1.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Elite Martin</h4>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t2.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Davil Saden</h4>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t1.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Elite Martin</h4>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="/templates/news/img/testimonials/t2.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Davil Saden</h4>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ Start Popular Courses Area =================-->
    <div class="divider">
    </div>

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses mt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="main_title">
              <h2 class="mb-3">Các tour du lịch đang giảm giá tại Lý Sơn</h2>
              <p>
                Để đi đến đảo Lý Sơn, các bạn cần phải đi tàu, hoặc máy bay đến Quảng Ngãi, Sân bay Chu Lai, Sân bay Đà Nẵng, sau đó các bạn di chuyển đến cảng Sa Kỳ, tỉnh Quảng Ngãi bằng xe ô tô hoặc xe Khách. Sau đó sẽ đặt vé tàu siêu tốc đi từ cảng Sa Kỳ đến Đảo Lý Sơn
              </p>
              <a href="#" class="">Xem thêm ---></a>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course my-3 px-0">
                <div class="course_heads">
                  <img class="img-fluid" src="/templates/news/img/chua-hang.png" alt="" />
                </div>
                <div class="course_content px-2">
                  <span class="price">-40%</span>
                  <span class="tag mb-2 d-inline-block background-secondary">Xe Đưa đón</span>
                  <span class="tag mb-2 d-inline-block">Vé tàu</span>
                  <h4 class="mb-3">
                    <a href="tours-du-lich-chi-tiet.html" class=>Đà Nẵng - Lý Sơn<span class="tip tip-hot">Hot!</span></a>
                  </h4>
                  <p>Đi du lịch Lý Sơn từ Tp Đà Nẵng, với các tiện ích sau</p>
                  <div class="row">
                    <div class="col-8">
                      <ul class="unordered-list">
                        <li>Khách sạn 4 Sao</li>
                        <li>Xe ôtô 4 chỗ</li>
                        <li>Vé tàu cao tốc ra vô đảo Lý Sơn</li>
                        <li>Áp dụng từ 2 người trở lên</li>
                      </ul>
                    </div>
                    <div class="col-4 my-auto pl-0 pr-3">
                      <div class="price-tours">
                        <p class="price-service text-center"><span>2</span> ngày</p>
                        <p class="price-service text-center"><span>1</span> đêm</p>
                        <p class="price-service text-center pt-3"><span>1,345k</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col mx-auto px-0">
                    <a href="tours-du-lich-chi-tiet.html" class="primary-btn small genric-btn mt-3 px-4 shadow">Xem thêm</a>
                    <a href="#" class="primary-btn small genric-btn mt-3 px-4 shadow">Hotline</a>
                  </div>
                </div>
              </div>
              <div class="single_course my-3 px-0">
                <div class="course_head">
                  <img class="img-fluid" src="/templates/news/img/chua-hang.png" alt="" />
                </div>
                <div class="course_content px-2">
                  <span class="tag mb-2 d-inline-block background-secondary">Xe Đưa đón</span>
                  <span class="tag mb-2 d-inline-block">Vé tàu</span>
                  <h4 class="mb-3">
                    <a href="tours-du-lich-chi-tiet.html" class=>Đà Nẵng - Lý Sơn</a>
                  </h4>
                  <p>Đi du lịch Lý Sơn từ Tp Đà Nẵng, với các tiện ích sau</p>
                  <div class="row">
                    <div class="col-8">
                      <ul class="unordered-list">
                        <li>Khách sạn 4 Sao</li>
                        <li>Xe ôtô 4 chỗ</li>
                        <li>Vé tàu cao tốc ra vô đảo Lý Sơn</li>
                        <li>Áp dụng từ 2 người trở lên</li>
                      </ul>
                    </div>
                    <div class="col-4 my-auto pl-0 pr-3">
                      <div class="price-tours">
                        <p class="price-service text-center"><span>2</span> ngày</p>
                        <p class="price-service text-center"><span>1</span> đêm</p>
                        <p class="price-service text-center pt-3"><span>1,345k</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col mx-auto px-0">
                    <a href="tours-du-lich-chi-tiet.html" class="primary-btn small genric-btn mt-3 px-4 shadow">Xem thêm</a>
                    <a href="#" class="primary-btn small genric-btn mt-3 px-4 shadow">Hotline</a>
                  </div>
                </div>
              </div>
              <div class="single_course my-3 px-0">
                <div class="course_head">
                  <img class="img-fluid " src="/templates/news/img/chua-hang.png" alt="" />
                </div>
                <div class="course_content px-2">
                  <span class="tag mb-2 d-inline-block background-secondary">Xe Đưa đón</span>
                  <span class="tag mb-2 d-inline-block">Vé tàu</span>
                  <h4 class="mb-3">
                    <a href="tours-du-lich-chi-tiet.html" class=>Đà Nẵng - Lý Sơn></a>
                  </h4>
                  <p>Đi du lịch Lý Sơn từ Tp Đà Nẵng, với các tiện ích sau</p>
                  <div class="row">
                    <div class="col-8">
                      <ul class="unordered-list">
                        <li>Khách sạn 4 Sao</li>
                        <li>Xe ôtô 4 chỗ</li>
                        <li>Vé tàu cao tốc ra vô đảo Lý Sơn</li>
                        <li>Áp dụng từ 2 người trở lên</li>
                      </ul>
                    </div>
                    <div class="col-4 my-auto pl-0 pr-3">
                      <div class="price-tours">
                        <p class="price-service text-center"><span>2</span> ngày</p>
                        <p class="price-service text-center"><span>1</span> đêm</p>
                        <p class="price-service text-center pt-3"><span>1,345k</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col mx-auto px-0">
                    <a href="tours-du-lich-chi-tiet.html" class="primary-btn small genric-btn mt-3 px-4 shadow">Xem thêm</a>
                    <a href="#" class="primary-btn small genric-btn mt-3 px-4 shadow">Hotline</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop