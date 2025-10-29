<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function mira_projects_grid_shortcode( $atts ) {
    $atts = shortcode_atts( ['posts' => 6], $atts, 'project_grid' );
    $q = new WP_Query([
        'post_type' => 'project',
        'posts_per_page' => intval($atts['posts']),
    ]);

    ob_start();
    if ( $q->have_posts() ): 
        echo '<div class="mira-project-grid">';
        while ( $q->have_posts() ): $q->the_post();
            echo '<div class="mira-project-item">';
            if ( has_post_thumbnail() ) {
                echo '<div class="thumb"><a href="' . get_the_permalink() . '">';
                the_post_thumbnail('medium');
                echo '</a></div>';
            }
            echo '<h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
            echo '<div class="excerpt">' . get_the_excerpt() . '</div>';
            echo '</div>';
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else:
        echo '<p>No projects found.</p>';
    endif;

    return ob_get_clean();
}
add_shortcode( 'project_grid', 'mira_projects_grid_shortcode' );
