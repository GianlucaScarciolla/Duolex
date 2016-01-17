<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	Database name:<br>	
	<input type="text" name="<?php echo FORM_DATABASE; ?>"><br>
	Server:<br>	
	<input type="text" name="<?php echo FORM_SERVER; ?>"><br>
	User:<br>	
	<input type="text" name="<?php echo FORM_USER; ?>"><br>
	Password:<br>	
	<input type="password" name="<?php echo FORM_PASSWORD; ?>"><br>
	<button type="submit">Go</button>
	<?php
	if (file_exists(CONFIG_FILE_NAME)) {
		echo "<h3><i>Warning: Config file already exists. Entering this information again will OVERWRITE the existing config file.</i></h3>";
	}
	?>
</form>