<?php
if(isset($_SESSION['user'])) extract($_SESSION['user']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dương Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.php">Dương Restaurant</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Trang chủ</a></li>
          <!-- <li><a class="nav-link scrollto" href="index.php?act=amthuc#amthuc">Ẩm thực</a></li> -->
          <li class="dropdown"><a style="text-decoration: none;" href="#"><span>Ẩm thục</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="index.php?act=amthuc&&id=0#amthuc">Tất cả</a></li>
            <li><a href="index.php?act=amthuc&&id=1#amthuc">Sản phẩm yêu thích</a></li>
              <?php
                foreach ($listdm as $dm) {
                  extract($dm);
                  echo '<li><a href="index.php?act=amthuc&&id='.$id_dm.'#amthuc">'.$ten_dm.'</a></li>';

                  # code...
                }
              
              ?>

              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php?act=uudai#uudai">Ưu đãi</a></li>
          <li><a class="nav-link scrollto" href="index.php#lienhe">Liên hệ</a></li>
          <li><a class="nav-link scrollto" href="index.php?act=giohang&&id_tk=<?=$id_tk ?>#giohang">Giỏ hàng</a></li>
          <!-- <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav><!-- .navbar -->

      <!-- <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a> -->
      <?php 
        if(isset($_SESSION['user'])){
          extract($_SESSION['user']);
      ?>
      <a href="index.php?act=trangthaidonhang&&id_tk=<?=$id_tk ?>#inforuser">  <img src="../img/<?$anh ?>" style="width: 50px;height: 50px;margin-left: 20px;" alt="AVTA"></a>
      <a href="index.php?act=dangxuat" class="book-a-table-btn scrollto">Đăng xuất</a>

      <?php }else{ ?>
        <a href="login.php" class="book-a-table-btn scrollto">Đăng nhập</a>
      <a href="register.php" class="book-a-table-btn scrollto">Đăng ký</a>
      <?php } ?>


    </div>
  </header><!-- End Header -->
  <body>


  <!-- SLIDE SHOW -->
    <!-- ======= Hero Section ======= -->
    <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Dương</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">Chào mừng bạn đến với quán ăn của ĐỆ NHẤT QUỐC SƯ, NHÀ TIÊN TRI VŨ TRỤ -- Nguyễn Ngọc Dương</p>
                <div>
                  <a href="index.php?act=amthuc#amthuc" class="btn-menu animate__animated animate__fadeInUp scrollto">Thực đơn</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Nguyễn Ngọc Dương</h2>
                <p class="animate__animated animate__fadeInUp">Từ 1 cậu bé bị tật ngón út từ nhỏ ước mơ lớn lên trở thành lập trình viên đầu tiên trên thế giới mở quán ăn</p>
                <div>
                  <a href="index.php?act=amthuc#amthuc" class="btn-menu animate__animated animate__fadeInUp scrollto">Thực đơn</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Phạm Huy</h2>
                <p class="animate__animated animate__fadeInUp">Nổi tiếng với cái tên Sếp Huy của Schanoo. Nên giờ hết nổi rồi! </p>
                <div>
                  <a href="index.php?act=amthuc#amthuc" class="btn-menu animate__animated animate__fadeInUp scrollto">Thực đơn </a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->




