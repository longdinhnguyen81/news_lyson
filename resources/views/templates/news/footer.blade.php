    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 single-footer-widget">
            <h4>Lý Sơn Trip</h4>
            <p style="color:#aaa">Kênh thông tin online, hỗ trợ đặt tour, đặt phong khách sạn cho thuê xe giá rẻ khi đi du lịch Lý Sơn</p>
          </div>
          <div class="col-lg-3 col-md-6 single-footer-widget">
            <h4>Các bài viết nổi bật</h4>
            <ul class="text-white-gray">
            @php $i = 0 @endphp
            @foreach($allnews as $new)
            @php $i++ @endphp
              <li style="margin-bottom:4px;"><a href="{{ route('news.news.detail', ['slug' => $new->slug, 'id' => $new->id] ) }}"><span class="color-primary">{{$i}}</span>{{$new->title}}</a></li>
            @endforeach
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Tiện ích</h4>
            <ul class="text-white-gray">
              <li style="margin-bottom:4px;"><i class="fas fa-angle-right color-primary"></i><a href="{{ route('news.index.index') }}"> Trang chủ</a></li>
              <li style="margin-bottom:4px;"><i class="fas fa-angle-right color-primary"></i><a href="{{ route('news.index.aboutus') }}"> Giới Thiệu</a></li>
              <li style="margin-bottom:4px;"><i class="fas fa-angle-right color-primary"></i><a href="{{ route('news.news.news') }}"> Cẩm nang du lịch</a></li>
              <li style="margin-bottom:4px;"><i class="fas fa-angle-right color-primary"></i><a href="{{ route('news.car.index') }}"> Thuê xe</a></li>
              <li style="margin-bottom:4px;"><i class="fas fa-angle-right color-primary"></i><a href="{{ route('news.tour.index') }}"> Tour Lý Sơn</a></li>
              <li style="margin-bottom:4px;"><i class="fas fa-angle-right color-primary"></i><a href="{{ route('news.index.contact') }}"> Liên hệ</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Thông tin liên hệ</h4>
            <ul class="text-white-gray">
              <li style="margin-bottom:4px;"><span class="color-primary">Địa chỉ</span> 121 Cù Chính Lan, Thành Phố Đà Nẵng</li>
              <li style="margin-bottom:4px;"><span class="color-primary">Số điện thoại:</span> 091219304, 0123456789, 122112112</li>
              <li style="margin-bottom:4px;"><span class="color-primary">Email:</span> lysontrip@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white-gray">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="" target="_blank">VinaSofts</a>
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a target="_blank" href="https://www.facebook.com/hoangphuc.car.quangngai/"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://www.facebook.com/hoangphuc.car.quangngai/"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="https://www.facebook.com/hoangphuc.car.quangngai/"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <div class='quick-call-button'></div>
        <div class='call-now-button'>
            <div>
                <a onclick="return getCall()" href='tel:0986841841' title='Gọi tông đài' >
                    <div class='quick-alo-ph-circle active'></div>
                    <div class='quick-alo-ph-circle-fill active'></div>
                    <div class='quick-alo-ph-img-circle shake'></div>
                </a>
            </div>
        </div>
    </div>

<script type="text/javascript">
function getCall(){
    $.ajax({
      url: "{{ route('ajax.admin.call') }}",
      type: 'GET',
      cache: false,
      success: function(data){
        console.log('success')
        window.location.href="tel://0986841841";
      }, 
      error: function() {
       console.log('error')
     }
   }); 
    return false;
  }
</script>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/templates/news/js/jquery-3.2.1.min.js"></script>
    <script src="/templates/news/js/popper.js"></script>
    <script src="/templates/news/js/bootstrap.min.js"></script>
    <script src="/templates/news/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/templates/news/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/templates/news/js/owl-carousel-thumb.min.js"></script>
    <script src="/templates/news/js/jquery.ajaxchimp.min.js"></script>
    <!--gmaps Js-->
    <script src="/templates/news/js/theme.js"></script>
    <!-- Load Facebook SDK for JavaScript -->
    <!--
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '674795082923873',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v3.2'
        });
      };
    
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="997792193715744"
      theme_color="#ff751a"
      logged_in_greeting="Xin chào, các bạn cần tư vấn thì hãy nhắn tin cho mình hoặc call 0944224455!"
      logged_out_greeting="Xin chào, các bạn cần tư vấn thì hãy nhắn tin cho mình hoặc call 0944224455!">
    </div>
    -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c9bede36bba460528fffa61/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script-->
  </body>
</html>
