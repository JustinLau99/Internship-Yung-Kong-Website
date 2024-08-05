// script.js

$(document).ready(function () {

	function checkScroll() {

		if ($(window).scrollTop() > 100) {
			$('#navbar').addClass('navbar-scrolled');
			// Show button
			$('#back-to-top').slideDown();

		} else {
			$('#navbar').removeClass('navbar-scrolled');
			// Hide button
			$('#back-to-top').fadeOut();

		}
	}
	checkScroll();
	$(window).on('scroll', function () { // Run on scroll
		checkScroll();
	});


	// Back to Top button
	$('#back-to-top').on('click', function () {
		$('html, body').animate({ scrollTop: 0 }, { duration: 0 });
		return false; // Prevents the default action of the link
	});


	// Change inquiry department option based on clicked img
	$('.department-img').on('click', function () {
		var departmentName = $(this).data('department');
		$('#department').val(departmentName).change();
	});


	// Validate the form
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


	// news image pop up modal
	$('#mediaModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget);
		var contentSrc = button.data('bs-src');
		var contentType = button.data('bs-type'); // 'image' or 'pdf'

		var modalImage = $(this).find('#modalImage');
		var modalIframe = $(this).find('#modalIframe');

		if (contentType === 'image') {
			modalImage.attr('src', contentSrc).show();
			modalIframe.hide();
		} else if (contentType === 'pdf') {
			modalIframe.attr('src', contentSrc).show();
			modalImage.hide();
		}
	});




	// set inquiry type automatically from news job application
	function getParameterByName(name) {
		const urlParams = new URLSearchParams(window.location.search);
		return urlParams.get(name);
	}
	const inquiryType = getParameterByName('inquiryType');
	if (inquiryType) {
		$('#inquiryType').val(inquiryType);
	}


	// Handle clicks on links with the class tab-link
	$('.tab-link').on('click', function (event) {
		const targetId = $(this).attr('href'); // Get the target tab pane id
		const tabButton = $(`button[data-bs-target="${targetId}"]`); // Find the corresponding tab button
		if (tabButton.length) {
			const tab = new bootstrap.Tab(tabButton[0]); // Create a new Bootstrap tab instance
			tab.show();
		}
	});






	// Ensure everything loaded before fading out prelaoder 
	$('#preloader').fadeOut('slow');

});

