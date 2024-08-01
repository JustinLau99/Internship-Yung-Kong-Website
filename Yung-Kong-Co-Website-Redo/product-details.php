<!-- product-details.php -->


<?php

include_once 'phpData/readCSV.php';

// search for targetted item

$stock_item_type_listing = readCSVData('phpData/stock_item_type_listing.csv');
$product_category = readCSVData('phpData/product_category.csv');

$cat = isset($_GET['cat']) ? htmlspecialchars($_GET['cat']) : '';
$id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';

$foundProd = null;

foreach ($stock_item_type_listing as $item) {
	if (
		($cat === '' || $item['item_type'] === $cat) &&
		($id === '' || $item['img_path'] === $id)
	) {
		$foundProd = $item;
		break; // Stop after finding the first match
	}
}

$foundCategory = null;

if ($foundProd !== null) {
	foreach ($product_category as $category) {
		if ($foundProd['item_type'] === $category['item_type']) {
			$foundCategory = $category;
			break;
		}
	}
}




?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->


<body>

	<?php include_once 'include/navbar.php'; ?><!-- navbar.php -->

	<!-- Parallax Section -->
	<section class="parallax-section">
		<div class="parallax-image"></div>
		<div class="parallax-content text-shadow-lg text-center">
			<h1>Product Details</h1>
		</div>
	</section>



	<?php if ($foundProd === null): ?>
		<p>No item found.</p>
	<?php else: ?>

		<?= htmlspecialchars($foundProd['item_group']) . '<br>'; ?>
		<?= htmlspecialchars($foundProd['name']) . '<br>'; ?>
		<?= htmlspecialchars($foundProd['item_type']) . '<br>'; ?>
		<?= htmlspecialchars($foundProd['img_path']) . '<br>'; ?>
		<?= htmlspecialchars($foundProd['description']) . '<br>'; ?>


		<div class="container-fluid">

			<div class="row g-3 d-flex align-items-stretch">


				<section class="section-title text-center" id="<?= htmlspecialchars($prodCat['img_path']); ?>">
					<!-- category name -->
					<h2><?= htmlspecialchars($foundProd['name']); ?></h2>

					<span class="bordered-icon">
						<i class="bi bi-dash-lg fs-1"></i>
						<i class="bi bi-circle fs-2"></i>
						<i class="bi bi-dash-lg fs-1"></i>
					</span>
				</section>



				<div class="col-md-6 col-sm-12  ">

					<div class="product-details-img-container shadow d-flex justify-content-center">

						<img class="product-details-img " style="object-fit: cover;"
							src="img/product/<?= htmlspecialchars($foundCategory['name']); ?>/<?= htmlspecialchars($foundProd['img_path']) ?>"
							alt="<?= htmlspecialchars($foundCategory['name']); ?>/<?= htmlspecialchars($foundProd['img_path']) ?> ?>">
					</div>
				</div>



				<div class="col-md-6 col-sm-12 ">

					<div class="row">

						<div class="col-12">
							<div class="card mb-3">
								<div class="card-body">
									<!-- card info -->
									<h5 class="card-title"><?= htmlspecialchars($foundProd['name']) ?></h5>
								</div>
							</div>
						</div>

						<div class="col-12">
							<div class="card ">
								<div class="card-body">
									<!-- card info -->
									<p class="card-text"><?= htmlspecialchars($foundProd['description']) ?></p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>


	<?php endif; ?>







	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>