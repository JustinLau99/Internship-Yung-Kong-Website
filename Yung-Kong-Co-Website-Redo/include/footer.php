<!-- footer.php -->



<?php
$footerProducts = [
	['url' => 'building_materials_category.jpg', 'icon' => 'bi bi-house-door-fill', 'name' => 'Building Materials'],
	['url' => 'bolts_fasteners_category.jpg', 'icon' => 'bi bi-nut-fill', 'name' => 'Bolts & Fasteners'],
	['url' => 'hand_tools_category.jpg', 'icon' => 'bi bi-wrench', 'name' => 'Hand Tools'],
	['url' => 'general_household_category.jpg', 'icon' => 'bi bi-ladder', 'name' => 'General & Household'],
	['url' => 'welding_machinery_category.jpg', 'icon' => 'bi bi-door-open-fill', 'name' => 'Welding & Machinery'],
	['url' => 'safety_security_category.jpg', 'icon' => 'bi bi-lock-fill', 'name' => 'Safety & Security'],
	['url' => 'electrical_accessories_category.jpg', 'icon' => 'bi bi-lightning-fill', 'name' => 'Electrical Accessories'],
	['url' => 'plumbing_category.jpg', 'icon' => 'bi bi-battery-full', 'name' => 'Plumbing'],
	['url' => 'power_tools_category.jpg', 'icon' => 'bi bi-plug-fill', 'name' => 'Power Tools'],
	['url' => 'paint_category.jpg', 'icon' => 'bi bi-paint-bucket', 'name' => 'Paint '],
];




?>

<footer class="footer">
	<div class="footer-section-1 text-light py-4">
		<div class="container">
			<div class="row text-center">
				<!-- section 1 -->
				<div class="col-md-4 mb-3 border-end border-2 border-secondary border-opacity-25">
					<a href="index.php"><img src="img/yk_logo.png" class="img-fluid" alt="yk_logo"></a>
					<a href="index.php">
						<h1 class="fs-5 lh-lg ">榕 光 有 限 公 司</h1>
						<h2 class="fs-5">YUNG KONG CO. BHD.</h2>
					</a>
				</div>

				<!-- section 2 -->
				<div class="col-md-4 mb-3">
					<h3>Products</h3>
					<ul class="list-unstyled text-start ms-5">
						<?php foreach ($footerProducts as $footerProduct): ?>
							<li><a href="products.php#<?php echo $footerProduct['url']; ?>">
									<i class="<?php echo $footerProduct['icon']; ?>"></i>
									<?php echo $footerProduct['name']; ?></a></li>
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

	<div class="footer-section-2 text-light py-4">
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
					<?php $current_page = basename($_SERVER['SCRIPT_NAME']); ?>
					<?php
					$pages = [
						['url' => 'index.php', 'name' => 'Home'],
						['url' => 'products.php', 'name' => 'Products'],
						['url' => 'contact.php', 'name' => 'Contact Us'],
						['url' => 'onlineShop.php', 'name' => 'Online Shop'],
					];
					?>

					<?php foreach ($pages as $page): ?>
						<li class="list-inline-item <?= $current_page == $page['url'] ? 'text-white' : 'text-white-50'; ?>">
							<a href="<?= $page['url'] ?>" class="footer-link"><?= $page['name'] ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

</footer>


