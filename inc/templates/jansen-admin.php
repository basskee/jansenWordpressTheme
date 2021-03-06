<h1>Jansen Sidebar Options</h1>
<?php settings_errors(); ?>
<?php 
	$profilePicture = esc_attr( get_option('profile_picture') );
	$firstName = esc_attr( get_option('first_name') );
	$lastName = esc_attr( get_option('last_name') );
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr( get_option('user_description') );
 ?>

<div class="jansen-sidebar-preview">
	<div class="jansen-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image:url(<?php print $profilePicture ?>)"></div>
		</div>
		<h1 class="jansen-username"><?php print $fullName; ?></h1>
		<h2 class="jansen-description"><?php print $description ?></h2>
		<div class="icons-wrapper"></div>
	</div>
</div>

<form method="post" action="options.php" class="jansen-general-form">
	<?php settings_fields( 'jansen-settings-group'); ?>
	<?php do_settings_sections('admin_jansen'); ?>
	<?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
</form> 