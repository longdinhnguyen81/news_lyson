@extends('templates.news.master')
@section('content')
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="about-us.html">About Us</a>
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
          <div class="col-md-6 col-lg-4">
            <div class="single_course">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="/templates/news/img/san-bay-chu-lai.png" alt="" class="img-fluid" />
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
                  <a href="thue-xe-chi-tiet.html" class="primary-btn ml-sm-3 ml-0">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="single_course">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="/templates/news/img/san-bay-da-nang.png" alt=""  class="img-fluid"/>
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
                  <a href="thue-xe-chi-tiet.html" class="primary-btn ml-sm-3 ml-0">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="single_course">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="/templates/news/img/thanh-pho-da-nang.png" alt="" class="img-fluid" />
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
                  <a href="thue-xe-chi-tiet.html" class="primary-btn ml-sm-3 ml-0">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="single_course">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="/templates/news/img/thanh-pho-hoi-an.png" alt="" class="img-fluid" />
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
                  <a href="thue-xe-chi-tiet.html" class="primary-btn ml-sm-3 ml-0">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="single_course">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="/templates/news/img/thanh-pho-hue.png" alt="" class="img-fluid" />
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
                  <a href="thue-xe-chi-tiet.html" class="primary-btn ml-sm-3 ml-0">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="single_course">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="/templates/news/img/ga-quang-ngai.png" alt="" class="img-fluid"/>
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
                  <a href="thue-xe-chi-tiet.html" class="primary-btn ml-sm-3 ml-0">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
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
              <img class="img-fluid" src="/templates/news/img/about.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Welcome to our Institute</h4>
                <p>
                  Subdue whales void god which living don't midst lesser
                  yielding over lights whose. Cattle greater brought sixth fly
                  den dry good tree isn't seed stars were.
                </p>
                <p>
                  Subdue whales void god which living don't midst lesser yieldi
                  over lights whose. Cattle greater brought sixth fly den dry
                  good tree isn't seed stars were the boring.
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
              <h2 class="mb-3">Client say about me</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>

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
@stop