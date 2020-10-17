<h1>IT Admin Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'itcompany-settings-group' ); ?>
	<?php do_settings_sections( 'itcompany_options' ); ?>
	<?php submit_button(); ?>
</form>