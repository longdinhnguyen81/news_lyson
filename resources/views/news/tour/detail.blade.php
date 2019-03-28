@extends('templates.news.master')
@section('content')
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center text-with-background-opacity">
                <h2>Combo du lịch Lý Sơn siêu rẻ </h2>
                <div class="page_link">
                  <a href="index.html">Trang Chủ</a>
                  <a href="courses.html">Tours Du Lịch</a>
                  <a href="course-details.html">{{ $tour->title }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="/upload/{{$tour->picture}}" alt="{{$tour->title}}">
                    </div>
                    <div class="content_wrapper mt-3">
                        <h1>{{$tour->title}}</h1>
                        <div class="content">
                            {{$tour->description}}
                        </div>
                        <!-- Thông tin chuyến du lịch - Dữ liệu dynamic -->
                        <h2 class="title">Chi tiết chuyến đi</h2>
                        <div class="content">
                            {!! $tour->detail !!}
                            <div class="right-contents col-lg-8 offset-lg-2">
                                <ul>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Điểm đi</p>
                                            <span class="or">TP ĐÀ NẴng</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Điểm đến</p>
                                            <span class="or">Đảo Lý Sơn</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Vé tàu Sa Kỳ Lý Sơn</p>
                                            <span class="or">Có</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Khách sạn</p>
                                            <span class="or">Mường Thanh</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Xe đưa đón</p>
                                            <span class="or">Tận nơi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Vé máy bay</p>
                                            <span class="or">Không</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Thời gian</p>
                                            <span class="or">2 ngày 1 đêm</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Giảm giá</p>
                                            <span class="or">>2 người</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Giá tiền</p>
                                            <span class="or"><del>3000k</del>1350k/người</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <center><a href="#" class="genric-btn danger circle">Gọi hotline Free 1800 0079</a></center>
                        </div>
                        <!-- End Thông tin chuyến du lịch - Dữ liệu dynamic -->
                        <!--Giới thiệu đảo - Dữ liệu static -->
                        <h2 class="title">Giới thiệu địa điểm check-in tại Lý Sơn</h2>
                        <div class="content">
                            <p>Lý Sơn - Một huyện đảo trực thuộc tỉnh Quảng Ngãi - Được du khách ưu ái ví von như đảo “Jeju của Việt Nam” 
                            bởi cảnh sắc đẹp yên bình, nên thơ. Và đặc biệt, đây cũng là nơi cho ra đời những bức ảnh lung linh cực chất
                            xuất hiện trong mỗi chuyến du hí nơi đây của các bạn trẻ trên khắp mạng xã hội. 
                            Chỉ với một thao tác đơn giản - Tìm kiếm hình ảnh theo hastag #lyson, bạn đã có thể chiêm ngưỡng hàng ngàn bức ảnh
                            đẹp được check-in tại “vương quốc tỏi” với những góc chụp lung linh, không chê vào đâu được. Và dưới đây là các điểm check-in
                            đắt giá nhất được Lysontrip chọn lựa và gợi ý cho bạn cho chuyến du lịch của các bạn. Hãy lưu lại nhé
                            </p>
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" class="img-fluid" alt="huyen dao ly son tu tren cao">
                                <p class="sub-image text-center">01 Huyện đảo Lý Sơn từ trên cao</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-2.jpg" class="img-fluid" alt="cong to vo ly son trip">
                                <p class="sub-image text-center">02 Cổng Tò Vò trong ánh hoàng hôn</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-3.jpg" class="img-fluid" alt="dinh thoi loi ly son trip">
                                <p class="sub-image text-center">03 toàn cảnh Lý Sơn từ Đinh Thới Lới</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-4.jpg" class="img-fluid" alt="canh dong toi ly son trip">
                                <p class="sub-image text-center">04 cánh đông tỏi</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-5.jpg" class="img-fluid" alt="hon mu cu ly son trip">
                                <p class="sub-image text-center">05 Hòn Mù Cu -  ngọn hải đăng</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-6.jpg" class="img-fluid" alt="dao be ly son trip">
                                <p class="sub-image text-center">06 Đảo bé-  đảo Ly Sơn </p>
                              </div>
                            </div>
                            <p></p>
                            <p>Với vị trí tuyệt đẹp “tựa sơn, hướng hải” - Chùa Đục tọa lạc ngay giữa sườn núi Giếng Tiềng hướng thẳng ra biển lớn.
                            Để đến được Chùa Đục, du khách phải vượt qua hơn 100 bậc thang men theo triền núi.
                            Đường đi tuy có hơi vất vả nhưng khi đã đến được chùa, cảm nhận được “vị” thanh tịnh của nơi cửa Phật,
                            tìm thấy tâm hồn tự do khi phóng tầm mắt nhìn ra biển, du khách sẽ quên ngay mệt mỏi và cũng không quên
                            tìm những góc chụp đắt giá cho album ảnh kỷ niệm Lý Sơn của mình.
                            </p>
                            <img src="/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-7.jpg" class="img-fluid" alt="chua duc son trip">
                                <p class="sub-image text-center">07 Chùa Đục Lý Sơn </p>
                        </div>
                        <!--End Giới thiệu đảo - Dữ liệu static -->
                        <!--Giới thiệu xe - Dữ liệu static -->
                        <h2 class="title">Xe đưa đón tận nơi an toàn</h2>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/xe-du-lich-ly-son-1.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                <p class="sub-image text-center">Dàn xe mới, phong phú và đa dạng</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/xe-du-lich-ly-son-2.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                <p class="sub-image text-center">Nội thất sang trọng tiện nghi du lịch</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/xe-du-lich-ly-son-3.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                <p class="sub-image text-center">Tài xế chu đáo, chia sẻ kinh nghiệm du lịch</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/xe-du-lich-ly-son-4.png" class="img-fluid" alt="thue xe da nang di cang sa ky ly son">
                                <p class="sub-image text-center">Xe 4-7-16-36 chỗ phục vụ mọi khách du lịch</p>
                              </div>
                            </div>
                        </div>
                        <!--End Giới thiệu xe - Dữ liệu static -->
                        <!--Giới thiệu tàu cao tốc - Dữ liệu static -->
                        <h2 class="title">Tàu cao tốc đi cảng Sa Kỳ - Lý Sơn</h2>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/tau-khach-super-bien-dong-ly-son-1.png" class="img-fluid" alt="tàu super biển đông đi lý sơn">
                                <p class="sub-image text-center">tàu super biển đông đi lý sơn</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/tau-khach-super-bien-dong-ly-son-2.png" class="img-fluid" alt="nội thất tàu super biển đông đi lý sơn">
                                <p class="sub-image text-center">nội thất tàu super biển đông đi lý sơn</p>
                              </div>
                            </div>
                        </div>
                        <!--End Giới thiệu tàu cao tốc - Dữ liệu static -->
                        <!--Giới thiệu khách sạn- đổ dữ liểu kiểu select list - Dữ liệu dynamic -->
                        <!-- Khách sạn muongthanhhotel -->
                        <h2 class="title">Nghỉ ngơi tại khách sạn Mường Thanh</h2>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-1.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-2.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-3.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-4.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                            </div>
                        </div>
                        <!-- Khách sạn binhyenmotel -->
                        <h2 class="title">Nghỉ ngơi tại nhà nghỉ Bình Yên Motel</h2>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-1.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-2.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-3.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-4.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                            </div>
                        </div>
                        <!-- Khách sạn dinhsaumotel -->
                        <h2 class="title">Nghỉ ngơi tại nhà nghỉ Định Sau Motel</h2>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-1.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-2.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-3.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-4.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                            </div>
                        </div>
                        <!-- Khách sạn quynhanhmotel -->
                        <h2 class="title">Nghỉ ngơi tại nhà nghỉ Quỳnh Anh Motel</h2>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-1.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-2.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-3.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-4.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                            </div>
                        </div>
                        <!-- Khách sạn tientrimotel -->
                        <h2 class="title">Nghỉ ngơi tại nhà nghỉ Tiên Tri Motel</h2>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                            <div class="row">
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-1.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-2.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-3.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                              <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 pt-2">
                                <img src="/templates/news/img/khach-san-muong-thanh-phong-4.png" class="img-fluid" alt="thue khách sạn du lịch Lý Sơn">
                                <p class="sub-image text-center">Tiện nghi khách sạn mường thanh</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('templates.news.carbar')
            </div>
        </div>
    </section>
@stop
@section('meta')
<title>Du lịch Lý Sơn giá rẻ</title>
    <meta name="keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son" />
    <meta name="description" content='Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn ' />
    <meta name="news_keywords" content="du lich ly son, am thuc ly son, tour du lich ly son, thue xe du lich ly son ">

    <meta property="og:title" content="Du lịch Lý Sơn giá rẻ" />
    <meta property="og:description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta property="og:image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />
    <meta property="og:url" itemprop="url" content="">

    <meta itemprop="name" content="Du lịch Lý Sơn giá rẻ" />
    <meta itemprop="description" content="Du lịch Lý Sơn thật đơn giản với Lý Sơn Trip, thưởng thức ẩm thực Lý Sơn, Tỏi Lý Sơn" />
    <meta itemprop="image" content= "/templates/news/img/du-lich-dao-ly-son-quang-ngai-lysontrip-1.jpg" />@endsection