<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$footer_about = $row['footer_about'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$contact_address = $row['contact_address'];
	$total_recent_post_footer = $row['total_recent_post_footer'];
	$total_popular_post_footer = $row['total_popular_post_footer'];
	$newsletter_on_off = $row['newsletter_on_off'];
	$before_body = $row['before_body'];
}
?>
<?php /* endif; */ ?>

<footer class="footer">
	<div class="container">
		<div class="py-5">
			<div class="row justify-content-between">
				<div class="col-3">
					<div class="footer-logo">
						<a href="index.php"><img src="assets/uploads/<?php echo $logo; ?>" alt="logo"></a>
					</div>
					<ul class="d-flex gap-2 mb-4">
						<li>
							<a href='https://www.instagram.com/explore/locations/236833679777322/senang-jaya-abadi-cirebon/' class="social-link" target="_blank">
								<i class="fa-brands fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href='https://www.facebook.com/SenangJayaAbadi' class="social-link" target="_blank">
								<i class="fa-brands fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href='https://twitter.com/' class="social-link" target="_blank">
								<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href='https://www.youtube.com/' class="social-link" target="_blank">
								<i class="fa-brands fa-youtube"></i>
							</a>
						</li>
					</ul>
					<address>
						Jl. Raya Pantura, Rawaurip, Kec. Pangenan, Kabupaten Cirebon, Jawa Barat
					</address>
				</div>
				<div class="col-8 mt-2">
					<div class="row">
						<div class="col-md-4">
							<h3 class="footer-heading">Product</h3>
							<ul class="footer-list d-flex flex-column">
								<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=24&type=mid-category">Special Vehicles</a></li>
								<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=18&type=mid-category">Arm Roll</a></li>
								<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=23&type=mid-category">Compactor</a></li>
								<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=19&type=mid-category">Dump Truk</a></li>
								<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=20&type=mid-category">SkyLift</a></li>
								<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=87&type=end-category">Self Loader</a></li>
								<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=21&type=mid-category">Tangki</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h3 class="footer-heading">Partnership</h3>
							<ul class="footer-list d-flex flex-column">
								<li>PT. Hino Motors Manufacturing Indonesia</li>
								<li>PT. Armindo</li>
								<li>Auto 2000</li>
								<li>PT. Cemaco</li>
								<li>PT. Daya guna Motor Indonesia</li>
								<li>Indomobil</li>
								<li>Nasmoco</li>
								<li>PT. Teja Berlian</li>
							</ul>
						</div>
						<div class="col-md-4">
							<div class="mb-5">
								<h3 class="footer-heading">Help &amp; Support</h3>
								<a href='https://e-katalog.lkpp.go.id/id/search-produk?authenticityToken=46ea77a9b4b2a270776b6ed764554b8878435fc7&q=senang+jaya&order=relevance&limit=12&offset=1'>
									<img src="../sja/lkpp.png" width="120">
								</a>
							</div>
							<div>
								<h3 class="footer-heading">Go To :</h3>
								<a href='https://karoserisenangjaya.com/psa/' target="blank" style="color:white;"><u>Pemuda Sukses Abadi</u></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="copyright">
			Copyright &copy; 2024 - PT. Karoseri Senang Jaya Abadi
		</p>
	</div>
</footer>

<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/megamenu.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/main.js"></script>
<?php echo $before_body; ?>

</body>
</html>
