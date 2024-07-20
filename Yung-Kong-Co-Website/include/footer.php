<!-- Footer Widget Section -->

<footer class="footer">

	<div class="footer-widget-section">
		<div class="container text-center">
			<div class="row">
				<!-- section 1 -->
				<div class="col-sm-4 footer-block">
					<div class="footer-widget br-2">
						<a href="index.php"><img src="img/yk_logo.png" alt="yk_logo"
						style="max-width: 100px; height: auto;"></a>
						<a href="index.php">
							<h1></br>榕 光 有 限 公 司</h1>
							<h2>YUNG KONG CO. BHD.</h2>
						</a>
					</div>
				</div>
				
				<!-- section 2 -->
				<div class="col-sm-4 footer-block">
					<div class="footer-widget widget_text">
						<h3>Products</h3>
						<p>
							
							<a href="products.php#building_materials_category.jpg"> <i class="bi bi-house-door-fill">
								</i>Building Materials </a></br>
								<a href="products.php#bolts_fasteners_category.jpg"> <i class="bi bi-nut-fill"> </i>Bolts &
								Fasteners </a></br>
								<a href="products.php#hand_tools_category.jpg"> <i class="bi bi-wrench"> </i>Hand Tools
							</a></br>
							<a href="products.php#general_household_category.jpg"> <i class="bi bi-ladder"> </i>General
							& Household </a></br>
							<a href="products.php#welding_machinery_category.jpg"> <i class="bi bi-door-open-fill">
								</i>Welding & Machinery </a></br>
								<a href="products.php#safety_security_category.jpg"> <i class="bi bi-lock-fill"> </i>Safety
								& Security </a></br>
								<a href="products.php#electrical_accessories_category.jpg"> <i class="bi bi-lightning-fill">
								</i>Electrical Accessories </a></br>
							<a href="products.php#plumbing_category.jpg"> <i class="bi bi-battery-full"> </i>Plumbing
							</a></br>
							<a href="products.php#power_tools_category.jpg"> <i class="bi bi-plug-fill"> </i>Power Tools
							</a></br>
							<a href="products.php#paint_category.jpg"> <i class="bi bi-paint-bucket"> </i>Paint </a>
							
						</p>
					</div>
				</div>
				
				<!-- section 3 -->
				<div class="col-sm-4 footer-block last">
					<div class="footer-widget widget_text">
						<h3>Contact Us Today</h3>
						<address>
							Call Us: <u>082-483 570</u><br>
							Send an Email on <a href="mailto:ykacc@yungkong.com" target="_blank"
								rel="noopener noreferrer">
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
							<li><a href="https://maps.app.goo.gl/ZWygtHRJ35YiDgTn7" target="_blank"
									rel="noopener noreferrer">
									<i class="bi bi-geo"></i></a></li>
						</ul>
					</div>
				</div><!-- /.col-sm-4 -->
			</div>
		</div>
	</div><!-- /.Footer Widget Section -->

	<div class="copyright-section">
		<div class="container clearfix">
			<span class="copytext">Copyright &copy; 2023 | <a href="https://www.yungkongco.com.my/">Yung Kong Co. Bhd.
				</a>(103194-T). <strong style="color: #31aae2;">All Rights Reserved.</strong></span>

			<ul class="list-inline pull-right">

				<?php $current_page = basename($_SERVER['SCRIPT_NAME']); ?>

				<?php echo ($current_page == 'index.php' ? '<li class="active">' : '<li>') ?><a
					href="index.php">Home</a>
				</li>
				<?php echo ($current_page == 'about.php' ? '<li class="active">' : '<li>') ?><a
					href="about.php">About</a></li>
				<?php echo ($current_page == 'products.php' ? '<li class="active">' : '<li>') ?><a
					href="products.php">Products</a></li>
				<?php echo ($current_page == 'contact.php' ? '<li class="active">' : '<li>') ?><a
					href="contact.php">Contact</a></li>

			</ul>
		</div>
		<!-- .container -->
	</div>
	<!-- .copyright-section -->

</footer>
<!-- .footer -->