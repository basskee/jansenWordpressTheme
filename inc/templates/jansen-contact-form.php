<h1>Jansen Contact Form</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="jansen-general-form">
	<?php settings_fields( 'jansen-contact-options'); ?>
	<?php do_settings_sections('admin_jansen_theme_contact'); ?>
	<?php submit_button(); ?>
</form> 