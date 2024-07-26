<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Scroll Animation</title>
  <!-- Bootstrap 5.1.3 CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #back-to-top {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
    }
  </style>
</head>
<body>
  <div style="height: 2000px;">
    <!-- Content to allow scrolling -->
    <h1>Scroll down to see the button</h1>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="btn btn-primary">
      Back to Top
    </button>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- jQuery Script for Back to Top Button -->
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });

      $('#back-to-top').on('click', function() {
        $('html, body').animate({
          scrollTop: 0
        }, 1000, 'swing');
        return false;
      });
    });
  </script>
</body>
</html>
