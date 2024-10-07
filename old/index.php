<!DOCTYPE html>
<html lang="en">
<!-- POPUP
<div class="modal fade" id="myModal" >
<div id='mstamvan'>
<div id='belakang'></div>
    <center><div class='isinya'>
        <a href='http://karoserisenangjaya.com'>
        <img style="width:70%;" alt='popup' src='popup/popup3.jpg'/>
        </a>
    </div></center>
</div>
</div>
</div>
<script type="text/javascript">
    var count=-1; // initially -1 as we are having a delay of 1000ms
var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
function timer()
{
  count=count+1;
  if (count >=6) //+1 than the req time as we have a delay of 1000ms
  {
     clearInterval(counter);
     /////////////what code should go here for the modal to pop up??///////////////////////
      $("#myModal").modal();
     return;
  }
    document.getElementById("timer").innerHTML=count + "secs"; // watch for spelling
}
</script>
END POPUP-->

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <!-- Vendor CSS Files -->
      <link href="assets/css/aos/aos.css" rel="stylesheet">
      <link href="assets/css/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<!-- Start of TRANSLATE Script
   <script type="text/javascript">
   function googleTranslateElementInit() {
     new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
   }
   </script>
   <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- End of Trannslate Script -->

<?php require_once('header.php'); ?>
<style>
/* CSS SLIDE KUNJUNGAN */
* {box-sizing: border-box;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: White;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* The dots/bullets/indicators */
.dot {
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

@font-face /*perintah untuk memanggil font eksternal*/
        {
            font-family: 'Neoland'; /*memberikan nama bebas untuk font*/
            src: url('../assets/fonts/neoland_serif/Neoland Serif.ttf');/*memanggil file font eksternalnya di folder nexa*/
        }
/*CSS SERVICE */        
.service-icon:hover {
text-align: center;
transform: scale(1.08);
-webkit-transition: 0.4s ease;
}
.service-icon img {
    max-width: 100%;
    vertical-align: middle;
}
/*CSS SERVICE */

/*CSS SERTI */        
.serti1:hover {
transform: scale(1.08);
-webkit-transition: 0.4s ease;
}
.serti2:hover {
transform: scale(1.08);
-webkit-transition: 0.4s ease;
}
.serti3:hover {
transform: scale(1.08);
-webkit-transition: 0.4s ease;
}

/*CSS PARTNER */
.zoom1:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.zoom2:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.zoom3:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.zoom4:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.zoom5:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.zoom6:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.zoom7:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.zoom8:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
/*CSS PARTNER */

/*CSS SLIDE PROJECT */
.containerslideproject{
        overflow: hidden;
}
.wrapper{
    display: flex;
    animation: slide 15s infinite;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}
img{
    width: 100%;
}
/*CSS SLIDE PROJECT */


/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team {
  background: #fff;
  padding: 60px 0;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 30px;
  right: 0;
  opacity: 0;
  transition: ease-in-out 0.3s;
  text-align: center;
}

.team .member .social a {
  transition: color 0.3s;
  color: #151515;
  margin: 0 3px;
  border-radius: 4px;
  width: 36px;
  height: 36px;
  background: rgba(255, 255, 255, 0.8);
  transition: ease-in-out 0.3s;
  color: #484848;
  display: inline-flex;
  justify-content: center;
  align-items: center;
}

.team .member .social a:hover {
  color: #151515;
  background: #ffc451;
}

.team .member .social i {
  font-size: 18px;
  line-height: 0;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #151515;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
  bottom: 15px;
}
/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials {
  padding: 80px 0;
  background: url("../img/about.jpg") no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
}

.testimonials::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
}

.testimonials .section-header {
  margin-bottom: 40px;
}

.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item {
  text-align: center;
  color: #fff;
}

.testimonials .testimonial-item .testimonial-img {
  width: 15%;
  border-radius: 50%;
  border: 6px solid rgba(255, 255, 255, 0.15);
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #fff;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #ddd;
  margin: 0 0 15px 0;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: rgba(255, 255, 255, 0.6);
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
  color: #eee;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.4);
  opacity: 0.5;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: maroon;
  opacity: 1;
}

@media (min-width: 1024px) {
  .testimonials {
    background-attachment: fixed;
  }
}

@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}
/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/

