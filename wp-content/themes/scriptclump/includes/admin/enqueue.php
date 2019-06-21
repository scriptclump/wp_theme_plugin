<?php
function scb_admin_enqueue(){

	if( !isset($_GET['page']) ||  $_GET['page'] != 'scb_theme_opts'){
		return;
	}

	// Registering the stylesheet
	wp_register_style('scb_bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css');
	// Loading the stylesheet
	wp_enqueue_style('scb_bootstrap');

	
	// Registering the scripts
	wp_register_script('scb_bootstrap', get_template_directory_uri(). '/assets/scripts/options.js', array(), false, true);
	// Loading the scripts
	wp_enqueue_script('scb_options');

}