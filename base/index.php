<?php
$page_title = 'Custom Karoseri Solutions for Trucks, Buses, & Vehicles | Your Trusted Vehicle Bodywork Experts';
$meta_description = 'Discover top-quality custom karoseri solutions for trucks, buses, and vehicles. Durable, tailored designs to meet every transportation need. Learn more today!';
require_once('includes/header.php');
?>

<section class="section section-hero d-flex py-0">
  <div class="swiper hero-swiper">
    <div class="swiper-wrapper">
      <?php
      // $i = 0;
      // $statement = $pdo->prepare("SELECT * FROM tbl_slider");
      // $statement->execute();
      // $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      // foreach ($result as $row) {
      //   $photo = $row['photo'];
      //   $photoAlt = substr($photo, 0, strrpos($photo, '.'));
      //   $pos = $row['position'];
      ?>
      <div class="d-flex align-items-center swiper-slide active">
        <div class="hero-slide-img">
          <picture>
            <source srcset="assets/uploads/hero/avif/hero-01.avif" type="image/avif" />
            <source srcset="assets/uploads/hero/webp/hero-01.webp" type="image/webp" />
            <img src="assets/uploads/hero/jpg/hero-01.jpg" alt="hero 01">
          </picture>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-5">
              <div class="hero-slide-content">
                <h2 class="h1 mb-3" data-swiper-parallax="-1000">Innovation and Excellence</h2>
                <p class="mb-5" data-swiper-parallax="-1200">Innovative designs and precision craftsmanship that elevate your vehicle to the next level.</p>
                <div data-swiper-parallax="-1250"><a href="products.php" target="_blank" class="btn btn-primary">Explore Our Designs</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center swiper-slide">
        <div class="hero-slide-img">
          <picture>
            <source srcset="assets/uploads/hero/avif/hero-02.avif" type="image/avif" />
            <source srcset="assets/uploads/hero/webp/hero-02.webp" type="image/webp" />
            <img src="assets/uploads/hero/jpg/hero-02.jpg" alt="hero 02">
          </picture>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-5">
              <div class="hero-slide-content">
                <h2 class="h1 mb-3" data-swiper-parallax="-1000">Trusted Expertise</h2>
                <p class="mb-5" data-swiper-parallax="-1200">With decades of experience, we create durable, reliable, and industry-leading karoseri solutions.</p>
                <div data-swiper-parallax="-1250"><a href="about.php" target="_blank" class="btn btn-primary">Explore Our Expertise</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center swiper-slide">
        <div class="hero-slide-img">
          <picture>
            <source srcset="assets/uploads/hero/avif/hero-03.avif" type="image/avif" />
            <source srcset="assets/uploads/hero/webp/hero-03.webp" type="image/webp" />
            <img src="assets/uploads/hero/jpg/hero-03.jpg" alt="hero 03">
          </picture>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-5">
              <div class="hero-slide-content">
                <h2 class="h1 mb-3" data-swiper-parallax="-1000">Customer Satisfaction</h2>
                <p class="mb-5" data-swiper-parallax="-1200">We bring your vision to life with custom designs that combine functionality, beauty, and long-term value.</p>
                <div data-swiper-parallax="-1250"><a href="contact.php" target="_blank" class="btn btn-primary">Start Now</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      // $i++;
      //}
      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="section section-homeabout pb-0">
  <div class="container">
    <div class="row g-4 align-items-xl-center">
      <div class="col-lg-7">
        <div class="row pe-lg-4 pe-xl-5 g-5 g-lg-4">
          <div class="col-sm-6">
            <picture>
              <source data-srcset="assets/img/about/avif/office-01.avif" type="image/avif" />
              <source data-srcset="assets/img/about/webp/office-01.webp" type="image/webp" />
              <img src="assets/img/placehold.png" data-src="assets/img/about/jpg/office-01.jpg" class="rounded lazyload" alt="office 01">
            </picture>
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
            <picture>
              <source data-srcset="assets/img/about/avif/office-02.avif" type="image/avif" />
              <source data-srcset="assets/img/about/webp/office-02.webp" type="image/webp" />
              <img src="assets/img/placehold.png" data-src="assets/img/about/jpg/office-02.jpg" class="rounded lazyload" alt="office 01">
            </picture>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <span class="d-inline-block bg-light text-gray-700 small rounded-3 px-3 py-2 mb-4">🤝 Your access point for top-notch bodywork solutions</span>

        <h2 class="mb-4">Crafting Excellence in Vehicle Customization</h2>
        <p class="mb-5">With our extensive experience in karoseri, we specialize in creating high-quality, custom body designs for trucks, vans, and more. Our commitment to innovation and customer satisfaction ensures that every vehicle meets the highest standards. Discover how we can transform your vehicle with tailored designs that maximize functionality and aesthetics.</p>

        <p><strong>Why Choose Us?</strong></p>
        <ul class="list-group list-group-borderless mb-4">
          <li class="list-group-item d-flex border-0">
            <i class="bi bi-patch-check-fill text-primary me-2" aria-hidden="true"></i>
            Expertise in innovative and functional custom designs
          </li>
          <li class="list-group-item d-flex border-0">
            <i class="bi bi-patch-check-fill text-primary me-2" aria-hidden="true"></i>
            A proven history of delivering reliable and high-quality karoseri solutions
          </li>
          <li class="list-group-item d-flex border-0">
            <i class="bi bi-patch-check-fill text-primary me-2" aria-hidden="true"></i>
            Dedicated customer support from concept to completion
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section-partners">
  <div class="container">
    <h2 class="h5 mb-5 text-center text-gray-600 text-uppercase">Our trusted partners</h2>
    <div class="swiper partners-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/hino.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/hino.png" class="lazyload" alt="Hino" title="Hino">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/armindo.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/armindo.png" class="lazyload" alt="Armindo" title="Armindo">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/cemaco.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/cemaco.png" class="lazyload" alt="Cemaco" title="Cemaco">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/auto2000.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/auto2000.png" class="lazyload" alt="Auto2000" title="Auto2000">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/arista.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/arista.png" class="lazyload" alt="Arista" title="Arista">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/indomobil.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/indomobil.png" class="lazyload" alt="Indomobil" title="Indomobil">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/nasmoco.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/nasmoco.png" class="lazyload" alt="Nasmoco" title="Nasmoco">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source data-srcset="assets/uploads/partners/avif/tejaberlian.avif" type="image/avif" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/partners/png/tejaberlian.png" class="lazyload" alt="Teja Berlian" title="Teja Berlian">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-specialize bg-light">
  <div class="container">
    <h2 class="mb-6 text-center">What we specialize in</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4">
      <div class="col">
        <div class="text-center my-2">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/heavy-duty.png" alt="">
          </div>
          <h3 class="h5 mb-3">Heavy Duty</h3>
          <p class="mb-0">Custom bodies for trucks and industrial vehicles, built to handle heavy loads and tough environments.</p>
        </div>
      </div>

      <div class="col">
        <div class="text-center my-2">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/special-purpose-vehicle.png" alt="">
          </div>
          <h3 class="h5 mb-3">Special Purpose Vehicle</h3>
          <p class="mb-0">Custom-built vehicles for unique applications, including mobile kitchens, mobile toilets, and more.</p>
        </div>
      </div>

      <div class="col">
        <div class="text-center my-2">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/ambulance.png" alt="">
          </div>
          <h3 class="h5 mb-3">Ambulance</h3>
          <p class="mb-0">Fully equipped, ergonomic ambulance bodies for quick medical response and patient care.</p>
        </div>
      </div>

      <div class="col">
        <div class="text-center my-2">
          <div class="service-icon mb-4">
            <img src="assets/img/specialized/bus.png" alt="">
          </div>
          <h3 class="h5 mb-3">Bus</h3>
          <p class="mb-0">Comfortable and safe bus bodies, designed for passenger transport, from city buses to luxury coaches.</p>
        </div>
      </div>

      <div class="col">
        <div class="text-center my-2">
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
    <h2 class="mb-6 text-center">Our products</h2>
    <div class="row">
      <div class="col">
        <div class="d-flex nav-wrapper mb-5">
          <ul class="nav nav-underline flex-nowrap flex-lg-wrap gap-4 mx-auto" role="tablist">
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
        </div>

        <div class="tab-content mb-6">
          <?php
          $product_categories = [
            'heavy_duty' => [],
            'special_purpose' => [],
            'ambulance' => [],
            'bus' => [],
            'heavy_equipment' => [],
          ];

          $product_category_counts = [
            'heavy_duty' => 8,
            'special_purpose' => 8,
            'ambulance' => 2,
            'bus' => 3,
            'heavy_equipment' => 8
          ];

          foreach ($product_category_counts as $category => $count) {
            for ($i = 1; $i <= $count; $i++) {
              $formattedNumber = str_pad($i, 2, '0', STR_PAD_LEFT);

              $product_categories[$category][] = [
                'image' => [
                  'jpg' => [
                    '1x' => "prod-$formattedNumber.jpg",
                    '2x' => "prod-$formattedNumber@2x.jpg",
                    '3x' => "prod-$formattedNumber@3x.jpg",
                    'lbox' => "prod-$formattedNumber@lbox.jpg",
                  ],
                  'webp' => [
                    '1x' => "prod-$formattedNumber.webp",
                    '2x' => "prod-$formattedNumber@2x.webp",
                    '3x' => "prod-$formattedNumber@3x.webp",
                    'lbox' => "prod-$formattedNumber@lbox.webp",
                  ],
                  'avif' => [
                    '1x' => "prod-$formattedNumber.avif",
                    '2x' => "prod-$formattedNumber@2x.avif",
                    '3x' => "prod-$formattedNumber@3x.avif",
                    'lbox' => "prod-$formattedNumber@lbox.avif",
                  ],
                ],
                'alt' => ucwords(str_replace("_", " ", $category)) . ' ' . $formattedNumber,
              ];
            }
          }
          ?>

          <div id="heavy-duty-content" class="tab-pane <?php echo $current_tab === 'heavy-duty' || $current_tab === null ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="heavy-duty-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['heavy_duty'] as $product) {
              ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/heavy-duty/avif/<?php echo $product['image']['avif']['1x']; ?> 1x, assets/uploads/products/heavy-duty/avif/<?php echo $product['image']['avif']['2x']; ?> 2x, assets/uploads/products/heavy-duty/avif/<?php echo $product['image']['avif']['3x']; ?> 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/heavy-duty/webp/<?php echo $product['image']['webp']['1x']; ?> 1x, assets/uploads/products/heavy-duty/webp/<?php echo $product['image']['webp']['2x']; ?> 2x, assets/uploads/products/heavy-duty/webp/<?php echo $product['image']['webp']['3x']; ?> 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/heavy-duty/jpg/<?php echo $product['image']['jpg']['1x']; ?> 1x, assets/uploads/products/heavy-duty/jpg/<?php echo $product['image']['jpg']['2x']; ?> 2x, assets/uploads/products/heavy-duty/jpg/<?php echo $product['image']['jpg']['3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/heavy-duty/jpg/<?php echo $product['image']['jpg']['lbox']; ?>" class="product-lightbox stretched-link" data-gallery="heavy-duty">
                        <i class="bi bi-zoom-in" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div id="special-purpose-content" class="tab-pane <?php echo $current_tab === 'special-purpose' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="special-purpose-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['special_purpose'] as $product) {
              ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/special-purpose/avif/<?php echo $product['image']['avif']['1x']; ?> 1x, assets/uploads/products/special-purpose/avif/<?php echo $product['image']['avif']['2x']; ?> 2x, assets/uploads/products/special-purpose/avif/<?php echo $product['image']['avif']['3x']; ?> 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/special-purpose/webp/<?php echo $product['image']['webp']['1x']; ?> 1x, assets/uploads/products/special-purpose/webp/<?php echo $product['image']['webp']['2x']; ?> 2x, assets/uploads/products/special-purpose/webp/<?php echo $product['image']['webp']['3x']; ?> 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/special-purpose/jpg/<?php echo $product['image']['jpg']['1x']; ?> 1x, assets/uploads/products/special-purpose/jpg/<?php echo $product['image']['jpg']['2x']; ?> 2x, assets/uploads/products/special-purpose/jpg/<?php echo $product['image']['jpg']['3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/special-purpose/jpg/<?php echo $product['image']['jpg']['lbox']; ?>" class="product-lightbox stretched-link" data-gallery="special-purpose">
                        <i class="bi bi-zoom-in" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div id="ambulance-content" class="tab-pane <?php echo $current_tab === 'ambulance' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="ambulance-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['ambulance'] as $product) {
              ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/ambulance/avif/<?php echo $product['image']['avif']['1x']; ?> 1x, assets/uploads/products/ambulance/avif/<?php echo $product['image']['avif']['2x']; ?> 2x, assets/uploads/products/ambulance/avif/<?php echo $product['image']['avif']['3x']; ?> 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/ambulance/webp/<?php echo $product['image']['webp']['1x']; ?> 1x, assets/uploads/products/ambulance/webp/<?php echo $product['image']['webp']['2x']; ?> 2x, assets/uploads/products/ambulance/webp/<?php echo $product['image']['webp']['3x']; ?> 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/ambulance/jpg/<?php echo $product['image']['jpg']['1x']; ?> 1x, assets/uploads/products/ambulance/jpg/<?php echo $product['image']['jpg']['2x']; ?> 2x, assets/uploads/products/ambulance/jpg/<?php echo $product['image']['jpg']['3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/ambulance/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/ambulance/jpg/<?php echo $product['image']['jpg']['lbox']; ?>" class="product-lightbox stretched-link" data-gallery="ambulance">
                        <i class="bi bi-zoom-in" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div id="bus-content" class="tab-pane <?php echo $current_tab === 'bus' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="bus-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['bus'] as $product) {
              ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/bus/avif/<?php echo $product['image']['avif']['1x']; ?> 1x, assets/uploads/products/bus/avif/<?php echo $product['image']['avif']['2x']; ?> 2x, assets/uploads/products/bus/avif/<?php echo $product['image']['avif']['3x']; ?> 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/bus/webp/<?php echo $product['image']['webp']['1x']; ?> 1x, assets/uploads/products/bus/webp/<?php echo $product['image']['webp']['2x']; ?> 2x, assets/uploads/products/bus/webp/<?php echo $product['image']['webp']['3x']; ?> 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/bus/jpg/<?php echo $product['image']['jpg']['1x']; ?> 1x, assets/uploads/products/bus/jpg/<?php echo $product['image']['jpg']['2x']; ?> 2x, assets/uploads/products/bus/jpg/<?php echo $product['image']['jpg']['3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/bus/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/bus/jpg/<?php echo $product['image']['jpg']['lbox']; ?>" class="product-lightbox stretched-link" data-gallery="bus">
                        <i class="bi bi-zoom-in" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div id="heavy-equipment-content" class="tab-pane <?php echo $current_tab === 'heavy-equipment' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="heavy-equipment-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['heavy_equipment'] as $product) {
              ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/heavy-equipment/avif/<?php echo $product['image']['avif']['1x']; ?> 1x, assets/uploads/products/heavy-equipment/avif/<?php echo $product['image']['avif']['2x']; ?> 2x, assets/uploads/products/heavy-equipment/avif/<?php echo $product['image']['avif']['3x']; ?> 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/heavy-equipment/webp/<?php echo $product['image']['webp']['1x']; ?> 1x, assets/uploads/products/heavy-equipment/webp/<?php echo $product['image']['webp']['2x']; ?> 2x, assets/uploads/products/heavy-equipment/webp/<?php echo $product['image']['webp']['3x']; ?> 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/heavy-equipment/jpg/<?php echo $product['image']['jpg']['1x']; ?> 1x, assets/uploads/products/heavy-equipment/jpg/<?php echo $product['image']['jpg']['2x']; ?> 2x, assets/uploads/products/heavy-equipment/jpg/<?php echo $product['image']['jpg']['3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/heavy-equipment/jpg/<?php echo $product['image']['jpg']['lbox']; ?>" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
                        <i class="bi bi-zoom-in" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>

        <div class="row row-cols-auto justify-content-center">
          <div class="col">
            <a href="products.php" class="btn btn-primary">View all products</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-customers bg-dark">
  <div class="container">
    <h2 class="mb-6">Our customers</h2>
    <div class="swiper customers-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/dlh.avif 1x, assets/uploads/customers/avif/dlh@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/dlh.webp 1x, assets/uploads/customers/webp/dlh@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/dlh.png 1x, assets/uploads/customers/png/dlh@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/dlh.png" class="lazyload" alt="Dinas Lingkungan Hidup" title="Dinas Lingkungan Hidup">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/pupr.avif 1x, assets/uploads/customers/avif/pupr@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/pupr.webp 1x, assets/uploads/customers/webp/pupr@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/pupr.png 1x, assets/uploads/customers/png/pupr@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/pupr.png" class="lazyload" alt="Kementerian PUPR" title="Kementerian PUPR">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/imigrasi.avif 1x, assets/uploads/customers/avif/imigrasi@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/imigrasi.webp 1x, assets/uploads/customers/webp/imigrasi@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/imigrasi.png 1x, assets/uploads/customers/png/imigrasi@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/imigrasi.png" class="lazyload" alt="Rumah Detensi Imigrasi" title="Rumah Detensi Imigrasi">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/humbang_hasundutan.avif 1x, assets/uploads/customers/avif/humbang_hasundutan@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/humbang_hasundutan.webp 1x, assets/uploads/customers/webp/humbang_hasundutan@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/humbang_hasundutan.png 1x, assets/uploads/customers/png/humbang_hasundutan@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/humbang_hasundutan.png" class="lazyload" alt="Dinas Perhubungan Kabupaten Humbang Hasundutan" title="Dinas Perhubungan Kabupaten Humbang Hasundutan">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/batubara.avif 1x, assets/uploads/customers/avif/batubara@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/batubara.webp 1x, assets/uploads/customers/webp/batubara@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/batubara.png 1x, assets/uploads/customers/png/batubara@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/batubara.png" class="lazyload" alt="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara" title="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/kemenhub.avif 1x, assets/uploads/customers/avif/kemenhub@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/kemenhub.webp 1x, assets/uploads/customers/webp/kemenhub@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/kemenhub.png 1x, assets/uploads/customers/png/kemenhub@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/kemenhub.png" class="lazyload" alt="Kementerian Perhubungan" title="Kementerian Perhubungan">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/jember.avif 1x, assets/uploads/customers/avif/jember@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/jember.webp 1x, assets/uploads/customers/webp/jember@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/jember.png 1x, assets/uploads/customers/png/jember@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/jember.png" class="lazyload" alt="DLH Kabupaten Jember" title="DLH Kabupaten Jember">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/tapanuli_utara.avif 1x, assets/uploads/customers/avif/tapanuli_utara@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/tapanuli_utara.webp 1x, assets/uploads/customers/webp/tapanuli_utara@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/tapanuli_utara.png 1x, assets/uploads/customers/png/tapanuli_utara@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/tapanuli_utara.png" class="lazyload" alt="DLH Kabupaten Tapanuli Utara" title="DLH Kabupaten Tapanuli Utara">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/batu.avif 1x, assets/uploads/customers/avif/batu@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/batu.webp 1x, assets/uploads/customers/webp/batu@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/batu.png 1x, assets/uploads/customers/png/batu@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/batu.png" class="lazyload" alt="DLH Kota Batu" title="DLH Kota Batu">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/malang.avif 1x, assets/uploads/customers/avif/malang@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/malang.webp 1x, assets/uploads/customers/webp/malang@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/malang.png 1x, assets/uploads/customers/png/malang@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/malang.png" class="lazyload" alt="DLH Kota Malang" title="DLH Kota Malang">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/tangerang.avif 1x, assets/uploads/customers/avif/tangerang@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/tangerang.webp 1x, assets/uploads/customers/webp/tangerang@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/tangerang.png 1x, assets/uploads/customers/png/tangerang@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/tangerang.png" class="lazyload" alt="DLH Kota Tangerang" title="DLH Kota Tangerang">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/bulukumba.avif 1x, assets/uploads/customers/avif/bulukumba@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/bulukumba.webp 1x, assets/uploads/customers/webp/bulukumba@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/bulukumba.png 1x, assets/uploads/customers/png/bulukumba@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/bulukumba.png" class="lazyload" alt="DLHK Kabupaten Bulukumba" title="DLHK Kabupaten Bulukumba">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/sumedang.avif 1x, assets/uploads/customers/avif/sumedang@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/sumedang.webp 1x, assets/uploads/customers/webp/sumedang@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/sumedang.png 1x, assets/uploads/customers/png/sumedang@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/sumedang.png" class="lazyload" alt="DLHK Kabupaten Sumedang" title="DLHK Kabupaten Sumedang">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/depok.avif 1x, assets/uploads/customers/avif/depok@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/depok.webp 1x, assets/uploads/customers/webp/depok@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/depok.png 1x, assets/uploads/customers/png/depok@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/depok.png" class="lazyload" alt="DLHK Kota Depok" title="DLHK Kota Depok">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source
              data-srcset="assets/uploads/customers/avif/tegal.avif 1x, assets/uploads/customers/avif/tegal@2x.avif 2x"
              type="image/avif" />
            <source
              data-srcset="assets/uploads/customers/webp/tegal.webp 1x, assets/uploads/customers/webp/tegal@2x.webp 2x"
              type="image/webp" />
            <source
              data-srcset="assets/uploads/customers/png/tegal.png 1x, assets/uploads/customers/png/tegal@2x.png 2x"
              type="image/png" />
            <img src="assets/img/placehold.png" data-src="assets/uploads/customers/png/tegal.png" class="lazyload" alt="DPUPR Kota Tegal" title="DPUPR Kota Tegal">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-instagram">
  <div class="container">
    <div class="text-center mb-6">
      <p class="h4 mb-4">@senangjayagroup</p>
      <p class="mb-0">Follow us for the latest projects and updates!</p>
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
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

<?php
$scripts = array('swiper-bundle.min.js');
require_once('includes/footer.php');
?>
