<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
$id = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';
$flag = isset($_GET['flag']) ? $_GET['flag'] : 1;
$sql_dept = isset($_SESSION['sql_dept']) ? $_SESSION['sql_dept'] : '';
$sql_search=isset($_SESSION['sql_search']) ? $_SESSION['sql_search'] : '';
if($flag == 0 || $flag == 21 || $flag == 12){
	$flag=1;
}
$df = '';
$dt = '';
$tmp = '';


	if(!empty($_POST['df']) && !empty($_POST['dt'])){
    $df1 = mysqli_real_escape_string($link, $_REQUEST['df']);
    $df = date('Y-m-d',strtotime($df1)); 
    $dt1 = mysqli_real_escape_string($link, $_REQUEST['dt']);
    $dt = date('Y-m-d',strtotime($dt1));
    if($flag==1){
    	$sql = 'SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where s.Date_Sports BETWEEN :DF and :DT';
    }
    elseif($flag==2){
    	$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where s.Date_Sports BETWEEN :DF and :DT AND $sql_dept";
      $flag = 12;
    }
    
    //$sql_search = "s.Date_Sports BETWEEN $df and $dt";
    $_SESSION['sql_search'] = "s.Date_Sports BETWEEN $df and $dt";
	$statement = $connection->prepare($sql);
	if ($statement->execute([':DF' => $df,':DT' => $dt])) {
		$people = $statement->fetchAll(PDO::FETCH_OBJ);
		$_SESSION['people'] = $people;
	 header("location:sports_cal.php?flag=".$flag);
	}
	else{
		echo "ERROR: Could not able to execute $sql.";
	}
}
elseif(!empty($_POST['regid'])){
  	$tmp = mysqli_real_escape_string($link, $_REQUEST['regid']);
  	if($flag==1){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.ID) LIKE UPPER('%$tmp%')";
  	}	
  	elseif($flag==2){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.ID)  LIKE UPPER('%$tmp%') AND $sql_dept";
      $flag = 12;
  	}

  	$_SESSION['sql_search'] = "UPPER(s.ID) LIKE UPPER('$tmp%')";
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
  elseif(!empty($_POST['sports_n'])){
  	$tmp = mysqli_real_escape_string($link, $_REQUEST['sports_n']);
  	if($flag==1){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Sports_Name) LIKE UPPER('%$tmp%')";
  	}
  	elseif($flag==2){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Sports_Name)  LIKE UPPER('%$tmp%') AND $sql_dept";
      $flag = 12;
  	}
  	
  	$_SESSION['sql_search'] = "UPPER(s.Sports_Name) LIKE UPPER('%$tmp%')";
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
	elseif(!empty($_POST['venue'])){
  	$tmp = mysqli_real_escape_string($link, $_REQUEST['venue']);
  	if($flag==1){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Venue) LIKE UPPER('%$tmp%')";
  	}
  	elseif($flag==2){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Venue) LIKE UPPER('%$tmp%') AND $sql_dept";
      $flag = 12;
  	}
  	
  	$_SESSION['sql_search'] = "UPPER(s.Venue) LIKE UPPER('%$tmp%')";
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
	elseif(!empty($_POST['achievements'])){
  	$tmp = mysqli_real_escape_string($link, $_REQUEST['achievements']);
  	if($flag==1){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Achievements) LIKE UPPER('%$tmp%')";
  	}
  	elseif($flag==2){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Achievements) LIKE UPPER('%$tmp%') AND $sql_dept";
      $flag = 12;
  	}
  	
  	$_SESSION['sql_search'] = "UPPER(s.Achievements) LIKE UPPER('%$tmp%')";
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
	elseif(!empty($_POST['desc'])){
  	$tmp = mysqli_real_escape_string($link, $_REQUEST['desc']);
  	if($flag==1){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Description) LIKE UPPER('%$tmp%')";
  	}
  	elseif($flag==2){
  		$sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where UPPER(s.Description) LIKE UPPER('%$tmp%') AND $sql_dept";
      $flag = 12;
  	}
  	
  	$_SESSION['sql_search'] = "UPPER(s.Description) LIKE UPPER('%$tmp%')";
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