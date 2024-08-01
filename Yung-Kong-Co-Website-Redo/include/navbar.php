<?php

$pages = [
	['url' => 'index.php', 'name' => 'Home'],
	['url' => 'products.php', 'name' => 'Products'],
	['url' => 'contact.php', 'name' => 'Contact Us'],
	['url' => 'news.php', 'name' => 'News'],
	['url' => 'onlineShop.php', 'name' => 'Online Shop'],
];

$currentPage = basename($_SERVER['SCRIPT_NAME']); // Get the current page name
// mark product-details.php to products.php as active
$currentPage = ($currentPage == 'product-details.php') ? 'products.php' : $currentPage;

?>

<!-- Preloader -->
<div id="preloader">
	<img src="img/preloader.gif" alt="Loading...">
</div>



<nav id="navbar" class="navbar navbar-expand-md navbar-light fixed-top text-light">
	<div class="container align-items-center">
		<a class="navbar-brand" href="index.php">
			<img src="img/yk_logo.png" alt="" class="img-fluid">
		</a>
		<a class="navbar-brand flex-column text-white ms-0" href="index.php">
			<h1 class="fs-4 m-0">榕光有限公司</h1>
			<h2 class="fs-6 m-0">YUNG KONG CO. BHD.</h2>
		</a>


		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<?php foreach ($pages as $page): ?>
					<?php switch ($page['url']):
						case 'products.php':
							?>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white <?= ($currentPage === $page['url']) ? 'nav-active' : ''; ?>"
									href="products.php" id="navbarDropdown" role="button">
									<?= htmlspecialchars($page['name']); ?>
								</a>

								<!-- only run if file exists -->
								<?php if (file_exists('phpData/product_category.csv') && file_exists('phpData/readCSV.php')): ?>
									<!-- dropdown: product category -->
									<ul class="dropdown-menu p-3">
										<div class="container-fluid">
											<div class="row g-0">
												<?php include_once 'phpData/readCSV.php'; ?>
												<?php $product_category = readCSVData("phpData/product_category.csv") ?>
												<?php foreach ($product_category as $prodCat): ?>
													<div class="col-md-2 d-flex align-items-center bg-transparent">
														<a class="dropdown-item text-wrap fw-bold w-100 h-100 text-shadow"
															href="products.php#<?= htmlspecialchars($prodCat['img_path']); ?>">
															<i class="<?= htmlspecialchars($prodCat['icon']); ?>"></i>
															<?= htmlspecialchars($prodCat['name']); ?>
														</a>
													</div>
												<?php endforeach; ?>
											</div>
										</div>
									</ul>
								<?php endif; ?>
							</li>

							<?php
							break;
						case 'onlineShop.php':
							?>



							<?php
							break;

						default:
							?>

							<li class="nav-item">
								<a class="nav-link text-white <?= ($currentPage === $page['url']) ? 'nav-active' : ''; ?>"
									href="<?= htmlspecialchars($page['url']); ?>">
									<?= htmlspecialchars($page['name']); ?>
								</a>
							</li>

							<?php
							break;
					endswitch;
					?>

				<?php endforeach; ?>

			</ul>
		</div>
	</div>
</nav>