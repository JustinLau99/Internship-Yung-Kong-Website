<!-- nav -->
<nav class="navbar m-menu navbar-default navbar-fixed-top">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/yk_logo.png" alt=""></a>
            <a class="navbar-brand" href="index.php">
                <h1>榕 光 有 限 公 司</h1>
                <h2>YUNG KONG CO. BHD.</h2>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

            <ul class="nav-cta hidden-xs">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                        class="fa fa-search"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="head-search">
                                <form role="form">
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Something">
			                                <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right main-nav">

                <?php $current_page = basename($_SERVER['SCRIPT_NAME']); ?>
                
				<li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
				<li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"><a href="about.php">About</a></li>
				<li class="<?php echo ($current_page == 'products.php') ? 'active' : ''; ?>"><a href="products.php">Products</a></li>
				<li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php">Contact</a></li>

                <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Online Shop
                    <span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="m-menu-content">
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Online Shops</li>
                                    <li><a href="#">Shopee</a></li>
                                    <li><a href="#">Lazada</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                
            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- nav -->