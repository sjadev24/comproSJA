<?php
$page_title = 'About Us | Expert Karoseri Manufacturers and Designers';
$meta_description = 'Learn more about Karoseri Senang Jaya Abadi, your trusted expert in vehicle bodywork and custom karoseri design. We bring precision, quality, and innovation to every project.';
require_once('includes/header.php');
?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
}
?>

<section class="section section-whoweare">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-4 mb-md-0">
        <h2 class="title-underline">Who we are</h2>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5 order-md-1 mb-5 mb-md-0">
            <div class="p-md-4">
              <picture>
                <source
                  data-srcset="assets/img/who-we-are.jpg 1x, assets/img/who-we-are@2x.jpg 2x"
                  type="image/jpeg" />
                <img src="assets/img/placehold.png" data-src="assets/img/who-we-are.jpg" class="rounded lazyload" alt="">
              </picture>
            </div>
          </div>

          <div class="col-md-7">
            <h3 class="h4 mb-4">From vision to reality</h3>

            <p>PT. Senang Jaya Abadi moves in the field of hydraulic distributors.
              In 2009, PT. Senang Jaya Abadi began to build the carpooling of plates, dump trucks,
              ring tanks, water tanks and loading tanks. With the best quality and materials and supported with the latest technology and worked by a team of experienced experts in its field, thus producing quality products.</p>

            <p class="mb-4">Since the beginning, the aspiration of PT. Senang Jaya Abadi
              is to create quality products so that they can compete in the national market. With the ISO 9001-2008 Quality Management System Certification, the products produced are expected
              to be more quality and stable. Get all the facilities and services from our company, which
              we will provide to serve any operational fleet needs, in order to improve the performance
              and profitability of the company.</p>

            <div class="mb-5">
              <a href="assets/video/video.mp4" class="btn btn-lg btn-outline-primary rounded-circle me-2 intro-lightbox">
                <i class="fas fa-play" aria-hidden="true"></i>
              </a>
              <span class="text-dark">Video intro</span>
            </div>

            <div class="card-body tab-con">
              <ul class="nav nav-tabs mb-3" role="tablist">
                <li class="nav-item" role="presentation">
                  <button type="button" id="vision-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#vision-content" role="tab" aria-controls="vision-content" aria-selected="true">Our vision</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" id="mission-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#mission-content" role="tab" aria-controls="mission-content" aria-selected="false">Our mission</button>
                </li>
              </ul>

              <div class="tab-content">
                <div id="vision-content" class="tab-pane show active" role="tabpanel" aria-labelledby="vision-tab" tabindex="0">
                  <ul class="d-flex flex-column gap-2 mb-0">
                    <li>
                      <i class="fas fa-circle" aria-hidden="true"></i>
                      <span>To become a leading automotive and bodywork manufacturing company that is recognized globally, through technological innovation, superior product quality, and sustainable contributions to industrial progress and societal welfare.</span>
                    </li>
                  </ul>
                </div>
                <div id="mission-content" class="tab-pane" role="tabpanel" aria-labelledby="mission-tab" tabindex="0">
                  <ul class="d-flex flex-column gap-2 mb-0">
                    <li>
                      <i class="fas fa-circle" aria-hidden="true"></i>
                      <span>Producing high-tech vehicles and automotive solutions that meet international standards, answering evolving market needs, and providing added value to customers.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle" aria-hidden="true"></i>
                      <span>Providing comprehensive services covering assembly, modification, and maintenance of vehicles and heavy equipment, with a focus on customer satisfaction and operational efficiency.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle" aria-hidden="true"></i>
                      <span>Encouraging innovation and continuous improvement through investment in cutting-edge technology and development of qualified and professional human resources.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle" aria-hidden="true"></i>
                      <span>Maintaining high standards of quality, safety, and occupational health with compliance with international certifications, and creating a safe and sustainable working environment.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle" aria-hidden="true"></i>
                      <span>Playing an active role in the development of the national and global automotive industry by strengthening strategic partnerships, creating new business opportunities, and providing positive impacts on communities and the environment.</span>
                    </li>
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
        <h2 class="title-underline">Our values</h2>
      </div>
      <div class="col-md-10">
        <h3 class="h4 mb-4">Crafting customized solutions</h3>

        <p class="mb-4">At PT. Senang Jaya Abadi, we specialize in crafting high-quality custom vehicle bodies for a wide range of applications, including commercial trucks, buses, and specialized vehicles. Our expertise lies in transforming raw chassis into functional and aesthetically appealing vehicles that meet the unique needs of our clients.</p>

        <div class="row">
          <div class="col-sm-6 col-md-4 my-4">
            <div class="text-center">
              <div class="text-primary fs-3 mb-4">
                <i class="fas fa-medal" aria-hidden="true"></i>
              </div>
              <h4 class="h6 mb-3">Quality</h4>
              <p class="mb-0">Commitment to high standards in materials and craftsmanship.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-4">
            <div class="text-center">
              <div class="text-primary fs-3 mb-4">
                <i class="far fa-lightbulb" aria-hidden="true"></i>
              </div>
              <h4 class="h6 mb-3">Innovation</h4>
              <p class="mb-0">Adoption of new technologies and creative designs.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-4">
            <div class="text-center">
              <div class="text-primary fs-3 mb-4">
                <i class="bi bi-shield-fill-check" aria-hidden="true"></i>
              </div>
              <h4 class="h6 mb-3">Safety</h4>
              <p class="mb-0">Ensuring products meet safety regulations and standards.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-4">
            <div class="text-center">
              <div class="text-primary fs-3 mb-4">
                <i class="fas fa-person-rays" aria-hidden="true"></i>
              </div>
              <h4 class="h6 mb-3">Customer Focus</h4>
              <p class="mb-0">Prioritizing customer needs and satisfaction.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-4">
            <div class="text-center">
              <div class="text-primary fs-3 mb-4">
                <i class="far fa-handshake" aria-hidden="true"></i>
              </div>
              <h4 class="h6 mb-3">Integrity</h4>
              <p class="mb-0">Upholding honesty and transparency in all dealings.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-4">
            <div class="text-center">
              <div class="text-primary fs-3 mb-4">
                <i class="fab fa-envira" aria-hidden="true"></i>
              </div>
              <h4 class="h6 mb-3">Sustainability</h4>
              <p class="mb-0">Promoting eco-friendly practices and materials.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-whatwedo bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline">What we do</h2>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5 order-md-1 mb-5 mb-md-0">
            <div class="row row-cols-2 row-cols-md-1">
              <div class="col">
                <div class="img-effect dotted p-md-4">
                  <picture>
                    <source
                      data-srcset="assets/img/what-we-do-01.jpg 1x, assets/img/what-we-do-01@2x.jpg 2x"
                      type="image/jpeg" />
                    <img src="assets/img/placehold.png" data-src="assets/img/what-we-do-01.jpg" class="rounded lazyload" alt="">
                  </picture>
                </div>
              </div>
              <div class="col">
                <div class="img-effect dotted last p-md-4">
                  <picture>
                    <source
                      data-srcset="assets/img/what-we-do-02.jpg 1x, assets/img/what-we-do-02@2x.jpg 2x"
                      type="image/jpeg" />
                    <img src="assets/img/placehold.png" data-src="assets/img/what-we-do-02.jpg" class="rounded lazyload" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-7">
            <h3 class="h4 mb-4">Crafting customized solutions</h3>

            <p class="mb-5">At PT. Senang Jaya Abadi, we specialize in crafting high-quality custom vehicle bodies for a wide range of applications, including commercial trucks, buses, and specialized vehicles. Our expertise lies in transforming raw chassis into functional and aesthetically appealing vehicles that meet the unique needs of our clients.</p>

            <ul class="steps">
              <li class="step">
                <p class="step-number">1</p>
                <div class="d-flex flex-column pt-1">
                  <h4 class="h6">Design and Engineering</h4>
                  <p class="mb-0">
                    Developing blueprints and designs tailored to customer requirements, including ergonomics and safety standards.
                  </p>
                </div>
              </li>
              <li class="step">
                <p class="step-number">2</p>
                <div class="d-flex flex-column pt-1">
                  <h4 class="h6">Fabrication</h4>
                  <p class="mb-0">
                    Constructing the body frame and structure using various materials, such as steel, aluminum, or fiberglass.
                  </p>
                </div>
              </li>
              <li class="step">
                <p class="step-number">3</p>
                <div class="d-flex flex-column pt-1">
                  <h4 class="h6">Assembly</h4>
                  <p class="mb-0">
                    Putting together different components, including the chassis, doors, windows, and interiors.
                  </p>
                </div>
              </li>
              <li class="step">
                <p class="step-number">4</p>
                <div class="d-flex flex-column pt-1">
                  <h4 class="h6">Customization</h4>
                  <p class="mb-0">
                    Modifying vehicles for specific purposes, such as passenger transport, delivery, or specialized services (e.g., ambulances, food trucks).
                  </p>
                </div>
              </li>
              <li class="step">
                <p class="step-number">5</p>
                <div class="d-flex flex-column pt-1">
                  <h4 class="h6">Finishing</h4>
                  <p class="mb-0">
                    Applying paint and other finishes to enhance appearance and durability.
                  </p>
                </div>
              </li>
              <li class="step">
                <p class="step-number">6</p>
                <div class="d-flex flex-column pt-1">
                  <h4 class="h6">Quality Control</h4>
                  <p class="mb-0">
                    Ensuring that all products meet safety and quality standards through testing and inspections.
                  </p>
                </div>
              </li>
              <li class="step">
                <p class="step-number">7</p>
                <div class="d-flex flex-column pt-1">
                  <h4 class="h6">After-sales Support</h4>
                  <p class="mb-0">
                    Providing maintenance, repairs, and parts for the vehicles produced.
                  </p>
                </div>
              </li>
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
        <h2 class="title-underline">Awards and Certifications</h2>
      </div>
      <div class="col-md-10">
        <h3 class="h4 mb-4">Commitment to excellence</h3>

        <p class="mb-5">We take pride in our achievements within the karoseri industry, having received numerous awards and certifications that highlight our commitment to quality and innovation. These recognitions not only validate our expertise but also demonstrate our dedication to exceeding industry standards and delivering exceptional value to our clients. Each accolade represents our relentless pursuit of excellence in every project we undertake.</p>

        <ul class="steps lists">
          <li class="step">
            <p class="step-number">1</p>
            <div class="d-flex flex-column pt-1">
              <h4 class="h6">
                <a href="assets/uploads/awards_certifications/certification-01.jpg" class=" link-underline link-underline-opacity-0 link-underline-opacity-100-hover certification-lightbox">ISO 9001:2015 &amp; ISO 45001:2018</a>
              </h4>
              <p class="mb-0">
                Certified by ACS Registrars | Occuptional Health and Safety Management System in the scope of Manufacturing of Chassis for Motor Vehicle.</p>
            </div>
          </li>
          <li class="step">
            <p class="step-number">2</p>
            <div class="d-flex flex-column pt-1">
              <h4 class="h6">
                <a href="assets/uploads/awards_certifications/certification-02.jpg" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover certification-lightbox">IATF 16949:2016</a>
              </h4>
              <p class="mb-0">
                Certified by Integrated Assessment Services | Quality Management System in the scope of Manufacturing of Chassis for Motor Vehicle.</p>
            </div>
          </li>
          <li class="step">
            <p class="step-number">3</p>
            <div class="d-flex flex-column pt-1">
              <h4 class="h6">
                <a href="assets/uploads/awards_certifications/certification-03.jpg" class="link-underline link-underline-opacity-0 link-underline-opacity-100-hover certification-lightbox">ISO 14001:2015</a>
              </h4>
              <p class="mb-0">
                Certified by Peers Quality Assurance Limited | Operates a Environmental Management System in the scope of Manufacturing of Chassis for Motor Vehicle.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section-ourteam">
  <div class="container">
    <div class="row">
      <div class="col-md-2 mb-5 mb-md-0">
        <h2 class="title-underline">Our team</h2>
      </div>
      <div class="col-md-10">
        <h3 class="h4 mb-4">People behind the scenes</h3>

        <p class="mb-4">At the core of our success is a group of skilled and passionate professionals committed to delivering top-quality karoseri solutions. Each member of our team brings specialized expertise in design, engineering, and production, ensuring that we meet the highest standards in the vehicle body manufacturing industry.</p>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5 gy-4">
          <div class="col">
            <div class="card card-body text-center p-4 border-0">
              <div class="avatar px-2 mx-auto mb-3">
                <img class="rounded-circle" src="assets/img/marketing-01.jpg" alt="Rian">
              </div>
              <h4 class="h6">Rian</h4>
              <small>Marketing 1</small>
            </div>
          </div>
          <div class="col">
            <div class="card card-body text-center p-4 border-0">
              <div class="avatar px-2 mx-auto mb-3">
                <img class="avatar-img rounded-circle" src="assets/img/marketing-02.jpg" alt="Abdul Rouf">
              </div>
              <h4 class="h6">Abdul Rouf</h4>
              <small>Marketing 2</small>
            </div>
          </div>
          <div class="col">
            <div class="card card-body text-center p-4 border-0">
              <div class="avatar px-2 mx-auto mb-3">
                <img class="avatar-img rounded-circle" src="assets/img/marketing-03.jpg" alt="Hasan Karim">
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
        <h2 class="title-underline">Our customers</h2>
      </div>
      <div class="col-md-10">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 gy-4">
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/dlh.png 1x, assets/uploads/customers/dlh@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/dlh.png" class="lazyload" alt="Dinas Lingkungan Hidup" title="Dinas Lingkungan Hidup">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/pupr.png 1x, assets/uploads/customers/pupr@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/pupr.png" class="lazyload" alt="Kementerian PUPR" title="Kementerian PUPR">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/imigrasi.png 1x, assets/uploads/customers/imigrasi@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/imigrasi.png" class="lazyload" alt="Rumah Detensi Imigrasi" title="Rumah Detensi Imigrasi">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/humbang_hasundutan.png 1x, assets/uploads/customers/humbang_hasundutan@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/humbang_hasundutan.png" class="lazyload" alt="Dinas Perhubungan Kabupaten Humbang Hasundutan" title="Dinas Perhubungan Kabupaten Humbang Hasundutan">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/batubara.png 1x, assets/uploads/customers/batubara@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/batubara.png" class="lazyload" alt="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara" title="Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup Kabupaten Batubara">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/kemenhub.png 1x, assets/uploads/customers/kemenhub@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/kemenhub.png" class="lazyload" alt="Kementerian Perhubungan" title="Kementerian Perhubungan">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/jember.png 1x, assets/uploads/customers/jember@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/jember.png" class="lazyload" alt="DLH Kabupaten Jember" title="DLH Kabupaten Jember">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/tapanuli_utara.png 1x, assets/uploads/customers/tapanuli_utara@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/tapanuli_utara.png" class="lazyload" alt="DLH Kabupaten Tapanuli Utara" title="DLH Kabupaten Tapanuli Utara">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/batu.png 1x, assets/uploads/customers/batu@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/batu.png" class="lazyload" alt="DLH Kota Batu" title="DLH Kota Batu">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/malang.png 1x, assets/uploads/customers/malang@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/malang.png" class="lazyload" alt="DLH Kota Malang" title="DLH Kota Malang">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/tangerang.png 1x, assets/uploads/customers/tangerang@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/tangerang.png" class="lazyload" alt="DLH Kota Tangerang" title="DLH Kota Tangerang">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/bulukumba.png 1x, assets/uploads/customers/bulukumba@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/bulukumba.png" class="lazyload" alt="DLHK Kabupaten Bulukumba" title="DLHK Kabupaten Bulukumba">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/sumedang.png 1x, assets/uploads/customers/sumedang@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/sumedang.png" class="lazyload" alt="DLHK Kabupaten Sumedang" title="DLHK Kabupaten Sumedang">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/depok.png 1x, assets/uploads/customers/depok@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/depok.png" class="lazyload" alt="DLHK Kota Depok" title="DLHK Kota Depok">
            </picture>
          </div>
          <div class="col">
            <picture>
              <source
                data-srcset="assets/uploads/customers/tegal.png 1x, assets/uploads/customers/tegal@2x.png 2x"
                type="image/png" />
              <img src="assets/img/placehold.png" data-src="assets/uploads/customers/tegal.png" class="lazyload" alt="DPUPR Kota Tegal" title="DPUPR Kota Tegal">
            </picture>
          </div>
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
        <h2 class="h3 mb-3">Connect with our experts</h2>
        <p class="mb-5">Have questions about our services or need personalized advice? Reach out today and let us help you find the perfect solution for your needs!</p>
        <a href="#" class="btn btn-primary">Get in touch</a>
      </div>
    </div>
  </div>
</section>

<?php require_once('includes/footer.php'); ?>
