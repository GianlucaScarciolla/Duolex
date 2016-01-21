<?php

/**
 * Constants to be used with form related code
 */
define("FORM_SERVER", "f_server");
define("FORM_USER", "f_user");
define("FORM_PASSWORD", "f_password");
define("FORM_DATABASE", "f_database");

/**
 * Constants to be used with session related code
 */
define("SESSION_ADMIN", "s_admin");

/**
 * Constants to be used with config file related code
 */
define("CONFIG_SERVER", "c_server");
define("CONFIG_USER", "c_user");
define("CONFIG_PASSWORD", "c_password");
define("CONFIG_DATABASE", "c_database");
define("CONFIG_FILE_NAME", "cfg.php");

/**
 * User account types
 */
define("ACCOUNT_TYPE_ADMIN", "ua_admin");
define("ACCOUNT_TYPE_REGULAR", "ua_regular");

/**
 * Querys
 */
define("INSTALLQUERY_TABLE_USERS", "CREATE TABLE duolex_users ("
		. "ID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
		. "loginname VARCHAR(50) NOT NULL,"	 // Will be used to log in along with the password
		. "password VARCHAR(40) NOT NULL,"	 // Hashed password
		. "firstname VARCHAR(50),"
		. "lastname VARCHAR(50),"
		. "email VARCHAR(50) NOT NULL,"
		. "website VARCHAR(20),"
		. "gender VARCHAR(15),"
		. "age TINYINT,"
		. "usertype VARCHAR(15) NOT NULL"
		. ")");
?>