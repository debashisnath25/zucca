<?php
		$mysqli = new mysqli("localhost", "root", "", "zucca");
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		SESSION_START();
		ERROR_REPORTING(0);
?>