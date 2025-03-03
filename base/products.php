<?php
$page_title = 'Our Products | Premium Karoseri Solutions for Every Vehicle Type';
$meta_description = 'Explore our range of premium karoseri solutions. From heavy-duty vehicle bodies to custom designs, find the perfect product for your needs at Karoseri Senang Jaya Abadi.
';
require_once 'includes/header.php';

$section = $lang_text['products']['section'];
$filters = $section['filters'];
?>

<section class="section section-products">
  <div class="container">
    <h2 class="h3 mb-5 mb-lg-6"><?php echo $section['title']; ?></h2>

    <div class="row">
      <?php $current_tab = isset($_GET['tab']) ? $_GET['tab'] : null; ?>

      <div class="col-lg-2 pb-2 pb-lg-0 mb-4 mb-lg-0">
        <div class="d-flex d-lg-block nav-wrapper">
          <ul class="nav nav-underline flex-row flex-lg-column flex-nowrap flex-lg-wrap gap-4 gap-lg-2 mx-auto mx-lg-0" role="tablist">
            <?php foreach ($filters as $index => $filter) { ?>
              <li class="nav-item" role="presentation">
                <button type="button" id="<?php echo $filter['id'] . "-tab"; ?>" class="nav-link <?php echo $current_tab === $filter['id'] || $index === 0 && $current_tab === null ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="<?php echo "#" . $filter['id'] . "-content"; ?>" role="tab" aria-controls="<?php echo $filter['id'] . "-content"; ?>" aria-selected="false"><?php echo $filter['title']; ?></button>
              </li>
            <?php } ?>
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

          <div id="heavy-duty-content" class="tab-pane <?php echo $current_tab === 'heavy-duty' || $current_tab === null ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="heavy-duty-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php foreach ($product_categories['heavy_duty'] as $product) {
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
              <?php } ?>
            </div>
          </div>
          <div id="special-purpose-content" class="tab-pane <?php echo $current_tab === 'special-purpose' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="special-purpose-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php foreach ($product_categories['special_purpose'] as $product) {
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
              <?php } ?>
            </div>
          </div>
          <div id="ambulance-content" class="tab-pane <?php echo $current_tab === 'ambulance' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="ambulance-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php foreach ($product_categories['ambulance'] as $product) {
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
              <?php } ?>
            </div>
          </div>
          <div id="bus-content" class="tab-pane <?php echo $current_tab === 'bus' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="bus-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php foreach ($product_categories['bus'] as $product) {
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
              <?php } ?>
            </div>
          </div>
          <div id="heavy-equipment-content" class="tab-pane <?php echo $current_tab === 'heavy-equipment' ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="heavy-equipment-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4">
              <?php foreach ($product_categories['heavy_equipment'] as $product) {
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
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
