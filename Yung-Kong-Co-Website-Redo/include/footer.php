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

<footer class="text-light py-4">

	<div class="container">
		<div class="row">
			<!-- footer logo -->
			<div class="col-md-4 mb-3">
				<a href="index.php"><img src="img/yk_logo.png" alt="yk_logo"></a>
				<a href="index.php">
					<h1></br>榕 光 有 限 公 司</h1>
					<h2>YUNG KONG CO. BHD.</h2>
				</a>
			</div>

			<!-- footer products -->
			<div class="col-md-4 mb-3">
				<h3>Products</h3>
				<ul class="list-unstyled">

					<?php foreach ($footerProducts as $footerProduct): ?>
						<a href="products.php#<?php $footerProduct['url']; ?>">
							<i class="<?php $footerProduct['icon'] ?>"></i><?php echo $footerProduct['name'] ?></a></br>
					<?php endforeach ?>
				</ul>
			</div>

			<!-- Contact Us Today -->
			<div class="col-md-4 mb-3">
				<h3>Contact Us Today</h3>
				<address>
					Call Us: <u>082-483 570</u><br>
					Send an Email on <a href="mailto:ykacc@yungkong.com" target="_blank" rel="noopener noreferrer">
						ykacc@yungkong.com</a><br>
					Visit Us at <a href="https://maps.app.goo.gl/ZWygtHRJ35YiDgTn7" target="_blank"
						rel="noopener noreferrer">
						WISMA HII YII NGIIK, 3rd Floor, Lot 7573, Jalan Kwong Lee Bank, 93450</a>
				</address>

				<ul class="list-inline social-links">
					<li><a href="https://www.facebook.com/p/Yung-Kong-Co-Bhd-Hardware-%E4%BA%94%E9%87%91%E5%BA%97-100076001867357/"
							target="_blank" rel="noopener noreferrer">
							<i class="bi bi-facebook"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=60168866571" target="_blank"
							rel="noopener noreferrer">
							<i class="bi bi-whatsapp"></i></a></li>
					<li><a href="mailto:ykacc@yungkong.com" target="_blank" rel="noopener noreferrer">
							<i class="bi bi-envelope"></i></a></li>
					<li><a href="https://maps.app.goo.gl/ZWygtHRJ35YiDgTn7" target="_blank" rel="noopener noreferrer">
							<i class="bi bi-geo"></i></a></li>
				</ul>
			</div>
		</div>



		<div class="row">

			<ul class="list-inline mb-0">
				<span class="copytext">Copyright &copy; 2023 | <a href="https://www.yungkongco.com.my/">Yung Kong
						Co.
						Bhd.
					</a>(103194-T). <strong style="color: #31aae2;">All Rights Reserved.</strong></span>
				<?php $current_page = basename($_SERVER['SCRIPT_NAME']); ?>

				<li class="list-inline-item <?php echo ($current_page == 'index.php' ? 'active' : ''); ?>">
					<a href="index.php" class="text-light">Home</a>
				</li>
				<li class="list-inline-item <?php echo ($current_page == 'about.php' ? 'active' : ''); ?>">
					<a href="about.php" class="text-light">About</a>
				</li>
				<li class="list-inline-item <?php echo ($current_page == 'products.php' ? 'active' : ''); ?>">
					<a href="products.php" class="text-light">Products</a>
				</li>
				<li class="list-inline-item <?php echo ($current_page == 'contact.php' ? 'active' : ''); ?>">
					<a href="contact.php" class="text-light">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</footer>