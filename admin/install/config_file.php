<?php

/**
 * Writes the config file
 *
 * @author Severin
 */
class ConfigFile {

	private $path;

	function __construct($path) {
		if (isset($path)) {
			$this->path = $path;
		}
	}

	function generate() {
		$cfgfile = fopen($this->path, "w") or die("Unable to open file!");

		fwrite($cfgfile, "<?php\n");
		fwrite($cfgfile, "/* ***AUTO GENERATED FILE: only edit this file if the standard installer page does not work.*** */\n");
		fwrite($cfgfile, "\$".CONFIG_DATABASE."='".$_POST[FORM_DATABASE]."';\n");
		fwrite($cfgfile, "\$".CONFIG_SERVER."='".$_POST[FORM_SERVER]."';\n");
		fwrite($cfgfile, "\$".CONFIG_USER."='".$_POST[FORM_USER]."';\n");
		fwrite($cfgfile, "\$".CONFIG_PASSWORD."='".$_POST[FORM_PASSWORD]."';\n");
		fwrite($cfgfile, "?>");
		fclose($cfgfile);
	}

}
