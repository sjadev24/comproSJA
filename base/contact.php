<?php
$page_title = 'Contact Us | Get in Touch with Your Karoseri Experts';
$meta_description = "Have questions or need custom karoseri services? Get in touch with Karoseri Senang Jaya Abadi today for expert support and personalized solutions. We're here to help!";
require_once 'includes/header.php';

$section = $lang_text['contact']['section'];
$contact_info = $section['contact_info'];
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-2 mb-5 mb-md-0">
                <h2 class="title-underline"><?php echo $section['title']; ?></h2>
            </div>
            <div class="col-md-10">
                <h3 class="mb-4 h4"><?php echo $section['subtitle']; ?></h3>
                <p class="mb-6"><?php echo $section['description']; ?></p>
                <div class="row contact-info">
                    <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                        <div class="mb-5">
                            <p class="pb-2 h6"><?php echo $contact_info[0]['title']; ?></p>
                            <?php foreach ($contact_info[0]['content'] as $location) { ?>
                                <div class="d-flex flex-column gap-1 mb-3">
                                    <span class="fw-medium"><?php echo $location['title']; ?></span>
                                    <span><?php echo $location['description']; ?></span>
                                </div>
                            <?php } ?>
                        </div>
                        <div>
                            <p class="pb-2 h6"><?php echo $contact_info[1]['title']; ?></p>
                            <ul class="d-flex flex-column gap-3 mb-0">
                                <?php foreach ($contact_info[1]['content'] as $email) { ?>
                                    <li>
                                        <a class="text-primary" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5">
                        <p class="pb-2 h6"><?php echo $contact_info[2]['title']; ?></p>
                        <ul class="d-flex flex-column gap-3 mb-0">
                            <li>
                                <a class="text-primary" href="tel:<?php echo $contact_info[2]['content']['phone_number']['href']; ?>">
                                    <?php echo $contact_info[2]['content']['phone_number']['text']; ?>
                                </a>
                            </li>
                            <?php foreach ($contact_info[2]['content']['whatsapp'] as $contact) { ?>
                                <li>
                                    <a class="text-primary" href="<?php echo $contact['link']; ?>" target="_blank" rel="noopener">
                                        <?php echo $contact['title']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pt-0">
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7543472182115!2d108.65559861475548!3d-6.799712368393528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f037bf2cc1611%3A0x61841193eb2d0348!2sKaroseri%20Senang%20Jaya%20Abadi!5e0!3m2!1sid!2sid!4v1680069435563!5m2!1sid!2sid" class="w-100" width="600" height="300" style="border:0;" allowfullscreen loading="lazy" title="Google Maps showing the location of PT. Senang Jaya Abadi"></iframe>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
