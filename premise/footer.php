<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Premise
 * @since 1.0
 * @version 1.2
 */
?>

</div><!-- #content -->

<footer>
    <div class="footer">
        <div class="container">

            <div class="footer-menu">
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container_class' => 'footer-nav'
                    ));
                } else {
                    ?>
                    <ul class="footer-nav">
                        <li><a href="http://premisesaas.com/dev/privacy-policy/">Privacy</a></li>
                    </ul>
                <?php } ?>
            </div>

            <div class="footer-bottom">
                <p>@copy; 2018 - <a href="#">PremiseHQ</a></p>
            </div>

        </div>
    </div>
</footer>

<div class="popup modal fade" id="popupContent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog container" role="document">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <div class="modal-content">
            <div class="popup-abstractor" id="popup-abstractor">
                <div class="header-title">
                    <h2 class="title">Please enter your email address<br>
                        to request demo.</h2>
                </div>
                <div class="demoRequest" id="demoRequest4">
                    <form class="demoForm clearfix" id="demoForm4" action="" method="POST">
                        <div class="demoRequestEmail" id="demoRequestEmail4">
                            <p class="demoFormPlaceholder">Email</p>
                        </div>
                        <input data-target="#popupContent" type="submit" name="submit4" id="submit4" class="request-button" value="Demo Request">
                        <!--<a class="request-button">Demo Request</a>-->
                    </form>
                    <div id="emailerror4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
