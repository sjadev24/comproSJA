<?php
ob_start();
session_start();
include("admin/inc/config.php");
include("admin/inc/functions.php");
include("admin/inc/CSRF_Protect.php");

$csrf = new CSRF_Protect();
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />

	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/img/icons/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="assets/img/icons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="512x512" href="assets/img/icons/android-chrome-512x512.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/apple-touch-icon.png">
	<meta name="msapplication-TileImage" content="assets/img/icons/mstile.png">
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
	<link rel="stylesheet" href="assets/css/responsive.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" defer></script>

	<!-- <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script> -->
</head>

<body>
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<h1 class="mb-0">
					<span class="visually-hidden">Karoseri Senang Jaya Abadi</span>
					<a href="index.php" class="navbar-brand">
						<picture>
							<source srcset="assets/img/logo.png 1x, assets/img/logo@2x.png 2x, assets/img/logo@3x.png 3x" type="image/png">
							<img src="assets/img/logo.png" alt="logo" width="216" height="37">
						</picture>
					</a>
				</h1>
				<button class="navbar-toggler px-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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

						<ul class="navbar-nav">
							<li class="nav-item"><a href="index.php" class="nav-link <?php echo $current_page === 'index.php' ? 'active' : ''; ?>" aria-current="page">Home</a></li>
							<li class="nav-item"><a href="products.php" class="nav-link <?php echo $current_page === 'products.php' ? 'active' : ''; ?>">Products</a></li>
							<li class="nav-item"><a href="about.php" class="nav-link <?php echo $current_page === 'about.php' ? 'active' : ''; ?>">About</a></li>
							<li class="nav-item"><a href="gallery.php" class="nav-link <?php echo $current_page === 'gallery.php' ? 'active' : ''; ?>">Gallery</a></li>
							<li class="nav-item"><a href="contact.php" class="nav-link <?php echo $current_page === 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
							<li class="nav-item dropdown search-dropdown row">
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
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<main>
