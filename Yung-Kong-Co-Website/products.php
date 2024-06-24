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
			# load products
			include_once 'phpData/productList.php';
			foreach ($product_category as $products): 
	?>
            <div class="col-md-6 col-sm-6">
                <div class="thumbnail clearfix">
                    <a href="products.php"><img class="img-responsive" src="img/product-categories/<?php echo $products['img']; ?>" alt="Image"></a>

                    <div class="caption">

                        <h3>
							<a href="products.php">
								<?php echo $products['title']; ?>
							</a>
						</h3>

                        <ul>
							<?php foreach ($products['prod'] as $product):?>
								<li> • <?php echo $product->title; ?></li>
							<?php endforeach; ?>
                        </ul>

                    </div>
					<!-- /caption -->
                </div>
            </div>
			<?php endforeach; ?>
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