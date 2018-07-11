<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Premise
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main container" role="main">
            <div class="col-sm-12">
                <?php
                if (have_posts()) :

                    /* Start the Loop */
                    while (have_posts()) : the_post();
                        ?>

                        <div class = "row blog-seperator" >
                            <?php
                            get_template_part('template-parts/post/content', get_post_format());
                            ?>
                            <a class="more-button" href="<?php echo esc_url(get_permalink()); ?>" rel="more"> Read more... </a>
                        </div>
                        <?php
                    endwhile;

                    the_posts_pagination(array(
                        'prev_text' => Premise_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'Premise') . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __('Next page', 'Premise') . '</span>' . Premise_get_svg(array('icon' => 'arrow-right')),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'Premise') . ' </span>',
                    ));

                else :

                    get_template_part('template-parts/post/content', 'none');

                endif;
                ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
