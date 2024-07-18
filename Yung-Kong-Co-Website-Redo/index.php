<!DOCTYPE html>
<html lang="en">

<?php include_once 'include/header.php'; ?><!-- header.php -->

<body class="bg-gray-100">
	
	<?php include_once 'include/navbar.php';?><!-- navbar.php -->
	
	<!-- Background Slider -->
	<div class="relative">
		<!-- Left Button -->
		<button id="leftButton"
			class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg z-10">
			<svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
				stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
				<path d="M15 19l-7-7 7-7"></path>
			</svg>
		</button>
		<!-- Right Button -->
		<button id="rightButton"
			class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg z-10">
			<svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
				stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
				<path d="M9 5l7 7-7 7"></path>
			</svg>
		</button>
		<!-- Slides Container -->
		<div class="background-slider">
			<div class="background-slide active">
				<img src="https://via.placeholder.com/1500x500/FF0000/FFFFFF" alt="Slide 1">
			</div>
			<div class="background-slide">
				<img src="https://via.placeholder.com/1500x500/00FF00/FFFFFF" alt="Slide 2">
			</div>
			<div class="background-slide">
				<img src="https://via.placeholder.com/1500x500/0000FF/FFFFFF" alt="Slide 3">
			</div>
		</div>
	</div>







	<?php include_once 'include/footer.php'; ?><!-- footer.php -->
	<?php include_once 'include/script-src.php'; ?><!-- script-src.php -->
</body>

</html>