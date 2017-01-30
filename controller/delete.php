<?php
session_start();
include_once 'connection.php';
	if(isset($_POST['idtodelete'])){
		$idredirect = $_POST['redirect'];
		$idsesuatu = $_POST['idtodelete'];
		$table = $_POST['table'];
		$key = $_POST['key'];
		$count = $conn->exec("DELETE FROM $table WHERE $key = '$idsesuatu'");
		if($count){
			$_SESSION['message'] = "Deleted";
		}else{
			$_SESSION['message'] = "Delete Failed";
		}
		header('Location: '.$idredirect);
	}
	
?>