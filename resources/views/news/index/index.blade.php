@extends('templates.news.master')
@section('content')
	  <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row my-auto">
            <div class="col-md-8 offset-md-2">
              <div class="text-with-background-opacity banner_content text-center">
                <p class="text-uppercase mb-2 mt-4">
                  Công ty TNHH Du lịch Lý Sơn Trip 
                </p>
                <h2 class="text-uppercase mt-4 mb-3">
                  Chào mừng đến với Lý Sơn
                </h2>
                <p class="mb-4">
                  Kênh thông tin chính thức của du lịch Lý Sơn, tại đây các bạn có thể tìm thấy các thông tin du lịch, các tin tức nóng hổi cho chuyến du lịch Lý Sơn
                </p
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
    <!--================ End Tiện ích =================-->
    <!--================ Start Tiện ích thuê xe =================-->
    <div class="popular_courses mt-5 pb-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="main_title">
              <h2 class="mb-3">Các cách di chuyển để đi đến Cảng Sa Kỳ - Đảo Lý Sơn</h2>
              <p>
                Lý Sơn là một huyện đảo của tỉnh Quảng Ngãi, nằm cách Cảng Sa Kỳ khoảng 30km. Vì thế để di chuyển đến đảo Lý Sơn, các bạn cần phải di chuyển ra cảng Sa Kỳ rồi sau đó bắt tàu Super biển đông để đi ra đảo Lý Sơn
              </p>
              <h3>
                  <strong>Thông tin thuê xe ô tô và đi xe ké để đến được cảng Sa Kỳ - Đảo Lý Sơn</strong>
              </h3>
              <a href="{{ route('news.car.index') }}" class="">Xem tất cả ---></a>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              @foreach($cars as $car)
              <div class="single_course">
                <div class="single_event position-relative">
                  <div class="event_thumb">
                    <a href="{{ route('news.car.detail', $car->slug) }}"><img src="/upload/{{ $car->picture }}" alt="{{ $car->title }}" /></a>
                  </div>
                  <div class="event_details p-2">
                    <div class="d-flex mb-4">
                      <div class="date"><span>{{ $car->distance }}</span>km</div>

                      <div class="time-location" style="font-size: 20px;">
                        <p>
                          {{ $car->travel_from }}
                        </p>
                        <p>
                          {{ $car->travel_to }}
                        </p>
                      </div>
                    </div>
                    <p>{{ str_limit($car->description, 70) }}</p>
                    <a href="{{ route('news.car.detail', $car->slug) }}" class="primary-btn small genric-btn px-4">Xem thêm</a>
                  </div>
                </div>
              </div>
              @endforeach
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
                Du lịch Lý Sơn chưa bao giờ là khó khăn
              </p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6">
            <div class="sidebar-wrapper p-4 shadow" style="background-color: #fff">
              <div class="widget widget-categories">
                <h4 class="widget-title title_decor shadow rounded">5 dịch vụ hot nhất</h4>

                <ul class="list-custom">
                    @foreach($cars as $car)
                    <li><a href="{{ route('news.car.detail', $car->slug) }}">{{ $car->title }}<span class="tip tip-hot">Hot!</span></a></li>
                    @endforeach
                </ul>
              </div><!-- End .widget -->
              <div class="col-lg-12 text-center pt-3">
                <a href="{{ route('news.car.index') }}" class="">Xem thêm ---></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="sidebar-wrapper p-4 shadow" style="background-color: #fff">
              <div class="widget widget-categories">
                <h4 class="widget-title title_decor shadow rounded">5 kinh nghiệm cần biết</h4>

                <ul class="list-custom">
                    @php $i = 0 @endphp
                  @foreach($exps->detail as $exp)
                    @if($i < 5)
                    <li><a href="{{ route('news.news.detail', ['slug' => str_slug($exp->title), 'id' => $exp->id]) }}">{{ $exp->title }}</a></li>
                    @php $i++ @endphp
                    @endif
                  @endforeach
                </ul>
              </div><!-- End .widget -->
              <div class="col-lg-12 text-center pt-3">
                <a href="{{ route('news.news.tag', str_slug($exps->name)) }}" class="">Xem thêm ---></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="sidebar-wrapper p-4 shadow" style="background-color: #fff">
              <div class="widget widget-categories">
                <h4 class="widget-title title_decor shadow rounded">5 bài viết hay nhất</h4>

                <ul class="list-custom">
                  @foreach($news as $new)
                    <li><a href="{{ route('news.news.detail', ['slug' => str_slug($new->title), 'id' => $new->id]) }}">{{ $new->title }}</a></li>
                  @endforeach
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
                <h2 class="mb-3 text-white">Lý Sơn Trip, kênh du lịch Online và tổng đài hỗ trợ miễn phí khi du lịch Lý Sơn</h2>
                <p class="text-white-gray">Chúng tôi là công ty hoạt động đầu tiên để cung cấp các du khách những thông tin
                 hữu ích nhất khi đi du lịch Lý Sơn. Và chúng tôi còn là một tổng đài thông tin, các tiện ích cung cấp những thông tin, giá trị cho du khách trước và trong chuyến đi Lý Sơn
                </p>
                <p class="text-white-gray">Chúng tôi khai thác các tours du lịch đi đến đảo Lý Sơn với giá rẻ nhất cho các du khách. 
                Nếu quý khách có thể tìm được những tour du lịch khác giá rẻ hơn, chúng tôi sẽ hoàn lại tiền, và giảm giá</p>
                <p class="text-white-gray"><strong>Hãy liên hệ với chúng tôi để được nhận các ưu đãi, giảm giá và các thông tin bổ ích liên quan đến</strong></p>
                <ol class="unordered-list">
					<li>Thuê xe giá rẻ đi du lịch Lý Sơn</li>
					<li>Thuê xe giá rẻ đi đến cảng Sa Kỳ</li>
					<li>Địa điểm check in tại Lý Sơn</li>
					<li>Mua vé tàu cao tốc đi đảo Lý Sơn</li>
					<li>Đặt khách sạn giá rẻ tại đảo Lý Sơn</li>
					<li>Chi tiết tour du lịch giá rẻ tại Lý Sơn</li>
				</ol>
              </div>
              <div class="col clockinner clockinner1">
                <span class="hours text-strong">2</span>
                <span class="smalltext">Chi nhánh</span>
              </div>
              <div class="col clockinner clockinner1">
                <span class="seconds text-strong">12359</span>
                <span class="smalltext">Khách</span>
              </div>
              <div class="col clockinner clockinner1">
                <span class="minutes text-strong">100%</span>
                <span class="smalltext">Hài lòng</span>
              </div>
            </div>
          </div>
          <!-- Đăng ký ở đây -->
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Đăng ký tư vấn online</h3>
              <p>Chúng tôi sẽ gọi ngay để tư vấn, hoặc có thể chát online messenger với chúng tôi hoặc hotline miễn phí cuộc gọi đến 1800 0076</p>
