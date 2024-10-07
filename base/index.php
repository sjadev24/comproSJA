<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
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

<section class="section-hero">
  <div class="container">
    <div class="swiper hero-swiper">
      <div class="swiper-wrapper">
        <?php
        $i = 0;
        $statement = $pdo->prepare("SELECT * FROM tbl_slider");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
          $photo = $row['photo'];
          $pos = $row['position'];
        ?>
          <div data-text="aaa" class="swiper-slide <?php if ($i == 0) {
                                                      echo 'active';
                                                    } ?>">
            <img src="assets/uploads/<?php echo $photo; ?>" alt="">
            <div class="slide-text <?php if ($pos == 'Left') {
                                      echo 'slide_style_left';
                                    } elseif ($pos == 'Center') {
                                      echo 'slide_style_center';
                                    } elseif ($pos == 'Right') {
                                      echo 'slide_style_right';
                                    } ?>">
              <h1 data-animation="animate__animated animate__<?php if ($pos == 'Left') {
                                                                echo 'zoomInLeft';
                                                              } elseif ($pos == 'Center') {
                                                                echo 'flipInX';
                                                              } elseif ($pos == 'Right') {
                                                                echo 'zoomInRight';
                                                              } ?>"><?php echo $row['heading']; ?></h1>
              <p data-animation="animate__animated animate__<?php if ($pos == 'Left') {
                                                              echo 'fadeInLeft';
                                                            } elseif ($pos == 'Center') {
                                                              echo 'fadeInDown';
                                                            } elseif ($pos == 'Right') {
                                                              echo 'fadeInRight';
                                                            } ?>"><?php echo nl2br($row['content']); ?></p>
              <a href="<?php echo $row['button_url']; ?>" target="_blank" class="btn btn-primary" data-animation="animate__animated animate__<?php if ($pos == 'Left') {
                                                                                                                                                echo 'fadeInLeft';
                                                                                                                                              } elseif ($pos == 'Center') {
                                                                                                                                                echo 'fadeInDown';
                                                                                                                                              } elseif ($pos == 'Right') {
                                                                                                                                                echo 'fadeInRight';
                                                                                                                                              } ?>"><?php echo $row['button_text']; ?></a>
            </div>
          </div>
        <?php
          $i++;
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section class="section-about">
  <div class="container">
    <div class="row align-items-center about-row">
      <div class="col-5 mx-auto">
        <div class="media-decoration">
          <img src="./pxfuel.jpg" alt="">
        </div>
      </div>
      <div class="col-5 me-auto about-content">
        <h2 class="fs-5 mb-3">Our History:</h2>
        <p>PT. Senang Jaya Abadi moves in the field of hydraulic distributors.
          In 2009, PT. Senang Jaya Abadi began to build the carpooling of plates, dump trucks,
          ring tanks, water tanks and loading tanks. With the best quality and materials and supported
          with the latest technology and worked by a team of experienced experts in its field, thus
          producing quality products.</p>
        <p>Since the beginning, the aspiration of PT. Senang Jaya Eternal
          is to create quality products so that they can compete in the national market. With the ISO 9001-2008 Quality Management System Certification, the products produced are expected
          to be more quality and stable. Get all the facilities and services from our company, which
          we will provide to serve any operational fleet needs, in order to improve the performance
          and profitability of the company.</p>
      </div>
    </div>

    <div class="row align-items-center about-row">
      <div class="col-5 order-sm-2 mx-auto">
        <div class="media-decoration">
          <img src="assets/uploads/product-featured-131.jpg" alt="">
        </div>
      </div>
      <div class="col-5 ms-auto order-sm-1 about-content">
        <h2 class="fs-5 mb-3">Our Vision:</h2>
        <ul class="d-flex flex-column gap-2">
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>Become a more advanced corporate industry company of the time to come to satisfy customer satisfaction.</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="row align-items-center about-row">
      <div class="col-5 mx-auto">
        <div class="media-decoration">
          <img src="assets/uploads/product-featured-132.jpg" alt="">
        </div>
      </div>
      <div class="col-5 me-auto about-content">
        <h2 class="fs-5 mb-3">Our Mision:</h2>
        <ul class="d-flex flex-column gap-2">
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>Improve the company's best performance in a growing and expanding body industry to meet consumer expectations.</span>
          </li>
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>Manage the company professionally and innovatively with a product quality orientation and customer service accepted as a reliable human resource work.</span>
          </li>
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>Implementing corporate operations by implementing modern management.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section-services bg-dark">
  <div class="container">
    <h2 class="fs-3">Our services</h2>
    <div class="row">
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <i class="fa-solid fa-bolt"></i>
          </div>
          <h3 class="fs-5">Fast</h3>
          <p class="mb-0">We provide fast response to customer for credibilities orders.</p>
        </div>
      </div>
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <i class="fa-solid fa-users-gear"></i>
          </div>
          <h3 class="fs-5">Customize</h3>
          <p class="mb-0">We accept your customized order for customized all of part.</p>
        </div>
      </div>
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <i class="fa-solid fa-screwdriver-wrench"></i>
          </div>
          <h3 class="fs-5">Maintenance</h3>
          <p class="mb-0">We provide maintenance warranty for customer and part of unit.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-customers bg-dark">
  <div class="container">
    <h2 class="fs-3">Our customers</h2>
    <div class="swiper customers-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./testimoni-customer/dlh.png" alt="Dinas Lingkungan Hidup" title="Dinas Lingkungan Hidup">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/pupr.png" alt="Kementerian PUPR" title="Kementerian PUPR">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/imigrasi.png" alt="Rumah Detensi Imigrasi" title="Rumah Detensi Imigrasi">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/humbang_hasundutan.png" alt="Dinas Perhubungan Kabupaten Humbang Hasundutan" title="Dinas Perhubungan Kabupaten Humbang Hasundutan">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/batubara.png" alt="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara" title="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/kemenhub.png" alt="Kementerian Perhubungan" title="Kementerian Perhubungan">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/jember.png" alt="DLH Kabupaten Jember" title="DLH Kabupaten Jember">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/tapanuli_utara.png" alt="DLH Kabupaten Tapanuli Utara" title="DLH Kabupaten Tapanuli Utara">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/batu.png" alt="DLH Kota Batu" title="DLH Kota Batu">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/malang.png" alt="DLH Kota Malang" title="DLH Kota Malang">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/tangerang.png" alt="DLH Kota Tangerang" title="DLH Kota Tangerang">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/bulukumba.png" alt="DLHK Kabupaten Bulukumba" title="DLHK Kabupaten Bulukumba">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/sumedang.png" alt="DLHK Kabupaten Sumedang" title="DLHK Kabupaten Sumedang">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/depok.png" alt="DLHK Kota Depok" title="DLHK Kota Depok">
        </div>
        <div class="swiper-slide">
          <img src="./testimoni-customer/tegal.png" alt="DPUPR Kota Tegal" title="DPUPR Kota Tegal">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section class="section-partners">
  <div class="container">
    <h2 class="fs-3">Our partners</h2>
    <div class="swiper partners-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/hino.png" alt="Hino" title="Hino">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/armindo.png" alt="Armindo" title="Armindo">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/cemaco.png" alt="Cemaco" title="Cemaco">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/auto2000.png" alt="Auto2000" title="Auto2000">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/arista.png" alt="Arista" title="Arista">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/indomobil.png" alt="Indomobil" title="Indomobil">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/nasmoco.png" alt="Nasmoco" title="Nasmoco">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partnership/tejaberlian.png" alt="Teja Berlian" title="Teja Berlian">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<script src="assets/js/vendor/aos.js"></script>
<script src="assets/js/vendor/swiper-bundle.min.js"></script>
<?php require_once('footer.php'); ?>
