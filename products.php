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
			<h1>Product Category</h1>
		</div>
	</section>


	<?php include_once 'phpData/readCSV.php' ?>

	<section class="yk-section">

		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $product_category = readCSVData("phpData/product_category.csv"); ?>
		<?php $stock_item_type_listing = readCSVData("phpData/stock_item_type_listing.csv"); ?><!--  Parse CSV data to PHP -->


		<!-- Modal for popup -->
		<div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">

					<div class="modal-body">
						<img src="" class="img-fluid" id="modalImage" style="display: none;" alt="Preview Image">

					</div>
				</div>
			</div>
		</div>



		<div class="row">

			<!-- Sidebar for Tab Titles -->
			<div class="col-md-2">
				<div class="sidebar sticky-top">
					<div class="nav product-tabs flex-column" id="nav-tab" role="tablist">
						<?php foreach ($product_category as $index => $prodCat): ?>
							<button class="nav-link <?= $index === 0 ? 'active' : ''; ?> fw-bold fs-5 text-start"
								data-bs-toggle="tab" type="button" role="tab"
								data-bs-target="#product-tabContent-<?= htmlspecialchars($prodCat['img_path']); ?>"
								id="product-tab-<?= htmlspecialchars($prodCat['img_path']); ?>">
								<?= htmlspecialchars($prodCat['name']); ?>
							</button>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<!-- Tab Content -->
			<div class="col-md-10">
				<div class="tab-content" id="nav-tabContent">
					<?php foreach ($product_category as $index => $prodCat): ?>
						<div class="tab-pane fade <?= $index === 0 ? 'show active' : ''; ?>" role="tabpanel"
							id="product-tabContent-<?= htmlspecialchars($prodCat['img_path']); ?>">
							<section class="section-title text-center">
								<h2><?= htmlspecialchars($prodCat['name']); ?></h2>
								<span class="bordered-icon">
									<i class="bi bi-dash-lg fs-1"></i>
									<i class="bi bi-circle fs-2"></i>
									<i class="bi bi-dash-lg fs-1"></i>
								</span>
							</section>
							<div class="row">
								<?php foreach ($stock_item_type_listing as $stockList): ?>
									<?php if ($stockList['item_type'] == $prodCat['item_type']): ?>
										<div class="col-lg-2 col-md-3 col-sm-4 p-3 ">
											<img src="img/product/<?= htmlspecialchars($prodCat['name']) ?>/<?= htmlspecialchars($stockList['img_path']) ?>"
												data-bs-src="img/product/<?= htmlspecialchars($prodCat['name']) ?>/<?= htmlspecialchars($stockList['img_path']) ?>"
												data-bs-toggle="modal" data-bs-target="#mediaModal"
												alt="<?= htmlspecialchars($stockList['img_path']); ?>"
												class="img-fluid">
												
											<h6 class="card-title"><?= htmlspecialchars($stockList['name']) ?></h6>
											<p class="card-text"><?= htmlspecialchars($stockList['description']) ?></p>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

		</div>


		<!-- <iframe src="https://www.soundczech.cz/temp/lorem-ipsum.pdf" title="PDF Viewer"></iframe> -->




	</section>



	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>