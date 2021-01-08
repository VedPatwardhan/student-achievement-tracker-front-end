<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
if(isset($_POST['uid1'])){
	$_SESSION['uid'] = $_POST['uid1']; 
	header("Location: edit.php");
}
else{
	header("Location: index.php");
}



?>