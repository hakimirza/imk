<?php
	$servernamedb = "localhost";
	$usernamedb = "root";
	$passworddb = "";
	$namedb = "dmkm";
	

	date_default_timezone_set('Asia/Jakarta');
	$conn;
	$statusconnection = '0';
	try {
       $conn = new PDO("mysql:host=$servernamedb;dbname=$namedb", $usernamedb, $passworddb);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
	}catch(PDOException $e){
		$statusconnection =  "Koneksi ke database gagal. Error :" . $e->getMessage();
	}
?>