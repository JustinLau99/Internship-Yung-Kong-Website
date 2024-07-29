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


	// Change inquiry department option based on clicked img
	$('.department-img').on('click', function() {
        var departmentName = $(this).data('department');
        $('#department').val(departmentName).change(); 
    });

	// Function to validate the form
	function validateForm() {
		var form = $('#contactForm')[0];
		var isValid = form.checkValidity();

		// Add or remove Bootstrap's validation classes
		if (isValid) {
			$(form).removeClass('was-validated');
		} else {
			$(form).addClass('was-validated');
		}

		return isValid;
	}

	// Handle form submission
	$('#submitBtn').on('click', function () {
		if (validateForm()) {

			// Get form values
			var name = $('#name').val().trim();
			var message = $('#message').val().trim();
			var department = $('#department option:selected').val().trim();
			var inquiryType = $('#inquiryType option:selected').val().trim();

			// Get selected department's email
			var departmentEmail = encodeURIComponent($('#department option:selected').data('email'));

			// Construct the mailto link with inquiry type in the subject
			var mailtoLink =
				'mailto:' + departmentEmail +
				'?subject=' + encodeURIComponent('Inquiry: ' + inquiryType) +
				'&body=' +
				encodeURIComponent('Department: ' + department) + '%0A' +
				encodeURIComponent('Name: ' + name) + '%0A' +
				'%0A' + // extra line break
				encodeURIComponent('Message: ' + message);

			window.location.href = mailtoLink;
		}
	});



	


});

