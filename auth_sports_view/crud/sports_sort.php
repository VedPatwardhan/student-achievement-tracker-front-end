<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
$id = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';
$column = isset($_GET['column']) ? $_GET['column'] : 'None';
$sort_order = isset($_GET['order']) ? $_GET['order'] : 'None';
$sql_search = isset($_SESSION['sql_search']) ? $_SESSION['sql_search'] : '';
$flag = isset($_GET['flag']) ? $_GET['flag'] : '';
$sql_dept = isset($_SESSION['sql_dept']) ? $_SESSION['sql_dept'] : '';

  if($column != 'None' && $sort_order != 'None'){
  $columns = array('ID','Sports_Name','Description','Venue','Achievements','Date_Sports','Rollno','Year');
  $column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];
  $sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';
  }

    if($flag ==0){
    $sql='SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID ORDER BY '.$column.' '.$sort_order;
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        $up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
        header("location:sports_cal.php?column=".$column."&order=".$sort_order."&flag=".$flag);
    }
  }
  elseif($flag == 1){
    
    $sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where $sql_search ORDER BY ".$column." ".$sort_order;
    //echo $sql;
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        $up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
        header("location:sports_cal.php?column=".$column."&order=".$sort_order."&flag=".$flag);
    }
  }
  elseif($flag == 2){
    
    $sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where $sql_dept ORDER BY ".$column." ".$sort_order;
    //echo $sql;
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        $up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
        header("location:sports_cal.php?column=".$column."&order=".$sort_order."&flag=".$flag);
    }
  }
  elseif($flag == 21 || $flag == 12){
    
    $sql = "SELECT s.*,st.Rollno,st.Year FROM sports s INNER JOIN Student st ON s.ID = st.ID where $sql_search AND $sql_dept ORDER BY ".$column." ".$sort_order;
    echo $sql;
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        $up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
        header("location:sports_cal.php?column=".$column."&order=".$sort_order."&flag=".$flag);
    }
  }
 
?>
