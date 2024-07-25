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
		<?php $stockItemTypeListing = readCSVData("phpData/stock_item_type_listing.csv"); ?>
		<?php $productCategory = readCSVData("phpData/product_category.csv"); ?><!--  Parse CSV data to PHP -->

		<!-- product list card -->
		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($stockItemTypeListing as $stockList): ?>

					<section class="section-title text-center" id="<?= $stockList['img_path'] ?>">
						<!-- category name -->
						<h2><?= $stockList['name'] ?></h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<?php foreach ($productCategory as $prod): ?>

						<?php if ($prod['item_type'] == $stockList['item_type']): ?>

							<div class="col-lg-2 col-md-3 col-sm-4 ">
								<div class="card h-100">
									<div class="card-img-container">

										<img class="custom-card-img" style="object-fit: cover;"
											src="img/product/<?= htmlspecialchars($stockList['name']) ?>/<?= htmlspecialchars($prod['img_path']) ?>"
											alt="<?= htmlspecialchars($stockList['name']) ?>/<?= htmlspecialchars($prod['img_path']) ?>">
									</div>

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