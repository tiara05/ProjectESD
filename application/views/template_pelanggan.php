<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Web Toko Buku</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url()?>assets/assets/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?=base_url()?>assets/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>assets/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <CENTER><h1 class="logo mr-auto"><a href="<?php echo base_url('index.php/Dashboard_pelanggan'); ?>">TOGAMEDIA</a></h1></CENTER>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="<?=base_url()?>assets/index.html" class="logo mr-auto"><img src="<?=base_url()?>assets/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li class="active"><a href="<?php echo base_url('index.php/Dashboard_pelanggan'); ?>">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#booking">Booking</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Book Store</h1>
      
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?=base_url()?>assets/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>  

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-12 col-md-4 col-6 d-flex align-items-center justify-content-center">
            
            <h1>SELAMAT DATANG DI TOKO BUKU TOGAMEDIA</h1>
          </div>

          

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    
    <?php
        $this->load->view($about_view);
    ?>

    
    <!-- ======= Why Us Section ======= -->
    <?php
        $this->load->view($main_view);
    ?>
    <!-- ======= Skills Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>TOGAMEDIA</h3>
            
          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Booking</a></li>
            </ul>
          </div>

         

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Tersebar ke seluruh Indonesia dengan berbagai macam jenis buku yang ada</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      
     
    </div>
  </footer><!-- End Footer -->

  <a href="<?=base_url()?>assets/#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  

  <div id="modal_hapus_cart" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="section-title">Konfirmasi Hapus Item Cart</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="<?php echo base_url('index.php/Dashboard_pelanggan/hapus_item_cart'); ?>" method="post">
          <div class="modal-body">
              <input type="hidden" name="hapus_id"  id="hapus_id">
              <p>Apakah anda yakin menghapus produk ini di cart ?</p>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-danger" name="submit" value="YA">
            <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>assets/assets/js/main.js"></script>

  <script type="text/javascript">
    $.getJSON("<?php echo base_url('index.php/transaksi/get_total_belanja') ?>", function(data){
          $("#total_belanja").text(data.total);
      });

    function prepare_hapus_cart(id)
    {
      $("#hapus_id").val(id);
    }

    function hitung_subtotal(id,harga,qty,id_buku)
    {
      var price;
      price = harga*qty;
      $("#subtot_"+id).text(price);
      //update qty ke tabel cart
      $.post("<?php echo base_url('index.php/transaksi/ubah_jumlah_cart') ?>",
        {
          id: id,
          id_buku: id_buku,
            jumlah: qty
        }, function(data, status){
          console.log(data);
          if(data == '0'){
            alert("Stok buku tidak mencukupi!");
          }
        });
      //mengganti total belanja di cart
        $.getJSON("<?php echo base_url('index.php/transaksi/get_total_belanja') ?>", function(data){
            $("#total_belanja").text(data.total);
        });
    }
  </script>
</body>

</html>