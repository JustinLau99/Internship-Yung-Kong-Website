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
						<h2>Product Details</h2>
					</div>
				</section>

				<section>

					<!-- products-category -->
					<div class="container-fluid">

						<?php include_once PHPDATA_PATH . 'product_category.php'; ?>

						<?php

						$queryImg = isset($_GET['cat']) ? htmlspecialchars($_GET['cat']) : '';
						$queryId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';

						$found = false;

						// Loop through each category
						foreach (PRODUCT_CATEGORY as $category) {

							if ($category[IMG] === $queryImg) {

								foreach ($category[PROD] as $prod) {
									if ($prod[IMG] === $queryId) {
										$found = true;

										echo '$prod[TITLE] = ' . $prod[TITLE] . '</br>';
										echo '$prod[IMG] = ' . $prod[IMG] . '</br>';
									}
								}
							}


						}

						// Check if no product was found for the given query parameters
						if (!$found) {
							echo 'No matching product found for the given category and image.';
						}


						?>

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