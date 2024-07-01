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

		<!-- mobile menu -->
		<div class="uc-mobile-menu-pusher">

			<div class="content-wrapper">

				<!-- navbar -->
				<?php include_once 'include/navbar.php'; ?>
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
					<?php

					foreach ($product_categories as $category):

						?>
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
						<?php
					endforeach;
					?>


				</div>









				<div class="container-fluid bg-transparent my-4 p-3" style="position: relative;">
					<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
						<div class="col">
							<div class="card h-100 shadow-sm">
								<img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png"
									class="card-img-top" alt="...">
								<div class="card-body">
									<span class="float-start badge rounded-pill bg-primary">ASUS Rog</span>
									<span class="float-end price-hp">12354.00&euro;</span>
									<h5 class="card-title">
										Lorem, ipsum dolor sit amet consectetur adipisicing elit.
										Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum
										ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.
									</h5>
									<div class="text-center my-4">
										<a href="#" class="btn btn-warning">Check offer</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100 shadow-sm">
								<img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png"
									class="card-img-top" alt="...">
								<div class="card-body">
									<span class="float-start badge rounded-pill bg-success">12354.00&euro;</span>
									<span class="float-end"><a href="#">Example</a></span>
									<h5 class="card-title">
										Lorem, ipsum dolor sit amet consectetur adipisicing elit.
										Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum
										ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.
									</h5>
									<div class="d-grid gap-2 my-4">
										<a href="#" class="btn btn-warning">Check offer</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100 shadow-sm">
								<img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png"
									class="card-img-top" alt="...">
								<div class="label-top shadow-sm">Asus Rog</div>
								<div class="card-body">
									<div class="clearfix mb-3">
										<span class="float-start badge rounded-pill bg-success">12354.00&euro;</span>
										<span class="float-end"><a href="#" class="small text-muted">Reviews</a></span>
									</div>
									<h5 class="card-title">
										Lorem, ipsum dolor sit amet consectetur adipisicing elit.
										Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum
										ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.
									</h5>
									<div class="text-center my-4">
										<a href="#" class="btn btn-warning">Check offer</a>
									</div>
									<div class="clearfix mb-1">
										<span class="float-start"><i class="far fa-question-circle"></i></span>
										<span class="float-end"><i class="fas fa-plus"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card h-100">
								<img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png"
									class="card-img-top" alt="...">
								<div class="label-top shadow-sm">DELL</div>
								<div class="card-body">
									<div class="clearfix mb-3">
										<span class="float-start price-hp">12354.00&euro;</span>
										<span class="float-end"><a class="text-muted small" href="#">Reviews</a></span>
									</div>
									<h5 class="card-title">
										Lorem, ipsum dolor sit amet consectetur adipisicing elit.
										Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum
										ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.
									</h5>
									<div class="text-center my-4">
										<a href="#" class="btn btn-warning">Check offer</a>
									</div>
									<div class="clearfix mb-1">
										<span class="float-start"><i class="far fa-question-circle"></i></span>
										<span class="float-end"><i class="fas fa-plus"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>













				<!-- footer -->
				<?php include_once 'include/footer.php'; ?>
				<!-- /footer -->

			</div>
			<!-- /content-wrapper -->
		</div>
		<!-- /offcanvas-pusher -->


		<!-- uc-mobile-menu -->
		<?php include_once 'include/uc-mobile-menu.php'; ?>
		<!-- uc-mobile-menu -->


	</div>
	<!-- #main-wrapper -->


	<!-- script -->
	<?php include_once 'include/script-src.php'; ?>
	<!-- /script -->

</body>

</html>