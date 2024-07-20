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



	<section class="x-services bg-gray">

		<div class="container-fluid">

			<?php include_once 'PHPDATA_PATH' . 'product_category.php'; ?>
			<!-- Product Category -->
			<?php foreach ('PRODUCT_CATEGORY' as $category): ?>

				<section class="x-services bg-dark" id="<?php echo $category[IMG] ?>">

					<section class="section-title text-center">
						<h2><?php echo $category[TITLE] ?></h2>
						<span class="bordered-icon">
							<i class="bi bi-circle"></i>
						</span>
					</section>






					<div class="row">

						<!-- Each Product from category -->
						<?php foreach ($category[PROD] as $prod): ?>

							<div class="col-md-2 col-sm-3 col-xs-6">
								<a href="product-detail.php?
							cat=<?php echo $category[IMG]; ?>&id=<?php echo $prod[IMG] ?>">

									<div class="card">

										<div class="img-box">
											<!-- product image -->
											<img src="<?php echo IMG_PRODUCT . $category[PRODUCT_IMG_PATH] . $prod[IMG] ?>">
										</div>


										<div class="caption">
											<!-- product Title -->
											<h3><?php echo $prod[TITLE]; ?></h3>
										</div>

									</div>

								</a>
							</div>


						<?php endforeach; ?>















					</div>
				</section>

			<?php endforeach; ?>

		</div>


	</section>







	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>