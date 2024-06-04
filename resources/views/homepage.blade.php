<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Store Stogare</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('templet2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templet2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('templet2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('templet2/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('templet2/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('templet2/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ninestars
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Updated: May 10 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Store Storage</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#team">Tim</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/login">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="section hero">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 class="">Selamat Datang di</h1>
            <h1 class="">Store Storage</h1>
            <br>
            <p>Solusi Terbaik untuk Manajemen Toko Buah Anda</p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src={{ asset('templet2/assets/img/hero-img.svg') }} class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="section about">

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src={{ asset('templet2/assets/img/about-img.svg') }} alt="" class="img-fluid">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-0 ps-lg-3">
              <h3>Kenapa Memilih Store Storage?</h3>
              <ul>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Mudah Digunakan</h4>
                    <p>Antarmuka yang intuitif membuat pengelolaan data penyimpanan barang menjadi lebih sederhana.</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Keamanan Data</h4>
                    <p>Sistem kami memastikan data Anda aman dan terlindungi.</p>
                  </div>
                </li>
                <li>
                    <i class="bi bi-fullscreen-exit"></i>
                    <div>
                      <h4>Laporan Terperinci</h4>
                      <p>Dapatkan laporan inventaris yang lengkap dan akurat untuk pengambilan keputusan yang lebih baik.</p>
                    </div>
                </li>
              </ul>
              <p>
                Store Storage hadir untuk memberikan kemudahan dalam manajemen penyimpanan barang dengan sistem yang efisien dan mudah digunakan.
                Dengan fitur lengkap dan user-friendly, kami membantu Anda menghemat waktu dan mengoptimalkan operasional bisnis Anda.
                Bergabunglah dengan kami dan nikmati kemudahan dalam manajemen penyimpanan barang dengan Store Storage.
              </p>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Layanan yang disediakan Store Storage</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Manajemen Stok Buah</a></h4>
              <p>Layanan sistem manajemen stok buah yang efektif dan efisien seperti menambah, mengurangi, atau memperbarui data stok dengan mudah.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Pelaporan dan Analisis</a></h4>
              <p>Layanan yang memberikan laporan terperinci dan analisis penjualan untuk memudahkan pengambilan keputusan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Pemantauan Transaksi</a></h4>
              <p>Layanan yang memastikan bahwa setiap penjualan dan pembelian tercatat dengan akurat dan transparan</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Manajemen Kasir dan Pembeli</a></h4>
              <p>Layanan yang memudahkan pengelolaan interaksi antara toko dan pelanggan, serta mengoptimalkan efisiensi operasional kasir.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src={{ asset('templet2/assets/img/team/Adel.jpg') }} class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Abidah Ardelia Kendra Wibowo - 01</h4>
                  <span>XI PPLG 5</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->


          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src={{ asset('templet2/assets/img/team/Akhsan1.jpg') }} class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Akhmad Akhsanul Khuluq - 02</h4>
                  <span>XI PPLG 5</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src={{ asset('templet2/assets/img/team/Fahmi1.jpg') }} class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Fahmi Al Muiz - 13</h4>
                  <span>XI PPLG 5</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src={{ asset('templet2/assets/img/team/Faiz1.jpg') }} class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Faiz Alawi - 14</h4>
                  <span>XI PPLG 5</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src={{ asset('templet2/assets/img/team/Khilma.jpg') }} class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Khilma 'Ainunnajah - 20</h4>
                  <span>XI PPLG 5</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Store Storage</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. DI Panjaitan No.128, Karangreja, </p>
            <p>Purwokerto Kulon, Kec. Purwokerto Sel.,</p>
            <p>Kabupaten Banyumas, Jawa Tengah 53141</p>

          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Layanan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#team">Tim</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Manajemen Stok Buah</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Pelaporan dan Analisis</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Pemantauan Transaksi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Manajemen Kasir dan Pembeli</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti Kami</h4>
          <p>Ikuti kami untuk mendapatkan informasi terbaru mengenai Store Storage</p>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/stematelpwt/?locale=id_ID"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/stematelpwt/?hl=en"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('templet2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('templet2/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('templet2/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('templet2/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('templet2/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('templet2/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('templet2/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('templet2/assets/js/main.js')}}"></script>

</body>

</html>
