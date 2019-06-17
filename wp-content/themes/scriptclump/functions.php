<?php
// Theme Set Up
add_theme_support('menus');

// Actions & Filter hooks
include( get_template_directory(). '/includes/front/enqueue.php');
include( get_template_directory(). '/includes/setup.php');

// Includes
add_action('wp_enqueue_scripts', 'scb_enqueue');
add_action('after_setup_theme', 'scb_setup_theme' );
// Shortcodes