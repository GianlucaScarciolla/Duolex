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

/**
 * Establishes a connection with a MySQL database.
 */
class Connector {

	private $server;
	private $user;
	private $password;
	private $desired_db;
	private $mysqliConnection;
	private $status;

	function __constructor($server, $user, $password, $desired_db) {
		$this->server = $server;
		$this->user = $user;
		$this->password = $password;
		$this->desired_db = $desired_db;
	}

	function connectDatabase() {
		$mysqlConn = new mysqli($this->server, $this->user, $this->password);

		if ($mysqlConn->connect_error) {
			// Failure
			$this->status = 0;
		} else {
			// Success
			$this->status = 1;
			$this->mysqliConnection = $mysqlConn;
		}
	}

	function success() {
		return $this->status;
	}

	function getConnection() {
		return $this->mysqliConnection;
	}

}
?>
