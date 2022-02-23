<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'kasir_restoran';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>