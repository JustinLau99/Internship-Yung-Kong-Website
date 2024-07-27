<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles to ensure the page has enough height to scroll */
        .content {
            height: 2000px; /* Adjust this value to test scrolling */
            padding: 20px;
        }
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none; /* Initially hidden */
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <!-- Other navbar content -->
    </nav>

    <!-- Page Content -->
    <div class="content">
        <h1>Welcome to the Page</h1>
        <p>This is a sample page with lots of content to test the scrolling behavior and the Back to Top button.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
        <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
        <!-- Add more content here if needed -->
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="btn btn-primary" title="Back to Top">
        <i class="bi bi-arrow-up fs-5"></i>
    </button>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            function checkScroll() {
                if ($(window).scrollTop() > 50) {
                    $('#navbar').addClass('navbar-scrolled');
                    $('#back-to-top').fadeIn(); // Show the button
                } else {
                    $('#navbar').removeClass('navbar-scrolled');
                    $('#back-to-top').fadeOut(); // Hide the button
                }
            }

            // Run on page load
            checkScroll();

            // Run on scroll
            $(window).on('scroll', function () {
                checkScroll();
            });

            // Back to Top button click event
            $('#back-to-top').on('click', function () {
                $('html, body').animate({
                    scrollTop: 0
                }, {
                    duration: 1000,
                    easing: 'easeOutCirc'
                });
                return false; // Prevents the default action of the link
            });
        });
    </script>
    
</body>

</html>
