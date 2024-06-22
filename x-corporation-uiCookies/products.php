<?php 

$prod_cat = [
    ['src' => 'bolts_fasteners_categories.jpg'  , 'alt' => 'bolts_fasteners_categories.jpg'],
    ['src' => 'building_material_categories.jpg', 'alt' => 'building_material_categories.jpg'],
    ['src' => 'electrical_categories.jpg'       , 'alt' => 'electrical_categories.jpg'],
    ['src' => 'general_tools_categories.jpg'    , 'alt' => 'general_tools_categories.jpg'],
    ['src' => 'hand_tools_categories.jpg'       , 'alt' => 'hand_tools_categories.jpg'],
    ['src' => 'paint_categories.jpg'            , 'alt' => 'paint_categories.jpg'],
    ['src' => 'plumbing_categories.jpg'         , 'alt' => 'plumbing_categories.jpg'],
    ['src' => 'power_tools_categories.jpg'      , 'alt' => 'power_tools_categories.jpg'],
    ['src' => 'safety_security_categories.jpg'	, 'alt' => 'safety_security_categories.jpg'],
    ['src' => 'welding_machinery.jpg'			, 'alt' => 'welding_machinery.jpg'],
];

?>
    

<!DOCTYPE html>
<html>
<!-- header -->
    <?php include_once 'include/header.php'?>
<!-- .header -->
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

<!-- navbar -->
<?php include_once 'include/navbar.php'?>
<!-- navbar -->


<section class="single-page-title">
    <div class="container text-center">
        <h2>Product Categories</h2>
    </div>
</section>
<!-- page-title -->

	




<!-- about-text-->

<section class="x-services ptb-100 gray-bg">
    <div class="container">
        <div class="row">

<?php 
            foreach ($prod_cat as $cat): 
?>


            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="thumbnail clearfix">
                    <a href="products.php"><img class="img-responsive" src="img/product-categories/<?php echo $cat['src']; ?>" alt="Image"></a>

                    <div class="caption">

                        <h3><a href="products.php">Construction & Building Materials</a></h3>

                        <ul>
                            <li>• Building Materials</li>
                            <li>• Bolts & Fasteners</li>
                            <li>• Plumbing</li>
                        </ul>

                        
                    </div>
                </div>
            </div>

<?php 
            endforeach; 
?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

        
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="products.php"><img class="img-responsive" src="img/home-offer/construction-building-materials.png" alt="Image"></a>

                    <div class="caption">

                        <h3><a href="products.php">Construction & Building Materials</a></h3>

                        <ul>
                            <li>• Building Materials</li>
                            <li>• Bolts & Fasteners</li>
                            <li>• Plumbing</li>
                        </ul>

                        
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="products.php"><img class="img-responsive" src="img/home-offer/tools-equipment.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="products.php">Tools & Equipment</a></h3>

                        <ul>
                            <li>• Hand Tools</li>
                            <li>• Power Tools</li>
                            <li>• Welding & Machinery</li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="products.php"><img class="img-responsive" src="img/home-offer/home-general-supplies.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="products.php">Home & General Supplies</a></h3>

                        <ul>
                            <li>• General & Household</li>
                            <li>• Paint</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="products.php"><img class="img-responsive" src="img/home-offer/safety-and-utilities.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="products.php">Safety and Utilities</a></h3>
                        
                        <ul>
                            <li>• Safety & Security</li>
                            <li>• Electrical Accessories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
</section>


<!-- .about-text-->



<!-- footer -->
    <?php include_once 'include/footer.php' ?>
<!-- footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->


<!-- uc-mobile-menu -->
    <?php include_once 'include/uc-mobile-menu.php'?>
<!-- uc-mobile-menu -->


</div>
<!-- #main-wrapper -->

<!-- Script -->
<?php include_once 'include/script-src.php'?>

</body>
</html>