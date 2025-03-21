<?php
ob_start();
session_start();
include "admin/inc/config.php";
include "admin/inc/functions.php";
include "admin/inc/CSRF_Protect.php";
require_once "functions.php";

$csrf = new CSRF_Protect();

if (!isset($_GET['lang'])) {
	unset($_SESSION['lang']);
} else if ($_GET['lang'] === 'en' || $_GET['lang'] === 'id') {
	$_SESSION['lang'] = $_GET['lang'];
}

$current_lang = $_SESSION['lang'] ?? 'en';
$translations = json_decode(file_get_contents(__DIR__ . '/lang/translations.json'), true);
$lang_text = $translations[$current_lang] ?? $translations['en'];

$menu = $lang_text['menu'];
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />

	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="assets/images/icons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="512x512" href="assets/images/icons/android-chrome-512x512.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
	<meta name="msapplication-TileImage" content="assets/images/icons/mstile.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/bootstrap-icons.min.css">
	<link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/vendor/aos.min.css">
	<link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
	<link rel="stylesheet" href="assets/css/vendor/glightbox.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/main.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" defer></script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@graph": [{
					"@type": "Organization",
					"name": "Karoseri Senang Jaya",
					"url": "https://www.karoserisenangjaya.com/sja",
					"logo": "https://www.karoserisenangjaya.com/sja/assets/images/logo.png",
					"address": {
						"@type": "PostalAddress",
						"streetAddress": "Jl. Cirebon - Losari Km. 13,6 Rawaurip",
						"addressLocality": "Pangenan",
						"addressRegion": "Jawa Barat",
						"postalCode": "45100",
						"addressCountry": "ID"
					},
					"contactPoint": [{
							"@type": "ContactPoint",
							"telephone": "+62-853-5139-9807",
							"contactType": "customer service",
							"areaServed": "ID",
							"availableLanguage": ["id"]
						},
						{
							"@type": "ContactPoint",
							"telephone": "+62-819-1580-3535",
							"contactType": "customer service",
							"areaServed": "ID",
							"availableLanguage": ["id"]
						},
						{
							"@type": "ContactPoint",
							"telephone": "+62-812-6553-3700",
							"contactType": "customer service",
							"areaServed": "ID",
							"availableLanguage": ["id"]
						}
					]
				},
				{
					"@type": "BreadcrumbList",
					"itemListElement": [{
							"@type": "ListItem",
							"position": 1,
							"name": "Home",
							"item": "https://www.karoserisenangjaya.com/sja"
						},
						{
							"@type": "ListItem",
							"position": 2,
							"name": "Products",
							"item": "https://www.karoserisenangjaya.com/sja/products.php"
						},
						{
							"@type": "ListItem",
							"position": 3,
							"name": "About",
							"item": "https://www.karoserisenangjaya.com/sja/about.php"
						},
						{
							"@type": "ListItem",
							"position": 4,
							"name": "Gallery",
							"item": "https://www.karoserisenangjaya.com/sja/gallery.php"
						},
						{
							"@type": "ListItem",
							"position": 5,
							"name": "Contact",
							"item": "https://www.karoserisenangjaya.com/sja/contact.php"
						}
					]
				}
			]
		}
	</script>
	<!-- <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script> -->
</head>

<body>
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<h1 class="mb-0">
					<span class="visually-hidden">Karoseri Senang Jaya Abadi</span>
					<a href="./" class="navbar-brand">
						<picture>
							<source srcset="assets/images/logo.png 1x, assets/images/logo@2x.png 2x, assets/images/logo@3x.png 3x" type="image/png">
							<img src="assets/images/logo.png" width="216" height="37" alt="logo">
						</picture>
					</a>
				</h1>
				<button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon d-flex justify-content-center align-items-center">
						<i class="fa-solid fa-bars" aria-hidden="true"></i>
					</span>
				</button>
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header">
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

						<ul class="navbar-nav mb-3 mb-lg-0">
							<?php foreach ($menu as $item) { ?>
								<li class="nav-item"><a href="<?php echo $item['link'] . getLangParam(); ?>" class="nav-link <?php echo $current_page === $item['link'] || $current_page === 'index.php' && $item['link'] === './' ? 'active' : ''; ?>" aria-current="page"><?php echo $item['title']; ?></a></li>
							<?php } ?>

							<!-- <li class="nav-item dropdown search-dropdown row">
								<div class="d-none d-lg-flex">
									<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Search">
										<i class="fas fa-magnifying-glass" aria-hidden="true"></i>
									</button>
									<div class="dropdown-menu shadow-sm mt-3">
										<form class="d-flex" role="search" action="search-result.php" method="get">
											<?php $csrf->echoInputField(); ?>
											<input type="text" class="form-control pe-0" placeholder="Search Product" name="search_text">
											<button type="submit" class="btn">
												<i class="fas fa-arrow-right" aria-hidden="true"></i>
											</button>
										</form>
									</div>
								</div>
								<div class="d-block d-lg-none">
									<form class="d-flex pt-1 mt-2" role="search" action="search-result.php" method="get">
										<?php $csrf->echoInputField(); ?>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search Product" name="search_text">
											<button type="submit" class="btn btn-outline-secondary">
												<i class="fas fa-magnifying-glass" aria-hidden="true"></i>
											</button>
										</div>
									</form>
								</div>
							</li> -->
						</ul>

						<?php $target_lang = !isset($_SESSION['lang']) || $_SESSION['lang'] === 'en' ? 'id' : 'en'; ?>
						<div class="switch <?php echo $target_lang === 'en' ? 'lang-id' : ''; ?>">
							<a href="?lang=<?php echo $target_lang; ?>" class="switch-control"></a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<main>
