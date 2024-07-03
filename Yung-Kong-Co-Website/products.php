<?php include_once 'config/config.php'; ?> <!-- define path -->


<!DOCTYPE html>
<html>
<!-- header -->
<?php include_once INCLUDE_PATH . 'header.php'; ?>

<body>
	<div id="main-wrapper">

		<!-- Page Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>

		<!-- mobile menu -->
		<div class="uc-mobile-menu-pusher">

			<div class="content-wrapper">



				<!-- navbar -->
				<?php include_once INCLUDE_PATH . 'navbar.php'; ?>



				<!-- page-title -->
				<section class="single-page-title">

					<div class="container text-center">
						<h2>Product Categories</h2>
					</div>
				</section>





















				<!-- products-category -->
				<?php include_once PHPDATA_PATH . 'product_category.php'; ?>



				<div class="container-fluid">




					<?php foreach ($product_category as $category): ?>

						<div class="card card-block left">
							<a href="#" class="btn btn-primary"><?php echo $category[TITLE] ?></a>
						</div>

						<div class="row">

							<?php foreach ($category['prod'] as $product): ?>

								<div class="col-md-2 col-sm-3 col-xs-6">
									<div class="card card-block">
										<img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg"
											alt="Photo of sunset">
										<h5 class="card-title mt-3 mb-3"><?php echo $product[TITLE] ?></h5>
										<p class="card-text">
											[Product Description]
										</p>
									</div>
								</div>

							<?php endforeach; ?>

						</div>

					<?php endforeach; ?>


				</div>














				<!-- footer -->
				<?php include_once INCLUDE_PATH . 'footer.php'; ?>

			</div>
			<!-- /content-wrapper -->
		</div>
		<!-- /offcanvas-pusher -->


		<!-- uc-mobile-menu -->
		<?php include_once INCLUDE_PATH . 'uc-mobile-menu.php'; ?>


	</div>
	<!-- #main-wrapper -->


	<!-- script -->
	<?php include_once INCLUDE_PATH . 'script-src.php'; ?>
	<!-- /script -->

</body>

</html>