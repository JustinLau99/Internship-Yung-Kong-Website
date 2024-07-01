<!DOCTYPE html>
<html>
<!-- header -->
<?php include_once 'include/header.php'; ?>
<!-- .header -->

<body>

	<div id="main-wrapper">
		<!-- Page Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<div class="uc-mobile-menu-pusher">

			<!-- index -->
			<div class="content-wrapper">

				<!-- navbar -->
				<?php include_once 'include/navbar.php'; ?>

				<!-- Indicators -->
				<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">

					<ol class="carousel-indicators">
						<li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#x-corp-carousel" data-slide-to="1" class=""></li>
						<li data-target="#x-corp-carousel" data-slide-to="2" class=""></li>
						<li data-target="#x-corp-carousel" data-slide-to="3" class=""></li>
						<li data-target="#x-corp-carousel" data-slide-to="4" class=""></li>
					</ol>

					<div class="carousel-caption">
						<h1>Welcome to Yung Kong Co. Bhd.</h1>

						<p>[Information placeholder].</p>
					</div>

					<div class="carousel-inner" role="listbox">

						<div class="item active"><img src="img/department/slider-ykacc.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykbtw.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykmatang.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykpending.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykpenrissen.jpg" class="dim-img"></div>

					</div>

					<a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>








				<!-- productList -->
				<section class="x-services ptb-100 gray-bg">
					<section class="section-title">
						<div class="container text-center">
							<h2>What We Offer</h2>
							<span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
						</div>
					</section>

					<div class="container-fluid">

						<?php

						include_once 'json/product_category.php'; # load products
						foreach ($product_category as $products):

							?>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<div class="thumbnail clearfix">

									<a href="products.php"><img class="img-responsive"
											src="img/product-categories/<?php echo $products['img']; ?>" alt="Image"></a>

									<div class="caption">

										<h3>
											<a href="products.php">
												<?php echo $products['title']; ?>
											</a>
										</h3>

										<ul>
											<?php foreach ($products['subCategory'] as $product): ?>
												<li> •
													<?php echo $product; ?>
												</li>
											<?php endforeach; ?>
										</ul>


									</div>
								</div>
							</div>

						<?php endforeach; ?>

						<!-- /.row -->
					</div>
					<!-- /.container -->

				</section>

				<!-- Departments -->
				<!-- Topic Cards -->
				<section class="x-features">
					<section class="section-title">
						<div class="container text-center">
							<h2>Our Departments</h2>
							<span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
						</div>
					</section>

					<div id="cards_landscape_wrap-2">
						<div class="container-fluid">

							<?php include_once 'phpData/departments.php'; ?>
							<?php foreach ($departments as $depart): ?>

								<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
									<a href="">
										<div class="card-flyer">
											<div class="text-box">

												<div class="image-box">
													<img src="img/department/<?php echo $depart['img'] ?>" />
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

					<?php include_once 'json/brand_logo.php'; ?>

					<section class="section-title">
						<div class="container text-center">
							<h2>Our Key Product Brands</h2>
							<span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
						</div>
					</section>

					<div class="container">

						<?php foreach ($brand_data['brand_logo'] as $brand): ?>

							<div class="col-md-2 col-sm-4 col-xs-6 section-margin">
								<a href="#">
									<img src="img/brands/<?php echo $brand['src']; ?>" alt="<?php echo $brand['alt']; ?>">
								</a>
							</div>

						<?php endforeach; ?>

					</div>
				</section>










				<!-- footer -->
				<?php include_once 'include/footer.php'; ?>

			</div>
			<!-- .content-wrapper -->
		</div>
		<!-- .offcanvas-pusher -->

		<!-- uc-mobile-menu -->
		<?php include_once 'include/uc-mobile-menu.php'; ?>

	</div>
	<!-- #main-wrapper -->

	<!-- Script -->
	<?php include_once 'include/script-src.php'; ?>

</body>

</html>