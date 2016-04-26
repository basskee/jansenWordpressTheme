<?php 

/*
@package jansen

	====================================
	ADMIN PAGE
	====================================
 */
 
function jansen_add_admin_page(){
	//Generate Jansen Admin Page
 	add_menu_page( 'Jansen Theme Options', 'Jansen', 'manage_options', 'admin_jansen', 'jansen_theme_create_page', 'dashicons-hammer', 110 );

 	//Generate Jansen Admin Sub Pages
 	add_submenu_page( 'admin_jansen', 'Jansen Theme Options', 'Settings', 'manage_options', 'admin_jansen','jansen_theme_create_page');
 	add_submenu_page('admin_jansen','Jansen CSS Options','Custom CSS','manage_options','admin_jansen_css','jansen_theme_settings_page');

 	//ACTIVATE CUSTOM SETTINGS
 	add_action( 'admin_init', 'jansen_custom_settings' );
 }
 add_action( 'admin_menu', 'jansen_add_admin_page' );

 function jansen_custom_settings() {
 	register_setting( 'jansen-settings-group', 'first_name');
 	register_setting( 'jansen-settings-group', 'last_name');
 	register_setting( 'jansen-settings-group', 'user_description');
 	register_setting( 'jansen-settings-group', 'twitter_handle', 'jansen_sanitize_twitter_handle');
 	register_setting( 'jansen-settings-group', 'facebook_handle');
 	register_setting( 'jansen-settings-group', 'gplus_handle');

 	add_settings_section( 'jansen-sidebar-options', 'Sidebar Options', 'jansen_sidebar_options', 'admin_jansen' );

 	add_settings_field( 'sidebar-name', 'Full Name', 'jansen_sidebar_name', 'admin_jansen', 'jansen-sidebar-options' );
 	add_settings_field( 'sidebar-description', 'Description', 'jansen_sidebar_description', 'admin_jansen', 'jansen-sidebar-options' );
 	add_settings_field('sidebar-twitter', 'Twitter handle', 'jansen_sidebar_twitter', 'admin_jansen', 'jansen-sidebar-options' );
 	add_settings_field('sidebar-facebook', 'Facebook handle', 'jansen_sidebar_facebook', 'admin_jansen', 'jansen-sidebar-options' );
 	add_settings_field('sidebar-gplus', 'Google+ handle', 'jansen_sidebar_gplus', 'admin_jansen', 'jansen-sidebar-options' );
 }
function jansen_sidebar_options(){
	echo 'Customize your Sidebar Information';
}

function jansen_sidebar_name(){
	$firstName = esc_attr( get_option('first_name') );
	$lastName = esc_attr( get_option('last_name') );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}
function jansen_sidebar_description(){
	$description = esc_attr( get_option('user_description') );
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description" /><p class="description">Write something smart.</p>';
}
function jansen_sidebar_twitter(){
	$twitter = esc_attr( get_option('twitter_handle') );
	echo '<input type="text" name="twitter_handle" value="'.$twitter.'" placeholder="Twitter Handle" /><p class="description">Input your Twitter Username without the @ character.</p>';
}
function jansen_sidebar_facebook(){
	$facbook = esc_attr( get_option('facebook_handle') );
	echo '<input type="text" name="facebook_handle" value="'.$facebook.'" placeholder="Facebook Handle" />';
}
function jansen_sidebar_gplus(){
	$gplus = esc_attr( get_option('gplus_handle') );
	echo '<input type="text" name="gplus_handle" value="'.$gplus.'" placeholder="Google+ Handle" />';
}

//Santization Settings

function jansen_sanitize_twitter_handle( $input ){
	//Converts characters and strips UTF-8
	$output = sanitize_text_field( $input );
	$output = str_replace('@', '', $output);
	return $output;
}





// End of Custom Settings
function jansen_theme_create_page() {
	//generation of admin page
	require_once(get_template_directory() . '/inc/templates/jansen-admin.php' );
}

function jansen_theme_settings_page() {
	//generation of Settings page
	echo '<h1>Jansen Custom CSS</h1>';

}









