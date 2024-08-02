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

	
		<?php include_once 'phpData/news_data.php'; ?>


		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $product_category = readCSVData("phpData/product_category.csv"); ?>
		<?php $stock_item_type_listing = readCSVData("phpData/stock_item_type_listing.csv"); ?><!--  Parse CSV data to PHP -->









		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<!-- tab title -->
			<button data-bs-toggle="tab" type="button" role="tab" id="nav-new_product-tab"
				data-bs-target="#nav-new_product" class="nav-link active fw-bold fs-5">
				New Products
			</button>
			<button class="nav-link fw-bold fs-5" id="nav-discount_offer-tab" data-bs-toggle="tab" type="button"
				role="tab" data-bs-target="#nav-discount_offer">
				Discount & Offers
			</button>
			<button class="nav-link fw-bold fs-5" id="nav-event-tab" data-bs-toggle="tab" type="button" role="tab"
				data-bs-target="#nav-event">
				Event & Activities
			</button>
			<button class="nav-link fw-bold fs-5" id="nav-job_offer-tab" data-bs-toggle="tab" type="button" role="tab"
				data-bs-target="#nav-job_offer">
				Job Offers
			</button>
		</div>



		<div class="tab-content" id="nav-tabContent">

			<!-- New Product -->
			<div class="tab-pane fade show active" id="nav-new_product" role="tabpanel">
				<div class="card p-5">

					<section class="section-title text-center ">
						<h2>Featured New Products</h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<!-- content -->
					<div class="row">
						<?php foreach ($new_product_img as $new_prod): ?>
							<div class="col-md-3 p-1">
								<img src="img/news/new_product/<?= htmlspecialchars($new_prod); ?>" class="img-fluid "
									alt="<?= htmlspecialchars($new_prod); ?>" data-bs-toggle="modal"
									data-bs-target="#imageModal"
									data-bs-src="img/news/new_product/<?= htmlspecialchars($new_prod); ?>">
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>
		</div>








		<?php foreach ($product_category as $prodCat): ?>



			<section class="section-title text-center" id="<?= htmlspecialchars($prodCat['img_path']); ?>">
				<!-- category name -->
				<div class="alert alert-info">

					<h4><?= htmlspecialchars($prodCat['name']); ?></h4>
				</div>

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
	</section>



	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>