<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SI-Monorel</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/startbootstrap/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets/startbootstrap/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet">

  <link href="<?= base_url('assets/startbootstrap/vendor/simple-line-icons/css/simple-line-icons.css')?>" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/startbootstrap/css/landing-page.min.css')?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">SI-Monorel</a>
      <a class="btn btn-primary" href="<?= base_url('Login');?>">Admin Here..</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header id="about" class="masthead text-white text-center bg-head">
    <!-- <img src="<?//= base_url('assets/startbootstrap/img/statistic_chart.svg');?>"> -->
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-6 mx-auto">
          <h4 class="mb-5">Selamat datang di situs SI-Monorel..</h4>
          <p class="lead mb-0">SI-Monorel adalah Sistem Informasi berbasis web untuk monitoring realisasi anggaran khusus Program Inovasi Pembangunan dan Pemberdayaan Kewilayahan (PIPPK) yang ada di Kecamatan Gedebage</p>
          <a href="#showcase" class="btn btn-primary">klik disini untuk melihat</a>
        </div>
        <div class="col-xl-6 mx-auto">
          <img src="<?= base_url('assets/startbootstrap/img/statistic_chart.svg');?>" style="height: 250px; width: auto;">
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Dasar Hukum PIPPK</h3>
            <p class="lead mb-0">Pemerintah Kota Bandung mengevaluasi hasil pelaksanaan Program Inovasi Pembangunan dan Pemberdayaan Kewilayahan (PIPPK) tahun 2016. Sekretaris Daerah Kota Bandung Yossi Irianto mengatakan, ketercapaian tujuan PIPPK harus dimulai dengan perencanaan yang baik. Evaluasi ini adalah dasar untuk merancang kegiatan PIPPK tahun 2017 agar lebih baik lagi.</p>
            <a href="https://ppid.bandung.go.id/target-serapan-anggaran-pippk-tercapai/" class="btn btn-primary">Selanjutnya..</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Otonomi Daerah Ala Kota Bandung</h3>
            <p class="lead mb-0">OTONOMI Daerah di Indonesia telah memberikan dampak positif di berbagai daerah. Setiap daerah bisa secara mandiri membangun sesuai dengan kebutuhan dan kearifan wilayah.</p>
            <a href="http://humas.bandung.go.id/humas/layanan/pippk-otonomi-daerah-ala-kota-bandung" class="btn btn-primary">Selanjutnya..</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section id="showcase" class="showcase">
    <div class="container-fluid p-5">
      <h2 class="mb-5 text-center">Realisasi PIPPK Kecamatan Gedebage, <br>di Tahun Berlaku</h2>
      <div class="row no-gutters">
        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/startbootstrap/img/online_banking.svg');?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pagu Anggaran</h5>
              <p class="card-text">Pagu Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sum_pagu; ?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/startbootstrap/img/wallet.svg');?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Realisasi Anggaran</h5>
              <p class="card-text">Realisasi Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sum_realisasi;?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/startbootstrap/img/finance.svg');?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sisa Anggaran</h5>
              <p class="card-text">Sisa Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sisa_realisasi; ?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/startbootstrap/img/discount.svg');?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">% Serapan Anggaran</h5>
              <p class="card-text">Persentase Serapan Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary"><?= $bulat_persen." %"; ?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Pendapat Masyarakat..</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="contact" class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4>Alamat Kantor :</h4>
          <p class="lead mb-0">Jalan Gedebage Selatan No.292 Kota Bandung,</p>
          <p class="lead mb-0">Kode Pos 40294</p>
          <p class="lead mb-0">Whatsapp Center : +62 ......</p>
          <p class="lead mb-0">Email : kecamatan.gedebage07@gmail.com</p>
        </div>
        <div class="col-md-6">
          <img src="<?= base_url('assets/startbootstrap/img/address.svg');?>" style="height: 200px; width: auto;">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#about">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#contact">Contact</a>
            </li>
            <!-- <li class="list-inline-item">&sdot;</li> -->
            <!-- <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li> -->
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/startbootstrap/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- auto numeric -->
  <script src="<?= base_url('assets/js/autoNumeric.js') ?>"></script>

  <script type="text/javascript">
    //rupiah
    $('.rupiah').autoNumeric('init');

  </script>

</body>

</html>
