<!-- news.php -->


<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->



<body>

	<?php include_once 'include/navbar.php'; ?><!-- navbar.php -->

	<!-- Parallax Section -->
	<section class="parallax-section">
		<div class="parallax-image"></div>
		<div class="parallax-content text-shadow-lg text-center">
			<h1>News</h1>
		</div>
	</section>



	<section class="yk-section bg-gray">











		1. Hero Section
		<div class="hero-section">
			<img src="path/to/hero-image.jpg" alt="New Offer" class="img-fluid">
			<div class="hero-content">
				<h1>Check Out Our Latest Offers!</h1>
				<p>Exciting discounts on new arrivals.</p>
				<a href="#offers" class="btn btn-primary">Shop Now</a>
			</div>
		</div>

		2. Featured Section
		<div class="featured-section py-5">
			<h2 class="text-center">Featured New Products</h2>
			<div class="container">
				<div class="row">
					<!-- Repeat for each product -->
					<div class="col-md-4">
						<div class="card">
							<img src="path/to/product.jpg" class="card-img-top" alt="Product">
							<div class="card-body">
								<h5 class="card-title">Product Name</h5>
								<p class="card-text">Brief description of the product.</p>
								<a href="#" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		3. Announcements Banner
		<div class="alert alert-info text-center" role="alert">
			New arrivals are now available! Check them out <a href="#new-products" class="alert-link">here</a>.
		</div>



		4. Grid or List Display
		<div class="container py-5" id="new-products">
			<h2 class="text-center">New Products</h2>
			<div class="row">
				<!-- Repeat for each product -->
				<div class="col-md-3 col-sm-6">
					<div class="card mb-4">
						<img src="path/to/product.jpg" class="card-img-top" alt="Product">
						<div class="card-body">
							<h5 class="card-title">Product Name</h5>
							<p class="card-text">Brief description.</p>
							<a href="#" class="btn btn-primary">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>



		5. Navigation and Filters
		<div class="container py-5">
			<h2 class="text-center">Browse New Offers</h2>
			<div class="row mb-4">
				<div class="col-md-12">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-secondary">All</button>
						<button type="button" class="btn btn-secondary">Category 1</button>
						<button type="button" class="btn btn-secondary">Category 2</button>
						<button type="button" class="btn btn-secondary">Category 3</button>
					</div>
				</div>
			</div>
		</div>




		7. Call-to-Action (CTA)
		<div class="cta-section text-center py-5">
			<h2>Don't Miss Our Latest Deals!</h2>
			<p>Sign up for our newsletter to stay updated.</p>
			<a href="#signup" class="btn btn-lg btn-primary">Sign Up Now</a>
		</div>






	</section>





	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>