<?php
$hostName = "localhost"; 
$username = "root"; 
$password = "";
$databaseName = "login"; 
$connection = new mysqli($hostName,$username,$password,$databaseName);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
?>