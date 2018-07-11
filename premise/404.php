<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
        <main id="main" class="site-main" role="main">

            <article>
                <div class="content-404">
                    <div class="container">
                        <div class="error-page clearfix">
                            <div class="page-title col-sm-6">
                                <h2><?php _e('Oops! That page can&rsquo;t be found.', 'Premise'); ?></h2>
                                <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'Premise'); ?></p>
                            </div>
                            <div class="page-search col-sm-6">
                                <?php get_search_form(); ?>
                            </div>
                        </div>    
                    </div>
                </div>
            </article>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
