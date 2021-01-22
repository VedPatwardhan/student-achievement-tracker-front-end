<?php
require 'db.php';
session_start();
$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';
$sql = 'DELETE FROM student WHERE ID=:id ';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location:/projects/Register.php");
}