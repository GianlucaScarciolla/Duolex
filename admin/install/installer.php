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

class Installer {

	private $connector;

	function installFromVarsSet() {
		return (isset($_POST["database"]) &&
			isset($_POST["server"]) &&
			isset($_POST["user"]) &&
			isset($_POST["password"]));
	}

	function install() {
		// $_POST array entries set
		if ($this->installFromVarsSet()) {
			$this->connect();
		} else {
			echo "vars not set";
		}
	}

	function connect() {
		$this->connector = new Connector($_POST["database"], $_POST["server"], $_POST["user"], $_POST["password"]);
		$this->connector->connectDatabase();

		if ($this->connector->success()) {
			echo "success";
		} else {
			echo "failure";
		}
	}

}
?>
