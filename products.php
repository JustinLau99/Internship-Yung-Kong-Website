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



	<!-- Modal for popup -->
	<div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">

				<div class="modal-body">
					<!-- Image -->
					<img src="" class="img-fluid" id="modalImage" style="display: none;" alt="Preview Image">

					<!-- PDF -->
					<iframe id="modalIframe" class="w-100" style="height: 80vh; display: none;"></iframe>
				</div>
			</div>
		</div>
	</div>




	<!-- sidebar link -->
	<section class="d-flex ">

		<div class="col-lg-2 sidebar d-flex flex-column align-items-center sticky-top p-4" style="overflow-y: auto; ">
			<h4 class="pb-4 border-bottom border-2 ">Product Categories</h4>
			<div class="w-100 mt-3 p-3 bg-body-secondary bg-gradient">
				<?php foreach ($product_category as $prodCat): ?>
					<div class="row sidebar-link lh-lg py-1">
						<a class="text-wrap fw-bold" href="#<?= htmlspecialchars($prodCat['img_path']); ?>">
							<i class="<?= htmlspecialchars($prodCat['icon']); ?>"></i>
							<?= htmlspecialchars($prodCat['name']); ?>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>



		<!-- sidebar content -->
		<section class="py-3">

			<?php include_once 'phpData/news_data.php'; ?>

			<!-- read CSV -->
			<?php include_once 'phpData/readCSV.php'; ?>
			<?php $product_category = readCSVData("phpData/product_category.csv"); ?>
			<?php $stock_item_type_listing = readCSVData("phpData/stock_item_type_listing.csv"); ?><!--  Parse CSV data to PHP -->


			<!-- product list card -->
			<div class="container-fluid">

				<?php foreach ($product_category as $prodCat): ?>

					<section class="section-title text-center mt-5 border-bottom border-2"
						id="<?= htmlspecialchars($prodCat['img_path']); ?>">
						<h2><?= htmlspecialchars($prodCat['name']); ?></h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span><br>

						<!-- product catalog -->

						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mediaModal"
							data-bs-src="<?= htmlspecialchars($prodCat['pdf_link']); ?>" data-bs-type="pdf">
							View Catalog
						</button>
					</section>


					<div class="row pb-5">

						<?php foreach ($stock_item_type_listing as $stockList): ?>
							<?php if ($stockList['item_type'] == $prodCat['item_type']): ?>

								<!-- loop all products -->
								<div class="col-lg-2 col-md-3 col-sm-4 my-3">
									<a href="product-details.php?
									cat=<?= htmlspecialchars($stockList['item_type']); ?>&id=<?= htmlspecialchars($stockList['img_path']); ?>">

										<div class="card-img-container shadow ">

											<img class="w-100 h-100 custom-card-img" loading="lazy"
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

	</section>



	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>