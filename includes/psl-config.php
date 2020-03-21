<?php

define("HOST", "localhost"); 			// The host you want to connect to. 
define("USER", "root"); 			// The database username. 
define("PASSWORD", ""); 	// The database password. 
define("DATABASE", "rdm");             // The database name.

define("DB_HOST", "localhost");
define("DB_NAME", "rdm");
define("DB_USER", "root");
define("DB_PASS", "");

$DB_HOST = '127.0.0.1';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'rdm';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");

define("SECURE", FALSE);    // For development purposes only!!!!

