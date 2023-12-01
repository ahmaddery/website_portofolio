<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="<?= base_url('images/fevicon.png'); ?>" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>admin: Solusi Web & Profesional</title>


<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.css'); ?>" />

<!-- Fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

<!-- Font Awesome style -->
<link rel="stylesheet" type="text/css" href="<?= base_url('css/font-awesome.min.css'); ?>" />

<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>" />

<!-- Responsive style -->
<link rel="stylesheet" type="text/css" href="<?= base_url('css/responsive.css'); ?>" />


</head>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="<?= base_url('index'); ?>">
          <span>
         Admin panel
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
              <a class="nav-link" href="<?= base_url('blog/index'); ?>">Kelola Postingan <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('source_code'); ?>">Kelola Code</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('testimoni'); ?>">Kelola Testimoni</a>
              </li>

            </ul>
          </div>
          <div class="quote_btn-container">
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

<!-- Edit Testimoni Section -->
<section class="edit_testimoni_section layout_padding">
    <div class="container">
        <h1>Edit Testimoni</h1>

        <form action="/testimoni/update/<?= $testimoni['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?= $testimoni['nama']; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea name="keterangan" class="form-control" required><?= $testimoni['keterangan']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary">
                <a href="/testimoni" class="btn btn-primary" style="margin-right:10px;">Kembali</a>
            </div>
        </form>
    </div>
</section>
<!-- End Edit Testimoni Section -->







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
