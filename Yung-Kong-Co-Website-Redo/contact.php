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



	<section class="yk-section">



		<?php include_once 'phpData/readCSV.php' ?>
		<?php $departments = readCSVData('phpData/departments.csv') ?>








		<div class="container contact-section">


			<section class="section-title text-center">
				<h2>Our Departments</h2>
				<!-- Introductory Text -->
				<p>If you have any questions or need further assistance, please contact the relevant department
					below. We are here to help!</p>
				<span class="bordered-icon">
					<i class="bi bi-dash-lg fs-1"></i>
					<i class="bi bi-circle fs-2"></i>
					<i class="bi bi-dash-lg fs-1"></i>
				</span>
			</section>



			<!-- Departments Contact Information -->
			<div class="row contact-info">

				<?php foreach ($departments as $dep): ?>

					<!-- For dynamic link -->
					<?php
					$dep['address'] = str_replace('"', '', $dep['address']);
					$dep['tel_link'] = str_replace('-', '', $dep['tel']);
					$dep['fax_link'] = str_replace('-', '', $dep['fax']);
					$dep['whatsapp_link'] = str_replace('-', '', $dep['whatsapp']);
					?>

					<div class="col-md-4">
						<h5><?= htmlspecialchars($dep['name']); ?></h5>

						<div class="row">
							<img src="img/department/<?= htmlspecialchars($dep['img']); ?>"
								alt="<?= htmlspecialchars($dep['img']); ?>">
						</div>

						<address>
							<div class="card-text">
								<!-- google map -->
								<a rel="noopener noreferrer" target="_blank"
									href="<?= htmlspecialchars($dep['address_url']); ?>">
									<i class="fs-4 bi bi-geo"></i>
									<?= htmlspecialchars($dep['address']) ?><br>
								</a>

								<!-- Tel -->
								<i class="fs-4 bi bi-telephone"></i>
								<?= htmlspecialchars($dep['tel']) ?><br>

								<!-- Whatsapp -->
								<a rel="noopener noreferrer" target="_blank"
									href="https://api.whatsapp.com/send?phone=<?= htmlspecialchars($dep['whatsapp_link']); ?>">
									<i class="fs-4 bi bi-whatsapp"></i>
									<?= htmlspecialchars($dep['whatsapp']) ?><br>
								</a>

								<!-- facebook -->
								<?php if (!empty($dep['fb'])): ?>
									<a rel="noopener noreferrer" target="_blank" href="<?= htmlspecialchars($dep['fb']); ?>">
										<i class="fs-4 bi bi-facebook"></i>
										Facebook<br>
									</a>
								<?php endif; ?>


								<a href="mailto:<?= htmlspecialchars($dep['mail']); ?>" target="_blank"
									rel="noopener noreferrer">
									<i class="fs-4 bi bi-envelope"></i>
									<?= htmlspecialchars($dep['mail']); ?><br>
								</a>

								<i class="fs-4 bi bi-printer"></i>
								Fax: <?= htmlspecialchars($dep['fax']) ?><br>
							</div>


						</address>
					</div>

				<?php endforeach; ?>


			</div>
		</div>



		<!-- General Contact Form -->
		<section class="yk-section">
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










		</section>
	</section>






	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>