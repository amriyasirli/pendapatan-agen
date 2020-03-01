<?php

//Atur koneksi ke database
$databaseHost = 'localhost';
$databaseName = 'db_agen'; //sesuai dengan nama database kita di phpmyadmin
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