@if(Session::has('msg'))
  <div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              <form
                class="form_area"
                id="myForm"
                action="{{ route('news.index.call') }}"
                method="post"
              >
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="name"
                      placeholder="Tên của Anh Chị"
                      required="Bạn chưa nhập Tên"
                      type="name"
                    />
                    <input
                      name="phone"
                      placeholder="Số điện thoại"
                      pattern="[0-9]{8,20}"
                      required="Bạn chưa nhập số điện thoại"
                      type="tel"
                    />
                    <div class="single-element-widget pt-3 pl-1">
                      <p><strong>Chọn thông tin cần hỗ trợ</strong></p>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>01. Hỏi đáp du lịch Lý Sơn</p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_1" name="service[]" checked value="Hỏi đáp du lịch Lý Sơn">
                          <label for="question_1"></label>
                        </div>
                      </div>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>02. Thuê xe ôtô đi Cảng Sa Kỳ</p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_2" name="service[]" value="Thuê xe ôtô đi Cảng Sa Kỳ">
                          <label for="question_2"></label>
                        </div>
                      </div>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>03. Thuê khách sạn tại Lý Sơn</p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_3" name="service[]" value="Thuê khách sạn tại Lý Sơn">
                          <label for="question_3"></label>
                        </div>
                      </div>
                      <div class="switch-wrap d-flex justify-content-between">
                        <p>04. Cách di chuyển đến đảo Lý Sơn </p>
                        <div class="primary-radio">
                          <input type="checkbox" id="question_4" name="service[]" value="Cách di chuyển đến đảo Lý Sơn">
                          <label for="question_4"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn">Gửi</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial_area section_gap py-2 mt-2">
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
    <!--================ Start Popular Courses Area =================-->
    <div class="divider">
    </div>

    <!--================ Start Popular Courses Area =================-->
    {{-- <div class="popular_courses mt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="main_title">
              <h2 class="mb-3">Các tour du lịch đang giảm giá tại Lý Sơn</h2>
              <p>
                Để đi đến đảo Lý Sơn, các bạn cần phải đi tàu, hoặc máy bay đến Quảng Ngãi, Sân bay Chu Lai, Sân bay Đà Nẵng, sau đó các bạn di chuyển đến cảng Sa Kỳ, tỉnh Quảng Ngãi bằng xe ô tô hoặc xe Khách. Sau đó sẽ đặt vé tàu siêu tốc đi từ cảng Sa Kỳ đến Đảo Lý Sơn
              </p>
              <a href="{{ route('news.tour.index') }}" class="">Xem thêm ---></a>
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
    </div> --}}
@endsection
@section('meta')
    <title>Lysontrip | Cẩm nang du lịch Lý Sơn, tiện ích thuê xe, đặt khách sạn vé tàu ở Lý Sơn</title>
    <meta name="keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son" />
    <meta name="description" content='Du lịch Lý Sơn giá rẻ,thưởng thức ẩm thực đặc sản Lý Sơn, và giảm giá khi thuê xe du lịch đi đến cảng Sa Kỳ, thuê xe ô tô đà nẵng, Chu Lai cảng Sa Kỳ ' />
    <meta name="news_keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son ">

    <meta property="og:title" content="Lysontrip | Cẩm nang du lịch Lý Sơn, tiện ích thuê xe, đặt khách sạn vé tàu ở Lý Sơn" />
    <meta property="og:description" content="Du lịch Lý Sơn giá rẻ,thưởng thức ẩm thực đặc sản Lý Sơn, và giảm giá khi thuê xe du lịch đi đến cảng Sa Kỳ, thuê xe ô tô đà nẵng, Chu Lai cảng Sa Kỳ " />
    <meta property="og:image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />
    <meta property="og:url" itemprop="url" content="{{ route('news.index.index') }}">

    <meta itemprop="name" content="Lysontrip | Cẩm nang du lịch Lý Sơn, tiện ích thuê xe, đặt khách sạn vé tàu ở Lý Sơn" />
    <meta itemprop="description" content="Du lịch Lý Sơn giá rẻ,thưởng thức ẩm thực đặc sản Lý Sơn, và giảm giá khi thuê xe du lịch đi đến cảng Sa Kỳ, thuê xe ô tô đà nẵng, Chu Lai cảng Sa Kỳ " />
    <meta itemprop="image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />
@endsection