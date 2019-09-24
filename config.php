<?php
/**
 * menggunakan mysql untuk menyambungkan data
 */

$databaseHost = 'localhost';
$databaseName = 'barang_db';
$databaseUsername = 'demo';
$databasePassword = 'demo';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>