</style>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
    $cta_title = $row['cta_title'];
    $cta_content = $row['cta_content'];
    $cta_read_more_text = $row['cta_read_more_text'];
    $cta_read_more_url = $row['cta_read_more_url'];
    $cta_photo = $row['cta_photo'];
    $featured_product_title = $row['featured_product_title'];
    $featured_product_subtitle = $row['featured_product_subtitle'];
    $latest_product_title = $row['latest_product_title'];
    $latest_product_subtitle = $row['latest_product_subtitle'];
    $popular_product_title = $row['popular_product_title'];
    $popular_product_subtitle = $row['popular_product_subtitle'];
    $total_featured_product_home = $row['total_featured_product_home'];
    $total_latest_product_home = $row['total_latest_product_home'];
    $total_popular_product_home = $row['total_popular_product_home'];
    $home_service_on_off = $row['home_service_on_off'];
    $home_welcome_on_off = $row['home_welcome_on_off'];
    $home_featured_product_on_off = $row['home_featured_product_on_off'];
    $home_latest_product_on_off = $row['home_latest_product_on_off'];
    $home_popular_product_on_off = $row['home_popular_product_on_off'];

}


?>

<div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false"  style="font-family: Neoland;">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $i=0;
        $statement = $pdo->prepare("SELECT * FROM tbl_slider");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
        foreach ($result as $row) {            
            ?>
            <li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $i; ?>" <?php if($i==0) {echo 'class="active"';} ?>></li>
            <?php
            $i++;
        }
        ?>
    </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        $i=0;
        $statement = $pdo->prepare("SELECT * FROM tbl_slider");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
        foreach ($result as $row) {            
            ?>
            <div class="item <?php if($i==0) {echo 'active';} ?>" style="background-image:url(assets/uploads/<?php echo $row['photo']; ?>); ">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text <?php if($row['position'] == 'Left') {echo 'slide_style_left';} elseif($row['position'] == 'Center') {echo 'slide_style_center';} elseif($row['position'] == 'Right') {echo 'slide_style_right';} ?>">
                            <h1 data-animation="animated <?php if($row['position'] == 'Left') {echo 'zoomInLeft';} elseif($row['position'] == 'Center') {echo 'flipInX';} elseif($row['position'] == 'Right') {echo 'zoomInRight';} ?>"><?php echo $row['heading']; ?></h1>
                            <p data-animation="animated <?php if($row['position'] == 'Left') {echo 'fadeInLeft';} elseif($row['position'] == 'Center') {echo 'fadeInDown';} elseif($row['position'] == 'Right') {echo 'fadeInRight';} ?>"><?php echo nl2br($row['content']); ?></p>
                            <a href="<?php echo $row['button_url']; ?>" target="_blank"  class="btn btn-primary" data-animation="animated <?php if($row['position'] == 'Left') {echo 'fadeInLeft';} elseif($row['position'] == 'Center') {echo 'fadeInDown';} elseif($row['position'] == 'Right') {echo 'fadeInRight';} ?>"><?php echo $row['button_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $i++;
        }
        ?>
    </div>

    <!-- Slider Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Slider Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>


<?php if($home_service_on_off == 1): ?>
<!--<div class="service bg-gray">
    <div class="container">
        <div class="row">-->
            <?php /*
                $statement = $pdo->prepare("SELECT * FROM tbl_service");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                foreach ($result as $row) {
                    ?>
                    <center><div class="col-md-4"></center>
                        <div class="item">
                            <!--<div class="photo">
                                <img src="assets/uploads/<?php echo $row['photo']; ?>" width="250px" alt="<?php echo $row['title']; ?>">
                            </div>-->
                            <h3><?php echo $row['title']; ?></h3>
                            <p>
                                <?php echo nl2br($row['content']); */ ?>
                            <!--</p>
                        </div>
                    </div>-->
                    <?php /*
                }
            */ ?>
        <!--</div>
    </div>
</div>-->
<?php endif; ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $faq_title = $row['faq_title'];
    $faq_banner = $row['faq_banner'];
}
?>

