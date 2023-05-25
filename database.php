<?php

$host = jss.cobf0jxtq3hd.sa-east-1.rds.amazonaws.com";
$dbname = "jss";
$username = "Fatuous.nerd_";
$password = "Emir_jamil1";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>
