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
require './connector.php';
require './config_file.php';
require '../../includes/constants.php';

/**
 * Tries to connect to the DB.
 * Also creates important tables (user, admin, etc)
 */
class Installer {

	private $connector;

	/**
	 * Makes sure the form from install.php is filled out properly
	 * @return Boolean
	 */
	function installFormVarsSet() {
		return (isset($_POST[FORM_DATABASE]) &&
				isset($_POST[FORM_SERVER]) &&
				isset($_POST[FORM_USER]) &&
				isset($_POST[FORM_PASSWORD]));
	}

	function install() {
		// $_POST array entries set
		if ($this->installFormVarsSet()) {
			$this->connect();
		} else {
			echo "vars not yet set";
		}
	}

	function connect() {
		$this->connector = new Connector(
				$_POST[FORM_DATABASE], $_POST[FORM_SERVER], $_POST[FORM_USER], $_POST[FORM_PASSWORD]);
		$this->connector->connectDatabase();

		if ($this->connector->success()) {
			// STEP 1:	generate config file for future connections.
			$cfg = new ConfigFile(CONFIG_FILE_NAME);
			$cfg->generate();

			// STEP 2:	
		} else {
			echo "failure";
		}
	}

}
?>
