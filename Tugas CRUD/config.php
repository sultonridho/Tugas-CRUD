<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost:3306';
$databaseName = 'driver_db';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>