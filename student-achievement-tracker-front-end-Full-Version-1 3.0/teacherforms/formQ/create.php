<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login_auth"]) || $_SESSION["login_auth"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
$id = $_SESSION['AID'];

 ?>
 <html lang="en">
  <head>
    <title>Create</title>
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
        <a class="nav-link" href="">Add Data</a>
      </li>
      
    </ul>
  </div>
  
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Q.  Technical Competitions / Tech Fest Organized / Participated
</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post" action="/projects/teacherforms/formQ/file_entry.php">
        
        <div class="form-group">
          <label for="name">Name of Technical Competition/Techfest</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="no">No. of participants</label>
          <input type="text" name="no" id="no" class="form-control">
        </div>
        <div class="form-group">
          <label for="dur">Duration</label>
          <input type="text" name="dur" id="dur" class="form-control">
        </div>
        
        
         <div class="form-group">
          <label for="part">Name of student / Staff Participated</label>
          <input type="text" name="part" id="part" class="form-control">
        </div>
        
         <div class="form-group">
          <label for="prize">Prize  / Rank Obtained</label>
          <input type="text" name="prize" id="prize" class="form-control">
        </div>
         <div class="form-group">
          <label for="level">Level</label>
          <input type="text" name="level" id="level" class="form-control">
        </div>
    

        <div class="form-group">
          <button type="submit" class="btn btn-info">Upload Document Proof</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
require 'footer.php';
?>