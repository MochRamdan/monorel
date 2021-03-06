<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
  <link href="<?= base_url('assets/startbootstrap/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets/startbootstrap/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">

  <link href="<?= base_url('assets/startbootstrap/vendor/simple-line-icons/css/simple-line-icons.css') ?>" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/startbootstrap/css/landing-page.min.css') ?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">SI-Monorel</a>
      <a class="btn btn-primary" href="<?= base_url('Login'); ?>">Admin Here..</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header id="about" class="masthead text-white text-center bg-head">
    <!-- <img src="<? //= base_url('assets/startbootstrap/img/statistic_chart.svg');
                    ?>"> -->
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-6 mx-auto">
          <h4 class="mb-5">Selamat datang di situs SI-Monorel..</h4>
          <p class="lead mb-0">SI-Monorel adalah Sistem Informasi berbasis web untuk monitoring realisasi anggaran khusus Program Inovasi Pembangunan dan Pemberdayaan Kewilayahan (PIPPK) yang ada di Kecamatan Gedebage</p>
          <a href="#showcase" class="btn btn-primary">klik disini untuk melihat</a>
        </div>
        <div class="col-xl-6 mx-auto">
          <img src="<?= base_url('assets/startbootstrap/img/statistic_chart.svg'); ?>" style="height: 250px; width: auto;">
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
            <h3>Aturan Baru Tentang PIPPK</h3>
            <p class="lead mb-0">PEMERINTAH Kota (Pemkot) Bandung membuka opsi untuk melakukan pengadaan pada Program Inovasi Pembangunan dan Pemberdayaan Kewilayahan (PIPPK) melalui pola swakelola tipe 3.</p>
            <a href="http://humas.bandung.go.id/humas/layanan/pemkot-bandung-rilis-aturan-baru-tentang-pippk" class="btn btn-primary">Selanjutnya..</a>
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
            <img src="<?= base_url('assets/startbootstrap/img/online_banking.svg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pagu Anggaran</h5>
              <p class="card-text">Pagu Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sum_pagu; ?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/startbootstrap/img/wallet.svg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Realisasi Anggaran</h5>
              <p class="card-text">Realisasi Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sum_realisasi; ?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/startbootstrap/img/finance.svg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sisa Anggaran</h5>
              <p class="card-text">Sisa Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sisa_realisasi; ?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url('assets/startbootstrap/img/discount.svg'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">% Serapan Anggaran</h5>
              <p class="card-text">Persentase Serapan Anggaran PIPPK Kecamatan Gedebage</p>
              <p class="btn btn-primary"><?= $bulat_persen . " %"; ?></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials bg-light">
    <div class="container">
      <h2 class="mb-5 text-center">Pendapat Masyarakat..</h2>
      <div class="row owl-carousel owl-theme">
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url('assets/img/1.jpg') ?>" alt="">
            <p class="font-weight">Bapak Taufik (Perawat)</p>
            <p class="font-weight-light mb-0">“Kebutuhan SDM kesehatan sangat diharapkan
              mengingat kami sering turun ke lapangan
              sehingga yang jaga di Faskes terbatas”
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url('assets/img/2.jpg') ?>" alt="">
            <p class="font-weight">Bapak Yayat (Penjual Kopi)</p>
            <p class="font-weight-light mb-0">“Saya ingin usaha lebih tenang dan berkembang
              dengan diberikan kesempatan berusaha dan
              perhatian dari pemerintah dalam bentuk
              lainnya”
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url('assets/img/3.jpg') ?>" alt="">
            <p class="font-weight">Kang Cahyadi (Wiraswasta)</p>
            <p class="font-weight-light mb-0">“Mohon segera diperbaiki gorong - gorong
              dan saluran air lainnya agar tidak
              mudah banjir dan perbaikan jalan
              akibat mobil overload”
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url('assets/img/4.jpg') ?>" alt="">
            <p class="font-weight">Bapak Hidayat (Ustad)</p>
            <p class="font-weight-light mb-0">“Mohon diperhatikan kesejahteraan para
              pemuka agama seperti guru ngaji,
              marbot masjid dan sebagainya”
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url('assets/img/5.jpg') ?>" alt="">
            <p class="font-weight">Bang Erwan (Pegawai Swasta)</p>
            <p class="font-weight-light mb-0">“Pembangunan drainase belum baik
              dan efektif, masih ditemukan banyak
              genangan, jadi ketika membangun
              agar direncanakan dengan baik”
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?= base_url('assets/img/6.jpg') ?>" alt="">
            <p class="font-weight">Bapak Dasa (Tukang Ojek)</p>
            <p class="font-weight-light mb-0">“Semoga lapangan kerja makin
              mudah khususnya untuk anak
              saya, karena saya tidak ingin dia
              jadi seperti saya”
            </p>
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
          <p class="lead mb-0">Whatsapp Center : +62 857 224 868 98</p>
          <p class="lead mb-0">Email : kecamatan.gedebage07@gmail.com</p>
          <p class="lead mb-0">Kode Pos 40294</p>
        </div>
        <div class="col-md-6">
          <img src="<?= base_url('assets/startbootstrap/img/address.svg'); ?>" style="height: 200px; width: auto;">
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
              <a href="https://www.facebook.com/gedebagerancage/">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="https://twitter.com/kecgedebage">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/kecamatan_gedebage/">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/startbootstrap/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- auto numeric -->
  <script src="<?= base_url('assets/js/autoNumeric.js') ?>"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      //rupiah
      $('.rupiah').autoNumeric('init');

      //owl carousel
      $('.owl-carousel').owlCarousel();


    });
  </script>

</body>

</html>