<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wprig
 */

get_header();

?>
    <main class="content">
        <?php
            displayPages();
        ?>
    </main><!-- #primary -->
<?php
get_footer();
