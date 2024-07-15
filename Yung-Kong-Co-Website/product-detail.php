<!-- products.php -->

<?php

function searchProduct(): array
{
	$queryImg = isset($_GET['cat']) ? htmlspecialchars($_GET['cat']) : '';
	$queryId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';

	$found = false;


	$targetProduct = [
		PRODUCT_IMG_PATH => '',
		TITLE => '',
		IMG => '',
		DESC => '',
	];

	// search category
	foreach (PRODUCT_CATEGORY as $category) {

		if ($category[IMG] === $queryImg) { // search product from category
			$targetProduct[PRODUCT_IMG_PATH] = $category[PRODUCT_IMG_PATH];

			foreach ($category[PROD] as $prod) {
				if ($prod[IMG] === $queryId) {

					$targetProduct[TITLE] = $prod[TITLE];
					$targetProduct[IMG] = $prod[IMG];
					$targetProduct[DESC] = $prod[DESC];

					$found = true;
					break; // Exit loop once product is found
				}

				if ($found) {
					break; // Exit loop once category is found
				}
			}
		}
	}

	// Check if no product was found for the given query parameters
	if (!$found) {
		echo "
		<script type='text/javascript'>
			alert('No Product Found! Redirecting Back...');
			window.history.back();
		</script>";
		exit(); // Ensure script stops executing after redirect

	}

	return $targetProduct;
}



?>

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
						<h2>Product Details</h2>
					</div>
				</section>

				<section class="x-services">

					<section class="section-title text-center">
						<h2>Description</h2>
						<span class="bordered-icon">
							<i class="bi bi-circle"></i>
						</span>
					</section>

					<?php include_once PHPDATA_PATH . 'product_category.php'; ?>
					<?php $foundProduct = searchProduct(); // function ?>


					<!-- products-category -->
					<div class="container-fluid">
						<div class="col-md-6 col-sm-12">
							<div class="thumbnail">
								<img
									src="<?php echo IMG_PRODUCT . $foundProduct[PRODUCT_IMG_PATH] . $foundProduct['img'] ?>">
							</div>

						</div>
						<div class="col-md-6 col-sm-12">
							<div class="thumbnail">
								<h1>
									<?php echo $foundProduct[TITLE]; ?>
								</h1>

							</div>
						</div>

						<div class="col-md-6 col-sm-12">
							<p>
								<?php echo $foundProduct[DESC]; ?>
							</p>
						</div>

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