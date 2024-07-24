<!-- index.php -->


<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->


<body>

	<?php include_once 'include/navbar.php'; ?><!-- navbar.php -->

	<!-- Parallax Section -->
	<section class="parallax-section">
		<div class="parallax-image"></div>
		<div class="parallax-content text-shadow-lg text-center">
			<h1>Product Category</h1>
		</div>
	</section>







	<section class="yk-section bg-gray">




		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $productCategory = readCSVData("phpData/product_category.csv"); // Parse CSV data to PHP ?>
		<?php $stockItemTypeListing = readCSVData("phpData/stock_item_type_listing.csv"); ?>
		<?php $productListings = buildNestedArray($stockItemTypeListing, $productCategory); // Build the nested array structure ?>

		<!-- product list card -->
		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($productListings as $key => $prodList): ?>

					<section class="section-title text-center">
						<h2><?= $prodList['Description']?></h2>
						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i><i class="bi bi-circle fs-2"></i><i
								class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<?php foreach ($prodList['Category'] as $key2 => $prod): ?>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="card h-100">
								<img src="img/product/<?= htmlspecialchars($prodList['Description']); ?>/<?= htmlspecialchars($prod['Description']) ?>"
									class="card-img-top" alt="<?= htmlspecialchars($prod['Description']); ?>">
								<div class="card-body">
									<!-- card info -->
									<h5 class="card-title"><?= htmlspecialchars($prod['Img Path']) ?></h5>
									<p class="card-text">

									</p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>






	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>

