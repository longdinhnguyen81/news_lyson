@extends('templates.news.master')
@section('content')
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="text-with-background-opacity banner_content text-center">
                <h2 class="color-secondary">{{ $travels->title }}</h2>
                <div class="page_link">
                  <a href="{{ route('news.index.index') }}">Trang Chủ</a>
                  <a href="{{ route('news.car.index') }}">Thuê xe</a>
                  <a href="/">{{ $travels->travel_from }} - {{ $travels->travel_to }}</a>
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
                        <img class="img-fluid" src="/templates/news/img/nha-ga-cang-sa-ky.png" alt="{{ $travels->title }}">
                    </div>
                    <div class="content_wrapper">
                        <h1>{{ $travels->title }} - Lý Sơn giá rẻ</h1>
                        <p>Đối với nhiều du khách, để di chuyển đến đảo Lý Sơn rất tốn kém và bất tiện. Nhưng các bạn đừng lo lắng, 
                        đến với lysontrip, chúng tôi sẽ hướng dẫn cách di chuyển nhanh chóng đến đảo Lý Sơn, và luôn có sẵn các dịch vụ khuyến mãi đi kèm. Đặt xe đi Cảng Sa Kỳ - Lý Sơn online giá rẻ nhất</p>
                        <!-- Bảng giá xe-->
                        <h2 class="title">Bảng giá {{ $travels->title }} rẻ nhất<span class="tip tip-hot">Hot!</span></h2>
                        <div class="content">
                            {!! $travels->detail !!}
                            <div class="right-contents col-lg-8 offset-lg-2">
                                <ul>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Điểm đi</p>
                                            <span class="or">{{ $travels->travel_from }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Điểm đến</p>
                                            <span class="or">{{ $travels->travel_to }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Khoảng cách</p>
                                            <span class="or">{{ $travels->distance }}km</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-between d-flex">
                                            <p>Thời gian</p>
                                            <span class="or">{{ $travels->time }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <h3 class="text-center pt-3">Bảng giá xe đi từ Sa Kỳ đến Đảo Lý Sơn</h3>

                            <p class="text-center">Đây là bảng giá xe rẻ nhất hiện nay của công ty du lịch Hoàng Phúc, <strong>giá trên đã bao gồm 
                            TVA và đưa đón tận nơi theo yêu cầu</strong>. Chúng tôi luôn có<strong> tổng đài điện thoại 0944.22.44.55 và chat Online miễn phí</strong> để phục vụ quý khách</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Loại xe</th>
                                        <th scope="col">Số chỗ</th>
                                        <th scope="col">Giá tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($travels->car as $car)
                                    @if($car->seat == 1)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $car->type }}</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>Liên hệ<span class="tip tip-hot">Hot!</span></td>
                                    </tr>
                                    @elseif($car->seat == 4)
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>{{ $car->type }}</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>{{ number_format($car->cost,0,',','.') }} VND<span class="tip tip-hot">Hot!</span></td>
                                    </tr>
                                    @elseif($car->seat == 7)
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>{{ $car->type }}</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>{{ number_format($car->cost,0,',','.') }} VND</td>
                                    </tr>
                                    @elseif($car->seat == 16)
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>{{ $car->type }}</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>{{ number_format($car->cost,0,',','.') }} VND</td>
                                    </tr>
                                    @elseif($car->seat == 30)
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>{{ $car->type }}</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>{{ number_format($car->cost,0,',','.') }} VND</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>{{ $car->type }}</td>
                                        <td>{{ $car->seat }} Chỗ</td>
                                        <td>{{ number_format($car->cost,0,',','.') }} VND</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <h3 class="text-center color-primary">{{ $travels->title }} sẽ được <span style="display:inline-block;font-size:30px;font-weight:600">giảm giá 20%</span> khi đặt luôn chiều về</h3>
                            <center><a href="tel:0944224455" class="genric-btn danger circle">Gọi hotline 0944224455</a></center>
                            <p>Tất các các xe của chúng tôi, điều là xe mới, phong phú về loại, rất tiện ích cho việc đi du lịch gia đình, du lịch bạn bè và du lịch theo đoàn.
                            Chúng tôi đã có kinh nghiệm lâu năm, trong du lịch lý sơn, nên sẽ ưu tiên đúng giờ và di chuyển an toàn để cho quý khách có 1 kỳ nghỉ tại Lý Sơn tốt nhất, 
                            nếu sai giờ, chúng tôi xin nhận hoàn toàn trách nhiệm và đền bù.
                            </p>
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
                            <p><strong>Tham khảo thêm giá khi đặt xe đi đến Cảng Sa Kỳ - Lý Sơn</strong></p>
                            <ol class="ordered-list">
                                @foreach($moretravels as $travel)
								<li><a href="{{ route('news.car.detail', $travel->slug) }}">{{ $travel->title }} - Giảm giá 20% cho chiều về</a></li>
                                @endforeach
							</ol>
                        </div>
                        <!-- Di chuyển đến đảo Lý Sơn-->
                        <h2 class="title">Hướng dẫn di chuyển đến đảo Lý Sơn</h4>
                        <div class="content">
                            <p>Lý Sơn là một huyện đảo của tỉnh Quảng Ngãi, nằm cách Cảng Sa Kỳ khoảng 30km. 
                            Vì thế để di chuyển đến đảo Lý Sơn, các bạn cần phải di chuyển ra cảng Sa Kỳ rồi 
                            sau đó bắt tàu Super biển đông để đi ra đảo Lý Sơn</p>
                            <center><img class="img-fluid" src="/templates/news/img/sa-ky-ly-son.jpg" alt="thue xe di cang sa ky"></center>
                            <p class="text-center">Đảo Lý Sơn cách đất liền 30km</p>
                            <p><strong>Hướng cách di chuyển tiết kiệm, nhanh chóng và an toàn nhất</strong></p>
                            <p><span style="color:#f80; font-size:18px; font-weight:600;">Bước 01:</span> Để di chuyển đến Cảng Sa Kỳ, chúng ta có thể kết hợp, di chuyển bằng máy bay hoặc tàu lửa đến các nhà ga, 
                            sân bay gần đảo Cảng Sa Kỳ nhất như sân bay Chu Lai, sân bay Đà Nẵng, ga Quảng Ngãi, hoặc thành phố Hội An, thành phố Đà Nẵng và Thành Phố Huế.</p>
                            <p><span style="color:#f80; font-size:18px; font-weight:600;">Bước 02:</span> Sau đó các bạn thuê 1 ôtô khách giá rẻ để đi đến cảng Sa Kỳ, ôtô khách có thể là xe 4 chỗ, 7 chỗ hoặc 16 chỗ, tùy số lượng người di chuyển. 
                            Nếu các bạn chỉ đi có 1-2 người thì có thể liên hệ với chúng tôi để có thể sắp xếp xe ké, mà không cần phải thuê nguyên xe. 
                            Hoặc các bạn có thể tham khảo bảng giá <strong>{{ $travels->title }}</strong> ở phía dưới của lysontrip. Hiện đang có <strong>khuyến mãi giảm 20%</strong> giá xe khi đặt chuyến về</p>
                            <p><span style="color:#f80; font-size:18px; font-weight:600;">Bước 03:</span> Sau khi đến được cảng Sa Kỳ, các bạn phải mua vé tàu để di chuyển đến đảo Lý Sơn. Nếu các bạn bị say tàu hoặc say sóng, 
                            thì nên lựa chọn loại tàu lớn, để cho chuyến du lịch được trọn vẹn nhất</p>
                            <p><strong>Tham khảo giá khi đặt xe đi đến Cảng Sa Kỳ</strong></p>
                            <ol class="ordered-list">
                                @foreach($moretravels as $travel)
								<li><a href="{{ route('news.car.detail', $travel->slug) }}">{{ $travel->title }} - Giảm giá 20% cho chiều về</a></li>
                                @endforeach
							</ol>
                        </div>
                        <!-- Đặt vé tàu-->
                        <h2 class="title">Mua vé tàu từ Cảng Sa Kỳ đến Đảo Lý Sơn</h4>
                        <div class="content">
                            <p>Tàu Super Biển Đông là con tàu hiện đại đóng mới hoàn toàn bằng vỏ 
                            hợp kim nhôm ý, lắp đặt 02 máy tốc độ cao Yanmar (Nhật Bản) và các thiết bị hiện đại,
                            tàu gồm 139 ghế và 01 phòng VIP, có tốc độ tối đa 30 hải lý/giờ, tương đương 30–35 phút,
                            khoảng cách đảo Lý Sơn với đất liền sẽ được gần hơn,
                            tàu Super Biển Đông phục vụ 3-6 chuyến/ngày (tùy theo các ngày).</p>
                            <h3 class="text-center pt-3">Bảng giờ tàu đi từ cảng Sa Kỳ đến Đảo Lý Sơn</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên tàu</th>
                                        <th scope="col">Giờ đi - Giờ đến</th>
                                        <th scope="col">Giá tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Super Biển Đông</td>
                                        <td>7h30 - 8h05</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Super 2 Biển Đông</td>
                                        <td>9h00 - 9h35</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Super Biển Đông</td>
                                        <td>10h20 - 10h55</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Super 2 Biển Đông</td>
                                        <td>13h00 - 13h35</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Super Biển Đông</td>
                                        <td>15h00 - 15h35</td>
                                        <td>170k</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="text-center pt-3">Bảng giờ tàu đi từ Đảo Lý Sơn về Cảng Sa Kỳ</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên tàu</th>
                                        <th scope="col">Giờ đi - Giờ đến</th>
                                        <th scope="col">Giá tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Super 2 Biển Đông</td>
                                        <td>8h00 - 8h30</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Super Biển Đông</td>
                                        <td>9h00 - 9h35</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Super 2 Biển Đông</td>
                                        <td>10h20 - 10h55</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Super Biển Đông</td>
                                        <td>13h00 - 13h35</td>
                                        <td>170k</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Super Biển Đông</td>
                                        <td>14h20 - 14h55</td>
                                        <td>170k</td>
                                    </tr>
                                </tbody>
                            </table>
                            <center><a href="tel:0944224455" class="genric-btn danger circle">Gọi hotline 0944224455</a></center>
                        </div>

                        <h4 class="title">Các tour du lịch</h4>
                            <ul class="">
                                @foreach($tours as $tour)
                                <li class="d-flex">
                                    <a href="{{ route('news.tour.detail', $tour->slug) }}"><p>{{ $tour->title }}</p></a>
                                </li>
                                @endforeach
                            </ul>
                    </div>
                </div>
                @include('templates.news.carbar')
            </div>
        </div>
    </section>
@stop
@section('meta')
    <title>{{ $travels->title }}, Lý Sơn giá rẻ - LysonTrip</title>
    <meta name="keywords" content="{{ $travels->keywords }}" />
    <meta name="description" content="{{ $travels->description }}" />
    <meta name="news_keywords" content="{{ $travels->keywords }}">

    <meta property="og:title" content="{{ $travels->title }} - Lý Sơn giá rẻ | LysonTrip" />
    <meta property="og:description" content="{{ $travels->description }}" />
    <meta property="og:image" content= "https://lysontrip.vn/upload/{{ $travels->picture }}" />
    <meta property="og:url" itemprop="url" content="{{ route('news.car.detail', $travels->slug) }}">

    <meta itemprop="name" content="{{ $travels->title }} - Lý Sơn giá rẻ | LysonTrip" />
    <meta itemprop="description" content="{{ $travels->description }}" />
    <meta itemprop="image" content= "https://lysontrip.vn/upload/{{ $travels->picture }}" />@endsection