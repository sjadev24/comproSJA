<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../sja/assets/css/galeri.css">
    <!-- Vendor CSS Files -->
    <link href="assets/css/aos/aos.css" rel="stylesheet">
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/css/glightbox/css/glightbox.min.css" rel="stylesheet">
</head>
<?php require_once('header.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
   $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
}
?>

<!--<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $about_banner; ?>);">
    <div class="inner">
        <h1><?php echo $about_title; ?></h1>
    </div>
</div>-->

<div class="page" style="background: url(../sja/pxfuel2.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container">
        <div class="row" style="color:white;">            
                    <!--
                    <h3 style="color:maroon;">
                    <?php
                    echo $about_content;
                    ?>
                    </h3>
                    -->
                <div class="col-md-12 text-center">
                    <p style="font-size:100%; color:white;"><b>Become A More Advanced Karoseri Industry Company In The Future</b></p>
                </div>
                
                    <video width="100%" controls>
                        <source src="video.mp4" type="video/mp4">
                    </video>
        </div>
        

    </div>
</div>


                <!--<h1>Sorry, No Data...!!!</h1>-->
                <main id="main" style="background: url(../sja/pxfuel2.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <!-- ======= Portfolio Section ======= -->
    <script type="text/javascript"> <!-- JaVASCRIPT MATIKAN KLIK KANAN -->
      var message="No Function....!!!";
      function clickIE4(){
        if(event.button==2){
          alert(message);
          return false;
        }
      }
      function clickNS4(e){
        if(document.layers||document.getElementById&&!document.all){
          if(e.which==2||e.which==3){
            alert(message);
            return false;
          }
        }
      }
      if(document.layers){
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown=clickNS4;
      }else if(document.all&&!document.getElementById){
        document.onmousedown=clickIE4;
      }
      document.oncontextmenu=new Function("alert(message);return false");
    </script><!--IE=internet explorer 4+ dan NS=netscape 4+0-->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

<!--
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <br>
                <center><h3 style="color:white;">- Our Product Carroserries -</h3></center>
              <li data-filter="*" class="filter-active" style="color:white;">All</li>
              <li data-filter=".arm-roll" style="color:white;">Arm Roll</li>
              <li data-filter=".dump-truck" style="color:white;">Dump Truck</li>
              <li data-filter=".self-loader" style="color:white;">Self Loader</li>
              <li data-filter=".mobil-tangki" style="color:white;">Mobil Tangki</li>
              <li data-filter=".sky-lift" style="color:white;">Sky Lift</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item arm-roll">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/arm roll dobel hidrolik 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/arm roll dobel hidrolik 1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Arm Roll-1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item arm-roll">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/arm roll dobel hidrolik denpasar2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/arm roll dobel hidrolik denpasar2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Arm Roll-2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item arm-roll">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/arm roll dobel hidrolik denpasar3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/arm roll dobel hidrolik denpasar3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Arm Roll-3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item arm-roll">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/arm roll dobel hidrolik denpasar4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/arm roll dobel hidrolik denpasar4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Arm Roll-4"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item dump-truck">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/dt aero 7 m3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/dt aero 7 m3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dump Truck-1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item dump-truck">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/dump truk 3,5 m3 indramayu1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/dump truk 3,5 m3 indramayu1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dump Truck-2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item self-loader">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/self loader 9 meter.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/self loader 9 meter.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Self Loader-1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item self-loader">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/self loader 9m jack hyva.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/self loader 9m jack hyva.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Self Loader-2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item self-loader">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/self loader with crane.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/self loader with crane.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Self Loader-3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item self-loader">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/self loader with crane2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/self loader with crane2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Self Loader-4"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item mobil-tangki">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/tangki vacum 4000 L.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/tangki vacum 4000 L.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mobil Tangki-1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item mobil-tangki">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/tangki air 5000 L.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/tangki air 5000 L.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mobil Tangki-2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item sky-lift">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/skylift 9m.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/skylift 9m.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sky Lift-1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item sky-lift">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/skylift 9m 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/skylift 9m 2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sky Lift-2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item sky-lift">
            <div class="portfolio-wrap">
              <img src="../sja/galeri_produk/skylift 9m 3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="../sja/galeri_produk/skylift 9m 3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sky Lift-3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->
  <br>
    <!-- Vendor JS Files -->
  <script src="assets/css/aos/aos.js"></script>
  <script src="assets/css/glightbox/js/glightbox.min.js"></script>
  <script src="assets/css/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/css/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<?php require_once('footer.php'); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false
        });
    </script>
