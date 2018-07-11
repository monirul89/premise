<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Premise
 * @since 1.0
 * @version 1.0
 */
?>
<header>
    <div class="navbar-top clearfix">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/premise-logo.png" alt="Premise" /></a>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="nav-menu navbar-collapse collapse" id="navbar">

            <?php
            if (has_nav_menu('top')) {
                wp_nav_menu(array(
                    'theme_location' => 'top',
                    'container_class' => 'navbar'
                ));?>
            <li class="login-button-mobile">
                <a href="https://premisehq.co"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/login-button.png" />Login</a></li>
            <?php
            } else {
                ?>
                <ul class="navbar">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            <?php } ?>


        </div>
        <div class="login-button"><a href="https://premisehq.co">Login</a></div>
    </div>
</header>

