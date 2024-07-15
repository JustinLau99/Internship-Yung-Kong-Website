<!-- products.php -->


<?php include_once 'config/config.php'; ?> <!-- define path -->

<!DOCTYPE html>
<html>

<?php include_once INCLUDE_PATH . 'header.php'; ?><!-- header -->

<body>
	<div id="main-wrapper">

		<?php include_once INCLUDE_PATH . 'preloader.php' ?><!-- preloader -->


		<!-- mobile menu -->
		<div class="uc-mobile-menu-pusher">

			<div class="content-wrapper">



				<?php include_once INCLUDE_PATH . 'navbar.php'; ?><!-- navbar -->


				<!-- page-title -->
				<section class="single-page-title">

					<div class="container text-center">
						<h2>Product Categories</h2>
					</div>

				</section>

				<section class="x-services gray-bg">



					<!-- products-category -->

					<div class="container-fluid">

						<?php include_once PHPDATA_PATH . 'product_category.php'; ?>
						<?php foreach (PRODUCT_CATEGORY as $category): ?>

							<section class="x-services bg-dark" id="<?php echo $category[IMG] ?>">

								<section class="section-title text-center">
									<h2><?php echo $category[TITLE] ?></h2>
									<span class="bordered-icon">
										<i class="bi bi-circle"></i>
									</span>
								</section>

								<div class="row" >

									<?php foreach ($category[PROD] as $prod): ?>

										<div class="col-md-2 col-sm-3 col-xs-6">
											<a
												href="product-detail.php?cat=<?php echo $category[IMG]; ?>&id=<?php echo $prod[IMG] ?>">

												<div class="card">

													<div class="img-box">
														<img
															src="<?php echo IMG_PRODUCT . $category[PRODUCT_IMG_PATH] . $prod[IMG] ?>">
													</div>


													<div class="caption">
														<h3><?php echo $prod[TITLE]; ?></h3><!-- product Title -->
													</div>

												</div>

											</a>
										</div>

									<?php endforeach; ?>

								</div>
							</section>

						<?php endforeach; ?>

					</div>


				</section>
				
				<?php include_once INCLUDE_PATH . 'footer.php'; ?><!-- footer -->

			</div>
			<!-- /content-wrapper -->
		</div>
		<!-- /offcanvas-pusher -->
		
		<?php include_once INCLUDE_PATH . 'uc-mobile-menu.php'; ?><!-- uc-mobile-menu -->


	</div>
	<!-- #main-wrapper -->
	
	<?php include_once INCLUDE_PATH . 'script-src.php'; ?><!-- script -->

</body>

</html>