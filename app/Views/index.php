<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <link rel="icon" href="<?= base_url('images/fevicon.png'); ?>" type="image/gif">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- SEO Tag for Ahmad Deri: Solusi Web & Profesional -->
    <meta property="og:title" content="solusi-web: Solusi Web & Profesional">
    <meta property="og:description" content="Temukan Solusi Web Berkualitas dan Dapatkan Source Code Profesional untuk Bisnis Anda. Bagaimana cara memastikan keunggulan kami? Temukan jawabannya sekarang!">
    <meta property="og:image" content="https://solusi-web.my.id/images/fevicon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="Ahmad Deri: Solusi Web & Profesional">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Solusi Web Ahmad Deri">
    <meta property="og:url" content="https://solusi-web.my.id/">

    <!-- Additional SEO Tags -->
    <title>Ahmad Deri: Solusi Web & Profesional</title>
    <meta name="description" content="Dapatkan layanan pembuatan dan pengelolaan situs web berkualitas tinggi dari Ahmad Deri. Kami menyediakan source code berkualitas dan jasa website profesional untuk memenuhi kebutuhan bisnis dan proyek Anda.">
    <meta name="keywords" content="Ahmad Deri, Solusi Web, Profesional, Pembuatan Situs Web, Pengelolaan Situs Web, solusi-web">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css'); ?>">

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- Font Awesome style -->
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css'); ?>">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

    <!-- Responsive style -->
    <link rel="stylesheet" href="<?= base_url('css/responsive.css'); ?>">
</head>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/64b79c56cc26a871b0295512/1hfr481ek';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="<?= base_url('index'); ?>">

          <span>
                Solusi Web Profesional
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('index'); ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('product'); ?>">Source Code</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('blog'); ?>">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('hubungisaya'); ?>">Hubungi Saya</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
          <?php if (session('user_id')): ?>
    <a href="<?= base_url('tentangsaya') ?>">
        <span>
            Profile
        </span>
        <i class="fa fa-user" aria-hidden="true"></i>
    </a>
<?php endif; ?>


            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="detail-box">
                    <?php if (session('user_id')): ?>
                        <?php
                        // Assuming you have a UserModel with a method getUserById
                        $userModel = new \App\Models\UserModel();
                        $user = $userModel->getUserById(session('user_id'));
                        ?>
                        <h4>
                            Halo, Selamat Datang <?= $user['username']; ?>!
                        </h4>
                        <p>
                            Selamat datang di platform inovasi digital kami!
                        </p>
                    <?php else: ?>
                        <h4>
                            Inovasi Digital: <br>
                            Dapatkan Source Code Berkualitas dan Jasa Website Profesional
                        </h4>
                        <p>
                            Inovasi Digital: Temukan Solusi Web Berkualitas dan Dapatkan Source Code Profesional untuk Bisnis Anda. Bagaimana cara memastikan keunggulan kami? Temukan jawabannya sekarang!
                        </p>
                    <?php endif; ?>

                    <?php if (!session('user_id')): ?>
                        <div class="btn-box">
                            <a href="<?= base_url('register'); ?>" class="btn1">
                                Daftar Sekarang
                            </a>
                            <a href="<?= base_url('login'); ?>" class="btn2">
                                Login
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php
                // Set cookie jika pesan peringatan belum ditampilkan
                $warningCookieName = 'warning_shown';
                if (!session('user_id') && !isset($_COOKIE[$warningCookieName])):
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= session('warning') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    // Set cookie untuk menandai bahwa pesan peringatan sudah ditampilkan
                    setcookie($warningCookieName, '1', time() + 7200); // Expire dalam 1 hari
                endif;
                ?>

                </div>
            </div>
            <div class="col-md-7">
                <div class="img-box">
                    <img src="<?= base_url('images/bg1.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h4>
                      Inovasi Digital: <br>
                      Dapatkan Source Code Berkualitas dan Jasa Website Profesional
                    </h4>
                    <p>
                        Inovasi Digital: Temukan Solusi Web Berkualitas dan Dapatkan Source Code Profesional untuk Bisnis Anda. Bagaimana cara memastikan keunggulan kami? Temukan jawabannya sekarang!
                    </p>

                                    <?php if (!session('user_id')): ?>
                    <div class="btn-box">
                        <a href="<?= base_url('register'); ?>" class="btn1">
                            Daftar Sekarang
                        </a>
                        <a href="<?= base_url('login'); ?>" class="btn2">
                            Login
                        </a>
                    </div>
                <?php endif; ?>

                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                  <h4>
                      Inovasi Digital: <br>
                      Dapatkan Source Code Berkualitas dan Jasa Website Profesional
                    </h4>
                    <p>
                        Inovasi Digital: Temukan Solusi Web Berkualitas dan Dapatkan Source Code Profesional untuk Bisnis Anda. Bagaimana cara memastikan keunggulan kami? Temukan jawabannya sekarang!
                    </p>
                                    <?php if (!session('user_id')): ?>
                    <div class="btn-box">
                        <a href="<?= base_url('register'); ?>" class="btn1">
                            Daftar Sekarang
                        </a>
                        <a href="<?= base_url('login'); ?>" class="btn2">
                            Login
                        </a>
                    </div>
                <?php endif; ?>

                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="<?= base_url('images/bg2.jpg'); ?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Source code
            </h2>
            <p>
            </p>
        </div>
        <div class="row">
            <?php foreach ($source_codes as $source_code): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?= base_url($source_code['foto']) ?>" alt="<?= $source_code['nama'] ?>">
                        </div>
                        <div class="detail-box">
                            <h5><?= $source_code['nama'] ?></h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <a href="<?= $source_code['live_preview'] ?>">Live Preview</a>
                                </h6>
                                <?php if (session('user_id')): ?>
                                    <a href="<?= $source_code['download'] ?>">
                                        Download
                                    </a>
                                <?php else: ?>
                                    <a href="<?= base_url('login') ?>">
                                        Download
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Tampilkan paginasi source code -->
        <div class="pagination-container">
            <?= $sourceCodePager->links() ?>
        </div>

        <!-- Button "Lihat Semua" -->
        <div class="text-center mt-3">
          <a href="<?= base_url('product') ?>" class="btn btn-primary">Lihat Semua</a>

        </div>
    </div>
