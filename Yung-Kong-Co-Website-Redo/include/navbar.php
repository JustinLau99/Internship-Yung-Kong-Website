<?php

$pages = [
	['url' => 'index.php', 'name' => 'Home'],
	['url' => 'products.php', 'name' => 'Products'],
	['url' => 'contact.php', 'name' => 'Contact Us'],
	['url' => 'onlineShop.php', 'name' => 'Online Shop'],
];

$currentPage = basename($_SERVER['SCRIPT_NAME']); // Get the current page name

?>



<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top text-light">
	<div class="container d-flex justify-content-between align-items-center">
		<a class="navbar-brand" href="index.php">
			<img src="img/yk_logo.png" alt="" class="img-fluid">
		</a>
		<a class="navbar-brand text-white" href="index.php">
			榕 光 有 限 公 司<br>
			YUNG KONG CO. BHD.
		</a>


		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<?php foreach ($pages as $page): ?>
					<?php if ($page['url'] === 'products.php'): ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white <?= ($currentPage === $page['url']) ? 'active' : ''; ?>"
								href="products.php" id="navbarDropdown" role="button">
								<?= $page['name']; ?>
							</a>
							<!-- only run if file exists -->
							<?php if (file_exists('phpData/stock_item_type_listing.csv') && file_exists('phpData/readCSV.php')): ?>

								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

									<?php include_once 'phpData/readCSV.php'; ?>

									<?php $stock_item_type_listing = readCSVData("phpData/stock_item_type_listing.csv") ?>
									<?php foreach ($stock_item_type_listing as $stockList): ?>

										<div class="col-md-2 ">
											<a class="dropdown-item" href="products.php"><?= $stockList['name'] ?></a>
										</div>

									<?php endforeach; ?>

								</ul>

							<?php endif ?>
						</li>



					<?php else: ?>
						<li class="nav-item">
							<a class="nav-link text-white <?= ($currentPage === $page['url']) ? 'active' : ''; ?>"
								href="<?= $page['url']; ?>"><?= $page['name']; ?>
							</a>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</nav>