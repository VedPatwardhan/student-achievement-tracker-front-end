<?php
require 'db.php';
session_start();
$flag = 0;
if(isset($_SESSION["login_auth"]) || isset($_SESSION["login_admin"]) || $_SESSION["login_admin"] == true){

    if(isset($_SESSION["login_auth"])){
      $flag = 1;
    }else{
      $flag = 0;
    }
    

 ?>
 <html lang="en">
  <head>
    <title>Monthly Report Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php  if($flag == 1){ ?>
  <a class="navbar-brand" href="/projects/Auth_page1.php">Home</a>
<?php }else{ ?>
  <a class="navbar-brand" href="/projects/admin/admin_page1.php">Home</a>
<?php } ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Monthly Report Generator
</h2>
    </div>
    <div class="card-body">
     
      <form method="post" action="/projects/teacherforms/Report/printer.php">
        
        <div class="form-group">
          <label for="sdate">Start Date</label>
          <input type="date" name="sdate" id="sdate" class="form-control">
        </div>
        <div class="form-group">
          <label for="edate">End Date</label>
          <input type="date" name="edate" id="edate" class="form-control">
        </div>
         <div class="form-group">
          <label for="month">Month</label>
          <input type="text" name="month" id="month" class="form-control">
        </div>
       <!--  <div class="form-group">
          <label for="speaker">Speaker/Resource Person</label>
          <input type="text" name="speaker" id="speaker" class="form-control">
        </div>
        
         <div class="form-group">
          <label for="DO">Date of Occasion</label>
          <input type="date" name="DO" id="DO" class="form-control">
        </div>
         <div class="form-group">
          <label for="participant">No. of Participants</label>
          <input type="text" name="participant" id="participant" class="form-control">
        </div>
        
         <div class="form-group">
          <label for="remark">Remark</label>
          <input type="text" name="remark" id="remark" class="form-control">
        </div> -->
    

        <div class="form-group">
          <button type="submit" class="btn btn-info">Preview The Report</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php }else{
  if($flag == 1){
    header("location: ../../Auth_login.php");
    exit;
  }else{
    header("location: ../../admin_login.php");
    exit;
  }
  
}
require 'footer.php';
?>