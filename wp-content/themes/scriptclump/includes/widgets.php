<?php
function scb_sidebar(){
	register_sidebar(array(
		'name' 		=> __('First Sidebar', 'scriptclump'),
		'id' 		=> 'scb_sidebar',
		'description' 	=> __('Sidebar for the theme scriptclump', 'scriptclump'),
		'class' 		=> ''
	));
}