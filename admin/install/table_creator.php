<?php

require_once '../../includes/constants.php';

class TableCreator {

	private $con;

	function __construct($con) {
		$this->con = $con;
	}

	function createAll() {
		return ($this->createUsers());
	}

	function createUsers() {
		return $this->con->query(INSTALLQUERY_TABLE_USERS);
	}

}
