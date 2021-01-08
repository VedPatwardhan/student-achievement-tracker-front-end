<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login_auth"]) || $_SESSION["login_auth"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}
$id = $_SESSION['AID'];
$filename='';

if (isset ($_POST['name'])  && isset($_POST['title']) && isset($_POST['faculty'])    && isset($_POST['sanction'])  && isset($_POST['fund']) && isset($_POST['duration']) && isset($_POST['amount']) && isset($_POST['major']) ) {
 
 $name = $_POST['name'];
  $faculty = $_POST['faculty'];
  $title = $_POST['title'];
  $sanction = $_POST['sanction'];
  
 $currdate=date("Y-m-d");

  $fund=$_POST['fund'];
  
  $duration=$_POST['duration'];
    
  $amount=$_POST['amount'];
  
  $major=$_POST['major'];
  $uid = uniqid("FM-");
  $sql = 'INSERT INTO formm(UID,ID,Name,Faculty,Title,Sanction,Fund,Duration,Amount,Major,Currentdate) VALUES(:uid,:id,:name,:faculty,:title,:sanction,:fund,:duration,:amount,:major,:currdate)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':uid' => $uid,':id' => $id,':name' => $name,':faculty' => $faculty,':title' => $title,':sanction' => $sanction,':fund'=>$fund,':duration'=>$duration,':amount'=>$amount,':major'=>$major,':currdate'=>$currdate])) {
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
      <h2>M.  Research Projects/Schemes Undertaken by Teachers</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
     
       <form  action="../../file/filesLogic.php?uid=<?php echo $uid?>&type=formM&flag_file=2" method="post" enctype="multipart/form-data" > 
                  <input type="file" name="myfile" id="file" >
                   <button style="margin:5%;" type="submit" name="save" class="btn btn-info">Submit</button>
              </form>
      </form>
    </div>
  </div>
</div>

<?php
require 'footer.php';
?>