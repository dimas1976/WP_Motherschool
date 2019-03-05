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
        $args = array(
            'post_type' => 'page',
            'order' => 'ASC'
        );
        $query = new WP_Query($args);
        if ( !$query->have_posts() ) {
            echo 'Die Page-ID ist nicht vergeben';
        } else {
            while ( $query->have_posts() ) : $query->the_post();
                $slug = get_page_template_slug( get_the_ID() );
                $clear_slug = str_replace('.php', '', $slug);
                get_template_part($clear_slug);
            endwhile;
        }

        wp_reset_query();
        ?>

    </main><!-- #primary -->
<?php
get_footer();
