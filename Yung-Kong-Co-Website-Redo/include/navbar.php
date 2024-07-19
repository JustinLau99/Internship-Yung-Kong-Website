<?php

$pages = [
    ['url' => 'index.php', 'name' => 'Home'],
    ['url' => 'products.php', 'name' => 'Products'],
    ['url' => 'contact.php', 'name' => 'Contact Us'],
    ['url' => 'onlineShop.php', 'name' => 'Online Shop'],
];

$currentPage = basename($_SERVER['SCRIPT_NAME']); // Get the current page name

?>





<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top text-light py-4">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="index.php">
            <img src="img/yk_logo.png" alt="" class="img-fluid">
        </a>
        <a class="navbar-brand navbar-text" href="index.php">
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
                            <a class="nav-link dropdown-toggle navbar-text <?= ($currentPage === $page['url']) ? 'active' : ''; ?>"
                                href="products.php" id="navbarDropdown" role="button">
                                <?= $page['name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="products.php">All Products</a></li>
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link navbar-text <?= ($currentPage === $page['url']) ? 'active' : ''; ?>"
                                href="<?= $page['url']; ?>">
                                <?= $page['name']; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>