<!--<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $faq_banner; ?>);">
    <div class="inner">
        <h1><?php echo $faq_title; ?></h1>
    </div>
</div>-->





    <!-- ACCORDION PROFIL START
    <div class="container">
                <div class="panel-group" id="faqAccordion">
                    <?php
                    /*
                    $statement = $pdo->prepare("SELECT * FROM tbl_faq");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                    */
                    ?>
                        <div class="panel panel-default" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question<?php echo $row['faq_id']; ?>">
                                <h4 class="panel-title" style="font-family: Neoland;">
                                    <?php /*  echo $row['faq_title']; */ ?>
                                </h4>
                            </div>
                            <div id="question<?php /* echo $row['faq_id']; */ ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <!--<h5><span class="label label-primary"></span></h5>-->
                                    <!--
                                    <center>
                                        <?php /* echo $row['faq_content']; */ ?>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <?php
                        /*
                    }
                    */
                    ?>
                </div>
    </div>
    <!-- ACCORDION PROFIL END -->
<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../sja/pxfuel.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <center><h5><b style="color:white;">"PT. Karoseri Senang Jaya Abadi"</b></h5></center>
            <p class="fst-italic" style="text-align: justify; color:white;">
              PT. Senang Jaya Abadi moves in the field of hydraulic distributors. In 2009 PT. Senang Jaya Abadi began to build the carpooling of plates, dump trucks, ring tanks, water tanks and loading tanks. With the best quality and materials and supported with the latest technology and worked by a team of experienced experts in its field, thus producing quality products. Since the beginning, the aspiration of PT. Senang Jaya Eternal is to create quality products so that they can compete in the national market. With the ISO 9001-2008 Quality Management System Certification, the products produced are expected to be more quality and stable. Get all the facilities and services from our company, which we will provide to serve any operational fleet needs, in order to improve the performance and profitability of the company.
            </p>
            <ul>
            <center><h1 style="color:white;">Our Vision :</h1></center>
              <li style="color:white;"><i class="ri-check-double-line"></i> Become a more advanced corporate industry company of the time to come to satisfy customer satisfaction</li>
            </ul>
            <ul>
            <center><h1 style="color:white;">Our Mision :</h1></center>
              <li style="color:white;"><i class="ri-check-double-line"></i> Improve the company's best performance in a growing and expanding body industry to meet consumer expectations</li>
              <li style="color:white;"><i class="ri-check-double-line"></i> Manage the company professionally and innovatively with a product quality orientation and customer service accepted as a reliable human resource work</li>
              <li style="color:white;"><i class="ri-check-double-line"></i> Implementing corporate operations by implementing modern management</li>
            </ul>
          </div>
        </div>

      </div>
    </section>
<!-- End About Section -->
<!-- ======= Team Section ======= -->
    <section id="team" class="team" style="background-color:whitesmoke;">
      <div class="container" data-aos="fade-up">
        <div class="row">
            
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <tr>
                    <center><img src="../sja/services/services1.png" class="img-fluid" alt="" style='width:30%;'></center>
                    <td><center><b><h5>We provide fast response to customer for Credibillities orders</h5></b></center></td>
                </tr>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <tr>
                    <center><img src="../sja/services/services2.png" class="img-fluid" alt="" style='width:30%;'></center>
                    <td><center><b><h5>We accept your customized order for Customized all of part</h5></b></center></td>
                </tr>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <tr>
                    <center><img src="../sja/services/services3.png" class="img-fluid" alt="" style='width:30%;'></center>
                    <td><center><b><h5>We provide maintenance warranty for customer and part of unit</h5></b></center></td>
                </tr>
              </div>
            </div>
          </div>

      </div>
    </section>
<!-- End Team Section -->
    <!-- slide project
