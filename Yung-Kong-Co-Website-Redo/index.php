<!-- index.php -->

<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->

<body>

	<?php include_once 'include/navbar.php'; ?><!-- navbar.php -->

	<!-- carousel -->
	<section>

		<div id="carouselIMG" class="carousel slide" data-bs-ride="carousel">

			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="0" aria-label="Slide 1"
					class="active" aria-current="true"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="3" aria-label="Slide 4"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="4" aria-label="Slide 5"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active"><img src="img/department/slider-ykacc.jpg" class="w-100"></div>
				<div class="carousel-item"><img src="img/department/slider-ykbtw.jpg" class="w-100"></div>
				<div class="carousel-item"><img src="img/department/slider-ykmatang.jpg" class="w-100"></div>
				<div class="carousel-item"><img src="img/department/slider-ykpending.jpg" class="w-100"></div>
				<div class="carousel-item"><img src="img/department/slider-ykpenrissen.jpg" class="w-100"></div>
			</div>

			<div class="carousel-caption d-md-block ">
				<h5 class="fs-1 text-center">Welcome to Yung Kong Co. Bhd.</h5>
			</div>

			<!-- button -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselIMG" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselIMG" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>

	</section>


	<!-- productList -->
	<section class="yk-section bg-gray">
		<section class="section-title text-center">
			<h2>What We Offer</h2>
			<span class="bordered-icon">
				<i class="bi bi-dash-lg fs-1"></i><i class="bi bi-circle fs-2"></i><i class="bi bi-dash-lg fs-1"></i>
			</span>
		</section>



		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $productCategory = readCSVData("phpData/product_category.csv"); // Parse CSV data to PHP ?>
		<?php $stockItemTypeListing = readCSVData("phpData/stock_item_type_listing.csv"); ?>
		<?php $productListings = buildNestedArray($stockItemTypeListing, $productCategory); // Build the nested array structure ?>
		<!-- product card -->
		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($productListings as $key => $prodList): ?>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="card h-100">
							<img src="img/product-categories/<?= htmlspecialchars($prodList['Image Path']); ?>"
								class="card-img-top" alt="<?= htmlspecialchars($prodList['Image Path']); ?>">
							<div class="card-body">
								<!-- card info -->
								<h5 class="card-title"><?= htmlspecialchars($prodList['Description']) ?></h5>
								<p class="card-text">
									<?php foreach ($prodList['SubCategory'] as $subcategory): ?>
										<?= "- " . htmlspecialchars($subcategory) . "<br>"; ?>
									<?php endforeach; ?>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>


	<!-- department -->
	<section class="yk-section bg-gray">
		<section class="section-title text-center">
			<h2>Our Departments</h2>
			<span class="bordered-icon">
				<i class="bi bi-dash-lg fs-1"></i><i class="bi bi-circle fs-2"></i><i class="bi bi-dash-lg fs-1"></i>

			</span>
		</section>

		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $departments = readCSVData('phpData/departments.csv'); ?>
		<!-- department card -->
		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($departments as $key => $depart): ?>

					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="card h-100">
							<img src="img/department/<?= htmlspecialchars($depart['img']); ?>" class="card-img-top"
								alt="<?= htmlspecialchars($depart['img']); ?>">
							<div class="card-body">
								<h5 class="card-title text-center"><?= htmlspecialchars($depart['name']) ?></h5>

								<div class="card-text">
									<!-- department info -->
									<i class="fs-4 bi bi-geo"></i><?= htmlspecialchars($depart['address']) ?><br>
									<i class="fs-4 bi bi-telephone"></i><?= htmlspecialchars($depart['tel']) ?><br>
									<i class="fs-4 bi bi-whatsapp"></i><?= htmlspecialchars($depart['fax']) ?><br>
									<i class="fs-4 bi bi-envelope"></i><?= htmlspecialchars($depart['whatsapp']) ?><br>
									Fax: <?= htmlspecialchars($depart['mail']) ?><br>

								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
	</section>

	<!-- key product brand -->
	<section class="yk-section bg-gray">
		<section class="section-title text-center">
			<h2>Key Product Brands</h2>
			<span class="bordered-icon">
				<i class="bi bi-dash-lg fs-1"></i><i class="bi bi-circle fs-2"></i><i class="bi bi-dash-lg fs-1"></i>

			</span>
		</section>

		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $departments = readCSVData('phpData/brand_logo.csv'); ?>
		<!-- key product brand card -->
		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($departments as $key => $depart): ?>

					<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
						<div class="h-100">
							<img src="img/brands/<?= htmlspecialchars($depart['img']); ?>" class="card-img-top"
								alt="<?= htmlspecialchars($depart['img']); ?>">
						</div>
					</div>
				<?php endforeach; ?>
			</div>
	</section>





	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>