<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function mira_projects_register_cpt() {
    $labels = [
        'name' => 'Projects',
        'singular_name' => 'Project',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => ['title','editor','excerpt','thumbnail','revisions'],
        'rewrite' => ['slug' => 'projects'],
    ];
    register_post_type( 'project', $args );
}
add_action( 'init', 'mira_projects_register_cpt' );
