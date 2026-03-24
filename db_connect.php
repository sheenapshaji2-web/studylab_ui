<?php

$connection = new mysqli("localhost", "root", "Malu@901", "student_db");

if ($connection->connect_errno) {
die("Failed to connect to MySQL: " . $connection->connect_error);
}

?>