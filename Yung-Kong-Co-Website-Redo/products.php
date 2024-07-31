<!-- products.php -->


<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->


<body>

	<?php include_once 'include/navbar.php'; ?><!-- navbar.php -->

	<!-- Parallax Section -->
	<section class="parallax-section">
		<div class="parallax-image"></div>
		<div class="parallax-content text-shadow-lg text-center">
			<h1>Products</h1>
		</div>
	</section>


	<?php include_once 'phpData/readCSV.php' ?>

	<section class="yk-section">

		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $product_category = readCSVData("phpData/product_category.csv"); ?>
		<?php $stock_item_type_listing = readCSVData("phpData/stock_item_type_listing.csv"); ?><!--  Parse CSV data to PHP -->

		<!-- product list card -->
		<div class="container">

			<?php foreach ($product_category as $prodCat): ?>

				<section class="section-title text-center" id="<?= htmlspecialchars($prodCat['img_path']); ?>">
					<!-- category name -->
					<div class="alert alert-info">

						<h4><?= htmlspecialchars($prodCat['name']); ?></h4>
					</div>

					<span class="bordered-icon">
						<i class="bi bi-dash-lg fs-1"></i>
						<i class="bi bi-circle fs-2"></i>
						<i class="bi bi-dash-lg fs-1"></i>
					</span>
				</section>




				<div class="row ">

					<?php foreach ($stock_item_type_listing as $stockList): ?>
						<?php if ($stockList['item_type'] == $prodCat['item_type']): ?>




							<!-- loop all products -->
							<div class="col-lg-2 col-md-3 col-sm-4 my-3">
								<a href="product-details.php?
									cat=<?= htmlspecialchars($stockList['item_type']); ?>&id=<?= htmlspecialchars($stockList['img_path']); ?>">

									<div class="card-img-container shadow">

										<img class="w-100 h-100 custom-card-img "
											src="img/product/<?= htmlspecialchars($prodCat['name']) ?>/<?= htmlspecialchars($stockList['img_path']) ?>"
											alt="<?= htmlspecialchars($prodCat['name']) ?>/<?= htmlspecialchars($stockList['img_path']) ?>">
									</div>

									<div class="text-wrap mt-1">
										<!-- card info -->
										<h6 class="card-title"><?= htmlspecialchars($stockList['name']) ?></h6>
										<p class="card-text"><?= htmlspecialchars($stockList['description']) ?></p>
									</div>
								</a>
							</div>


						<?php endif; ?>
					<?php endforeach; ?>

				</div>


			<?php endforeach; ?>
		</div>
	</section>



	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>