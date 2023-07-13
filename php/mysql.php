<?php
define('MYSQL_HOSTNAME', 'localhost');
define('MYSQL_USERNAME', 'kavis');
define('MYSQL_PASSWORD', '123');
define('MYSQL_DATABASE', 'playground');
define('MYSQL_PORT', 3306);

function query($q, $p = []) {
	// initialize MySQL connection
	$c = @mysqli_connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE, MYSQL_PORT);
	if (!$c) {
		exit('Failed to establish MySQL connection');
	}
	
	// replace the place holders by the parameters
	foreach ($p as $k => $v) {
		$q = str_replace(":$k:", mysqli_real_escape_string($c, $v), $q);
	}
	
	// change to UTF-8
	@mysqli_query($c, "SET NAMES utf8");
	
	// execute the query
	$p = @mysqli_query($c, $q);
	if ($p === false) {
		exit("Failed to execute MySQL query<br/>\r\n{$q}");
	}
	
	$d = array();
	
	// extract data
	switch (strtoupper(substr($q, 0, 3))) {
		case "INS":
			$d = mysqli_insert_id($c);
			break;
		case "UPD": case "DEL":
			$d = mysqli_affected_rows($c);
			break;
		case "SEL": case "SHO": case "DES": case "CAL":
			// fetch the data
			while ($q = mysqli_fetch_assoc($p)) {
				$d[] = $q;
			}
			
			// clear remaining result
			while (@mysqli_more_results($c) && @mysqli_next_result($c)) {
				$q = @mysqli_store_result($c);
			}
			break;
		default: $d = null;
	}
	
	// clean up memory
	@mysqli_free_result($p);
	@mysqli_close($c);

	return $d;
}

$r = query("SHOW DATABASES");
echo json_encode($r, JSON_PRETTY_PRINT);
