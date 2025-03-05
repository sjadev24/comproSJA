<?php
$page_title = 'Custom Karoseri Solutions for Trucks, Buses, & Vehicles | Your Trusted Vehicle Bodywork Experts';
$meta_description = 'Discover top-quality custom karoseri solutions for trucks, buses, and vehicles. Durable, tailored designs to meet every transportation need. Learn more today!';
require_once 'includes/header.php';

$home = $lang_text['home'];
$section_hero = $home['section_hero'];
$section_homeabout = $home['section_homeabout'];
$section_partners = $home['section_partners'];
$section_specialize = $home['section_specialize'];
$section_products = $lang_text['products']['section'];
$section_customers = $home['section_customers'];
$section_instagram = $home['section_instagram'];
?>

<section class="section section-hero d-flex py-0">
  <div class="swiper hero-swiper">
    <div class="swiper-wrapper">
      <?php foreach ($section_hero['slides'] as $index => $slide) { ?>
        <div class="d-flex align-items-center swiper-slide active">
          <div class="hero-slide-img">
            <picture>
              <source srcset="assets/uploads/hero/avif/<?php echo $slide['image']['slug']; ?>.avif" type="image/avif" />
              <source srcset="assets/uploads/hero/webp/<?php echo $slide['image']['slug']; ?>.webp" type="image/webp" />
              <img src="assets/uploads/hero/jpg/<?php echo $slide['image']['slug']; ?>.jpg" alt="hero 01">
            </picture>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-5">
                <div class="hero-slide-content">
                  <h2 class="h1 mb-3" data-swiper-parallax="<?php echo $slide['data_swiper_parallax']['title']; ?>"><?php echo $slide['title']; ?></h2>
                  <p class="mb-5" data-swiper-parallax="<?php echo $slide['data_swiper_parallax']['description']; ?>"><?php echo $slide['description']; ?></p>
                  <div data-swiper-parallax="<?php echo $slide['data_swiper_parallax']['button']; ?>"><a href="<?php echo $slide['button']['link']; ?>" class="btn btn-primary"><?php echo $slide['button']['text']; ?></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="section section-homeabout pb-0">
  <div class="container">
    <div class="row g-4 align-items-xl-center gy-5">
      <div class="col-lg-7">
        <div class="row pe-lg-4 pe-xl-5 gy-4">
          <div class="col-sm-6">
            <picture>
              <source data-srcset="assets/images/about/avif/office-01.avif" type="image/avif" />
              <source data-srcset="assets/images/about/webp/office-01.webp" type="image/webp" />
              <img src="assets/images/placehold.png" data-src="assets/images/about/jpg/office-01.jpg" class="rounded lazyload" alt="office 01">
            </picture>
          </div>

          <div class="col-sm-6">
            <div class="row mb-4">
              <div class="col-sm-6 mb-4 mb-sm-0">
                <div class="p-3 bg-dark rounded text-center text-white">
                  <span class="h2 text-white"><?php echo $section_homeabout['stats'][0]['number']; ?></span>
                  <p class="mb-0"><?php echo $section_homeabout['stats'][0]['text']; ?></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 bg-primary rounded text-center text-white">
                  <span class="h2 text-white"><?php echo $section_homeabout['stats'][1]['number']; ?></span>
                  <p class="mb-0"><?php echo $section_homeabout['stats'][1]['text']; ?></p>
                </div>
              </div>
            </div>
            <picture>
              <source data-srcset="assets/images/about/avif/office-02.avif" type="image/avif" />
              <source data-srcset="assets/images/about/webp/office-02.webp" type="image/webp" />
              <img src="assets/images/placehold.png" data-src="assets/images/about/jpg/office-02.jpg" class="rounded lazyload" alt="office 01">
            </picture>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <span class="d-inline-block bg-light text-gray-700 small rounded-3 px-3 py-2 mb-4">🤝 <?php echo $section_homeabout['subtitle']; ?></span>
        <h2 class="mb-4"><?php echo $section_homeabout['title']; ?></h2>
        <p class="mb-5"><?php echo $section_homeabout['description']; ?></p>

        <p><strong><?php echo $section_homeabout['why_choose_us']['title']; ?></strong></p>
        <ul class="list-group list-group-borderless mb-4">
          <?php foreach ($section_homeabout['why_choose_us']['features'] as $feature) { ?>
            <li class="list-group-item d-flex border-0">
              <i class="bi bi-patch-check-fill text-primary me-2" aria-hidden="true"></i>
              <?php echo $feature; ?>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section-partners">
  <div class="container">
    <h2 class="h5 mb-5 text-center text-gray-600 text-uppercase"><?php echo $section_partners['title']; ?></h2>
    <div class="swiper partners-swiper">
      <div class="swiper-wrapper">
        <?php
        $partners = getPartners();
        foreach ($partners as $partner) { ?>
          <div class="swiper-slide">
            <picture>
              <source data-srcset="assets/uploads/partners/avif/<?php echo $partner['slug']; ?>.avif" type="image/avif" />
              <img src="assets/images/placehold.png" data-src="assets/uploads/partners/png/<?php echo $partner['slug']; ?>.png" class="lazyload" alt="<?php echo $partner['title']; ?>" title="<?php echo $partner['title']; ?>">
            </picture>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<section class="section section-specialize bg-light">
  <div class="container">
    <h2 class="mb-6 text-center"><?php echo $section_specialize['title']; ?></h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4">
      <?php
      foreach ($section_specialize['categories'] as $category) {
      ?>
        <div class="col">
          <div class="text-center my-2">
            <div class="service-icon mb-4">
              <img src="assets/images/specialized/<?php echo $category['icon']; ?>" alt="">
            </div>
            <h3 class="h5 mb-3"><?php echo $category['title']; ?></h3>
            <p class="mb-0"><?php echo $category['description']; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="section section-products">
  <div class="container">
    <h2 class="mb-6 text-center"><?php echo $section_products['title']; ?></h2>
    <div class="row">
      <div class="col">
        <div class="d-flex nav-wrapper mb-5">
          <ul class="nav nav-underline flex-nowrap flex-lg-wrap gap-4 mx-auto" role="tablist">
            <?php foreach ($section_products['filters'] as $index => $filter) { ?>
              <li class="nav-item" role="presentation">
                <button type="button" id="<?php echo $filter['id'] . "-tab"; ?>" class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="<?php echo "#" . $filter['id'] . "-content"; ?>" role="tab" aria-controls="<?php echo $filter['id'] . "-content"; ?>" aria-selected="false"><?php echo $filter['title']; ?></button>
              </li>
            <?php } ?>
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

          $products_by_category = getAllProducts();

          foreach ($products_by_category as $category => $items) {
            foreach ($items as $item) {
              $product_categories[$category][] = [
                'image' => [
                  'slug' => "$item",
                  'alt' => ucwords(str_replace("-", " ", $item))
                ]
              ];
            }
          }
          ?>

          <div id="heavy-duty-content" class="tab-pane active" role="tabpanel" aria-labelledby="heavy-duty-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach (array_slice($product_categories['heavy_duty'], 0, 8) as $product) {
                $image = $product['image']; ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/heavy-duty/avif/<?php echo $image['slug']; ?>.avif 1x, assets/uploads/products/heavy-duty/avif/<?php echo $image['slug']; ?>@2x.avif 2x, assets/uploads/products/heavy-duty/avif/<?php echo $image['slug']; ?>@3x.avif 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/heavy-duty/webp/<?php echo $image['slug']; ?>.webp 1x, assets/uploads/products/heavy-duty/webp/<?php echo $image['slug']; ?>@2x.webp 2x, assets/uploads/products/heavy-duty/webp/<?php echo $image['slug']; ?>@3x.webp 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/heavy-duty/jpg/<?php echo $image['slug']; ?>.jpg 1x, assets/uploads/products/heavy-duty/jpg/<?php echo $image['slug']; ?>@2x.jpg 2x, assets/uploads/products/heavy-duty/jpg/<?php echo $image['slug']; ?>@3x.jpg 3x"
                        type="image/jpeg" />
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/heavy-duty/jpg/<?php echo $image['slug']; ?>.jpg" class="card-img lazyload" alt="<?php echo $image['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/heavy-duty/jpg/<?php echo $image['slug']; ?>@lbox.jpg" class="product-lightbox stretched-link" data-gallery="heavy-duty">
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
          <div id="special-purpose-content" class="tab-pane" role="tabpanel" aria-labelledby="special-purpose-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach (array_slice($product_categories['special_purpose'], 0, 8) as $product) {
                $image = $product['image']; ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/special-purpose/avif/<?php echo $image['slug']; ?>.avif 1x, assets/uploads/products/special-purpose/avif/<?php echo $image['slug']; ?>@2x.avif 2x, assets/uploads/products/special-purpose/avif/<?php echo $image['slug']; ?>@3x.avif 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/special-purpose/webp/<?php echo $image['slug']; ?>.webp 1x, assets/uploads/products/special-purpose/webp/<?php echo $image['slug']; ?>@2x.webp 2x, assets/uploads/products/special-purpose/webp/<?php echo $image['slug']; ?>@3x.webp 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/special-purpose/jpg/<?php echo $image['slug']; ?>.jpg 1x, assets/uploads/products/special-purpose/jpg/<?php echo $image['slug']; ?>@2x.jpg 2x, assets/uploads/products/special-purpose/jpg/<?php echo $image['slug']; ?>@3x.jpg 3x"
                        type="image/jpeg" />
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/special-purpose/jpg/<?php echo $image['slug']; ?>.jpg" class="card-img lazyload" alt="<?php echo $image['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/special-purpose/jpg/<?php echo $image['slug']; ?>@lbox.jpg" class="product-lightbox stretched-link" data-gallery="special-purpose">
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
          <div id="ambulance-content" class="tab-pane" role="tabpanel" aria-labelledby="ambulance-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['ambulance'] as $product) {
                $image = $product['image']; ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/ambulance/avif/<?php echo $image['slug']; ?>.avif 1x, assets/uploads/products/ambulance/avif/<?php echo $image['slug']; ?>@2x.avif 2x, assets/uploads/products/ambulance/avif/<?php echo $image['slug']; ?>@3x.avif 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/ambulance/webp/<?php echo $image['slug']; ?>.webp 1x, assets/uploads/products/ambulance/webp/<?php echo $image['slug']; ?>@2x.webp 2x, assets/uploads/products/ambulance/webp/<?php echo $image['slug']; ?>@3x.webp 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/ambulance/jpg/<?php echo $image['slug']; ?>.jpg 1x, assets/uploads/products/ambulance/jpg/<?php echo $image['slug']; ?>@2x.jpg 2x, assets/uploads/products/ambulance/jpg/<?php echo $image['slug']; ?>@3x.jpg 3x"
                        type="image/jpeg" />
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/ambulance/jpg/<?php echo $image['slug']; ?>.jpg" class="card-img lazyload" alt="<?php echo $image['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/ambulance/jpg/<?php echo $image['slug']; ?>@lbox.jpg" class="product-lightbox stretched-link" data-gallery="ambulance">
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
          <div id="bus-content" class="tab-pane" role="tabpanel" aria-labelledby="bus-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['bus'] as $product) {
                $image = $product['image']; ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/bus/avif/<?php echo $image['slug']; ?>.avif 1x, assets/uploads/products/bus/avif/<?php echo $image['slug']; ?>@2x.avif 2x, assets/uploads/products/bus/avif/<?php echo $image['slug']; ?>@3x.avif 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/bus/webp/<?php echo $image['slug']; ?>.webp 1x, assets/uploads/products/bus/webp/<?php echo $image['slug']; ?>@2x.webp 2x, assets/uploads/products/bus/webp/<?php echo $image['slug']; ?>@3x.webp 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/bus/jpg/<?php echo $image['slug']; ?>.jpg 1x, assets/uploads/products/bus/jpg/<?php echo $image['slug']; ?>@2x.jpg 2x, assets/uploads/products/bus/jpg/<?php echo $image['slug']; ?>@3x.jpg 3x"
                        type="image/jpeg" />
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/bus/jpg/<?php echo $image['slug']; ?>.jpg" class="card-img lazyload" alt="<?php echo $image['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/bus/jpg/<?php echo $image['slug']; ?>@lbox.jpg" class="product-lightbox stretched-link" data-gallery="bus">
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
          <div id="heavy-equipment-content" class="tab-pane" role="tabpanel" aria-labelledby="heavy-equipment-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach (array_slice($product_categories['heavy_equipment'], 0, 8) as $product) {
                $image = $product['image']; ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/heavy-equipment/avif/<?php echo $image['slug']; ?>.avif 1x, assets/uploads/products/heavy-equipment/avif/<?php echo $image['slug']; ?>@2x.avif 2x, assets/uploads/products/heavy-equipment/avif/<?php echo $image['slug']; ?>@3x.avif 3x"
                        type="image/avif" />
                      <source
                        data-srcset="assets/uploads/products/heavy-equipment/webp/<?php echo $image['slug']; ?>.webp 1x, assets/uploads/products/heavy-equipment/webp/<?php echo $image['slug']; ?>@2x.webp 2x, assets/uploads/products/heavy-equipment/webp/<?php echo $image['slug']; ?>@3x.webp 3x"
                        type="image/webp" />
                      <source
                        data-srcset="assets/uploads/products/heavy-equipment/jpg/<?php echo $image['slug']; ?>.jpg 1x, assets/uploads/products/heavy-equipment/jpg/<?php echo $image['slug']; ?>@2x.jpg 2x, assets/uploads/products/heavy-equipment/jpg/<?php echo $image['slug']; ?>@3x.jpg 3x"
                        type="image/jpeg" />
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/heavy-equipment/jpg/<?php echo $image['slug']; ?>.jpg" class="card-img lazyload" alt="<?php echo $image['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/heavy-equipment/jpg/<?php echo $image['slug']; ?>@lbox.jpg" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
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
            <a href="products.php" class="btn btn-primary"><?php echo $section_products['button_text']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-customers bg-dark">
  <div class="container">
    <h2 class="mb-6"><?php echo $section_customers['title']; ?></h2>
    <div class="swiper customers-swiper">
      <div class="swiper-wrapper">
        <?php
        $customers = getCustomers();
        foreach ($customers as $customer) { ?>
          <div class="swiper-slide">
            <picture>
              <source data-srcset="assets/uploads/customers/avif/<?php echo $customer['slug']; ?>.avif 1x, assets/uploads/customers/avif/<?php echo $customer['slug']; ?>@2x.avif 2x" type="image/avif" />
              <source data-srcset="assets/uploads/customers/webp/<?php echo $customer['slug']; ?>.webp 1x, assets/uploads/customers/webp/<?php echo $customer['slug']; ?>@2x.webp 2x" type="image/webp" />
              <source data-srcset="assets/uploads/customers/png/<?php echo $customer['slug']; ?>.png 1x, assets/uploads/customers/png/<?php echo $customer['slug']; ?>@2x.png 2x" type="image/png" />
              <img src="assets/images/placehold.png" data-src="assets/uploads/customers/png/<?php echo $customer['slug']; ?>.png" class="lazyload" alt="<?php echo $customer['title']; ?>" title="<?php echo $customer['title']; ?>">
            </picture>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<section class="section section-instagram">
  <div class="container">
    <div class="text-center mb-6">
      <p class="h4 mb-4"><?php echo $section_instagram['title']; ?></p>
      <p class="mb-0"><?php echo $section_instagram['description']; ?></p>
    </div>
    <div class="swiper instafeed-swiper">
      <div class="swiper-wrapper">
        <?php
        $insta_posts = getInstagramPosts();
        foreach ($insta_posts as $insta_post) { ?>
          <div class="swiper-slide">
            <div class="card card-element-hover">
              <img src="assets/images/insta-feed/<?php echo $insta_post['slug']; ?>.jpg" class="card-img" alt="<?php echo $insta_post['alt']; ?>">
              <div class="card-img-overlay">
                <a href="https://www.instagram.com/senangjayagroup" class="stretched-link" target="_blank">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

<?php
$scripts = array('swiper-bundle.min.js');
require_once 'includes/footer.php';
?>
