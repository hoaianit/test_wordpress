<?php
/**
 * Plugin Name: MIRA Projects
 * Description: Registers Project CPT and project grid shortcode.
 * Version: 1.0
 * Author: Your Name
 * Text Domain: mira-projects
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'MIRA_PROJECTS_DIR', plugin_dir_path( __FILE__ ) );

require_once MIRA_PROJECTS_DIR . 'includes/cpt.php';
require_once MIRA_PROJECTS_DIR . 'includes/shortcodes.php';

register_activation_hook( __FILE__, function() {
    // flush rewrite rules to register CPT permalinks
    mira_projects_register_cpt();
    flush_rewrite_rules();
});

register_deactivation_hook( __FILE__, function() {
    flush_rewrite_rules();
});
