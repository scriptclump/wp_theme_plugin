<?php
function scb_activate(){
	$version_compatible = 4.2;
	if( version_compare( get_bloginfo('version'), $version_compatible, '<') ){
		wp_die( __('You must have minimum version of '.$version_compatible.' to use this theme') );
	}
}