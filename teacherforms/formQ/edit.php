<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login_auth"]) || $_SESSION["login_auth"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
$id = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';
$uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : '';
$message = '';
$sql = 'SELECT * FROM formq WHERE UID=:uid';
$statement = $connection->prepare($sql);
$statement->execute([':uid' => $uid ]);
$person = $statement->fetch(PDO::FETCH_OBJ);

if (isset ($_POST['name'])  && isset($_POST['no']) && isset($_POST['dur'])   && isset($_POST['part']) && isset($_POST['prize'])  && isset($_POST['level']) ) {
  $name = $_POST['name'];
  $no = $_POST['no'];
  $dur = $_POST['dur'];
  
  
  $part=$_POST['part'];
  $prize=$_POST['prize'];
  
  $level=$_POST['level'];



   $sql = 'UPDATE formq SET Name=:name,Participants=:no,Duration=:dur,Participant_name=:part,Prize=:prize,Level=:level WHERE UID=:uid';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name,':no' => $no,':dur' => $dur,':part' => $part,':prize'=>$prize,':level'=>$level,':uid' => $uid])) {
    header("Location: index.php");
  }
  
}
else{
     $message = 'data updation Unsuccessful';
  }
  
 ?>
 <html lang="en">
  <head>
    <title>Edit </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/projects/Auth_page1.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Achievements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Add Data</a>
      </li>
      
      
    </ul>
  </div>
  
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Edit</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        
        <div class="form-group">
          <label for="name">Name of Technical Competition/Techfest</label>
          <input value="<?= $person->Name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
         <label for="no">No. of participants</label>
          <input value="<?= $person->Participants; ?>" type="text" name="no" id="no" class="form-control">
        </div>
        <div class="form-group">
           <label for="dur">Duration</label>
          <input value="<?= $person->Duration; ?>" type="text" name="dur" id="dur" class="form-control">
        </div>
        
         <div class="form-group">
          <label for="part">Name of student / Staff Participated</label>
          <input value="<?= $person->Participant_name; ?>" type="date" name="part" id="part" class="form-control">
        </div>
         <div class="form-group">
         <label for="prize">Prize  / Rank Obtained</label>
          <input value="<?= $person->Prize; ?>" type="text" name="prize" id="prize" class="form-control">
        </div>
        
         <div class="form-group">
          <label for="level">Level</label>
          <input value="<?= $person->Level; ?>" type="text" name="level" id="level" class="form-control">
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
require 'footer.php';
?>