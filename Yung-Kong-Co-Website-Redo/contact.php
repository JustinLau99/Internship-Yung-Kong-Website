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



	<section class="yk-section bg-gray">



		<?php include_once 'phpData/readCSV.php' ?>
		<?php $departments = readCSVData('phpData/departments.csv') ?>


		<div class="container contact-section">

			<!-- Introductory Text -->
			<div class="text-center mb-4">
				<p>If you have any questions or need further assistance, please contact the relevant department below.
					We are here to help!</p>
			</div>

			<!-- Departments Contact Information -->
			<div class="row contact-info">

				<?php foreach ($departments as $dep): ?>

					<div class="col-md-4">
						<h5><?= $dep['name']; ?></h5>
						<?= $dep['img']; ?>
						<p>Address: <?= $dep['address']; ?></p>
						<p>Phone: <?= $dep['tel']; ?></p>
						<p>Fax: <?= $dep['fax']; ?></p>
						<p>WhatsApp: <?= $dep['whatsapp']; ?></p>
						<p>Email: <?= $dep['mail']; ?></p>
					</div>

				<?php endforeach; ?>

			</div>



			<!-- General Contact Form -->
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h4 class="text-center mb-4">General Inquiries</h4>
					<form>
						<div class="mb-3">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control" id="name" required>
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" required>
						</div>
						<div class="mb-3">
							<label for="department" class="form-label">Department</label>
							<select class="form-control" id="department">
								<?php foreach ($departments as $dep): ?>
									<option><?= $dep['name']; ?></option>
								<?php endforeach; ?>

							</select>
						</div>
						<div class="mb-3">
							<label for="message" class="form-label">Message</label>
							<textarea class="form-control" id="message" rows="5" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>

			<!-- Map and Address -->
			<div class="map-container">
				<h4 class="text-center mb-4">Our Location</h4>
				<div class="text-center">
					<p>123 Company Address, City, State, ZIP</p>
					<div id="map" style="height: 400px; width: 100%;"></div>
				</div>
			</div>
		</div>

















	</section>





	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>