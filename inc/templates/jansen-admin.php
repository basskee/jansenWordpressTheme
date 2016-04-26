<h1>Jansen Theme Options</h1>
<?php settings_errors(); ?>
<?php 
	$firstName = esc_attr( get_option('first_name') );
	$lastName = esc_attr( get_option('last_name') );
	$fullName = $firstName . '' . $lastName;
	$description = esc_attr( get_option('user_description') );
 ?>

<div class="jansen-sidebar-preview">
	<div class="jansen-sidebar">
		<h1 class="jansen-username"><?php print $fullName; ?></h1>
		<h2 class="jansen-description"><?php print $description ?></h2>
		<div class="icons-wrapper"></div>
	</div>
</div>

<form method="post" action="options.php" class="jansen-general-form">
	<?php settings_fields( 'jansen-settings-group'); ?>
	<?php do_settings_sections('admin_jansen'); ?>
	<?php submit_button(); ?>
</form> 