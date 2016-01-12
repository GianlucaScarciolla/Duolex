<!--
This file is part of Duolex.

Duolex is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Duolex is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Duolex.  If not, see <http://www.gnu.org/licenses/>.
-->

<?php
require_once './installer.php';
?>

<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
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
		</form>

		<?php

		$installer = new Installer();
		$installer->install();
		?>
	</body>
</html>