<div class="container">
    <div class="col-md-12">
        <div class="containerslideproject">
            <div class="wrapper" data-aos="fade" data-aos-delay="50" data-aos-duration="1000">
                <img src="../sja/slideproduk/p6.png">
                <img src="../sja/slideproduk/p2.png">
                <img src="../sja/slideproduk/p3.png">
                <img src="../sja/slideproduk/p7.png">
            </div>
        </div>
    </div>
</div>
 <!-- slide project -->

        
    <!-- MOTTO -->
<div class="page">
            <center>
                <img src="../sja/moto/goodquality.jpg" style="width: 20%;" class="zoom1">&nbsp;&nbsp;&nbsp;
                <img src="../sja/moto/precision.jpg" style="width: 20%;" class="zoom2">&nbsp;&nbsp;&nbsp;
                <img src="../sja/moto/certified.jpg" style="width: 20%;" class="zoom3">&nbsp;&nbsp;&nbsp;
                <img src="../sja/moto/teamwork.jpg" style="width: 20%;" class="zoom4">
            </center>
</div>
    <!-- MOTTO -->
    
    <!-- slide project -->
    <!--GAMBAR ACHIEVMENT -->
<div class="page" style="background-color:whitesmoke;">
    <div class="container">
        <div class="row">
        <legend><center><h2 style="color:white; font-family: Neoland; font-size:80%; -webkit-text-stroke:1.5px maroon;
                		text-shadow: -1px -1px -1px white, -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white;">- Certifications -</h2></center></legend>
            <center>
                <img src="assets/uploads/1.jpg" style="width: 30%;" data-aos="flip-down" data-aos-duration="1000">&nbsp;&nbsp;&nbsp;
                <img src="assets/uploads/3.jpg" style="width: 30%;" data-aos="slide-up" data-aos-delay="50" data-aos-duration="1000">&nbsp;&nbsp;&nbsp;
                <img src="assets/uploads/2.jpg" style="width: 28%;" data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000">
            </center>
        </div>
    </div>
</div>


    <!-- slide galeri -->

    <!-- ======= Testimonials Section ======= -->
    <center><h3><b style="color:white; font-family: Neoland; font-size:80%; -webkit-text-stroke:1.5px maroon;
                		text-shadow: -1px -1px -1px white, -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white;"> - CUSTOMER -</b></h3></center>
    <section id="testimonials" class="testimonials" style="background: url(../sja/pxfuel3.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/dlh.png" class="testimonial-img" alt="">
                <h3>Dinas Lingkungan Hidup</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/pupr.png" class="testimonial-img" alt="">
                <h3>Kementerian PUPR</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/imigrasi.png" class="testimonial-img" alt="">
                <h3>Rumah Detensi Imigrasi</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/Humbang_Hasundutan.png" class="testimonial-img" alt="">
                <h3>Dinas Perhubungan Kabupaten Humbang Hasundutan</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/batubara.png" class="testimonial-img" alt="">
                <h3>DINAS PERUMAHAN KAWASAN PERMUKIMAN DAN LINGKUNGAN HIDUP KABUPATEN BATUBARA</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/kemenhub.png" class="testimonial-img" alt="">
                <h3>Kementerian Perhubungan</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/jember.png" class="testimonial-img" alt="">
                <h3>DLH Kabupaten Jember</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/TapanuliUtara.png" class="testimonial-img" alt="">
                <h3>DLH Kabupaten Tapanuli Utara</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/Batu.png" class="testimonial-img" alt="">
                <h3>DLH Kota Batu</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/Malang.png" class="testimonial-img" alt="">
                <h3>DLH Kota Malang</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/kotatangerang.png" class="testimonial-img" alt="">
                <h3>DLH Kota Tangerang</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/Bulukumba.png" class="testimonial-img" alt="">
                <h3>DLHK Kabupaten Bulukumba</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/Sumedang.png" class="testimonial-img" alt="">
                <h3>DLHK Kabupaten Sumedang</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/Kota_Depok.png" class="testimonial-img" alt="">
                <h3>DLHK Kota Depok</h3>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../sja/testimoni-customer/Tegal.png" class="testimonial-img" alt="">
                <h3>DPUPR Kota Tegal</h3>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->


  <!-- Vendor JS Files -->
  <script src="assets/css/aos/aos.js"></script>
  <script src="assets/css/glightbox/js/glightbox.min.js"></script>
  <script src="assets/css/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

