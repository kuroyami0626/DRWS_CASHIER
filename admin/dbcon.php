<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'drwsa_cashier_db';

$con = new mysqli($host, $username, $password, $db_name);

if ($con->connect_error) {
    die("Failed to connect to the database: " . $con->connect_error);
}
?>