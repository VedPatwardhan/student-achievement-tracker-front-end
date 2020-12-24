<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login_admin"]) || $_SESSION["login_admin"] !== true){
    header("location: ../../admin_login.php");
    exit;
}

$id = isset($_SESSION['ADID']) ? $_SESSION['ADID'] : '';
$sql = 'SELECT * FROM stu_temp';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

 <html lang="en">
  <head>

    <title>Students Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/projects/admin/admin_page1.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
</nav>
  	<table class="table table-bordered">
  		<thead>
  		<tr>
  			<th>Reg.ID</th>
  			<th>Full Name</th>
  			<th>Class</th>
  			<th>Roll No</th>
  			<th>Year</th>
  			<th>Department</th>
  			<th>Date of Birth</th>
  			<th>Email</th>
  			<th>Mobile</th>
  			<th></th>
  		</tr>
  		</thead>

  		<tbody>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->ID; ?></td>
            <td><?= $person->Full_Name; ?></td>
            <td><?= $person->Class; ?></td>
            <td><?= $person->Rollno; ?></td>
            <td><?= $person->Year; ?></td>
            <td><?= $person->Department; ?></td>
            <td><?= $person->DOB; ?></td>
            <td><?= $person->Email; ?></td>
            <td><?= $person->Mobile; ?></td>
            <td>
              <form action='push.php' method='post'>
                  <input type='hidden' name='id1' value='<?php echo $person->ID;?>' />
                  <button class="btn btn-info" onClick='submit();'>Allow</button>
              </form>
              <form action='delete.php' method='post'>
                  <input type='hidden' name='id2' value='<?php echo $person->ID;?>' />
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
  
              </form>
            </td>   
          </tr>
        <?php endforeach; ?>
       </tbody>
      </table>

<?php require 'footer.php'; ?>