<!-- VISITED PAGE
<div class="page" style="background: url(../sja/bg222.jpg)">
    <div class="container">
    <div class="row">
                        <legend><center><h2 style="color:white; font-family: Neoland; font-size:80%; -webkit-text-stroke:1.5px maroon;
                		text-shadow: -1px -1px -1px white, -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white;">- Visited -</h2></center></legend>
                                
                                    <div class="slideshow-container" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">

                                        <div class="mySlides fade">
                                          <img src="slide_gambar/1.jpg" style="height:100%;">
                                          <div class="text" style="font-family: Neoland; font-size:13px;">Disperkim Tanggerang Visited</div>
                                        </div>

                                        <div class="mySlides fade">
                                          <img src="slide_gambar/2.jpg" style="height:100%;">
                                          <div class="text" style="font-family: Neoland; font-size:13px;">PUPR Tegal Visited</div>
                                        </div>

                                        <div class="mySlides fade">
                                          <img src="slide_gambar/3.jpg" style="height:100%;">
                                          <div class="text" style="font-family: Neoland; font-size:13px;">DLHK Kota Depok Visited</div>
                                        </div>
                                        <div class="mySlides fade">
                                          <img src="slide_gambar/4.jpg" style="height:100%;">
                                          <div class="text" style="font-family: Neoland; font-size:13px;">Sudin LH Jakarta Barat Visited</div>
                                        </div>
                                    </div>

                                    <div style="margin:center">
                                      <span class="dot"></span> 
                                      <span class="dot"></span> 
                                      <span class="dot"></span>
                                      <span class="dot"></span>
                                    </div>
                                   
                                <!-- JAVASCRIPT SLIDE KUNJUNGAN -->
                                    <script>
                                        var slideIndex = 0;
                                        showSlides();

                                        function showSlides() {
                                          var i;
                                          var slides = document.getElementsByClassName("mySlides");
                                          var dots = document.getElementsByClassName("dot");
                                          for (i = 0; i < slides.length; i++) {
                                            slides[i].style.display = "none";  
                                          }
                                          slideIndex++;
                                          if (slideIndex > slides.length) {slideIndex = 1}    
                                          for (i = 0; i < dots.length; i++) {
                                            dots[i].className = dots[i].className.replace(" active", "");
                                          }
                                          slides[slideIndex-1].style.display = "block";  
                                          dots[slideIndex-1].className += " active";
                                          setTimeout(showSlides, 5000); // Change image every 2 seconds
                                        }
                                    </script>
                                <!-- -->
    </div>
    </div>
</div>
<!-- VISITED PAGE -->
                            <div class="page" style="background-color:white;">
                                <div class="container">
                                    <legend><center><h2 style="color:white;-webkit-text-stroke:1.5px maroon;text-shadow: -1px -1px -1px white,
                                    -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white; font-family: Neoland; font-size:80%;">- Partnership -</h2></center></legend>
                                    <center>
                                    <div class="partner" style="background-color: gray; opacity:70%;"></div>
                                        <img src="assets/uploads/partnership/hino.png" style="width: 7%;" class="zoom1">
                                        <img src="assets/uploads/partnership/armindo.png" style="width: 7%;" class="zoom2">
                                        <img src="assets/uploads/partnership/cemaco.png" style="width: 5%;" class="zoom3">
                                        <img src="assets/uploads/partnership/auto2000.png" style="width: 16%;" class="zoom4">
                                        <img src="assets/uploads/partnership/arista.png" style="width: 11%;" class="zoom5">
                                        <img src="assets/uploads/partnership/indomobil.png" style="width: 16%;" class="zoom6">
                                        <img src="assets/uploads/partnership/nasmoco.png" style="width: 13%;" class="zoom7">
                                        <img src="assets/uploads/partnership/tejaberlian.png" style="width: 16%;" class="zoom8">
                                    </center>
                                </div>
                            </div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false
        });
    </script>
<?php require_once('footer.php'); ?>
