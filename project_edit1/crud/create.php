<?php
require 'db.php';
session_start();
$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';
//echo $id;
$message = '';
if (isset ($_POST['Title'])  && isset ($_POST['Domain'])  && isset ($_POST['Type'])  && isset($_POST['Description']) && isset ($_POST['Guide']) && isset ($_POST['Sponsor'])  && isset($_POST['Venue']) && isset($_POST['Achievements'])  && isset($_POST['DOB']) ) {
  $title =$_POST['Title'];
  $domain =$_POST['Domain'];
  $guide =$_POST['Guide'];
  $sponsor = !empty($_POST['company']) ? $_POST['company'] : 'No';
  $type = $_POST['Type'];
  $descp = $_POST['Description'];
  $venue = $_POST['Venue'];
  $achieve = $_POST['Achievements'];
  $rawdate = $_POST['DOB'];
  $dob = date('Y-m-d',strtotime($rawdate));
  $uid = uniqid("Proj-");
  $_SESSION['uid'] = $uid;
  $sql = 'INSERT INTO project_competition(UID,ID,Title,Domain,Type,Description,Guide,Sponsor,Achievement,Venue,Date_Proj) VALUES(:uid,:id,:title,:domain,:type,:descp,:guide,:sponsor,:achieve,:venue,:dob)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':uid' => $uid,':id' => $id,':title' => $title,':domain' => $domain,':type' => $type,':descp' => $descp,':guide' => $guide,':sponsor' => $sponsor,':venue' => $venue,':achieve' => $achieve,':dob' => $dob])) {
    $message = 'data inserted successfully';
  }
  
}
else{
    $message = 'data insertion Unsuccessful';
  }
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
  <a class="navbar-brand" href="/projects/stu_page1.php?ID=<?php echo $id?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Achievements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Add Achievements</a>
      </li>
      
    </ul>
  </div>
  
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create Achievement</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">

        <div class="form-group">
          <label for="Title">Title</label>
          <input type="text" name="Title"  class="form-control" required>
        </div>

        <div class="form-group">
        <label for="Domain">Domain</label>
        <input type="text" name="Domain" class="form-control" required>  
        </div>

        <div class="form-group">
          <label for="Type">Type of Project</label>
            <div class="col-lg-6 radio">
                <label>
                    <input type="radio" name="Type" value="Software" required/>Software
                </label>
            </div>
            <div class=" col-lg-6 radio">
                <label>
                    <input type="radio" name="Type" value="Hardware" required/>Hardware
                </label>
            </div>          

          <!--<select name="Type" class="form-control selectpicker" required>
            <option value="">Type</option>
            <option value="Software">Software</option>
            <option value="Hardware">Hardware</option>
          </select>-->
        </div>

        <div class="form-group">
          <label for="Description">Description (Max 50 words)</label>
          <textarea  name="Description" style="width: 100%; height: 100%" required>
          </textarea>
        </div>

        <div class="form-group">
          <label for="Guide">Name of Guide</label>
          <input type="text" name="Guide" class="form-control" required>
        </div>

        <div class=" form-group">
          <label class="control-label">Project Sponsored/Not Sponsored</label>
          <div class=" col-lg-6 input-group">
            <select name="Sponsor" class="form-control selectpicker" onchange="myFunction1(this)" required>
                <option>Please select about Sponsorship</option>
                <option value="Sponsored">Sponsored</option>
                <option value="Not Sponsored">Not Sponsored</option>
            </select>
          </div>
          <div id="company" class="form-group" style="display:none;">
              <label class="  control-label" style="margin-top: 2%;">Company Name</label>     
                <div class=" col-lg-6 input-group">
                  <input id="company" name="company" placeholder="Company Name" class="form-control" type="text">
                </div>
          </div>
        </div>  

        <div class="form-group">
          <label for="Achievements">Achievements</label>
          <input type="text" name="Achievements"  class="form-control" required>
        </div>

        <div class="form-group">
          <label for="Venue">Venue</label>
          <input type="text" name="Venue"  class="form-control" required>
        </div>

         <div class="form-group">
          <label for="DOB">Date of Occasion</label>
          <input type="date" name="DOB" id="dob" class="form-control" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Create Achievement</button>
        </div>

      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
<script type="text/javascript">
   function myFunction1(company) {
        var company1 = company.value;
        if (company1 == 'Sponsored') {
            document.getElementById("company").style.display = "block";
        }
        else {
            document.getElementById("company").style.display = "none";
        }
    }
</script>