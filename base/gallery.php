<?php
$page_title = 'Gallery | Our Custom Karoseri Work & Vehicle Body Designs';
$meta_description = 'Browse our gallery of custom karoseri designs and vehicle bodywork projects. See how we transform trucks, buses, and other vehicles with precision and quality craftsmanship.';
require_once 'includes/header.php';

$section = $lang_text['gallery']['section'];
$filters = $section['filters'];
$processes = $section['processes'];
?>

<section class="section section-gallery">
  <div class="container">
    <h2 class="mb-5 mb-lg-6 h3"><?php echo $section['title']; ?></h2>

    <div class="row">
      <div class="col-lg-2 pb-2 pb-lg-0 mb-4 mb-lg-0">
        <div class="d-flex d-lg-block nav-wrapper">
          <ul class="nav nav-underline flex-row flex-lg-column flex-nowrap flex-lg-wrap gap-4 gap-lg-2 mx-auto mx-lg-0 process-filters-btn-group">
            <?php foreach ($filters as $index => $filter) { ?>
              <li class="nav-item">
                <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>" data-filter="<?php echo $filter['data_filter']; ?>"><?php echo $filter['title']; ?></a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>

      <div class="col-lg-10">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-4 process-grid" tabindex="0">
          <?php foreach ($processes as $process) {
            $image = $process['image']; ?>
            <div class="process-item <?php echo $process['category']; ?>">
              <div class="card card-element-hover">
                <picture>
                  <source
                    srcset="assets/uploads/processes/avif/<?php echo $image['slug']; ?>.avif 1x, assets/uploads/processes/avif/<?php echo $image['slug']; ?>@2x.avif 2x, assets/uploads/processes/avif/<?php echo $image['slug']; ?>@3x.avif 3x"
                    type="image/avif" />
                  <source
                    srcset="assets/uploads/processes/webp/<?php echo $image['slug']; ?>.webp 1x, assets/uploads/processes/webp/<?php echo $image['slug']; ?>@2x.webp 2x, assets/uploads/processes/webp/<?php echo $image['slug']; ?>@3x.webp 3x"
                    type="image/webp" />
                  <source
                    srcset="assets/uploads/processes/jpg/<?php echo $image['slug']; ?>.jpg 1x, assets/uploads/processes/jpg/<?php echo $image['slug']; ?>@2x.jpg 2x, assets/uploads/processes/jpg/<?php echo $image['slug']; ?>@3x.jpg 3x"
                    type="image/jpeg" />
                  <img src="uploads/processes/jpg/<?php echo $image['slug']; ?>.jpg" class="card-img" alt="<?php echo $image['alt']; ?>">
                </picture>
                <div class="card-img-overlay">
                  <a href="assets/uploads/processes/jpg/<?php echo $image['slug']; ?>@lbox.jpg" class="process-lightbox stretched-link">
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
</section>

<?php
$scripts = array('isotope.pkgd.min.js');
require_once 'includes/footer.php';
?>
