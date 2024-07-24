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
		<?php $productCategory = readCSVData("phpData/product_category.csv"); ?><!--  Parse CSV data to PHP -->
		<?php $stockItemTypeListing = readCSVData("phpData/stock_item_type_listing.csv"); ?>

		<!-- product list card -->
		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($stockItemTypeListing as $key => $stockList): ?>

					<section class="section-title text-center">

						<h2><?= $stockList['item_type'] ?></h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<?php foreach ($productCategory as $prod): ?>

						<?php if ($prod['item_type'] == $stockList['item_type'] && $prod['item_group'] == $stockList['item_group']): ?>

							<div class="col-md-3 col-sm-4 col-xs-6">
								<div class="card h-100">
									<img src="img/product/<?= htmlspecialchars($prod['img_path']) ?>" class="card-img-top"
										alt="<?= htmlspecialchars($prod['name']) ?>">
									<div class="card-body">
										<!-- card info -->
										<h5 class="card-title"><?= htmlspecialchars($prod['name']) ?></h5>
										<p class="card-text"><?= htmlspecialchars($prod['description']) ?></p>
									</div>
								</div>
							</div>

						<?php endif; ?>
					<?php endforeach; ?>

				<?php endforeach; ?>
			</div>
		</div>
	</section>






	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>