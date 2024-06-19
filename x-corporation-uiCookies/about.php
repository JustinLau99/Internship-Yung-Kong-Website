<?php 
$images = [
    ['src' => 'transpaint.png', 'alt' => ''],
    ['src' => 'lazor.png', 'alt' => ''],
    ['src' => 'versatile.png', 'alt' => ''],
    ['src' => 'ymc.png', 'alt' => '']
    ['src' => 'stanley2.png', 'alt' => '']
    ['src' => 'irwin2.png', 'alt' => '']
    ['src' => 'lenox.png', 'alt' => '']
    ['src' => 'LAVOR_NEW.png', 'alt' => '']
    ['src' => 'asteel.png', 'alt' => '']
    ['src' => 'cms.png', 'alt' => '']
    ['src' => 'dulux.png', 'alt' => '']
    ['src' => 'bosch.png', 'alt' => '']
    ['src' => 'hikoki.png', 'alt' => '']
    ['src' => 'makita2.png', 'alt' => '']
    ['src' => 'sika2.png', 'alt' => '']
    ['src' => 'yale2.png', 'alt' => '']
    ['src' => 'philips.png', 'alt' => '']
    ['src' => 'karcher.png', 'alt' => '']
    ['src' => 'abus.png', 'alt' => '']
    ['src' => 'tri-circle2.png', 'alt' => '']
    ['src' => '3m.png', 'alt' => '']
    ['src' => 'hardex.png', 'alt' => '']
    ['src' => 'energizer.png', 'alt' => '']
    ['src' => 'eveready.png', 'alt' => '']
    ['src' => 'koya2.png', 'alt' => '']
    ['src' => 'prima.png', 'alt' => '']
    ['src' => 'everlast.png', 'alt' => '']
    ['src' => 'ecogreen.png', 'alt' => '']
    ['src' => 'kingkong.png', 'alt' => '']
    ['src' => 'selleys.png', 'alt' => '']
    ['src' => 'rexco.png', 'alt' => '']
    ['src' => 'vip.png', 'alt' => '']
    ['src' => 'enviomatt2.png', 'alt' => '']
    ['src' => 'envioclean2.png', 'alt' => '']
    ['src' => 'domina2.png', 'alt' => '']
    ['src' => 'galuzinc2.png', 'alt' => '']
    ['src' => 'AKAIDO.png', 'alt' => '']
    ['src' => 'INA.png', 'alt' => '']
    ['src' => 'KHE_NEW.png', 'alt' => '']
    ['src' => 'tekiro.png', 'alt' => '']
    ['src' => 'WD40.png', 'alt' => '']
];


?>

<?php 
    $counter = 0; 
    foreach ($images as $image): 
        if ($counter % 6 == 0): ?>
            <div class="row">
        <?php endif; ?>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>"></a>
            </div>
        <?php 
        $counter++; 
        if ($counter % 6 == 0): ?>
            </div>
        <?php endif; 
    endforeach; 
?>

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
        <h2>Our main business</h2>
    </div>
</section>
<!-- .page-title -->

<section class="about-text ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Hardware and building materials retailing</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>
                    We supply more than 15,000 items such as cement, steel, power tools, hand tools, bathroom 
                    and kitchen accessories, paints, safety shoes, machinery tools, electrical accessories, 
                    pressure pump, piping, fitting, gloves, machinery, tape, lock, welding equipments, 
                    safety equipments, measuring equipments, drill bits, door knobs, fasteners and many more.
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    Drop by to our nearest store and let our trained and friendly staff assist you in your needs 
                    from DIY home repair or improvement requirement to project supplies. Alternatively, you could 
                    shop with us via Lazada as per link above.
                </p>
            </div>
        </div>
    </div>

</section>
<!-- .about-text-->

<section class="skills ptb-100 gray-bg">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Professional Skills</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Completely reconceptualize leading-edge e-commerce</h3>

                <p>Whereas 2.0 ideas. Energistically expedite frictionless infrastructures without user friendly quality
                    vectors. Distinctively communicate customer directed content for leading-edge web-readiness.
                    Professionally fabricate technically sound mindshare before emerging paradigms. Efficiently e-enable
                    vertical benefits after intermandated vortals.</p>

                <p>Enthusiastically innovate one-to-one technology through user-centric architectures. Dynamically
                    whiteboard global processes with compelling interfaces. Globally empower ubiquitous growth
                    strategies vis-a-vis cross-unit alignments. Collaboratively evisculate client-focused niches with
                    impactful alignments.</p>
            </div>
            <div class="col-md-6 x-progress">
                <div class="progress-wrapper">
                    <div class="progress-item">
                        <span class="progress-title">Solution</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                        <span class="progress-percent">50%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Creativity</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                        <span class="progress-percent">90%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Finance</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                        <span class="progress-percent">75%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Brand</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="33"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                        </div>
                        <span class="progress-percent">33%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Efficiency</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="82"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 82%;"></div>
                        </div>
                        <span class="progress-percent">82%</span>
                    </div>
                    <!-- /.progress-item -->
                </div>
                <!-- /.progress-wrapper -->
            </div>
        </div>
    </div>

</section>
<!-- .skills -->

<section class="testimonial">
    <section class="section-title">
        <div class="container text-center">
            <h2>Satisfied Customer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-1.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Justus Kühn</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-2.jpg" class=" img-responsive" alt=""/></li>
                            <li class="name">Lennox Arnold</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-3.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Paulina Berger</li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                    </blockquote>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- .testimonial -->

<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Key Product Brands</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-brand/transpaint.png" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-brand/lazor.png" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-3.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-4.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-5.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-6.jpg" alt="Image"></a>
            </div>
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->


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
<?php include_once 'include/script-src.php'?>

</body>
</html>