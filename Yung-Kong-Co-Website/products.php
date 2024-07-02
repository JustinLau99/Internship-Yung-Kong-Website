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
				<!-- navbar -->



				<!-- page-title -->
				<section class="single-page-title">

					<div class="container text-center">
						<h2>Product Categories</h2>
					</div>
				</section>























				<!-- display carousel products -->
				<?php include_once 'json/product_category.php';

				$product_categories = [
					$products_data['building_materials'],
					$products_data['bolts_fasteners'],
					$products_data['hand_tools'],
					$products_data['general_household'],
					$products_data['welding_machinery'],
					$products_data['safety_security'],
					$products_data['electrical_accessories'],
					$products_data['plumbing'],
					$products_data['power_tools'],
					$products_data['paint'],
				];

				?>

				<!-- products-category -->
				<div class="container-fluid">

					<?php foreach ($product_categories as $category): ?>

						<div class="row">
							<div class="col-md-9">
								<h3><?php echo $category['title'] ?></h3>
							</div>
						</div>

						<div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">

								<?php foreach ($category['prod'] as $product): ?>

									<div class="col-md-2 col-sm-3" style="min-height: 400px;">
										<img src="http://placehold.it/350x260" class="img-responsive" alt="a" />

										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5><?php echo $product['title'] ?></h5>
												</div>
											</div>
											<div class="separator clear-left">

												<p class="btn-details"><i class="fa fa-list"></i>
													<a href="" class="hidden-sm">More details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>

								<?php endforeach; ?>

							</div>
						</div>

					<?php endforeach; ?>


				</div>






				<div class="container-fluid">




					<?php foreach ($product_categories as $category): ?>

						<div class="card card-block left">
							<a href="#" class="btn btn-primary"><?php echo $category['title'] ?></a>
						</div>

						<div class="row">

							<?php foreach ($category['prod'] as $product): ?>

								<div class="col-md-2 col-sm-3 col-xs-6">
									<div class="card card-block">
										<img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg"
											alt="Photo of sunset">
										<h5 class="card-title mt-3 mb-3"><?php echo $product['title'] ?></h5>
										<p class="card-text">
											This is a company that builds websites, web apps and e-commerce solutions.
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