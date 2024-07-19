<!-- index.php -->

<?php include_once 'config/config.php'; ?><!-- define path -->

<!DOCTYPE html>
<html>

<?php include_once INCLUDE_PATH . 'header.php'; ?><!-- header -->

<body>


	<div id="main-wrapper">

		<?php include_once INCLUDE_PATH . 'preloader.php' ?><!-- preloader -->

		<div class="uc-mobile-menu-pusher">

			<!-- index -->
			<div class="content-wrapper">


				<?php include_once INCLUDE_PATH . 'navbar.php'; ?><!-- navbar -->



				<!-- Indicators -->



				<!-- carousel -->

				<section>

					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<!-- button -->
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
								class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
								aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
								aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
								aria-label="Slide 4"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
								aria-label="Slide 5"></button>

						</div>
						<!-- content -->
						<div class="carousel-inner">
							<div class="carousel-item active"> <img src="img/department/slider-ykacc.jpg"
									class="d-block w-100" alt="..."></div>
							<div class="carousel-item"> <img src="img/department/slider-ykbtw.jpg" class="d-block w-100"
									alt="...">
							</div>
							<div class="carousel-item"> <img src="img/department/slider-ykmatang.jpg"
									class="d-block w-100" alt="..."></div>
							<div class="carousel-item"> <img src="img/department/slider-ykpending.jpg"
									class="d-block w-100" alt="..."></div>
							<div class="carousel-item"> <img src="img/department/slider-ykpenrissen.jpg"
									class="d-block w-100" alt="..."></div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</section>





				<!-- productList -->
				<section class="x-services bg-gray">
					<section class="section-title text-center">
						<h2>What We Offer</h2>
						<span class="bordered-icon">
							<i class="bi bi-circle"></i>
						</span>
					</section>


					<div class="container-fluid">

						<div class="equal-height">

							<?php include_once PHPDATA_PATH . 'product_category.php'; ?>
							<?php foreach (PRODUCT_CATEGORY as $products): ?>

								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="thumbnail">

										<a href="products.php#<?php echo $products[IMG] ?>">
											<img class="img-responsive"
												src="<?php echo IMG_PRODUCT_CATEGORY . $products[IMG]; ?> ">
										</a>

										<div class="caption">

											<h3><!-- product Title -->
												<a href="products.php"><?php echo $products[TITLE]; ?></a>
											</h3>

											<ul><!-- product subcategory-->
												<?php foreach ($products[SUBCATEGORY] as $prod): ?>
													<li> • <?php echo $prod; ?></li>
												<?php endforeach; ?>
											</ul>

										</div>
									</div>
								</div>

							<?php endforeach; ?>

						</div>
					</div>

				</section>

				<!-- Departments -->
				<section class="x-features">
					<section class="section-title">
						<div class="container text-center">
							<h2>Our Departments</h2>
							<span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
						</div>
					</section>

					<div id="cards_landscape_wrap-2">
						<div class="container-fluid">


							<?php include_once PHPDATA_PATH . 'departments.php'; ?>
							<?php foreach (DEPARTMENTS as $depart): ?>

								<div class="col-md-5th col-sm-4 col-xs-6 section-margin ">
									<a href="">
										<div class="card-flyer">
											<div class="text-box">

												<div class="image-box">
													<img src="<?php echo IMG_DEPARTMENT . $depart[IMG] ?>" />
												</div>
												<div class="text-container">

													<h6><?php echo $depart['name'] ?></h6>

													<i class="bi bi-geo icon-lg">
														<p><?php echo $depart['address'] ?></p>
													</i>
													<i class="bi bi-telephone icon-lg">
														<p><?php echo $depart['tel'] ?></p>
													</i>
													<i class="bi bi-whatsapp icon-lg">
														<p><?php echo $depart['whatsapp'] ?></p>
													</i>
													<i class="bi bi-envelope icon-lg">
														<p><?php echo $depart['mail'] ?></p>
													</i>
													<p>Fax: <?php echo $depart['fax'] ?></p>
												</div>
											</div>
										</div>
									</a>
								</div>

							<?php endforeach; ?>



						</div>
					</div>
				</section>








				<!-- Product Brands -->
				<section class="client-logo ptb-100">

					<?php include_once PHPDATA_PATH . 'brand_logo.php'; ?>

					<section class="section-title">
						<div class="container text-center">
							<h2>Our Key Product Brands</h2>
							<span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
						</div>
					</section>

					<div class="container-fluid">

						<?php foreach ($brand_logo as $brand): ?>

							<div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 section-margin">
								<a href="#">
									<img src="<?php echo IMG_BRAND . $brand['src']; ?>">
								</a>
							</div>

						<?php endforeach; ?>

					</div>
				</section>











				<?php include_once INCLUDE_PATH . 'footer.php'; ?><!-- footer -->

			</div>
			<!-- .content-wrapper -->
		</div>
		<!-- .offcanvas-pusher -->


		<?php include_once INCLUDE_PATH . 'uc-mobile-menu.php'; ?><!-- uc-mobile-menu -->

	</div>
	<!-- #main-wrapper -->


	<?php include_once INCLUDE_PATH . 'script-src.php'; ?><!-- Script -->

</body>

</html>