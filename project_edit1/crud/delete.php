<?php
require 'db.php';
session_start();
$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';
$uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : '';
$sql = 'DELETE FROM project_competition WHERE ID=:id AND UID=:uid';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id,':uid' => $uid])) {
  header("Location:index.php");
}