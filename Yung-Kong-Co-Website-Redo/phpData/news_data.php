<?php

$new_product_img = [ // New Products
	'LAVOR_IKON_160_Italy.jpg',
	'LAVOR_ONE_120_Italy.jpg',
];

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

$job_offer = [ // New Products
	['job' => 'Software Developer', 'location' => 'Pending', 'prereq' => 'SPM'],
	['job' => 'Admin Clerk', 'location' => 'Matang', 'prereq' => '3 Year Work Experience'],
	['job' => 'Account Clerk', 'location' => 'Penrissen', 'prereq' => ''],
];

?>



<?php if (!empty($new_product_img)): ?>

	<div class="alert alert-info text-center" role="alert">
		New products are now available! Check it out
		<!-- if is the same page as tab  -->
		<a href="<?= (basename($_SERVER['PHP_SELF']) === 'news.php') ? '#nav-new_product' : 'news.php#nav-new_product'; ?>"
			class="alert-link tab-link">here</a>
	</div>

<?php endif; ?>