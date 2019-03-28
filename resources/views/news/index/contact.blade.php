@extends('templates.news.master')
@section('content')
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Contact Us</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="contact.html">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->
    
<!--================ Start Registration Area =================-->
    <div class="section_gap registration_area" style="background-color:#ddd">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row">
              
            </div>
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3 text-white color-secondary">Lý Sơn Trip, kênh du lịch Online và tổng đài hỗ trợ miễn phí khi du lịch Lý Sơn</h1>
                <p class="color-secondary">Chúng tôi là công ty hoạt động đầu tiên để cung cấp các du khách những thông tin
                 hữu ích nhất khi đi du lịch Lý Sơn. Và chúng tôi còn là một tổng đài thông tin, các tiện ích cung cấp những thông tin, giá trị cho du khách trước và trong chuyến đi Lý Sơn
                </p>
                <p class="color-secondary">Chúng tôi khai thác các tours du lịch đi đến đảo Lý Sơn với giá rẻ nhất cho các du khách. 
                Nếu quý khách có thể tìm được những tour du lịch khác giá rẻ hơn, chúng tôi sẽ hoàn lại tiền, và giảm giá</p>
                <p class="color-secondary"><strong>Hãy liên hệ với chúng tôi để được nhận các ưu đãi, giảm giá và các thông tin bổ ích liên quan đến</strong></p>
                <ol class="unordered-list color-secondary">
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
          <!-- Đăng ký ở đây --->
          <div class="col-lg-4 offset-lg-1 my-auto">
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
    <!--================Contact Area =================-->
@stop
@section('meta')
  {{-- Seo here --}}
@endsection
@section('meta')
<title>Du lịch Lý Sơn giá rẻ</title>
    <meta name="keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son" />
    <meta name="description" content='Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn ' />
    <meta name="news_keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son ">

    <meta property="og:title" content="Du lịch Lý Sơn giá rẻ" />
    <meta property="og:description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta property="og:image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />
    <meta property="og:url" itemprop="url" content="{{ route('news.index.contact') }}">

    <meta itemprop="name" content="Du lịch Lý Sơn giá rẻ" />
    <meta itemprop="description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta itemprop="image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />@endsection