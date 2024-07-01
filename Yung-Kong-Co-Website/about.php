<?php 
$logo_brand = [
    ['src' => 'transpaint.png'  ,'alt' => 'transpaint.png'],
    ['src' => 'lazor.png'       ,'alt' => 'lazor.png'],
    ['src' => 'versatile.png'   ,'alt' => 'versatile.png'],
    ['src' => 'ymc.png'         ,'alt' => 'ymc.png'],
    ['src' => 'stanley2.png'    ,'alt' => 'stanley2.png'],
    ['src' => 'irwin2.png'      ,'alt' => 'irwin2.png'],
    ['src' => 'lenox.png'       ,'alt' => 'lenox.png'],
    ['src' => 'LAVOR_NEW.png'   ,'alt' => 'LAVOR_NEW.png'],
    ['src' => 'asteel.png'      ,'alt' => 'asteel.png'],
    ['src' => 'cms.png'         ,'alt' => 'cms.png'],
    ['src' => 'dulux.png'       ,'alt' => 'dulux.png'],
    ['src' => 'bosch.png'       ,'alt' => 'bosch.png'],
    ['src' => 'hikoki.png'      ,'alt' => 'hikoki.png'],
    ['src' => 'makita2.png'     ,'alt' => 'makita2.png'],
    ['src' => 'sika2.png'       ,'alt' => 'sika2.png'],
    ['src' => 'yale2.png'       ,'alt' => 'yale2.png'],
    ['src' => 'philips.png'     ,'alt' => 'philips.png'],
    ['src' => 'karcher.png'     ,'alt' => 'karcher.png'],
    ['src' => 'abus.png'        ,'alt' => 'abus.png'],
    ['src' => 'tri_circle2.png' ,'alt' => 'circle2.png'],
    ['src' => '3m.png'          ,'alt' => '3m.png'],
    ['src' => 'hardex.png'      ,'alt' => 'hardex.png'],
    ['src' => 'energizer.png'   ,'alt' => 'energizer.png'],
    ['src' => 'eveready.png'    ,'alt' => 'eveready.png'],
    ['src' => 'koya2.png'       ,'alt' => 'koya2.png'],
    ['src' => 'prima.png'       ,'alt' => 'prima.png'],
    ['src' => 'everlast.png'    ,'alt' => 'everlast.png'],
    ['src' => 'ecogreen.png'    ,'alt' => 'ecogreen.png'],
    ['src' => 'kingkong.png'    ,'alt' => 'kingkong.png'],
    ['src' => 'selleys.png'     ,'alt' => 'selleys.png'],
    ['src' => 'rexco.png'       ,'alt' => 'rexco.png'],
    ['src' => 'vip.png'         ,'alt' => 'vip.png'],
    ['src' => 'enviomatt2.png'  ,'alt' => 'enviomatt2.png'],
    ['src' => 'envioclean2.png' ,'alt' => 'envioclean2.png'],
    ['src' => 'domina2.png'     ,'alt' => 'domina2.png'],
    ['src' => 'galuzinc2.png'   ,'alt' => 'galuzinc2.png'],
    ['src' => 'AKAIDO.png'      ,'alt' => 'AKAIDO.png'],
    ['src' => 'INA.png'         ,'alt' => 'INA.png'],
    ['src' => 'KHE_NEW.png'     ,'alt' => 'KHE_NEW.png'],
    ['src' => 'tekiro.png'      ,'alt' => 'tekiro.png'],
    ['src' => 'WD40.png'        ,'alt' => 'WD40.png'],
];


?>



<!DOCTYPE html>
<html>
    <!-- header -->
    <?php include_once 'include/header.php'; ?>
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
<?php include_once 'include/navbar.php'; ?>
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

            <div class="col-md-3 col-sm-6">

            </div>

        </div>
    </div>

</section>
<!-- .about-text-->



<!-- Product Brands -->
<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Key Product Brands</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">

<?php 
    $counter = 0; 
    foreach ($logo_brand as $brand): 
        if ($counter % 6 == 0): 
?>
            <div class="row">
<?php
        endif;
?>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#">
                    <img src="img/brands/<?php echo $brand['src']; ?>" alt="<?php echo $brand['alt']; ?>">
                </a>
            </div>
<?php
        $counter++; 
        if ($counter % 6 == 0): 
?>
            </div>
<?php
        endif;
    endforeach;
?>

    </div>
    <!--end of .container -->
</section>



<!-- footer -->
<?php include_once 'include/footer.php'; ?>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<!-- uc-mobile-menu -->
<?php include_once 'include/uc-mobile-menu.php'; ?>


</div>
<!-- #main-wrapper -->

<!-- Script -->
 <?php include_once 'include/script-src.php'; ?>

</body>
</html>