</section>



  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
        <div class="detail-box">
  <div class="heading_container">
    <h2>
      Tentang Saya
    </h2>
  </div>
  <p>
  Sebagai seorang mahasiswa jurusan Informatika di salah satu universitas di Yogyakarta, saya berasal dari daerah Sumatera. Saat ini, perhatian utama saya adalah pada pengembangan web.
</p>

  <a href="https://linktr.ee/ahmaddery">
    ketahui saya lebih lanjut 
  </a>
</div>

        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
<!-- blog section -->
<section class="blog_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Blog</h2>
        </div>
        <div class="row">
            <?php foreach ($blogs as $blog) : ?>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?= base_url($blog['foto'] ?? 'images/default.jpg') ?>" alt="<?= esc($blog['judul'] ?? 'No Title') ?>">
                        </div>
                        <div class="detail-box">
                            <h5><?= esc($blog['judul'] ?? 'No Title') ?></h5>
                            <?php
                            // Load the text helper
                            helper('text');
                            // Display a limited number of words for the description
                            $limitedDescription = word_limiter($blog['keterangan'] ?? 'No Content', 20); // Change 20 to your desired word limit
                            ?>
                            <p><?= htmlspecialchars_decode(esc($limitedDescription)) ?></p>
                            <a href="<?= base_url("detailview/{$blog['id']}") ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

            <!-- Tampilkan paginasi source code -->
            <div class="pagination-container">
              <?= $sourceCodePager->links() ?>
           </div>
            <!-- Button "Lihat Semua" -->
        <div class="text-center mt-3">
          <a href="<?= base_url('blog') ?>" class="btn btn-primary">Lihat Semua</a>

        </div>
    </div>
</section>
<!-- end blog section -->




  <!-- end blog section -->

  <!-- client section -->

     <section class="client_section layout_padding-bottom">
            <div class="container">
              <div class="heading_container">
                <h2>
                  Testimonial
                </h2>
              </div>
              <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
            <?php $isFirst = true; ?>
            <?php foreach ($testimoni as $t): ?>
                <div class="carousel-item <?= $isFirst ? 'active' : ''; ?>">
                    <div class="row">
                        <div class="col-md-11 col-lg-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <?php if ($t['foto'] && file_exists('images/' . $t['foto'])): ?>
                                        <img src="/images/<?= $t['foto']; ?>" alt="" />
                                    <?php else: ?>
                                        <img src="placeholder-image.jpg" alt="Placeholder Image" />
                                    <?php endif; ?>
                                </div>
                                <div class="detail-box">
                                    <div class="name">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <h6><?= $t['nama']; ?></h6>
                                    </div>
                                    <p><?= $t['keterangan']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $isFirst = false; ?>
            <?php endforeach; ?>
            </div>
            <div class="carousel_btn-container">
              <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </section>

  <!-- end client section -->

<!-- Contact Form Section -->
<section class="contact_section long_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                    <div class="heading_container">
                        <h2>Hubungi Saya</h2>
                        <p>Apakah Anda tertarik untuk memanfaatkan layanan kami dalam pembuatan situs web? Jangan ragu untuk menghubungi kami melalui fitur obrolan langsung yang dapat Anda temukan di sudut kanan bawah. Kami siap membantu!</p>
                    </div>

                    <!-- Display success or error messages here -->
                    <?php if (session()->has('success')) : ?>
                        <div class="alert alert-success"><?= session('success') ?></div>
                    <?php elseif (session()->has('error')) : ?>
                        <div class="alert alert-danger"><?= session('error') ?></div>
                    <?php endif; ?>

                    <!-- Contact Form -->
                    <form action="<?= base_url('/contact/sendEmail') ?>" method="post">
                        <div>
                            <input type="text" name="name" placeholder="Your Name" required />
                        </div>
                        <div>
                            <input type="text" name="phone_number" placeholder="Phone Number" />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div>
                        <input type="text" name="message" class="message-box" placeholder="Message" />
                        </div>
                        <div class="btn_box">
                            <button type="submit">KIRIM</button>
                        </div>
                    </form>
                    <!-- End Contact Form -->
                </div>
            </div>
            <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
        </div>
    </div>
</section>
<!-- End Contact Form Section -->




  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://linktr.ee/ahmaddery">Ahmaddery</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


<!-- jQuery -->
<script src="<?= base_url('js/jquery-3.4.1.min.js'); ?>"></script>

<!-- Bootstrap JS -->
<script src="<?= base_url('js/bootstrap.js'); ?>"></script>

<!-- Custom JS -->
<script src="<?= base_url('js/custom.js'); ?>"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>