<!-- navbar.php -->

<?php
// declare page variable

$pages = [
	['url' => 'index.php', 'name' => 'Home'],
	['url' => 'products.php', 'name' => 'Product'],
	['url' => 'contact.php', 'name' => 'Contact'],
];


?>

<nav class="bg-white shadow-lg">
	<div class="max-w-6xl mx-auto px-4">
		<div class="flex justify-between">
			<div class="flex space-x-7">
				<!-- Logo -->
				<div>
					<a href="#" class="flex items-center py-4 px-2">
						<img src="https://via.placeholder.com/50" alt="Logo" class="h-8 w-8 mr-2">
						<span class="font-semibold text-gray-500 text-lg">BrandName</span>
					</a>
				</div>
				<!-- Primary Navbar items -->
				<div class="hidden md:flex items-center space-x-1">
					<?php foreach ($pages as $page): ?>
						<a href="<?= $page['url'] ?>"
							class="py-4 px-2 font-semibold <?= ($currentPage === $page['url']) ? 'text-blue-500 border-b-4 border-blue-500' : 'text-gray-500 hover:text-blue-500 transition duration-300' ?>"><?= $page['name'] ?></a>
					<?php endforeach; ?>
				</div>
			</div>
			<!-- Secondary Navbar items -->
			<div class="hidden md:flex items-center space-x-3 ">
				<a href="login.php"
					class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-200 transition duration-300">Log
					In</a>
				<a href="signup.php"
					class="py-2 px-2 font-medium text-white bg-blue-500 rounded hover:bg-blue-400 transition duration-300">Sign
					Up</a>
			</div>
			<!-- Mobile menu button -->
			<div class="md:hidden flex items-center">
				<button class="outline-none mobile-menu-button">
					<svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
						stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
						<path d="M4 6h16M4 12h16m-7 6h7"></path>
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!-- mobile menu -->
	<div class="hidden mobile-menu">
		<ul class="">
			<?php foreach ($pages as $page): ?>
				<a href="<?= $page['url']?>"
					class="block text-sm px-2 py-4 <?= ($currentPage === $page['url']) ? 'text-white bg-blue-500' : 'hover:text-blue-500 transition duration-300' ?>"><?= $page['name']?></a>
			<?php endforeach; ?>
		</ul>
	</div>
</nav>