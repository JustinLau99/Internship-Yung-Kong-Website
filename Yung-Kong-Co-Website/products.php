<!-- products.php -->


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

























				<section class="product-sidebar">

					<!-- products-category -->
					<div class="container-fluid">

						<?php include_once PHPDATA_PATH . 'product_category.php'; ?>
						<?php foreach ($product_category as $category): ?>


							<div class="section" id="<?php echo $category[IMG] ?>">
								<div class="sticky-button">
									<a href="#" class="btn btn-primary"><?php echo $category[TITLE] ?></a>
								</div>
								<div class="row">

									<?php foreach ($category['prod'] as $prod): ?>

										<div class="col-md-2 col-sm-3 col-xs-6">
											<div class="card">

												<img src="<?php echo IMG_PRODUCT . $category[PRODUCT_IMG_PATH] . $prod[IMG] ?>"
													class="img-fluid">

												<h2 class="card-title mt-3 mb-3"><?php echo $prod[TITLE] ?></h2>
												<p class="card-text">
													[Product Description]
												</p>
											</div>
										</div>

									<?php endforeach; ?>

								</div>
							</div>

						<?php endforeach; ?>

					</div>



				</section>


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