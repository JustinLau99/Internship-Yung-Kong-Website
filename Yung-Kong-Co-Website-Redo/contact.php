<!-- contact.php -->


<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->



<body>

	<?php include_once 'include/navbar.php'; ?><!-- navbar.php -->


	<!-- Parallax Section -->
	<section class="parallax-section">
		<div class="parallax-image"></div>
		<div class="parallax-content text-shadow-lg text-center">
			<h1>Contact Us</h1>
		</div>
	</section>



	<section class="yk-section" id="contact-departments">

		<?php include_once 'phpData/readCSV.php' ?>
		<?php $departments = readCSVData('phpData/departments.csv') ?>


		<!-- Our Departments -->

		<div class="container ">

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


					<div class="col-md-4 department-card my-4">
						<h5><?= htmlspecialchars($dep['name']); ?></h5>

						<div class="row">
							<!-- img: department -->

							<a href="#contact-inquiry">
								<img src="img/department/<?= htmlspecialchars($dep['img']); ?>"
									alt="<?= htmlspecialchars($dep['img']); ?>"
									class="img-fluid department-img"
									data-department="<?= htmlspecialchars($dep['name']); ?>">
							</a>
						</div>

						<address>

							<div class="card-text">
								<!-- Location: Google Map -->
								<a rel="noopener noreferrer" target="_blank"
									href="<?= htmlspecialchars($dep['address_url']); ?>">
									<i class="fs-4 bi bi-geo"></i>
									<span class="fw-bold">Location: </span>
									<?= htmlspecialchars($dep['address']) ?>
									<br>
								</a>

								<!-- Tel : Phone Number -->
								<a href="tel:+6<?= htmlspecialchars($dep['tel']); ?>">
									<i class="fs-4 bi bi-telephone"></i>
									<span class="fw-bold">Tel: </span>
									<?= htmlspecialchars($dep['tel']) ?>
									<br>
								</a>


								<!-- Whatsapp -->
								<a rel="noopener noreferrer" target="_blank"
									href="https://api.whatsapp.com/send?phone=<?= htmlspecialchars($dep['whatsapp_link']); ?>">
									<i class="fs-4 bi bi-whatsapp"></i>
									<span class="fw-bold">WhatsApp: </span>
									<?= htmlspecialchars($dep['whatsapp']) ?>
									<br>
								</a>

								<!-- Facebook -->
								<?php if (!empty($dep['fb_url'])): ?>
									<a rel="noopener noreferrer" target="_blank"
										href="<?= htmlspecialchars($dep['fb_url']); ?>">
										<i class="fs-4 bi bi-facebook"></i>
										<span class="fw-bold">FB: </span>
										<?= htmlspecialchars($dep['fb_name']) ?>
										<br>
									</a>
								<?php endif; ?>

								<!-- mail -->
								<a href="mailto:<?= htmlspecialchars($dep['mail']); ?>" target="_blank"
									rel="noopener noreferrer">
									<i class="fs-4 bi bi-envelope"></i>
									<span class="fw-bold">Email: </span>
									<?= htmlspecialchars($dep['mail']); ?>
									<br>
								</a>

								<!-- Fax -->
								<i class="fs-4 bi bi-printer"></i>
								<span class="fw-bold">Fax: </span>
								<?= htmlspecialchars($dep['fax']) ?>
								<br>
							</div>


						</address>
					</div>

				<?php endforeach; ?>


			</div>
			
		</div>


	</section>

	<!-- General Contact Form -->
	<section class="yk-section" id="contact-inquiry">

		<div class="container">

			<section class="section-title text-center">
				<h2>General Inquiries</h2>
				<!-- Introductory Text -->
				<p>
					If you have any questions or need further assistance,
					feel free to contact us. We are here to help!
				</p>
				<span class="bordered-icon">
					<i class="bi bi-dash-lg fs-1"></i>
					<i class="bi bi-circle fs-2"></i>
					<i class="bi bi-dash-lg fs-1"></i>
				</span>
			</section>


			<div class="row">
				<!-- General Inquiries form -->
				<form id="contactForm" class="needs-validation" novalidate>

					<!-- Name -->
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" required>
						<div class="invalid-feedback">
							Please provide your name.
						</div>
					</div>

					<!-- Department and Inquiry Type -->
					<div class="mb-3">
						<div class="row">
							<!-- Department -->
							<div class="col-md-6 mb-3">
								<label for="department" class="form-label">Department</label>
								<select class="form-control" id="department" required>
									<option value="" disabled selected>Select a department</option>
									<?php foreach ($departments as $dep): ?>
										<option value="<?= htmlspecialchars($dep['name']); ?>"
											data-email="<?= htmlspecialchars($dep['mail']); ?>">
											<?= htmlspecialchars($dep['name']); ?>
										</option>
									<?php endforeach; ?>
								</select>
								<div class="invalid-feedback">
									Please select a department.
								</div>
							</div>

							<!-- Inquiry Type -->
							<div class="col-md-6 mb-3">
								<label for="inquiryType" class="form-label">Inquiry Type</label>
								<select class="form-control" id="inquiryType" required>
									<option value="" disabled selected>Select the type of inquiry</option>
									<option value="general_inquiries">General Inquiries</option>
									<option value="job_application">Job Application</option>
									<option value="product_information">Product Information</option>
									<option value="pricing_and_discounts">Pricing and Discounts</option>
									<option value="payment_method">Payment Method</option>
									<option value="technical_support">Technical Support</option>
									<option value="customer_service">Customer Service</option>
									<option value="warranty_and_Support">Warranty and Support</option>
								</select>
								<div class="invalid-feedback">
									Please select the type of inquiry.
								</div>
							</div>
						</div>
					</div>

					<!-- Message -->
					<div class="mb-3">
						<label for="message" class="form-label">Message</label>
						<textarea class="form-control" id="message" rows="5" placeholder="Enter your message here"
							required></textarea>
						<div class="invalid-feedback">
							Please enter your message.
						</div>
					</div>
					<button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
				</form>

			</div>

		</div>

	</section>



	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>