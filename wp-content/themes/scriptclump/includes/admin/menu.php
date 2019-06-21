<?php

function scb_admin_menu(){
	add_menu_page(
		'ScriptClump Theme Option',
		'Theme Options',
		'edit_theme_options',
		'scb_theme_opts',
		'scb_theme_opts_page'
	);
}