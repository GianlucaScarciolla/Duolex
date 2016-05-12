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
require './table_creator.php';

/**
 * Tries to connect to the DB.
 * Also creates important tables (user, admin, etc)
 */
class Installer {

	private $connector;

	/**
	 * Step 1:	DB,Server,User,Pw Credidentials and connect
	 * Step 2:	Set up admin account
	 * @var Integer 
	 */
	private $step;

	function __construct() {
		$this->step = 1;
	}

	function getStep() {
		return $this->step;
	}

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
		switch ($this->step) {
			case 1:
				if ($this->installFormVarsSet() && $this->connect()) {
					// Ready to create tables
					$tc = new TableCreator($this->connector->getConnection());
					$this->step = $tc->createAll();
					echo $this->step;
				} else {
					// vars not yet set
					// Don't go to step 2 yet.
				}
				break;
		}
	}

	/**
	 * Connects to the DB using the _POST array
	 * Also writes a config file upon a successful connect
	 */
	function connect() {
		$this->connector = new Connector(
				$_POST[FORM_SERVER], $_POST[FORM_USER], $_POST[FORM_PASSWORD], $_POST[FORM_DATABASE]);
		$this->connector->connectDatabase();

		if ($this->connector->success()) {
			$cfg = new ConfigFile(CONFIG_FILE_NAME);
			$cfg->generate();
			return true;
		}
		echo "Couldn't connect to DB";
		return false;
	}

}
?>
