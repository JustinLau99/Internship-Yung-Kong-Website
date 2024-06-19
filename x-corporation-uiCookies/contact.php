<!DOCTYPE html>
<html>
    <!-- header -->
    <?php include_once 'include/header.php'?>
<body>
<div id="main-wrapper">

<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">

<!-- .nav -->
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <?php include_once 'include/navbar.php'?>
</nav>
<!-- .nav -->


<section class="single-page-title">
    <div class="container text-center">
        <h2>Contact us</h2>
    </div>
</section>
<!-- .page-title -->

<section class="contact-form ptb-100">
    <div class="container text-center">
        <h2>Compellingly implement distinctive outsourcing<br>and 24/365 customer service energistically.</h2>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group user-name">
                                <label for="nameFive-first" class="sr-only">Name</label>
                                <input type="text" class="form-control" required="" id="nameFive-first" placeholder="First Name">
                            </div>

                            <div class="form-group user-email">
                                <label for="emailFive" class="sr-only">Email</label>
                                <input type="email" class="form-control" required="" id="emailFive" placeholder="Email Address">
                            </div>


                            <div class="form-group user-phone">
                                <label for="websiteOne" class="sr-only">Website</label>
                                <input type="text" class="form-control" required="" id="websiteOne" placeholder="Phone">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group user-message">
                                <label for="messageOne" class="sr-only">Message</label>
                                <textarea class="form-control" required="" id="messageOne" placeholder="Write Message"></textarea>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row-->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div><!-- /.col-md-8 -->
        </div>

    </div>
</section>
<!-- .contact-form-->

<section class="map-section">
    <div id="googleMap"></div>
</section>
    <!--.map-section-->

<!-- footer -->
<footer class="footer">
    <?php include_once 'include/footer.php' ?>
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<!-- uc-mobile-menu -->
<div class="uc-mobile-menu uc-mobile-menu-effect">
    <?php include_once 'include/uc-mobile-menu.php'?>
</div>
<!-- .uc-mobile-menu -->


</div>
<!-- #main-wrapper -->



<!-- Script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/scripts.js"></script>
</body>
</html>