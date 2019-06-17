<?php
// Set Up


// Actions & Filter hooks
include( get_template_directory(). '/includes/front/enqueue.php');

// Includes
add_action('wp_enqueue_scripts', 'scb_enqueue');

// Shortcodes