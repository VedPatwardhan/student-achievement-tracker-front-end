<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login_auth"]) || $_SESSION["login_auth"] !== true){
    header("location: ../../index.html");
    exit;
}

$id = $_SESSION['AID'];
$_SESSION['type'] = 'formK';
$_SESSION['flag_file'] = 2; 
$type ='';
$desc ='';
$venue ='';
$ach ='';
$uid ='';

        $sql = "SELECT * FROM formK WHERE ID = '$id'";
        $result = mysqli_query ($conn,$sql) or die ('Error');
 ?>

<html lang="en">
  <head>
    <title>K.   Books / Book Chapter 
</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../../Authority_Home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="">Achievements</a>
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
      <h2>K.   Books / Book Chapter 
</h2>
    </div>
    <div class="card-body" style="overflow: scroll;">
      <table class="table table-bordered">
        <tr>
          <th>Sr. No.</th>
          <th>Name of the Teacher(s)/Author</th>
          <th>Title of the Reference Books/Monographs</th>
          <th>Name and Place of Publisher(s)</th>
         
          <th>Date of Publication</th>
          <th>Hard /Soft Copy</th>
          <th>Link in case of Soft copy</th>
          <th>Isbn/Issn No.</th>
          
           <th> </th>
        </tr>
         <?php if (mysqli_num_rows($result) > 0) {
  		$cnt=0;
        while ($row = mysqli_fetch_array ($result)){
        		$cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
               <?php $uid = $row ['UID'];?>
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Title'];?></td>
           
            <td><?php echo $row ['Publisher'];?>
              
            </td>
        
              
            
            <td><?php echo $row ['Date_start'];?></td>

             <td><?php echo $row ['Copy'];?></td>
               <td><?php echo $row ['Link'];?></td>
               <td><?php echo $row ['Isbn'];?></td>
                <td>
               <form action='session_m.php' method='post'>
                  <input type='hidden' name='uid1' value='<?php echo $row ['UID'];?>' />
                  <button class="btn btn-info" onClick='submit();'>Edit</button>
  
              </form>
          
            <form action='delete.php' method='post'>
                  <input type='hidden' name='uid2' value='<?php echo $row ['UID'];?>' />
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
  
              </form>
            </td>
              <?php  

                  $sql1 = "SELECT * FROM files WHERE ID = '$id' and UID='$uid'";
                  $result1 = mysqli_query ($conn,$sql1) or die ('Error');
                  if(mysqli_num_rows($result1)==0)
                  {
            ?>

            <td>
              <form  action="../../file/filesLogic.php?uid=<?php echo $uid?>" method="post" enctype="multipart/form-data" > 
                  <input type="file" name="myfile" id="file" >
                   <button style="margin:5%;" type="submit" name="save" class="btn btn-info">Submit</button>
              </form>
            </td>  
            <?php }else{ ?>
            <td >  
              <div>                        
                <form action="../../file/filesLogic.php?uid=<?php echo $uid?>" method="post" enctype="multipart/form-data" >
                 <a href="../../file/solo_download.php?uid=<?php echo $uid?>" style="margin:5%;" class="btn btn-info">Download latest copy</a>
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
<?php

require 'footer.php';
?>