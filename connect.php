<?php

	DEFINE("DB_HOST", "localhost");
	DEFINE("DB_USER", "root");
	DEFINE("DB_PASSWORD", "");
	DEFINE("DB_NAME", "kasu_elibrary");

	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

	OR die('Could not connect to Mysql'.mysqli_connect_error());

?>
