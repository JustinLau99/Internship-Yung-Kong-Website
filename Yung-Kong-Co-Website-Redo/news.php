<!-- news.php -->

<?php



$discount_offer_img = [ // Promotion and Discount
	'2021RayaPromotion.jpg',
	'lavorPromotion.jpg',
	'TransPaintNewYearPromotion.jpg',
];
$event_img = [ // Event and Activities
	'e1.png',
	'e2.png',
	'e3.png',
	'e4.jpg',
	'YKMT.jpg',
];
$new_product_img = [ // New Products
	'LAVOR_IKON_160_Italy.jpg',
	'LAVOR_ONE_120_Italy.jpg',
];

$job_offer = [ // New Products
	['job' => 'Software Developer', 'location' => 'Pending', 'prereq' => 'SPM'],
	['job' => 'Admin Clerk', 'location' => 'Matang', 'prereq' => '3 Year Work Experience'],
	['job' => 'Account Clerk', 'location' => 'Penrissen', 'prereq' => ''],
];




?>




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



	<section class="yk-section">


		<!-- Modal for img popup -->
		<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">

					<div class="modal-body">
						<img src="" class="img-fluid" id="modalImage">
					</div>

				</div>
			</div>
		</div>



		<!-- News Tabs -->
		<div class="alert alert-info text-center" role="alert">
			New products are now available!
		</div>

		<div>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<!-- tab title -->
				<button class="nav-link active fw-bold fs-5" data-bs-toggle="tab" type="button" role="tab"
					data-bs-target="#nav-new_product">
					New Products</button>
				<button class="nav-link fw-bold fs-5" data-bs-toggle="tab" type="button" role="tab"
					data-bs-target="#nav-discount_offer">
					Discount & Offers</button>
				<button class="nav-link fw-bold fs-5" data-bs-toggle="tab" type="button" role="tab"
					data-bs-target="#nav-event">
					Event & Activities</button>
				<button class="nav-link fw-bold fs-5" data-bs-toggle="tab" type="button" role="tab"
					data-bs-target="#nav-job_offer">
					Job Offers</button>

			</div>
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
								<img src="img/news/new_product/<?= htmlspecialchars($new_prod); ?>"
									class="img-fluid " alt="<?= htmlspecialchars($new_prod); ?>"
									data-bs-toggle="modal" data-bs-target="#imageModal"
									data-bs-src="img/news/new_product/<?= htmlspecialchars($new_prod); ?>">
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>


			<!-- Discount and Offer -->
			<div class="tab-pane fade" id="nav-discount_offer" role="tabpanel">
				<div class="card p-5">

					<section class="section-title text-center">
						<h2>Discount and Offers</h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<!-- content -->
					<div class="row ">
						<?php foreach ($discount_offer_img as $discount_offer): ?>
							<div class="col-md-3 p-1">
								<div class="d-flex align-items-center h-100 ">
									<img src="img/news/discount_offer/<?= htmlspecialchars($discount_offer); ?>"
										class="img-fluid w-100 h-100 " alt="<?= htmlspecialchars($discount_offer); ?>"
										data-bs-toggle="modal" data-bs-target="#imageModal"
										data-bs-src="img/news/discount_offer/<?= htmlspecialchars($discount_offer); ?>">
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>


			<!--Event & Activities  -->
			<div class="tab-pane fade" id="nav-event" role="tabpanel">

				<div class="card p-5">


					<section class="section-title text-center">
						<h2>Event and Activities</h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<!-- content -->
					<div class="row ">
						<?php foreach ($event_img as $event): ?>
							<div class="col-md-3 p-1">
								<div class="d-flex align-items-center h-100">
									<img src="img/news/event/<?= htmlspecialchars($event); ?>" class="img-fluid w-100 h-100"
										alt="<?= htmlspecialchars($event) ?>" data-bs-toggle="modal"
										data-bs-target="#imageModal"
										data-bs-src="img/news/event/<?= htmlspecialchars($event); ?>">
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>

			</div>


			<!-- Job Offer  -->
			<div class="tab-pane fade" id="nav-job_offer" role="tabpanel">
				<div class="card p-5">

					<section class="section-title text-center">
						<h2>Job Offers</h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>




					<!-- content -->
					<section id="job-offers" class="py-5">
						<div class="container">

							<!-- Job Offer Card -->
							<div class="row">
								<?php foreach ($job_offer as $job): ?>

									<div class="col-md-4 mb-4">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title"><?= htmlspecialchars($job['job']); ?></h5>
												<h6 class="card-subtitle mb-2 text-muted">
													Department: <?= htmlspecialchars($job['location']); ?></h6>
												<p class="card-text">Prerequisite:
													<?= !empty($job['prereq']) ? htmlspecialchars($job['prereq']) : 'Not specified'; ?>
												</p>
												<a href="contact.php?inquiryType=Job%20Application#contact-inquiry"
													class="btn btn-primary">Apply Now</a>
											</div>
										</div>
									</div>


								<?php endforeach; ?>


							</div>
						</div>
					</section>



				</div>
			</div>



		</div>
	</section>





	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>