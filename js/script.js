// script.js

$(document).ready(function () {

	function checkScroll() { // update navbar and back to top button
		if ($(window).scrollTop() > 100) {
			$('#navbar').addClass('navbar-scrolled');
			$('#back-to-top').slideDown();

		} else {
			$('#navbar').removeClass('navbar-scrolled');
			$('#back-to-top').fadeOut();

		}
	}

	function updateActiveLink() { // update active link in product slidebar

		var sidebarLinks = $('.sidebar-link a');
		var sections = $('.section-title');
		var previousSectionId = ""; // keep track of the previously active section
		var scrollTop = $(this).scrollTop(); // Current scroll position
		var scrollBottom = scrollTop + $(window).height();
		var currentSectionId = "";

		sections.each(function () {
			var sectionTop = $(this).offset().top - 60; // Adjust offset (navbar)
			var sectionBottom = sectionTop + $(this).outerHeight();
			// Check if the section is within the viewport range
			if (scrollBottom > sectionTop && scrollTop < sectionBottom) {
				currentSectionId = $(this).attr('id');
			}
		});


		if (currentSectionId !== previousSectionId) { // Only update class if the section ID has changed
			var selector = '.sidebar-link a[href="#' + currentSectionId + '"]';
			sidebarLinks.parent().removeClass('active');

			var $activeLink = $(selector).parent(); // find the active link element and add the active class
			$activeLink.length && $activeLink.addClass('active'); // Add active class if exists
			previousSectionId = currentSectionId; // Update the previous section ID
		}
	}

	function validateForm() { // Validate the form
		var form = $('#contactForm')[0];
		var isValid = form.checkValidity();
		// Add or remove Bootstrap's validation classes
		$(form).toggleClass('was-validated', !isValid);
		return isValid;
	}

	function updateInquiryFromJob() { // set inquiry type automatically from news job application
		const inquiryType = new URLSearchParams(window.location.search).get('inquiryType');
		if (inquiryType) {
			$('#inquiryType').val(inquiryType);
		}
	}







	// on scroll //////////
	$(window).on('scroll', function () { // Run on scroll
		checkScroll();
		$('.sidebar').length ? updateActiveLink() : null; // only call if sidebar class exist
	});

	// on load //////////
	checkScroll();
	updateInquiryFromJob();

	// on click //////////
	$('#back-to-top').on('click', function () { // Back to Top button
		$('html, body').animate({ scrollTop: 0 }, { duration: 0 });
		return false; // Prevents the default action of the link
	});

	$('.department-img').on('click', function () { // change inquiry department option based on clicked img
		var departmentName = $(this).data('department');
		$('#department').val(departmentName).change();
	});

	$('.tab-link').on('click', function (event) { // Handle clicks on links with the class tab-link
		const targetId = $(this).attr('href'); // Get the target tab pane id
		const tabButton = $(`button[data-bs-target="${targetId}"]`); // Find the corresponding tab button
		if (tabButton.length) {
			const tab = new bootstrap.Tab(tabButton[0]); // Create a new Bootstrap tab instance
			tab.show();
		}
	});

	$('#submitBtn').on('click', function () { // Handle form submission
		if (validateForm()) {
			// Get form values
			var name = $('#name').val().trim();
			var message = $('#message').val().trim();
			var department = $('#department option:selected').val().trim();
			var inquiryType = $('#inquiryType option:selected').val().trim();
			var departmentEmail = $('#department option:selected').data('email');
			var ccEmail = 'ykhr@yungkong.com';
			// Construct the mailto link with inquiry type in the subject
			var mailtoLink =
				'mailto:' + encodeURIComponent(departmentEmail) +
				'?cc=' + encodeURIComponent(ccEmail) +
				'?subject=' + encodeURIComponent('Inquiry: ' + inquiryType) +
				'&body=' +
				encodeURIComponent('Department: ' + department) + '%0A' +
				encodeURIComponent('Name: ' + name) + '%0A' +
				'%0A' + // extra line break
				encodeURIComponent('Message: ' + message);

			window.location.href = mailtoLink;
		}
	});

	// on show //////////
	$('#mediaModal').on('show.bs.modal', function (event) { // news image pop up modal
		var button = $(event.relatedTarget);
		var contentSrc = button.data('bs-src');
		var contentType = button.data('bs-type'); // 'image' or 'pdf'

		var modalImage = $(this).find('#modalImage');
		var modalIframe = $(this).find('#modalIframe');

		switch (contentType) {
			case 'image':
				modalImage.attr('src', contentSrc).show();
				modalIframe.hide();
				break;
			case 'pdf':
				modalIframe.attr('src', contentSrc).show();
				modalImage.hide();
				break;
			default: // hide both if contentType is not recognized
				modalImage.hide();
				modalIframe.hide();
				alert('Unrecognized content type: ' + contentType); // Alert and console log for unrecognized contentType
				console.log('Unrecognized content type:', contentType);
				break;
		}
	});



















	// Ensure everything loaded before fading out prelaoder 
	$('#preloader').fadeOut('slow');

});