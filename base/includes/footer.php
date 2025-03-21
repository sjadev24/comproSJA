<?php
$section = $lang_text['products']['section'];
$filters = $section['filters'];
$footer_navigation = $lang_text['footer']['navigation'];
?>

</main>

<footer class="footer">
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-3 mb-6 mb-lg-0">
				<div class="row gy-5">
					<div class="d-flex">
						<a href="./" class="footer-logo">
							<picture>
								<source srcset="assets/images/logo.png 1x, assets/images/logo@2x.png 2x, assets/images/logo@3x.png 3x" type="image/png">
								<img src="assets/images/logo.png" width="280" height="48" alt="logo">
							</picture>
						</a>
					</div>
					<address class="mb-0">
						<p class="d-flex gap-2">
							<i class="fas fa-location-dot mt-1" aria-hidden="true"></i>
							<span>Jl. Cirebon - Losari Km. 13,6 Rawaurip, Kec. Pangenan, Kabupaten Cirebon, Jawa Barat</span>
						</p>
						<p class="d-flex gap-2">
							<i class="fas fa-phone mt-1" aria-hidden="true"></i>
							<span class="d-flex flex-column gap-1">
								<a href="tel:+6281993118977">
									<span>+62 819-9311-8977</span>
								</a>
								<a href="tel:+6281386641546">
									<span>+62 813-8664-1546</span>
								</a>
							</span>
						</p>
						<p class="d-flex gap-2 mb-0">
							<i class="fas fa-envelope mt-1" aria-hidden="true"></i>
							<span class="d-flex flex-column gap-1">
								<a href="mailto:ptsenangjayaabadi@yahoo.com">
									<span>ptsenangjayaabadi@yahoo.com</span>
								</a>
								<a href="mailto:senangjayaabadi@gmail.com">
									<span>senangjayaabadi@gmail.com</span>
								</a>
							</span>
						</p>
					</address>
				</div>
			</div>
			<div class="col-lg-8 mt-lg-2 ms-lg-auto">
				<div class="row gy-5">
					<div class="col-md-4">
						<h3 class="h5 pb-1 mb-3"><?php echo $footer_navigation['categories']; ?></h3>
						<ul class="d-flex flex-column gap-3-cs mb-0">
							<?php
							$langParam = getLangParam() ? getLangParam() . '&' : '?';

							foreach ($filters as $filter) {
							?>
								<li><a href="products.php<?php echo $langParam; ?>tab=<?php echo $filter['id']; ?>"><?php echo $filter['title']; ?></a></li>
							<?php
							}
							?>

							<!-- <li><a href="products.php?tab=special-purpose">Special purpose vehicle</a></li>
							<li><a href="products.php?tab=ambulance">Ambulance</a></li>
							<li><a href="products.php?tab=bus">Bus</a></li>
							<li><a href="products.php?tab=heavy-equipment">Heavy equipment</a></li> -->
						</ul>
					</div>
					<div class="col-md-4">
						<h3 class="h5 pb-1 mb-3"><?php echo $footer_navigation['partnership']; ?></h3>
						<ul class="d-flex flex-column gap-3-cs mb-0">
							<li>PT. Hino Motors Manufacturing Indonesia</li>
							<li>PT. Armindo Perkasa</li>
							<li>Auto 2000</li>
							<li>PT. Cemaco Makmur Corporatama</li>
							<li>PT. Daya Guna Motor Indonesia</li>
							<li>PT. Indomobil Prima Niaga</li>
							<li>Nasmoco</li>
							<li>PT. Teja Berlian</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="mb-6">
							<h3 class="h5 pb-1 mb-3"><?php echo $footer_navigation['support']; ?></h3>
							<a href='https://e-katalog.lkpp.go.id/id/search-produk?authenticityToken=46ea77a9b4b2a270776b6ed764554b8878435fc7&q=senang+jaya&order=relevance&limit=12&offset=1' aria-label="e-catalog">
								<img src="assets/images/lkpp.png" class="img-lkpp" alt="">
							</a>
						</div>
						<!-- <div>
							<h3 class="h5 pb-1 mb-3"><?php echo $footer_navigation['go_to']; ?></h3>
							<a href='https://karoserisenangjaya.com/psa/' target="blank">Pemuda Sukses Abadi</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="d-sm-flex justify-content-sm-between align-items-sm-center py-3 py-sm-2 border-top border-light border-opacity-10">
			<ul class="d-flex gap-2 mb-2 mb-sm-0 order-sm-1">
				<li>
					<a href='https://www.instagram.com/explore/locations/236833679777322/senang-jaya-abadi-cirebon/' class="btn social-link" target="_blank" rel="noopener" aria-label="Instagram">
						<i class="fab fa-instagram" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href='https://www.facebook.com/SenangJayaAbadi' class="btn social-link" target="_blank" rel="noopener" aria-label="Facebook">
						<i class="fab fa-facebook-f" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href='https://twitter.com/' class="btn social-link" target="_blank" rel="noopener" aria-label="Twitter">
						<i class="fab fa-twitter" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href='https://www.youtube.com/' class="btn social-link" target="_blank" rel="noopener" aria-label="Youtube">
						<i class="fab fa-youtube" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
			<p class="mb-2 mb-sm-0">&copy; 2024 PT. Karoseri Senang Jaya Abadi.</p>
		</div>
	</div>
</footer>

<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/lazysizes.min.js"></script>
<script src="assets/js/vendor/aos.min.js"></script>
<script src="assets/js/vendor/glightbox.min.js"></script>
<?php
if (isset($scripts) && count($scripts) > 0) {
	foreach ($scripts as $script) {
		echo "<script src='assets/js/vendor/$script'></script>\n";
	}
}
?>
<script src="assets/js/main.js"></script>
</body>

</html>
