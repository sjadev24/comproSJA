<?php
$page_title = 'About Us | Expert Karoseri Manufacturers and Designers';
$meta_description = 'Learn more about Karoseri Senang Jaya Abadi, your trusted expert in vehicle bodywork and custom karoseri design. We bring precision, quality, and innovation to every project.';
require_once 'includes/header.php';

$about = $lang_text['about'];
$section_whoweare = $about['section_whoweare'];
$section_ourvalues = $about['section_ourvalues'];
$section_whatwedo = $about['section_whatwedo'];
$section_awards = $about['section_awards'];
$section_ourteam = $about['section_ourteam'];
$section_ourcustomers = $about['section_ourcustomers'];
$section_aboutcta = $about['section_aboutcta'];
?>

<section class="section section-whoweare">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline"><?php echo $section_whoweare['title']; ?></h2>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5 order-md-1 mb-5 mb-md-0">
            <div class="p-md-4">
              <picture>
                <source
                  data-srcset="assets/images/about/avif/who-we-are.avif 1x, assets/images/about/avif/who-we-are@2x.avif 2x"
                  type="image/avif" />
                <source
                  data-srcset="assets/images/about/webp/who-we-are.webp 1x, assets/images/about/webp/who-we-are@2x.webp 2x"
                  type="image/webp" />
                <source
                  data-srcset="assets/images/about/jpg/who-we-are.jpg 1x, assets/images/about/jpg/who-we-are@2x.jpg 2x"
                  type="image/jpeg" />
                <img src="assets/images/placehold.png" data-src="assets/images/about/jpg/who-we-are.jpg" class="rounded lazyload" alt="">
              </picture>
            </div>
          </div>
          <div class="col-md-7">
            <h3 class="mb-4"><?php echo $section_whoweare['subtitle']; ?></h3>
            <p><?php echo $section_whoweare['description']; ?></p>
            <div class="mb-5">
              <a href="assets/video/video.mp4" class="btn btn-lg btn-outline-primary rounded-circle me-2 intro-lightbox" aria-label="Play introduction video">
                <i class="fas fa-play" aria-hidden="true"></i>
              </a>
              <span class="text-dark">Video intro</span>
            </div>
            <div class="card-body tab-con">
              <ul class="nav nav-tabs mb-3" role="tablist">
                <li class="nav-item" role="presentation">
                  <button type="button" id="vision-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#vision-content" role="tab" aria-controls="vision-content" aria-selected="true"><?php echo $section_whoweare['our_vision']['title']; ?></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" id="mission-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#mission-content" role="tab" aria-controls="mission-content" aria-selected="false"><?php echo $section_whoweare['our_mission']['title']; ?></button>
                </li>
              </ul>
              <div class="tab-content">
                <div id="vision-content" class="tab-pane show active" role="tabpanel" aria-labelledby="vision-tab" tabindex="0">
                  <ul class="d-flex flex-column gap-2 mb-0">
                    <?php foreach ($section_whoweare['our_vision']['content'] as $statement) { ?>
                      <li>
                        <i class="fas fa-circle" aria-hidden="true"></i>
                        <span><?php echo $statement; ?></span>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
                <div id="mission-content" class="tab-pane" role="tabpanel" aria-labelledby="mission-tab" tabindex="0">
                  <ul class="d-flex flex-column gap-2 mb-0">
                    <?php foreach ($section_whoweare['our_mission']['content'] as $statement) { ?>
                      <li>
                        <i class="fas fa-circle" aria-hidden="true"></i>
                        <span><?php echo $statement; ?></span>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-aboutbackground"></section>

<section class="section section-ourvalues">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline"><?php echo $section_ourvalues['title']; ?></h2>
      </div>
      <div class="col-md-10">
        <h3 class="mb-4"><?php echo $section_ourvalues['subtitle']; ?></h3>
        <p class="mb-6"><?php echo $section_ourvalues['description']; ?></p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4">
          <?php foreach ($section_ourvalues['values'] as $value) { ?>
            <div class="col">
              <div class="text-center my-2">
                <div class="text-primary fs-2 mb-4">
                  <i class="<?php echo $value['icon']; ?>" aria-hidden="true"></i>
                </div>
                <h4 class="h5 mb-3"><?php echo $value['title']; ?></h4>
                <p class="mb-0"><?php echo $value['description']; ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-whatwedo bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline"><?php echo $section_whatwedo['title']; ?></h2>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5 order-md-1 mb-5 mb-md-0">
            <div class="row row-cols-2 row-cols-md-1">
              <div class="col">
                <div class="img-effect dotted p-md-4">
                  <picture>
                    <source
                      data-srcset="assets/images/about/avif/what-we-do-01.avif 1x, assets/images/about/avif/what-we-do-01@2x.avif 2x"
                      type="image/avif" />
                    <source
                      data-srcset="assets/images/about/webp/what-we-do-01.webp 1x, assets/images/about/webp/what-we-do-01@2x.webp 2x"
                      type="image/webp" />
                    <source
                      data-srcset="assets/images/about/jpg/what-we-do-01.jpg 1x, assets/images/about/jpg/what-we-do-01@2x.jpg 2x"
                      type="image/jpeg" />
                    <img src="assets/images/placehold.png" data-src="assets/images/about/jpg/what-we-do-01.jpg" class="rounded lazyload" alt="">
                  </picture>
                </div>
              </div>
              <div class="col">
                <div class="img-effect dotted last p-md-4">
                  <picture>
                    <source
                      data-srcset="assets/images/about/avif/what-we-do-02.avif 1x, assets/images/about/avif/what-we-do-02@2x.avif 2x"
                      type="image/avif" />
                    <source
                      data-srcset="assets/images/about/webp/what-we-do-02.webp 1x, assets/images/about/webp/what-we-do-02@2x.webp 2x"
                      type="image/webp" />
                    <source
                      data-srcset="assets/images/about/jpg/what-we-do-02.jpg 1x, assets/images/about/jpg/what-we-do-02@2x.jpg 2x"
                      type="image/jpeg" />
                    <img src="assets/images/placehold.png" data-src="assets/images/about/jpg/what-we-do-02.jpg" class="rounded lazyload" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <h3 class="mb-4"><?php echo $section_whatwedo['subtitle']; ?></h3>
            <p class="mb-6"><?php echo $section_whatwedo['description']; ?></p>
            <ul class="steps">
              <?php foreach ($section_whatwedo['steps'] as $index => $step) { ?>
                <li class="step">
                  <p class="step-number"><?php echo $index + 1; ?></p>
                  <div class="d-flex flex-column pt-1">
                    <h4 class="h5"><?php echo $step['title']; ?></h4>
                    <p class="mb-0"><?php echo $step['description']; ?></p>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-awards bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline"><?php echo $section_awards['title']; ?></h2>
      </div>
      <div class="col-md-10">
        <h3 class="mb-4"><?php echo $section_awards['subtitle']; ?></h3>
        <p class="mb-6"><?php echo $section_awards['description']; ?></p>
        <ul class="steps lists">
          <?php foreach ($section_awards['certifications'] as $index => $certificate) { ?>
            <li class="step">
              <p class="step-number"><?php echo $index + 1; ?></p>
              <div class="d-flex flex-column pt-1">
                <h4 class="h5">
                  <a href="assets/uploads/certifications/jpg/<?php echo $certificate['image']; ?>" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover certification-lightbox"><?php echo $certificate['title']; ?></a>
                </h4>
                <p class="mb-0">
                  <?php echo $certificate['description']; ?></p>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section-ourteam">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline"><?php echo $section_ourteam['title']; ?></h2>
      </div>
      <div class="col-md-10">
        <h3 class="mb-4"><?php echo $section_ourteam['subtitle']; ?></h3>
        <p class="mb-6"><?php echo $section_ourteam['description']; ?></p>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5 gy-4">
          <div class="col">
            <div class="text-center my-2">
              <div class="avatar px-2 mb-3">
                <picture>
                  <source srcset="assets/images/about/avif/marketing-01.avif" type="image/avif" />
                  <source srcset="assets/images/about/webp/marketing-01.webp" type="image/webp" />
                  <img class="rounded-circle" src="assets/images/about/jpg/marketing-01.jpg" alt="Rian">
                </picture>
              </div>
              <h4 class="h6">Rian</h4>
              <small>Marketing 1</small>
            </div>
          </div>
          <div class="col">
            <div class="text-center my-2">
              <div class="avatar px-2 mb-3">
                <picture>
                  <source srcset="assets/images/about/avif/marketing-02.avif" type="image/avif" />
                  <source srcset="assets/images/about/webp/marketing-02.webp" type="image/webp" />
                  <img class="rounded-circle" src="assets/images/about/jpg/marketing-02.jpg" alt="Abdul Rouf">
                </picture>
              </div>
              <h4 class="h6">Abdul Rouf</h4>
              <small>Marketing 2</small>
            </div>
          </div>
          <div class="col">
            <div class="text-center my-2">
              <div class="avatar px-2 mb-3">
                <picture>
                  <source srcset="assets/images/about/avif/marketing-03.avif" type="image/avif" />
                  <source srcset="assets/images/about/webp/marketing-03.webp" type="image/webp" />
                  <img class="rounded-circle" src="assets/images/about/jpg/marketing-03.jpg" alt="Hasan Karim">
                </picture>
              </div>
              <h4 class="h6">Hasan Karim</h4>
              <small>Marketing 3</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-ourcustomers bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline"><?php echo $section_ourcustomers['title']; ?></h2>
      </div>
      <div class="col-md-10">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 gy-4">
          <?php
          $customers = getCustomers();
          foreach ($customers as $customer) { ?>
            <div class="col">
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
  </div>
</section>

<section class="section section-aboutcta">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-4"><?php echo $section_aboutcta['title']; ?></h2>
        <p class="mb-6"><?php echo $section_aboutcta['description']; ?></p>
        <a href="contact.php" class="btn btn-primary"><?php echo $section_aboutcta['button_text']; ?></a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
