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

			<!-- Caption stays here -->
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
				<i class="bi bi-circle"></i>
			</span>
		</section>


		<div class="container-fluid">

			<div class="equal-height">



				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="thumbnail">

						<a href="products.php#<?php echo '$products[IMG]' ?>">
							<img class="img-responsive" src="<?php echo 'IMG_PRODUCT_CATEGORY' . '$products[IMG]'; ?> ">
						</a>

						<div class="caption">

							<h3><!-- product Title -->
								<a href="products.php"><?php echo '$products[TITLE]'; ?></a>
							</h3>

							<ul><!-- product subcategory-->
								<li> • <?php echo '$prod'; ?></li>
							</ul>

						</div>
					</div>
				</div>


			</div>
		</div>

	</section>

	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->

</body>

</html>