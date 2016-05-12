<?php

require_once '../../includes/constants.php';

class TableCreator {

	private $con;

	function __construct($con) {
		$this->con = $con;
	}

	function createAll() {
		$dbContents = file_get_contents('../duolex.sql');
		return ($this->con->multi_query($dbContents));
	}

}
