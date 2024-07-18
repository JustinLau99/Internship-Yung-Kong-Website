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


				<!-- dropdown menu -->
				<!-- 
				<li class="dropdown m-menu-fw <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>">
					<ul class="dropdown-menu show">
						<li>
							<div class="m-menu-content">
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#building_materials_category.jpg">		Building Materials</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#bolts_fasteners_category.jpg">			Bolts and Fasteners</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#hand_tools_category.jpg">				Hand Tools</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#general_household_category.jpg">		General Household</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#welding_machinery_category.jpg">		Welding Machinery</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#safety_security_category.jpg">			Safety Security</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#electrical_accessories_category.jpg">	Electrical Accessories</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#plumbing_category.jpg">				Plumbing</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#power_tools_category.jpg">				Power Tools</a> </li> </ul>
								<ul class="col-md-10th col-md-2 col-sm-2"><li> <a href="products.php#paint_category.jpg">					Paint</a> </li> </ul>
							</div>
						</li>
					</ul>
				</li>
				 -->
				<!-- dropdown menu -->
				

				
				<section class="x-services bg-gray">

					<div class="container-fluid">

						<?php include_once PHPDATA_PATH . 'product_category.php'; ?>
						<!-- Product Category -->
						<?php foreach (PRODUCT_CATEGORY as $category): ?>

							<section class="x-services bg-dark" id="<?php echo $category[IMG] ?>">

								<section class="section-title text-center">
									<h2><?php echo $category[TITLE] ?></h2>
									<span class="bordered-icon">
										<i class="bi bi-circle"></i>
									</span>
								</section>

								<div class="row">

									<!-- Each Product from category -->
									<?php foreach ($category[PROD] as $prod): ?>

										<div class="col-md-2 col-sm-3 col-xs-6">
											<a href="product-detail.php?
												cat=<?php echo $category[IMG]; ?>&id=<?php echo $prod[IMG] ?>">

												<div class="card">

													<div class="img-box">
														<!-- product image -->
														<img
															src="<?php echo IMG_PRODUCT . $category[PRODUCT_IMG_PATH] . $prod[IMG] ?>">
													</div>


													<div class="caption">
														<!-- product Title -->
														<h3><?php echo $prod[TITLE]; ?></h3>
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