<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="/templates/news/img/favicon.png" type="image/png" />
    <title>Edustage Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/templates/news/css/bootstrap.css" />
    <link rel="stylesheet" href="/templates/news/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/templates/news/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <!-- main css -->
    <link rel="stylesheet" href="/templates/news/css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light shadow">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"
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
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('news.index.index') }}">Trang Chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('news.index.aboutus') }}">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/blog/d-2">Cẩm Nang đi Lý Sơn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('news.car.index') }}">Thuê xe</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="{{ route('news.tour.index') }}"
                    class="nav-link"
                    aria-haspopup="true"
                    >Tours Lý Sơn</a>
                    <ul class="dropdown-menu">
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
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('news.index.contact') }}">Liên hệ</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="fas fa-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>