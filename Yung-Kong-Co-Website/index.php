<!DOCTYPE html>
<html>
<!-- header -->
<?php include_once 'include/header.php' ?>
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
				<?php include_once 'include/navbar.php' ?>

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
						<div class="row">

							<?php

							include_once 'json/product_category.php'; # load products
							foreach ($product_category as $products):

								?>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="thumbnail clearfix">

										<a href="products.php"><img class="img-responsive"
												src="img/product-categories/<?php echo $products['img']; ?>"
												alt="Image"></a>

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

						</div>
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
							<div class="row">
								<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
									<a href="">
										<div class="card-flyer">
											<div class="text-box">
												<div class="image-box">
													<img src="img/department/ykacc.jpg" />
												</div>
												<div class="text-container">
													<h6>Account Department</h6>

													<i class="bi bi-geo icon-lg">
														
														<p>Address</p>
													</i>



												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
									<a href="">
										<div class="card-flyer">
											<div class="text-box">
												<div class="image-box">
													<img src="img/department/ykbtw.jpg" />
												</div>
												<div class="text-container">
													<h6>Bintawa Department</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum has been the industry's standard dummy
														text
														ever since the 1500s.</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
									<a href="">
										<div class="card-flyer">
											<div class="text-box">
												<div class="image-box">
													<img src="img/department/ykmatang.jpg" />
												</div>

												<div class="text-container">
													<h6>Matang Department</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum has been the industry's standard dummy
														text
														ever since the 1500s.</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
									<a href="">
										<div class="card-flyer">
											<div class="text-box">
												<div class="image-box">
													<img src="img/department/ykpending.jpg" />
												</div>

												<div class="text-container">
													<h6>Pending Department</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum has been the industry's standard dummy
														text
														ever since the 1500s.</p>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
									<a href="">
										<div class="card-flyer">
											<div class="text-box">
												<div class="image-box">
													<img src="img/department/ykpenrissen.jpg" />
												</div>
												<div class="text-container">
													<h6>Penrissen Department</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum has been the industry's standard dummy
														text
														ever since the 1500s.</p>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>








				<!-- Product Brands -->
				<section class="client-logo ptb-100">

					<?php include_once 'json/brand_logo.php' ?>

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
				<?php include_once 'include/footer.php' ?>

			</div>
			<!-- .content-wrapper -->
		</div>
		<!-- .offcanvas-pusher -->

		<!-- uc-mobile-menu -->
		<?php include_once 'include/uc-mobile-menu.php' ?>

	</div>
	<!-- #main-wrapper -->

	<!-- Script -->
	<?php include_once 'include/script-src.php' ?>

</body>

</html>