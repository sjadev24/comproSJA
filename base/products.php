<?php
$page_title = 'Our Products | Premium Karoseri Solutions for Every Vehicle Type';
$meta_description = 'Explore our range of premium karoseri solutions. From heavy-duty vehicle bodies to custom designs, find the perfect product for your needs at Karoseri Senang Jaya Abadi.
';
require_once('includes/header.php');
?>

<section class="section section-products">
  <div class="container">
    <h2 class="h3 mb-7">Our Products</h2>

    <div class="row">
      <?php $current_tab = isset($_GET['tab']) ? $_GET['tab'] : null; ?>

      <div class="col-lg-2 pb-2 pb-lg-0 mb-4 mb-lg-0">
        <ul class="nav nav-underline flex-row flex-lg-column justify-content-center justify-content-lg-start gap-4 gap-lg-2" role="tablist">
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

      <div class="col-12 col-lg-10">
        <?php
        $product_categories = [
          'heavy_duty' => [],
          'special_purpose' => [],
          'ambulance' => [],
          'bus' => [],
          'heavy_equipment' => [],
        ];

        $product_category_counts = [
          'heavy_duty' => 15,
          'special_purpose' => 26,
          'ambulance' => 2,
          'bus' => 3,
          'heavy_equipment' => 11
        ];

        foreach ($product_category_counts as $category => $count) {
          for ($i = 1; $i <= $count; $i++) {
            $formattedNumber = str_pad($i, 2, '0', STR_PAD_LEFT);

            $product_categories[$category][] = [
              'image' => "prod-$formattedNumber.jpg",
              'image_2x' => "prod-$formattedNumber@2x.jpg",
              'image_3x' => "prod-$formattedNumber@3x.jpg",
              'image_lbox' => "prod-$formattedNumber@lbox.jpg",
              'alt' => "Product $formattedNumber",
            ];
          }
        }
        ?>

        <div class="tab-content">
          <div id="heavy-duty-content" class="tab-pane <?php echo $current_tab === 'heavy-duty' || $current_tab === null ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="heavy-duty-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php
              foreach ($product_categories['heavy_duty'] as $product) {
              ?>
                <div class="col">
                  <div class="card card-element-hover">
                    <picture>
                      <source
                        data-srcset="assets/uploads/products/heavy-duty/<?php echo $product['image']; ?> 1x, assets/uploads/products/heavy-duty/<?php echo $product['image_2x']; ?> 2x, assets/uploads/products/heavy-duty/<?php echo $product['image_3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-duty/<?php echo $product['image']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/heavy-duty/<?php echo $product['image_lbox']; ?>" class="product-lightbox stretched-link" data-gallery="heavy-duty">
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
                        data-srcset="assets/uploads/products/special-purpose/<?php echo $product['image']; ?> 1x, assets/uploads/products/special-purpose/<?php echo $product['image_2x']; ?> 2x, assets/uploads/products/special-purpose/<?php echo $product['image_3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/special-purpose/<?php echo $product['image']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/special-purpose/<?php echo $product['image_lbox']; ?>" class="product-lightbox stretched-link" data-gallery="special-purpose">
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
                        data-srcset="assets/uploads/products/ambulance/<?php echo $product['image']; ?> 1x, assets/uploads/products/ambulance/<?php echo $product['image_2x']; ?> 2x, assets/uploads/products/ambulance/<?php echo $product['image_3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/ambulance/<?php echo $product['image']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/ambulance/<?php echo $product['image_lbox']; ?>" class="product-lightbox stretched-link" data-gallery="ambulance">
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
                        data-srcset="assets/uploads/products/bus/<?php echo $product['image']; ?> 1x, assets/uploads/products/bus/<?php echo $product['image_2x']; ?> 2x, assets/uploads/products/bus/<?php echo $product['image_3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/bus/<?php echo $product['image']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/bus/<?php echo $product['image_lbox']; ?>" class="product-lightbox stretched-link" data-gallery="bus">
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
                        data-srcset="assets/uploads/products/heavy-equipment/<?php echo $product['image']; ?> 1x, assets/uploads/products/heavy-equipment/<?php echo $product['image_2x']; ?> 2x, assets/uploads/products/heavy-equipment/<?php echo $product['image_3x']; ?> 3x"
                        type="image/jpeg" />
                      <img src="assets/img/placehold.png" data-src="assets/uploads/products/heavy-equipment/<?php echo $product['image']; ?>" class="card-img lazyload" alt="<?php echo $product['alt']; ?>">
                    </picture>
                    <div class="card-img-overlay">
                      <a href="assets/uploads/products/heavy-equipment/<?php echo $product['image_lbox']; ?>" class="product-lightbox stretched-link" data-gallery="heavy-equipment">
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
