<?php
require 'db.php';
session_start();
$id = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';
$sql = 'DELETE FROM authority WHERE ID=:id ';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location:/projects/Auth_register.php");
}