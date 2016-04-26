<?php

/*
@package jansen

	====================================
	ADMIN ENQUEUE FUNCTIONS
	====================================
 */

function jansen_load_admin_scripts( $hook ){

	if ('toplevel_page_admin_jansen' != $hook ){
		return;
	}

	wp_register_style( 'jansen_admin', get_template_directory_uri() . '/css/jansen-admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'jansen_admin' );
}
add_action('admin_enqueue_scripts', 'jansen_load_admin_scripts');


