<!-- footer.php -->



<footer class="footer">
	<div class="footer-section-1 text-light py-4">
		<div class="container">
			<div class="row text-center">
				<!-- section 1 -->
				<div class="col-md-4 mb-3 border-end border-2 border-secondary border-opacity-25">
					<a href="index.php"><img src="img/yk_logo.png" class="img-fluid" alt="yk_logo"></a>
					<a href="index.php">
						<br><br>
						<h1 class="fs-2">榕光有限公司</h1>
						<h1 class="fs-4">YUNG KONG CO. BHD.</h1>
					</a>
				</div>

				<!-- section 2 -->
				<div class="col-md-4 mb-3">
					<h3>Products</h3>
					<ul class="list-unstyled text-start ms-md-4 ps-md-4 ">
						<?php foreach ($product_category as $prodCat): ?>
							<li><a href="products.php#<?= htmlspecialchars($prodCat['img_path']); ?>">
									<i class="<?= htmlspecialchars($prodCat['icon']); ?>"></i>
									<?= htmlspecialchars($prodCat['name']); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>

				<!-- section 3 -->
				<div class="col-md-4 mb-3 border-start border-2 border-secondary border-opacity-25">
					<h3>Contact Us Today</h3>
					<address class="text-white-50">
						Call Us: <u>082-483 570</u><br>
						Send an Email on <a href="mailto:ykacc@yungkong.com" target="_blank" rel="noopener noreferrer">
							ykacc@yungkong.com</a><br>
						Visit Us at <a href="https://maps.app.goo.gl/ZWygtHRJ35YiDgTn7" target="_blank"
							rel="noopener noreferrer">
							WISMA HII YII NGIIK, 3rd Floor, Lot 7573, Jalan Kwong Lee Bank, 93450</a>
					</address>

					<div class="d-flex justify-content-center gap-3 social-links">
						<a href="https://www.facebook.com/p/Yung-Kong-Co-Bhd-Hardware-%E4%BA%94%E9%87%91%E5%BA%97-100076001867357/"
							target="_blank" rel="noopener noreferrer">
							<i class="bi bi-facebook"></i>
						</a>
						<a href="https://api.whatsapp.com/send?phone=60168866571" target="_blank"
							rel="noopener noreferrer">
							<i class="bi bi-whatsapp"></i>
						</a>
						<a href="mailto:ykacc@yungkong.com" target="_blank" rel="noopener noreferrer">
							<i class="bi bi-envelope"></i>
						</a>
						<a href="https://maps.app.goo.gl/ZWygtHRJ35YiDgTn7" target="_blank" rel="noopener noreferrer">
							<i class="bi bi-geo"></i>
						</a>
					</div>



				</div>
			</div>
		</div>
	</div>

	<div class="footer-section-2 text-light py-4 text-white">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<!-- Copyright Text -->
				<span class="copytext">

					Copyright &copy; 2023 |
					<a href="https://www.yungkongco.com.my/">Yung Kong Co. Bhd.</a>
					(103194-T). <text style="color: #31aae2;">All Rights Reserved.</text>
				</span>

				<!-- Navigation Links -->
				<ul class="list-inline mb-0">

					<?php foreach ($pages as $page): ?>

						<li
							class="list-inline-item <?= ($currentPage == $page['url']) ? 'text-white' : 'text-white-50'; ?>">
							<a href="<?= htmlspecialchars($page['url']); ?>"
								class="footer-link"><?= htmlspecialchars($page['name']); ?></a>
						</li>

					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

	<!-- Back to Top Button -->
	<button id="back-to-top" class="btn btn-primary" title="Back to Top">
		<i class="bi bi-arrow-up fs-5"></i>
	</button>


</footer>