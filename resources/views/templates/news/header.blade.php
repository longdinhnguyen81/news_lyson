<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    @yield('meta')
    <link rel="icon" href="/templates/news/img/favicon.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/templates/news/css/bootstrap.css" />
    <link rel="stylesheet" href="/templates/news/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/templates/news/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- main css -->
    <link rel="stylesheet" href="/templates/news/css/style.css" />
    <meta name="google-site-verification" content="_AXv7lLgJa7GAJG79LfW7Om-jiupHNvTS1mImpaPnGc" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126454952-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-126454952-5');
    </script>

  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light shadow">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ route('news.index.index') }}"
              ><img src="/templates/news/img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('news.index.index') }}">Trang Chủ</a>
                </li>
                <li class="nav-item {{ request()->is('gioi-thieu') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('news.index.aboutus') }}">Giới Thiệu</a>
                </li>
                <li class="nav-item {{ request()->is('blog*') || request()->is('tag*') || request()->is('*.html') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('news.news.news') }}">Cẩm Nang đi Lý Sơn</a>
                </li>
                <li class="nav-item {{ request()->is('thue-xe*') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('news.car.index') }}">Thuê xe</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="{{ route('news.tour.index') }}"
                    class="nav-link"
                    aria-haspopup="true"
                    >Tours Lý Sơn</a>
                    <!--<ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="tours-du-lich.html">Tours Lý Sơn</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tours-du-lich.html">Đặt vé Tàu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tours-du-lich.html">Đặt vé Xe</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tours-du-lich.html">Đặt Khách sạn</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tours-du-lich.html">Đặt vé máy bay</a>
                    </li>
                  </ul>-->
                </li>
                <li class="nav-item {{request()->is('lien-he') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('news.index.contact') }}">Liên hệ</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1797819373651791&autoLogAppEvents=1"></script>