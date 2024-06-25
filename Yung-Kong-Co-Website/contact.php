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
	<?php include_once 'include/navbar.php'?>
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
<?php include_once 'include/footer.php' ?>

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->


<?php include_once 'include/uc-mobile-menu.php'?><!-- uc-mobile-menu -->


</div>
<!-- #main-wrapper -->


<?php include_once 'include/script-src.php'?><!-- Script -->


<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

</body>
</html>