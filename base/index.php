<?php
$page_title = 'Custom Karoseri Solutions for Trucks, Buses, & Vehicles | Your Trusted Vehicle Bodywork Experts';
$meta_description = 'Discover top-quality custom karoseri solutions for trucks, buses, and vehicles. Durable, tailored designs to meet every transportation need. Learn more today!';
require_once('includes/header.php');
?>

<section class="section section-hero d-flex py-0">
  <div class="swiper hero-swiper">
    <div class="swiper-wrapper">
      <?php
      $i = 0;
      $statement = $pdo->prepare("SELECT * FROM tbl_slider");
      $statement->execute();
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      foreach ($result as $row) {
        $photo = $row['photo'];
        $photoAlt = substr($photo, 0, strrpos($photo, '.'));
        $pos = $row['position'];
      ?>
        <div class="d-flex align-items-center swiper-slide <?php if ($i == 0) {
                                                              echo 'active';
                                                            } ?>">
          <div class="hero-slide-img">
            <img src="assets/uploads/<?php echo $photo; ?>" alt="<?php echo $photoAlt; ?>">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-5">
                <div class="hero-slide-content">
                  <h2 class="h1 mb-3" data-swiper-parallax="-1000"><?php echo $row['heading']; ?></h2>
                  <p class="mb-5" data-swiper-parallax="-1200"><?php echo nl2br($row['content']); ?></p>
                  <div data-swiper-parallax="-1250"><a href="<?php echo $row['button_url']; ?>" target="_blank" class="btn btn-primary"><?php echo $row['button_text']; ?></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
        $i++;
      }
      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="section section-homeabout pb-0">
  <div class="container">
    <div class="row g-4 align-items-xl-center">
      <div class="col-lg-7">
        <div class="row pe-xl-5">
          <div class="col-sm-6">
            <img src="assets/img/office-01.jpg" class="rounded" alt="office 01">
          </div>

          <div class="col-sm-6">
            <div class="row mb-4">
              <div class="col-sm-6 mb-4 mb-sm-0">
                <div class="p-3 bg-dark text-white rounded text-center text-white">
                  <span class="h2 text-white">15+</span>
                  <p class="mb-0">Years of experience</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 bg-primary rounded text-center text-white">
                  <span class="h2 text-white">1.5K</span>
                  <p class="mb-0">Happy customers</p>
                </div>
              </div>
            </div>
            <img src="assets/img/office-02.jpg" class="rounded" alt="office 02">
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <span class="d-inline-block bg-light text-gray-700 small rounded-3 px-3 py-2 mb-4">🤝 Your access point for top-notch bodywork solutions</span>
        <h2 class="mb-4">Crafting Excellence in Vehicle Customization</h2>
        <p class="mb-4">With our extensive experience in karoseri, we specialize in creating high-quality, custom body designs for trucks, vans, and more. Our commitment to innovation and customer satisfaction ensures that every vehicle meets the highest standards. Discover how we can transform your vehicle with tailored designs that maximize functionality and aesthetics.</p>
        <p><strong>Why Choose Us?</strong></p>
        <ul class="list-group list-group-borderless mb-4">
          <li class="list-group-item heading-color d-flex mb-0 border-0">
            <i class="bi bi-patch-check-fill text-primary me-2" aria-hidden="true"></i>
            Expertise in innovative and functional custom designs
          </li>
          <li class="list-group-item heading-color d-flex mb-0 border-0">
            <i class="bi bi-patch-check-fill text-primary me-2" aria-hidden="true"></i>
            A proven history of delivering reliable and high-quality karoseri solutions
          </li>
          <li class="list-group-item heading-color d-flex mb-0 border-0">
            <i class="bi bi-patch-check-fill text-primary me-2" aria-hidden="true"></i>
            Dedicated customer support from concept to completion
          </li>
        </ul>
        <a href="about.php" class="btn btn-primary">Discover more</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-partners">
  <div class="container">
    <h2 class="h5 pb-2 mb-4 text-center text-gray-600 text-uppercase">Our trusted partners</h2>
    <div class="swiper partners-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/uploads/partners/hino.png" alt="Hino" title="Hino">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partners/armindo.png" alt="Armindo" title="Armindo">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partners/cemaco.png" alt="Cemaco" title="Cemaco">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partners/auto2000.png" alt="Auto2000" title="Auto2000">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partners/arista.png" alt="Arista" title="Arista">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partners/indomobil.png" alt="Indomobil" title="Indomobil">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partners/nasmoco.png" alt="Nasmoco" title="Nasmoco">
        </div>
        <div class="swiper-slide">
          <img src="assets/uploads/partners/tejaberlian.png" alt="Teja Berlian" title="Teja Berlian">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-specialize bg-light">
  <div class="container">
    <h2 class="mb-5 text-center">What we specialize in</h2>
    <div class="row">
      <div class="col-sm-4 my-4">
        <div class="card card-body p-0 border-0 text-center">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/heavy-duty.png" alt="">
          </div>
          <h3 class="h5 mb-3">Heavy Duty</h3>
          <p class="mb-0">Custom bodies for trucks and industrial vehicles, built to handle heavy loads and tough environments.</p>
        </div>
      </div>

      <div class="col-sm-4 my-4">
        <div class="card card-body p-0 border-0 text-center">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/special-purpose-vehicle.png" alt="">
          </div>
          <h3 class="h5 mb-3">Special Purpose Vehicle</h3>
          <p class="mb-0">Custom-built vehicles for unique applications, including mobile kitchens, mobile toilets, and more.</p>
        </div>
      </div>

      <div class="col-sm-4 my-4">
        <div class="card card-body p-0 border-0 text-center">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/ambulance.png" alt="">
          </div>
          <h3 class="h5 mb-3">Ambulance</h3>
          <p class="mb-0">Fully equipped, ergonomic ambulance bodies for quick medical response and patient care.</p>
        </div>
      </div>

      <div class="col-sm-4 my-4">
        <div class="card card-body p-0 border-0 text-center">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/bus.png" alt="">
          </div>
          <h3 class="h5 mb-3">Bus</h3>
          <p class="mb-0">Comfortable and safe bus bodies, designed for passenger transport, from city buses to luxury coaches.</p>
        </div>
      </div>

      <div class="col-sm-4 my-4">
        <div class="card card-body p-0 border-0 text-center">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/heavy-equipment.png" alt="">
          </div>
          <h3 class="h5 mb-3">Heavy Equipment</h3>
          <p class="mb-0">Sturdy vehicle bodies built to transport heavy machinery with safety and ease of loading/unloading.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-products">
  <div class="container">
    <h2 class="mb-5 text-center">Our products</h2>
    <div class="row">
      <div class="col">
        <ul class="nav nav-underline justify-content-center gap-4 pb-2 mb-4" role="tablist">
          <li class="nav-item" role="presentation">
            <button type="button" id="heavy-duty-tab" class="nav-link active" data-bs-toggle="pill" data-bs-target="#heavy-duty-content" role="tab" aria-controls="heavy-duty-content" aria-selected="true">Heavy Duty</button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" id="special-purpose-tab" class="nav-link" data-bs-toggle="pill" data-bs-target="#special-purpose-content" role="tab" aria-controls="special-purpose-content" aria-selected="false">Special purpose vehicle</button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" id="ambulance-tab" class="nav-link" data-bs-toggle="pill" data-bs-target="#ambulance-content" role="tab" aria-controls="ambulance-content" aria-selected="false">Ambulance</button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" id="bus-tab" class="nav-link" data-bs-toggle="pill" data-bs-target="#bus-content" role="tab" aria-controls="bus-content" aria-selected="false">Bus</button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" id="heavy-equipment-tab" class="nav-link" data-bs-toggle="pill" data-bs-target="#heavy-equipment-content" role="tab" aria-controls="heavy-equipment-content" aria-selected="false">Heavy equipment</button>
          </li>
        </ul>

        <div class="tab-content">
          <div id="heavy-duty-content" class="tab-pane active" role="tabpanel" aria-labelledby="heavy-duty-tab" tabindex="0">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 g-xl-4">
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-01.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-01@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-02.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-02@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-03.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-03@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-04.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-04@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-05.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-05@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-06.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-06@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-07.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-07@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/prod-08.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-duty/prod-08@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="special-purpose-content" class="tab-pane" role="tabpanel" aria-labelledby="special-purpose-tab" tabindex="0">
            <div class="row row-cols-4 gy-4">
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-01.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-01@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-02.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-02@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-03.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-03@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-04.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-04@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-05.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-05@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-06.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-06@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-07.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-07@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/prod-08.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/special-purpose/prod-08@2x.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="ambulance-content" class="tab-pane" role="tabpanel" aria-labelledby="ambulance-tab" tabindex="0">
            <div class="row row-cols-4 gy-4">
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/ambulance/prod-01.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/ambulance/prod-01@2x.jpg" class="product-lightbox stretched-link" data-gallery="ambulance">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/ambulance/prod-02.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/ambulance/prod-02@2x.jpg" class="product-lightbox stretched-link" data-gallery="ambulance">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="bus-content" class="tab-pane" role="tabpanel" aria-labelledby="bus-tab" tabindex="0">
            <div class="row row-cols-4 gy-4">
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/bus/prod-01.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/bus/prod-01@2x.jpg" class="product-lightbox stretched-link" data-gallery="bus">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/bus/prod-02.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/bus/prod-02@2x.jpg" class="product-lightbox stretched-link" data-gallery="bus">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/bus/prod-03.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/bus/prod-03@2x.jpg" class="product-lightbox stretched-link" data-gallery="bus">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="heavy-equipment-content" class="tab-pane" role="tabpanel" aria-labelledby="heavy-equipment-tab" tabindex="0">
            <div class="row row-cols-4 gy-4">
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-01.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-01@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-02.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-02@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-03.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-03@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-04.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-04@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-05.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-05@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-06.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-06@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-07.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-07@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-element-hover">
                  <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/prod-08.jpg" class="card-img lazyload" alt="">
                  <div class="card-img-overlay">
                    <a href="assets/uploads/products/heavy-equipment/prod-08@2x.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                      <i class="bi bi-zoom-in" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-customers bg-dark">
  <div class="container">
    <h2 class="pb-2 mb-4">Our customers</h2>
    <div class="swiper customers-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/dlh.png 1x, assets/uploads/customers/dlh@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/dlh.png" class="lazyload" alt="Dinas Lingkungan Hidup" title="Dinas Lingkungan Hidup">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/pupr.png 1x, assets/uploads/customers/pupr@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/pupr.png" class="lazyload" alt="Kementerian PUPR" title="Kementerian PUPR">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/imigrasi.png 1x, assets/uploads/customers/imigrasi@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/imigrasi.png" class="lazyload" alt="Rumah Detensi Imigrasi" title="Rumah Detensi Imigrasi">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/humbang_hasundutan.png 1x, assets/uploads/customers/humbang_hasundutan@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/humbang_hasundutan.png" class="lazyload" alt="Dinas Perhubungan Kabupaten Humbang Hasundutan" title="Dinas Perhubungan Kabupaten Humbang Hasundutan">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/batubara.png 1x, assets/uploads/customers/batubara@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/batubara.png" class="lazyload" alt="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara" title="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/kemenhub.png 1x, assets/uploads/customers/kemenhub@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/kemenhub.png" class="lazyload" alt="Kementerian Perhubungan" title="Kementerian Perhubungan">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/jember.png 1x, assets/uploads/customers/jember@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/jember.png" class="lazyload" alt="DLH Kabupaten Jember" title="DLH Kabupaten Jember">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/tapanuli_utara.png 1x, assets/uploads/customers/tapanuli_utara@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/tapanuli_utara.png" class="lazyload" alt="DLH Kabupaten Tapanuli Utara" title="DLH Kabupaten Tapanuli Utara">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/batu.png 1x, assets/uploads/customers/batu@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/batu.png" class="lazyload" alt="DLH Kota Batu" title="DLH Kota Batu">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/malang.png 1x, assets/uploads/customers/malang@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/malang.png" class="lazyload" alt="DLH Kota Malang" title="DLH Kota Malang">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/tangerang.png 1x, assets/uploads/customers/tangerang@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/tangerang.png" class="lazyload" alt="DLH Kota Tangerang" title="DLH Kota Tangerang">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/bulukumba.png 1x, assets/uploads/customers/bulukumba@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/bulukumba.png" class="lazyload" alt="DLHK Kabupaten Bulukumba" title="DLHK Kabupaten Bulukumba">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/sumedang.png 1x, assets/uploads/customers/sumedang@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/sumedang.png" class="lazyload" alt="DLHK Kabupaten Sumedang" title="DLHK Kabupaten Sumedang">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/depok.png 1x, assets/uploads/customers/depok@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/depok.png" class="lazyload" alt="DLHK Kota Depok" title="DLHK Kota Depok">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/tegal.png 1x, assets/uploads/customers/tegal@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/tegal.png" class="lazyload" alt="DPUPR Kota Tegal" title="DPUPR Kota Tegal">
          </picture>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section class="section section-instagram">
  <div class="container">
    <div class="text-center mb-5">
      <p class="h4 mb-3">@senangjayagroup</p>
      <p>Follow us for the latest projects and updates!</p>
    </div>
    <div class="swiper instafeed-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card card-element-hover">
            <img src="assets/img/insta-feed/img-01.jpg" class="card-img" alt="A featured product from our Instagram feed">
            <div class="card-img-overlay">
              <a href="https://www.instagram.com/senangjayagroup" class="stretched-link" target="_blank">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card card-element-hover">
            <img src="assets/img/insta-feed/img-02.jpg" class="card-img" alt="A featured product from our Instagram feed">
            <div class="card card-img-overlay">
              <a href="https://www.instagram.com/senangjayagroup" class="stretched-link" target="_blank">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card card-element-hover">
            <img src="assets/img/insta-feed/img-03.jpg" class="card-img" alt="A featured product from our Instagram feed">
            <div class="card card-img-overlay">
              <a href="https://www.instagram.com/senangjayagroup" class="stretched-link" target="_blank">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card card-element-hover">
            <img src="assets/img/insta-feed/img-04.jpg" class="card-img" alt="A featured product from our Instagram feed">
            <div class="card card-img-overlay">
              <a href="https://www.instagram.com/senangjayagroup" class="stretched-link" target="_blank">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card card-element-hover">
            <img src="assets/img/insta-feed/img-05.jpg" class="card-img" alt="A featured product from our Instagram feed">
            <div class="card card-img-overlay">
              <a href="https://www.instagram.com/senangjayagroup" class="stretched-link" target="_blank">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card card-element-hover">
            <img src="assets/img/insta-feed/img-01.jpg" class="card-img" alt="A featured product from our Instagram feed">
            <div class="card-img-overlay">
              <a href="https://www.instagram.com/senangjayagroup" class="stretched-link" target="_blank">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$scripts = array('swiper-bundle.min.js');
require_once('includes/footer.php');
?>
