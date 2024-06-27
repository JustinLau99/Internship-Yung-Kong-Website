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
			<div class="content-wrapper">

				<!-- .nav -->
				<?php include_once 'include/navbar.php' ?>
				<!-- /nav -->



				<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">

					<!-- Indicators -->
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

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<div class="item active"><img src="img/department/slider-ykacc.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykbtw.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykmatang.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykpending.jpg" class="dim-img"></div>
						<div class="item"><img src="img/department/slider-ykpenrissen.jpg" class="dim-img"></div>

					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!-- #x-corp-carousel-->


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
							# load products
							include_once 'phpData/productList.php';
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
				<!-- /productList -->



				<section class="client-logo ptb-100">
					<section class="section-title">
						<div class="container text-center">
							<h2>Our Departments</h2>
							<span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
						</div>
					</section>
					<div class="container-fluid">
						<div class="row">

							<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
								<a href="#">
									<p>Account Department</p><img src="img/department/ykacc.jpg" alt="Image">
								</a>
							</div>
							<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
								<a href="#">
									<p>Bintawa Department</p><img src="img/department/ykbtw.jpg" alt="Image">
								</a>
							</div>
							<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
								<a href="#">
									<p>Matang Department</p><img src="img/department/ykmatang.jpg" alt="Image">
								</a>
							</div>
							<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
								<a href="#">
									<p>Pending Department</p><img src="img/department/ykpending.jpg" alt="Image">
								</a>
							</div>
							<div class="col-md-5th col-sm-4 col-xs-6 section-margin">
								<a href="#">
									<p>Penrissen Department</p><img src="img/department/ykpenrissen.jpg" alt="Image">
								</a>
							</div>

						</div>
					</div>
					<!--end of .container -->
				</section>
				<!-- /.client-logo -->





				<!-- footer -->
				<?php include_once 'include/footer.php' ?>
				<!-- .footer -->

			</div>
			<!-- .content-wrapper -->
		</div>
		<!-- .offcanvas-pusher -->

		<!-- uc-mobile-menu -->
		<?php include_once 'include/uc-mobile-menu.php' ?>
		<!-- uc-mobile-menu -->

	</div>
	<!-- #main-wrapper -->

	<!-- Script -->
	<?php include_once 'include/script-src.php' ?>

</body>

</html>