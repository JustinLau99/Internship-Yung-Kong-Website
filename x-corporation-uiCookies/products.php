<?php 
	include_once 'phpData/productClass.php';


$product_category = [
	new ProductCategory("Building Material"		, "building_material_categories.jpg", $building_materials),
	new ProductCategory("Bolts & Fasteners"		, "bolts_fasteners_categories.jpg"	, $bolts_fasteners),
	new ProductCategory("Hand Tools"			, "hand_tools_categories.jpg"		, $hand_tools),
	new ProductCategory("General Tools"			, "general_tools_categories.jpg"	, $general_household),
	new ProductCategory("Welding Machinery"		, "welding_machinery.jpg"			, $welding_machinery),
	new ProductCategory("Safety & Security"		, "safety_security_categories.jpg"	, $safety_security),
	new ProductCategory("Electrical Accessories", "electrical_categories.jpg"		, $electrical_accessories),
	new ProductCategory("Plumbing"				, "plumbing_categories.jpg"			, $plumbing),
	new ProductCategory("Power Tools"			, "power_tools_categories.jpg"		, $power_tools),
	new ProductCategory("Paint"					, "paint_categories.jpg"			, $paint),
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



<!-- page-title -->
<section class="single-page-title">
	
	<div class="container text-center">
		<h2>Product Categories</h2>
    </div>
</section>
<!-- /page-title -->



<!-- about-text-->

<section class="x-services ptb-100 gray-bg">
	<section class="section-title">
        <div class="container text-center">
            <h2>What We Offer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
<?php 
            foreach ($product_category as $category): 
?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="thumbnail clearfix">
                    <a href="products.php"><img class="img-responsive" src="img/product-categories/<?php echo $category->imgSrc; ?>" alt="Image"></a>

                    <div class="caption">

                        <h3>
							<a href="products.php">
								<?php echo $category->title; ?>
							</a>
						</h3>

                        <ul>
<?php 
								foreach ($category->product as $product): 
									echo '<li> • ';
									echo $product->title;
									echo '</li>';
								endforeach;
?>
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

</section>


<!-- /about-text-->



<!-- footer -->
    <?php include_once 'include/footer.php' ?>
<!-- /footer -->

</div>
<!-- /content-wrapper -->
</div>
<!-- /offcanvas-pusher -->


<!-- uc-mobile-menu -->
    <?php include_once 'include/uc-mobile-menu.php'?>
<!-- uc-mobile-menu -->


</div>
<!-- #main-wrapper -->


<!-- script -->
<?php 
	include_once 'include/script-src.php'
?>
<!-- /script -->

</body>
</html>