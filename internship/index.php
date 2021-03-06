<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: ../index.html");
    exit;
}
$_SESSION['type']='Internship';
$_SESSION['flag_file']=1;

$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';
$type ='';
$desc ='';
$venue ='';    
$ach ='';
$uid ='';

        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
}

        $sql = "SELECT * FROM internship WHERE ID = '$id'";
        $result = mysqli_query ($conn,$sql) or die ('Error');
 ?>

<html lang="en">
  <head>
    <title>Internship </title>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../Student_Home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="">Achievements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Add Achievements</a>
      </li>
      
      
    </ul>
  </div>
  
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Internships</h2>
    </div>
    <div class="card-body" style="overflow: scroll;">
      <table class="table table-bordered">
        <tr>
          <th>Reg. ID</th>
          <th>Company</th>
          <th>Address</th>
          <th>Duration</th>
          <th>Type</th>
          <th>Description</th>
          <th>Job role</th>
          <!-- <th>Location</th> -->
          <th>Stipend</th>
          <th>Source</th>
          <th>Approve</th>
          
          <th>Joining Date</th>
          <th>Ending Date</th>
          <th></th>
          <th> Upload Certificate</th>
        </tr>
        <?php if (mysqli_num_rows($result) > 0) {
  
        while ($row = mysqli_fetch_array ($result)){
       ?>
          <tr>
            <td><?php echo $row ['ID'];?></td>
                <?php $uid = $row ['UID'];?>
            <td><?php echo $row ['Company'];?>
               
            </td>
            <td><?php echo $row ['Address'];?></td>
            <td><?php echo $row ['Duration'];?></td>
            <td><?php echo $row ['Type'];?></td>
            <td><?php echo $row ['Description'];?></td> 

            <td><?php echo $row ['Job_Role'];?></td>
              
            <td><?php echo $row ['Stipend'];?>
              
            </td>
            <td><?php echo $row ['Source'];?>
            <td><?php echo $row ['Approve'];?>

            <td><?php echo $row ['Date_Join'];?></td>
            <td><?php echo $row ['Date_End'];?>
            
            <td>
              <form action='session_m.php' method='post'>
                  <input type='hidden' name='uid1' value='<?php echo $row ['UID'];?>' />
                  <button class="btn btn-info" onClick='submit();'>Edit</button>
  
              </form>
           <!-- <a href="edit.php?uid=<?php echo urlencode($uid) ?>" style="margin:5%;" class="btn btn-info">Edit</a>-->
            <form action='delete.php' method='post'>
                  <input type='hidden' name='uid2' value='<?php echo $row ['UID'];?>' />
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
  
              </form>
            <!--  <a onclick="return confirm('Are you sure you want to delete this entry?')" style="margin:5%;" href="delete.php?ID=<?php echo urlencode($id) ?>&uid=<?php echo urlencode($uid) ?>" class='btn btn-danger'>Delete</a> -->
            </td>
            <?php  

                  $sql1 = "SELECT * FROM files WHERE ID = '$id' and UID='$uid'";
                  $result1 = mysqli_query ($conn,$sql1) or die ('Error');
                  if(mysqli_num_rows($result1)==0)
                  {
            ?>
            <td >
               <form action="../file/filesLogic.php?uid=<?php echo $uid?> " method="post" enctype="multipart/form-data" >
                  <input type="file" name="myfile" >
                  <button style="margin:5%;" type="submit" name="save" class="btn btn-info">Upload(Mandatory)</button>
                </form>
            </td>
             <?php }else{ ?>
              
            <td >  
              <div>                        
                <form action="../file/filesLogic.php?uid=<?php echo $uid?>" method="post" enctype="multipart/form-data" >
                 <a href="../file/solo_download.php?uid=<?php echo $uid?>
                 " style="margin:5%;" class="btn btn-info">Download latest copy</a>
                  <input type="file" name="myfile" >
                  <button style="margin-top:5%;" type="submit" name="save1" class="btn btn-info">Upload New</button>
                </form>
              </div>
            </td>
             <?php } ?>              
          </tr>
        <?php }
        } else {
          echo "0 results";
      } ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
