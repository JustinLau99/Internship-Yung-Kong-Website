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



<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top text-light">
	<div class="container d-flex justify-content-between align-items-center">
		<a class="navbar-brand" href="index.php">
			<img src="img/yk_logo.png" alt="" class="img-fluid">
		</a>
		<a class="navbar-brand text-white" href="index.php">
			<h1 class="fs-4 ">榕光有限公司</h1>
			<h2 class="fs-6">YUNG KONG CO. BHD.</h2>
		</a>


		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<?php foreach ($pages as $page): ?>
					<?php if ($page['url'] !== 'products.php'): ?>

						<li class="nav-item">
							<a class="nav-link text-white <?= ($currentPage === $page['url']) ? 'nav-active' : ''; ?>"
								href="<?= $page['url']; ?>"><?= $page['name']; ?>
							</a>
						</li>
						
					<?php else: ?>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white <?= ($currentPage === $page['url']) ? 'nav-active' : ''; ?>"
								href="products.php" id="navbarDropdown" role="button">
								<?= $page['name']; ?>
							</a>

							<!-- only run if file exists -->
							<?php if (file_exists('phpData/product_category.csv') && file_exists('phpData/readCSV.php')): ?>

								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<div class="container-fluid">

										<div class="row g-0 fs-5">

											<?php include_once 'phpData/readCSV.php'; ?>

											<?php $product_category = readCSVData("phpData/product_category.csv") ?>
											<?php foreach ($product_category as $prodCat): ?>

												<div class="col-md-2 ">
													<a class="dropdown-item"
														href="products.php#<?= htmlspecialchars($prodCat['img_path']) ?>"><?= $prodCat['name'] ?></a>
												</div>

											<?php endforeach; ?>
										</div>

									</div>
								</ul>

							<?php endif ?>
						</li>


					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</nav>