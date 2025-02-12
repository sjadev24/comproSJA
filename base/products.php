<?php
$page_title = 'Our Products | Premium Karoseri Solutions for Every Vehicle Type';
$meta_description = 'Explore our range of premium karoseri solutions. From heavy-duty vehicle bodies to custom designs, find the perfect product for your needs at Karoseri Senang Jaya Abadi.
';
require_once('includes/header.php');
?>

<section class="section section-products">
  <div class="container">
    <h2 class="h3 mb-5 mb-lg-6">Our Products</h2>

    <div class="row">
      <?php $current_tab = isset($_GET['tab']) ? $_GET['tab'] : null; ?>

      <div class="col-lg-2 pb-2 pb-lg-0 mb-4 mb-lg-0">
        <div class="d-flex d-lg-block nav-wrapper">
          <ul class="nav nav-underline flex-row flex-lg-column flex-nowrap flex-lg-wrap gap-4 gap-lg-2 mx-auto mx-lg-0" role="tablist">
            <li class="nav-item" role="presentation">
              <button type="button" id="heavy-duty-tab" class="nav-link <?php echo $current_tab === 'heavy-duty' || $current_tab === null ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#heavy-duty-content" role="tab" aria-controls="heavy-duty-content" aria-selected="true">Heavy Duty</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" id="special-purpose-tab" class="nav-link <?php echo $current_tab === 'special-purpose' ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#special-purpose-content" role="tab" aria-controls="special-purpose-content" aria-selected="false">Special purpose vehicle</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" id="ambulance-tab" class="nav-link <?php echo $current_tab === 'ambulance' ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#ambulance-content" role="tab" aria-controls="ambulance-content" aria-selected="false">Ambulance</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" id="bus-tab" class="nav-link <?php echo $current_tab === 'bus' ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#bus-content" role="tab" aria-controls="bus-content" aria-selected="false">Bus</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" id="heavy-equipment-tab" class="nav-link <?php echo $current_tab === 'heavy-equipment' ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#heavy-equipment-content" role="tab" aria-controls="heavy-equipment-content" aria-selected="false">Heavy equipment</button>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-10">
        <div class="tab-content">
          <?php
          $product_categories = [
            'heavy_duty' => [],
            'special_purpose' => [],
            'ambulance' => [],
            'bus' => [],
            'heavy_equipment' => [],
          ];

          $products_by_category = [
            'heavy_duty' => [
              'truck-lowbed',
              'mobil-towing-with-crane-hyva',
              'mini-self-loader',
              'tangki-air',
              'arm-roll-with-kontainer',
              'dump-truck-aero',
              'dump-truck-standar',
              'arm-roll-with-kontainer-hijau',
              'mini-dump-hyva',
              'sky-lift-traga',
              'dump-truck-stainless',
              'tangki-air-biru',
              'mobil-towing',
              'mini-roller',
              'tangki-vacuum-10000-liter'
            ],
            'special_purpose' => [
              'mobil-layanan-dapur-umum-bencana',
              'mobil-dapur-umum',
              'mobil-dapur-badan-pangan-nasional',
              'mobil-videotron',
              'mobil-konseling',
              'mobil-pelayanan-e-ktp',
              'mobil-imigration',
              'mobil-tahanan',
              'mobil-tahanan-imigrasi',
              'mobil-angkutan-personil',
              'mobil-angkutan-personil-dalmas',
              'mobil-patroli',
              'mobil-promosi-kesehatan',
              'compactor-12m3',
              'compactor',
              'compactor-6m3',
              'vacuum-jetting-s777a',
              'vacuum-jetting',
              'arm-roll-hyva-underground',
              'unit-crane-hyva-12t',
              'derek-with-crane-hyva',
              'truck-sky-lift-23m',
              'mobil-toilet',
              'mobil-toilet-portable',
              'derek-double-cabin',
              'angkutan-personil-dalmas'
            ],
            'ambulance' => ['ambulance-emergency', 'mobil-pelayanan-kesehatan'],
            'bus' => ['medium-bus', 'bus-pelayanan', 'mobil-training-unit'],
            'heavy_equipment' => [
              'excavator-develon-dx220a-2',
              'sd16-crawler-dozer',
              'rc904-wheeled-tractor',
              'backhoe-loader-jcb-3cx',
              'tractor-cat-d6-gc',
              'hitachi-zx210f-5g',
              'wheel-loader-hitachi-zw140',
              'mini-excavator-nsl-hd55',
              'develon-sd200-wheel-loaders',
              'hitachi-zx65usb-5a',
              'motor-grader-sg14-b5',
            ]
          ];

          foreach ($products_by_category as $category => $items) {
            foreach ($items as $item) {
              $product_categories[$category][] = [
                'image' => [
                  'jpg' => [
                    '1x' => "$item.jpg",
                    '2x' => "$item@2x.jpg",
                    '3x' => "$item@3x.jpg",
                    'lbox' => "$item@lbox.jpg",
                  ],
                  'webp' => [
                    '1x' => "$item.webp",
                    '2x' => "$item@2x.webp",
                    '3x' => "$item@3x.webp",
                  ],
                  'avif' => [
                    '1x' => "$item.avif",
                    '2x' => "$item@2x.avif",
                    '3x' => "$item@3x.avif",
                  ],
                ],
                'alt' => ucwords(str_replace("-", " ", $item)),
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
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/heavy-duty/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
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
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/special-purpose/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
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
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/ambulance/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
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
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/bus/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
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
                      <img src="assets/images/placehold.png" data-src="assets/uploads/products/heavy-equipment/jpg/<?php echo $product['image']['jpg']['1x']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
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
      </div>
    </div>
  </div>
</section>

<?php require_once('includes/footer.php'); ?>
