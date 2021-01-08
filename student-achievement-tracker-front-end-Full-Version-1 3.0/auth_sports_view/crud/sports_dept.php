<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
$id = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';
$sql_search = isset($_SESSION['sql_search']) ? $_SESSION['sql_search'] : '';
$flag = isset($_GET['flag']) ? $_GET['flag'] : 2;
if($flag == 0 || $flag == 21 || $flag == 12){
	$flag=2;
}
$dept ='';
$year ='';
$div ='';
 
	if(!empty($_POST['dept']) && empty($_POST['year']) && empty($_POST['division'])){
		$dept = mysqli_real_escape_string($link,$_REQUEST['dept']);
		if($flag == 2){
			$sql="SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Department ='$dept'";
		}
		elseif($flag == 1){
			$sql="SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Department ='$dept' AND $sql_search";
			$flag = 21;
		}	  
		  $_SESSION['sql_dept'] = " st.Department ='$dept' ";
		   $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        header("location:sports_cal.php?flag=".$flag);
    }
     else{
		echo "ERROR: Could not able to execute $sql.";
	}

}
	elseif(!empty($_POST['dept']) && !empty($_POST['year']) && empty($_POST['division'])){
		$dept = mysqli_real_escape_string($link,$_REQUEST['dept']);
		$year = mysqli_real_escape_string($link,$_REQUEST['year']);
		if($flag == 2){
			$sql="SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Department ='$dept' AND st.Year = '$year'";
		}
		elseif($flag == 1){
			$sql="SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Department ='$dept' AND st.Year = '$year'  AND $sql_search";
			$flag = 21;
		}
		  
		  $_SESSION['sql_dept'] = " st.Department ='$dept' AND st.Year = '$year' ";
		   $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        header("location:sports_cal.php?flag=".$flag);
    }
     else{
		echo "ERROR: Could not able to execute $sql.";
	}
}
	elseif(!empty($_POST['dept']) && !empty($_POST['year']) && !empty($_POST['division'])){
		$dept = mysqli_real_escape_string($link,$_REQUEST['dept']);
		$year = mysqli_real_escape_string($link,$_REQUEST['year']);
		$div = mysqli_real_escape_string($link,$_REQUEST['division']);
		$div1 = $year.$div;
		if($flag == 2){
			 $sql="SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Department ='$dept' AND st.Class = '$div1' ";
		}
		elseif($flag == 1){
			$sql="SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID WHERE st.Department ='$dept' AND st.Class = '$div1' AND $sql_search ";
			$flag = 21;
		}
		 
		  $_SESSION['sql_dept'] = " st.Department ='$dept' AND st.Year = '$year' ";
		   $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        header("location:sports_cal.php?flag=".$flag);
    }
     else{
		echo "ERROR: Could not able to execute $sql.";
	}
}
	else{
	echo "Error";
}


?>