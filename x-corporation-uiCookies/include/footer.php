
<!-- <footer class="footer"> -->

<!-- Footer Widget Section -->
<div class="footer-widget-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-4 footer-block">
                <div class="footer-widget widget_text">
                    <div class="footer-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                    <p>Continually matrix cross functional opportunities whereas ethical information. Compellingly streamline enabled human capital before resource-leveling internal or "organic".</p>

                </div>
            </div><!-- /.col-sm-4 -->

            <div class="col-sm-4 footer-block">
                <div class="footer-widget widget_text">
                    <h3>We work for your profit</h3>
                    <p>Distinctively expedite viral materials rather than out-of-the-box solutions. Credibly empower revolutionary ROI rather than unique products. Collaboratively maximize principle-centered ideas before highly efficient data. Phosfluorescently.</p>
                </div>
            </div><!-- /.col-sm-4 -->

            <div class="col-sm-4 footer-block last">
                <div class="footer-widget widget_text">
                    <h3>Contact Us Today</h3>
                    <address>
                        Call Us 666 777 888 OR 111 222 333<br>
                        Send an Email on <a href="mailto:#">contact@domain.com</a><br>
                        Visit Us 123 Fake Street- Blla 12358<br>
                        Fake Kingdom<br>
                    </address>

                    <ul class="list-inline social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div><!-- /.col-sm-4 -->
        </div>
    </div>
</div><!-- /.Footer Widget Section -->

<div class="copyright-section">
    <div class="container clearfix">
            <span class="copytext">Copyright &copy; 2023 | <a href="https://www.yungkongco.com.my/">Yung Kong Co. Bhd. </a>(103194-T). <strong style="color: #31aae2;">All Rights Reserved.</strong></span>

        <ul class="list-inline pull-right">

            <?php 
            $current_page = basename($_SERVER['SCRIPT_NAME']);
            
            echo ($current_page == 'index.php' ? '<li class="active">' : '<li>') . '<a href="index.php">Home</a></li>';
            echo ($current_page == 'about.php' ? '<li class="active">' : '<li>') . '<a href="about.php">About</a></li>';
            echo ($current_page == 'services.php' ? '<li class="active">' : '<li>') . '<a href="services.php">Services</a></li>';
            echo ($current_page == 'contact.php' ? '<li class="active">' : '<li>') . '<a href="contact.php">Contact</a></li>';
            
            ?>
        </ul>
    </div>
    <!-- .container -->
</div>
<!-- .copyright-section -->

