<?php
// Frontend logic for displaying settings
$contact_address = "Lovely Professional Universiy, Phagwara";
$footer_copyright = "Copyright Â© 2024 - UrbanCraze";
$newsletter_on_off = 1; // Default value to show newsletter section
?>

<?php if ($newsletter_on_off == 1): ?>
<section class="home-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="single">
                    <form action="" method="post">
                        <h2>Subscribe to our Newsletter</h2>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email" name="email_subscribe">
                            <span class="input-group-btn">
                                <button class="btn btn-theme" type="submit" name="form_subscribe">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 copyright">
                <?php echo $footer_copyright; ?>
            </div>
        </div>
    </div>
</div>

<a href="#" class="scrollup">
    <i class="fa fa-angle-up"></i>
</a>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/jquery.touchSwipe.min.js"></script>
<script src="assets/js/bootstrap-touch-slider.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/custom.js"></script>


</body>
</html>
