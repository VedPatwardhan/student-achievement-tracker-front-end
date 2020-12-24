<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
//$id = isset($_GET['ID']) ? $_GET['ID'] : '';
$id = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';
$flag = isset($_GET['flag_graph']) ? $_GET['flag_graph'] : 0;
$dept = isset($_GET['Dept']) ? $_GET['Dept'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
$class = isset($_GET['Class']) ? $_GET['Class'] : '';
$sql = '';
$print ='';

if($flag==0){
	$sql = 'SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID';
	$print ='Sports:- All Students';
}
elseif($flag==1){

	$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Department ='$dept'";
	$print ='Sports:-'.$dept.' Department';
}
elseif($flag==2){
	$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE UPPER(s.Sports_Name) =UPPER('$act')";
	$print ='Sports:-'.$act;
}
elseif($flag==3){

	$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Class ='$class'";
	$print ='Sports:-'.$class.' Class';
}


$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
$_SESSION['people'] = $people; 
$_SESSION['print'] = $print;
header("location:sports_cal.php");
 ?>
