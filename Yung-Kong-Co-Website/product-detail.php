<!-- products.php -->

<?php

function searchProduct(): array
{
	$queryImg = isset($_GET['cat']) ? htmlspecialchars($_GET['cat']) : '';
	$queryId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';

	$found = false;


	$targetProduct = [
		PRODUCT_IMG_PATH => '',
		'title' => '',
		'img' => '',
	];

	// search category
	foreach (PRODUCT_CATEGORY as $category) {

		if ($category[IMG] === $queryImg) { // search product from category
			$targetProduct[PRODUCT_IMG_PATH] = $category[PRODUCT_IMG_PATH];

			foreach ($category[PROD] as $prod) {
				if ($prod[IMG] === $queryId) {

					$targetProduct['title'] = $prod[TITLE];
					$targetProduct['img'] = $prod[IMG];

					$found = true;
					break; // Exit loop once product is found
				}

				if ($found) {
					break; // Exit loop once category is found
				}
			}
		}
	}

	foreach ($targetProduct as $value) {
		echo $value . '<br>';
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


					<?php include_once PHPDATA_PATH . 'product_category.php'; ?>


					<?php $foundProduct = searchProduct(); ?>


					<!-- products-category -->
					<div class="container-fluid">
						<div class="col-md-6 col-sm-12">
							<div class="thumbnail">
								<img
									src="<?php echo IMG_PRODUCT . $foundProduct[PRODUCT_IMG_PATH] . $foundProduct['img'] ?>">
									<?php echo IMG_PRODUCT . $foundProduct[PRODUCT_IMG_PATH] . $foundProduct['img'] ?>
							</div>

						</div>
						<div class="col-md-6 col-sm-12">
							<div class="thumbnail">
								product description
							</div>
						</div>

						<div class="col-md-6 col-sm-12">


						</div>

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