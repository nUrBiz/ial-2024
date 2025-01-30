<?php
$hostname_DBConn = "localhost"; // link connessione
$database_DBConn = "test"; // Nome database
$username_DBConn = "username"; // Utente database
$password_DBConn = "password"; // pw dr

$DBConn = mysqli_connect($hostname_DBConn, $username_DBConn, $password_DBConn, $database_DBConn);
mysqli_set_charset($DBConn, "utf8");
if (!$DBConn) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
$GLOBALS['DBConn'] = $DBConn;
?>