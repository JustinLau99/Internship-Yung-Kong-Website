<!-- index.php -->

<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->

<body>



	<?php include_once 'include/navbar.php'; ?><!-- navbar.php -->



	<!-- carousel -->
	<section>
		<div id="carouselIMG" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="1"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="2"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="3"></button>
				<button type="button" data-bs-target="#carouselIMG" data-bs-slide-to="4"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active"><img src="img/department/slider-ykacc.jpg" class="w-100"
						alt="Slide 1"></div>
				<div class="carousel-item"><img src="img/department/slider-ykbtw.jpg" class="w-100" alt="Slide 2"></div>
				<div class="carousel-item"><img src="img/department/slider-ykmatang.jpg" class="w-100" alt="Slide 3">
				</div>
				<div class="carousel-item"><img src="img/department/slider-ykpending.jpg" class="w-100" alt="Slide 4">
				</div>
				<div class="carousel-item"><img src="img/department/slider-ykpenrissen.jpg" class="w-100" alt="Slide 5">
				</div>
			</div>

			<div class="caption">
				<h1 class="fs-2 text-center text-white">Welcome to Yung Kong Co. Bhd.</h1>
			</div>

			<!-- buttons -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselIMG" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselIMG" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>
	</section>



	<!-- productList -->
	<section class="yk-section" id="index-productList">
		<section class="section-title text-center">
			<h2>What We Offer</h2>
			<span class="bordered-icon">
				<i class="bi bi-dash-lg fs-1"></i><i class="bi bi-circle fs-2"></i><i class="bi bi-dash-lg fs-1"></i>
			</span>
		</section>



		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $product_category = readCSVData("phpData/product_category.csv"); ?>
		<!-- product card -->

		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($product_category as $prodCat): ?>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="card h-100">
							<a href="products.php#<?= htmlspecialchars($prodCat['img_path']) ?>">

								<img src="img/product-categories/<?= htmlspecialchars($prodCat['img_path']); ?>"
									class="card-img-top" alt="<?= htmlspecialchars($prodCat['img_path']); ?>">
								<div class="card-body">
									<!-- card info -->
									<h5 class="card-title"><?= htmlspecialchars($prodCat['name']) ?></h5>
									<p class="card-text">

										<?php $subcategories = explode(';', $prodCat['subcategory']); ?>
										<?php foreach ($subcategories as $subcategory): ?>
											<?= "- " . htmlspecialchars(trim($subcategory)) . "<br>"; ?>
										<?php endforeach; ?>

									</p>
								</div>

							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>


	<section class="yk-section" id="contact-departments">

		<?php include_once 'phpData/readCSV.php' ?>
		<?php $departments = readCSVData('phpData/departments.csv') ?>


		<!-- Departments -->

		<div class="container-fluid">

			<section class="section-title text-center">
				<h2>Our Departments</h2>

				<span class="bordered-icon">
					<i class="bi bi-dash-lg fs-1"></i>
					<i class="bi bi-circle fs-2"></i>
					<i class="bi bi-dash-lg fs-1"></i>
				</span>
			</section>



			<!-- Departments Contact Information -->
			<div class="row">

				<?php foreach ($departments as $dep): ?>

					<!-- For dynamic link -->
					<?php
					$dep['address'] = str_replace('"', '', $dep['address']);
					$dep['tel_link'] = str_replace('-', '', $dep['tel']);
					$dep['whatsapp_link'] = str_replace('-', '', $dep['whatsapp']);
					$dep['fax_link'] = str_replace('-', '', $dep['fax']);
					?>


					<div class="col-md-3 department-card my-1 index-department">
						<h5 class="m-0"><?= htmlspecialchars($dep['name']); ?></h5>

						<address>

							<div class="card-text d-flex justify-content-between px-4">
								<!-- Location: Google Map -->
								<a rel="noopener noreferrer" target="_blank" class=""
									href="<?= htmlspecialchars($dep['address_url']); ?>">
									<!-- --><i style="text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.1);" class="fs-3 bi bi-geo-alt "></i>
								</a>

								<!-- Tel : Phone Number -->
								<a href="tel:+6<?= htmlspecialchars($dep['tel']); ?>" class="">
									<!-- --><i style="text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.1);" class="fs-3 bi bi-telephone"></i>
								</a>


								<!-- Whatsapp -->
								<a rel="noopener noreferrer" target="_blank" class=""
									href="https://api.whatsapp.com/send?phone=<?= htmlspecialchars($dep['whatsapp_link']); ?>">
									<!-- --><i style="text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.1);" class="fs-3 bi bi-whatsapp"></i>
								</a>

								<!-- Facebook -->
								<?php if (!empty($dep['fb_url'])): ?>
									<a rel="noopener noreferrer" target="_blank" class=""
										href="<?= htmlspecialchars($dep['fb_url']); ?>">
										<!-- --><i style="text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.1);" class="fs-3 bi bi-facebook"></i>
									</a>
								<?php endif; ?>

								<!-- mail -->
								<a href="mailto:<?= htmlspecialchars($dep['mail']); ?>" target="_blank" class=""
									rel="noopener noreferrer">
									<!-- --><i style="text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.1);" class="fs-3 bi bi-envelope"></i>
								</a>
							</div>


						</address>


						<div class="row">
							<!-- img: department -->

							<a href="contact.php#contact-departments ">
								<img src="img/department/<?= htmlspecialchars($dep['img']); ?>"
									alt="<?= htmlspecialchars($dep['img']); ?>" class="img-fluid department-img"
									data-department="<?= htmlspecialchars($dep['name']); ?>">
							</a>
						</div>

					</div>

				<?php endforeach; ?>


			</div>

		</div>


	</section>

	<!-- key product brand -->
	<section class="yk-section" id="index-brands">
		<section class="section-title text-center text-white">
			<h2>Key Product Brands</h2>
			<span class="bordered-icon">
				<i class="bi bi-dash-lg fs-1"></i><i class="bi bi-circle fs-2"></i><i class="bi bi-dash-lg fs-1"></i>

			</span>
		</section>

		<!-- read CSV -->
		<?php include_once 'phpData/readCSV.php'; ?>
		<?php $brand_logos = readCSVData('phpData/brand_logo.csv'); ?>
		<!-- key product brand card -->
		<div class="container-fluid">
			<div class="row g-3 d-flex align-items-stretch">

				<?php foreach ($brand_logos as $key => $dep): ?>

					<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
						<div class="h-100">
							<img src="img/brands/<?= htmlspecialchars($dep['img']); ?>" class="card-img-top"
								alt="<?= htmlspecialchars($dep['img']); ?>">
						</div>
					</div>
				<?php endforeach; ?>
			</div>
	</section>





	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>