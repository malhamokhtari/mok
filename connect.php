<?php
$conn = pg_connect("host=192.168.137.137 port=5432  user=omega password=omega dbname=omega");
	if (!$conn) {
		die("database connection failed" . pg_last_error($conn));
	}


?>
