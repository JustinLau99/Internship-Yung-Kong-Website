// script.js


$(document).ready(function () {
	function checkScroll() {
		
		if ($(window).scrollTop() > 100) {
			$('#navbar').addClass('navbar-scrolled');
			// Show the button
			$('#back-to-top').slideDown();


		} else {
			$('#navbar').removeClass('navbar-scrolled');
			// Hide the button
			$('#back-to-top').fadeOut();

		}
	}

	// Run on page load
	checkScroll();

	// Run on scroll
	$(window).on('scroll', function () {
		checkScroll();
	});


	// Back to Top button
	$('#back-to-top').on('click', function () {
		$('html, body').animate({ scrollTop: 0 }, { duration: 0 });
		return false; // Prevents the default action of the link
	});

});

