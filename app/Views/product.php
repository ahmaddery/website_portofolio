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

    <!-- SEO Tag for Product Page: Source Code -->
    <meta property="og:title" content="Source Code: Solusi Web & Profesional">
    <meta name="description" content="Dapatkan source code berkualitas tinggi untuk solusi web profesional. Ahmad Deri menyediakan berbagai source code unggulan untuk kebutuhan pengembangan dan proyek Anda.">
    <meta property="og:image" content="https://solusi-web.my.id/images/fevicon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="Source Code: Solusi Web & Profesional">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Solusi Web Ahmad Deri">
    <meta property="og:url" content="https://solusi-web.my.id/product">

    <!-- Additional SEO Tags for Product Page -->
    <title>Source Code: Solusi Web & Profesional</title>
    <meta name="description" content="Dapatkan source code berkualitas tinggi untuk solusi web profesional. Ahmad Deri menyediakan berbagai source code unggulan untuk kebutuhan pengembangan dan proyek Anda.">
    <meta name="keywords" content="source code, solusi web, professional, development, programming, Ahmad Deri, product">

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
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="<?= base_url('index'); ?>">
        <span>
                Solusi Web Profesional
          </span>
        </a>
        </a>
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

        <!-- Button "Lihat Semua" -->
        <div class="text-center mt-3">
        </div>
    </div>
</section>



  <!-- end furniture section -->

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