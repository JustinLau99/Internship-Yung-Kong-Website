// script.js

$(document).ready(function () {
    // Toggle mobile menu visibility
    $('.mobile-menu-button').click(function () {
        $('.mobile-menu').toggleClass('hidden');
    });

    // Initialize slide index
    let currentSlide = 0;

    // Function to show current slide
    function showSlide(index) {
        $('.background-slide').removeClass('active');
        $('.background-slide').eq(index).addClass('active');
    }

    // Initially show the first slide
    showSlide(currentSlide);

    // Click handler for the left button
    $('#leftButton').click(function () {
        currentSlide = (currentSlide - 1 + $('.background-slide').length) % $('.background-slide').length;
        showSlide(currentSlide);
    });

    // Click handler for the right button
    $('#rightButton').click(function () {
        currentSlide = (currentSlide + 1) % $('.background-slide').length;
        showSlide(currentSlide);
    });
});
