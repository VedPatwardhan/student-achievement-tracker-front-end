<?php
require 'db.php';
session_start();
if(isset($_SESSION["login_auth"]) || $_SESSION["login_auth"] == true || isset($_SESSION["login_admin"]) || $_SESSION["login_admin"] == true){

$id = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';
$cid = isset($_SESSION['CID']) ? $_SESSION['CID'] : '';
$column = isset($_SESSION['column']) ? $_SESSION['column'] : 'None';
$sort_order = isset($_SESSION['order']) ? $_SESSION['order'] : 'None';
$sql_search = isset($_SESSION['sql_search']) ? $_SESSION['sql_search'] : '';
$flag = isset($_GET['flag']) ? $_GET['flag'] : $_SESSION['flag'];
$sql_dept = isset($_SESSION['sql_dept']) ? $_SESSION['sql_dept'] : '';
$dept = isset($_GET['Dept']) ? $_GET['Dept'] : $_SESSION['Dept'];
$sql='';

    if($column != 'None' && $sort_order != 'None'){
      $columns = array('ID','Full_Name','Class','Rollno','Year','Department','DOB','Email','Mobile','Address');
  $column = isset($_SESSION['column']) && in_array($_SESSION['column'], $columns) ? $_SESSION['column'] : $columns[0];
  $sort_order = isset($_SESSION['order']) && strtolower($_SESSION['order']) == 'desc' ? 'DESC' : 'ASC';
  $_SESSION['column'] = $column;
  $_SESSION['order'] = $sort_order;
  }

  if($flag == 0){
    if(($_SESSION['login_flag'] == 3) || ($_SESSION['login_flag'] == 2 &&  $_SESSION['Desg'] == 'Principal')){
      $sql='SELECT * FROM student  ORDER BY '.$column.' '.$sort_order;
    }else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'Class Teacher'){
      $sql="SELECT * FROM student  WHERE ClassID ='$cid' ORDER BY  ".$column." ".$sort_order;
    }else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'HOD'){
      $sql="SELECT * FROM student  WHERE Department ='$dept' ORDER BY  ".$column." ".$sort_order;
    }
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        header("location:stu_cal.php");
        echo $sort_order;
    }
  }
  elseif($flag == 1){
    if(($_SESSION['login_flag'] == 3) || ($_SESSION['login_flag'] == 2 &&  $_SESSION['Desg'] == 'Principal')){
      $sql = "SELECT * FROM student  where $sql_search ORDER BY ".$column." ".$sort_order;
    }else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'Class Teacher'){
      $sql = "SELECT * FROM student  where ClassID ='$cid' AND $sql_search ORDER BY ".$column." ".$sort_order;
    }else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'HOD'){
      $sql = "SELECT * FROM student  where Department ='$dept' AND $sql_search ORDER BY ".$column." ".$sort_order;
    }
    //echo $sql;
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        header("location:stu_cal.php");
    }
  }
  elseif($flag == 2){
    if(($_SESSION['login_flag'] == 3) || ($_SESSION['login_flag'] == 2 &&  $_SESSION['Desg'] == 'Principal')){
      $sql = "SELECT * FROM student  where $sql_dept ORDER BY ".$column." ".$sort_order;
    }else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'Class Teacher'){
      $sql = "SELECT * FROM student  where ClassID ='$cid' AND $sql_dept ORDER BY ".$column." ".$sort_order;
    }else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'HOD'){
      $sql = "SELECT * FROM student  where Department ='$dept' AND $sql_dept ORDER BY ".$column." ".$sort_order;
    }
    //echo $sql;
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        header("location:stu_cal.php");
    }
  }
  elseif($flag == 21 || $flag == 12){
    if(($_SESSION['login_flag'] == 3) || ($_SESSION['login_flag'] == 2 &&  $_SESSION['Desg'] == 'Principal')){
      $sql = "SELECT * FROM student  where $sql_search AND $sql_dept ORDER BY ".$column." ".$sort_order;
    }else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'Class Teacher'){
      $sql = "SELECT * FROM student  where ClassID ='$cid' AND $sql_search AND $sql_dept ORDER BY ".$column." ".$sort_order;
    }
    else if($_SESSION['login_flag'] == 2 && $_SESSION['Desg'] == 'HOD'){
      $sql = "SELECT * FROM student  where Department ='$dept' AND $sql_search AND $sql_dept ORDER BY ".$column." ".$sort_order;
    }

    //echo $sql;
    $statement = $connection->prepare($sql);
    if ($statement->execute()) {
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        $_SESSION['people'] = $people;
        header("location:stu_cal.php");
    }
  }

}else{
  if($_SESSION['login_flag'] == 2){
        header("location: ../Authority_login.php");
        exit;
    }

    else if($_SESSION['login_flag'] == 3){
        header("location: ../Admin_login.php");
        exit;
    }
    
    
}
 
?>
