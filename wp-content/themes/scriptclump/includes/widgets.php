<?php
function scb_sidebar(){
	register_sidebar(array(
		'name' 				=> __('First Sidebar', 'scriptclump'),
		'id' 				=> 'scb_sidebar',
		'description' 		=> __('Sidebar for the theme scriptclump', 'scriptclump'),
		'class' 			=> '',
		'before_widget' 	=> '<div class="card my-4">',		
		'before_title' 		=> '<h5 class="card-header">',
		'after_title' 		=> '</h5><div class="card-body">',
		'after_widget' 		=> '</div></div>',
	));
}
