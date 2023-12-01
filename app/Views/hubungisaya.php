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
    <meta name="description" content="Hubungi Ahmad Deri untuk solusi web dan layanan profesional. Isi formulir kontak atau gunakan informasi kontak untuk menghubungi kami. Kami siap membantu Anda!">
    <meta name="author" content="">

    <!-- SEO Tag for Contact Page: Solusi Web & Profesional -->
    <meta property="og:title" content="Contact: Solusi Web & Profesional">
    <meta property="og:description" content="Hubungi Ahmad Deri untuk solusi web dan layanan profesional. Isi formulir kontak atau gunakan informasi kontak untuk menghubungi kami. Kami siap membantu Anda!">
    <meta property="og:image" content="https://solusi-web.my.id/images/fevicon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="Contact: Solusi Web & Profesional">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Solusi Web Ahmad Deri">
    <meta property="og:url" content="https://solusi-web.my.id/hubungisaya">

    <!-- Additional SEO Tags for Contact Page -->
    <title>Contact: Solusi Web & Profesional</title>
    <meta name="description" content="Hubungi Ahmad Deri untuk solusi web dan layanan profesional. Isi formulir kontak atau gunakan informasi kontak untuk menghubungi kami. Kami siap membantu Anda!">
    <meta name="keywords" content="contact, hubungi saya, solusi web, profesional, layanan, Ahmad Deri">

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