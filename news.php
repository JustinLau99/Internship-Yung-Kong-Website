<!-- news.php -->

<?php


// 'id' = if need to href from other place
//'target' = targetting its tabcontent
// 'title' = text title

$tabIndex = 0; // iterate through tabContent
$tabData = [
	[
		'id' => 'nav-new_product-tab',
		'target' => 'nav-new_product',
		'title' => 'New Products',
	],
	[
		'id' => 'nav-discount_offer-tab',
		'target' => 'nav-discount_offer',
		'title' => 'Discount & Offers',
	],
	[
		'id' => 'nav-event-tab',
		'target' => 'nav-event',
		'title' => 'Event & Activities',
	],
	[
		'id' => 'nav-job_offer-tab',
		'target' => 'nav-job_offer',
		'title' => 'Job Offers',
	],
	[
		'id' => 'nav-product_catalog-tab',
		'target' => 'nav-product_catalog',
		'title' => 'Product Catalog',
	],
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


		<!-- News Tabs -->
		<?php include_once 'phpData/news_data.php'; // tab data ?>

		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<!-- Dynamically generated tab titles -->
			<?php foreach ($tabData as $index => $tab): ?>
				<button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?> fw-bold fs-5"
					id="<?php echo $tab['id']; ?>" data-bs-toggle="tab" type="button" role="tab"
					data-bs-target="#<?php echo $tab['target']; ?>">
					<?php echo $tab['title']; ?>
				</button>
			<?php endforeach; ?>
		</div>


		<!-- tab content -->
		<div class="tab-content" id="nav-tabContent">

			<!-- New Product -->
			<div class="tab-pane fade show active" id="<?= htmlspecialchars($tabData[$tabIndex]['target']); ?>"
				role="tabpanel">
				<div class="card p-5">

					<section class="section-title text-center ">
						<h2><?= htmlspecialchars($tabData[$tabIndex]['title']); ?><?php $tabIndex++; ?></h2>

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
								<img src="img/news/new_product/<?= htmlspecialchars($new_prod); ?>" class="img-fluid"
									alt="<?= htmlspecialchars($new_prod); ?>" data-bs-toggle="modal"
									data-bs-target="#mediaModal"
									data-bs-src="img/news/new_product/<?= htmlspecialchars($new_prod); ?>"
									data-bs-type="image">
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>

			<!-- Discount and Offer -->
			<div class="tab-pane fade" id="<?= htmlspecialchars($tabData[$tabIndex]['target']) ?>" role="tabpanel">
				<div class="card p-5">
					<section class="section-title text-center">
						<h2><?= htmlspecialchars($tabData[$tabIndex]['title']); ?><?php $tabIndex++; ?></h2>

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
										data-bs-toggle="modal" data-bs-target="#mediaModal"
										data-bs-src="img/news/discount_offer/<?= htmlspecialchars($discount_offer); ?>"
										data-bs-type="image">
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>


			<!--Event & Activities  -->
			<div class="tab-pane fade" id="<?= htmlspecialchars($tabData[$tabIndex]['target']) ?>" role="tabpanel">
				<div class="card p-5">
					<section class="section-title text-center">
						<h2><?= htmlspecialchars($tabData[$tabIndex]['title']); ?><?php $tabIndex++; ?></h2>

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
										data-bs-target="#mediaModal"
										data-bs-src="img/news/event/<?= htmlspecialchars($event); ?>" data-bs-type="image">
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>


			<!-- Job Offer  -->
			<div class="tab-pane fade" id="<?= htmlspecialchars($tabData[$tabIndex]['target']) ?>" role="tabpanel">
				<div class="card p-5">
					<section class="section-title text-center">
						<h2><?= htmlspecialchars($tabData[$tabIndex]['title']); ?><?php $tabIndex++; ?></h2>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<!-- content -->
					<section id="job-offers" class="py-5">
						<div class="container">

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


			<!-- Product Catalog  -->
			<div class="tab-pane fade" id="<?= htmlspecialchars($tabData[$tabIndex]['target']) ?>" role="tabpanel">

				<div class="card p-5">

					<section class="section-title text-center">
						<h2><?= htmlspecialchars($tabData[$tabIndex]['title']); ?></h2>
						<?php $tabIndex++; ?>

						<span class="bordered-icon">
							<i class="bi bi-dash-lg fs-1"></i>
							<i class="bi bi-circle fs-2"></i>
							<i class="bi bi-dash-lg fs-1"></i>
						</span>
					</section>

					<!-- content -->
					<section class="py-5">
						<div class="container-fluid ">
							<div class="row">
								<div class="col-4 text-center card">
									<h5>Catalog 1</h5>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#mediaModal"
										data-bs-src="https://www.buds.com.ua/images/Lorem_ipsum.pdf" data-bs-type="pdf">
										View PDF
									</button>
								</div>

								<div class="col-4 text-center card">
									<h5>Catalog 2</h5>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#mediaModal"
										data-bs-src="https://s2.q4cdn.com/175719177/files/doc_presentations/Placeholder-PDF.pdf"
										data-bs-type="pdf">
										View PDF
									</button>
								</div>


								<div class="col-4 text-center card">
									<h5>Catalog 3</h5>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#mediaModal"
										data-bs-src="https://s2.q4cdn.com/175719177/files/doc_presentations/Placeholder-PDF.pdf"
										data-bs-type="pdf">
										View PDF
									</button>
								</div>

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