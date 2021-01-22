<?php

session_start();
$id = $_SESSION['AID'];

 $usernm="root";
        $passwd="";
        $host="localhost";
        $database="dbms_project";

        $conn = mysqli_connect($host,$usernm,$passwd,$database);

        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
}
if(!empty($_POST['searchs']) && !empty($_POST['searchby'])){
	$column=$_POST['searchs'];
$searchby=$_POST['searchby'];
	
    $sql = "SELECT * FROM formA WHERE ID = '$id' and $column='$searchby'";
	// if($column='State') {
	// 	# code...
	//     $sql = "SELECT * FROM formA WHERE ID = '$id' and State ='$searchby'";
	// }
	
	// if($column='Title') {
	// 	# code...
	// 	$sql = "SELECT * FROM formA WHERE ID = '$id' and Title='$searchby'";
	// }

	// if($column='Sponsor') {
	// 	# code...
	// 	$sql = "SELECT * FROM formA WHERE ID = '$id' and Sponsor='$searchby'";
	// }

	// if($column='Coordinator') {
	// 	# code...
	// 	$sql = "SELECT * FROM formA WHERE ID = '$id' and Coordinator='$searchby'";
	// }
	// if ($column='Activity')
	// {
	// 	$sql = "SELECT * FROM formA WHERE ID = '$id' and Activity='$searchby'";
	// }



        $result = mysqli_query ($conn,$sql) or die ('Error');

}
else{
	$sql = "SELECT * FROM formA WHERE ID = '$id' ";
     $result = mysqli_query ($conn,$sql) or die ('Error');
}


         if($_SESSION['login'])
if($_SESSION['login']  )
{
	

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
	 <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="printpreview.css"  />

</head>
<body>

	<div class="logo" style="padding-left:10%;">

    <p  style="padding-left:100px;font-size: 40px;"><b>Personal Monthly Report Form  A </b></p>
    <hr>

    
    </div>


    <div class="tabs" >
          <h2>A.  Conferences, Seminars, Symposia, Workshops, FDP, STTP Organized /conducted.</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Activity/Event</th>
          <th>Title</th>
          <th>State / National / International</th>
          <th>Sponsoring Authority</th>
          <th>Date(s) [dd/mm/yyyy]</th>
          <th>No. of Participants</th>
          <th>Name of the  coordinator(s)</th>
          <th>Remarks</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Activity'];?>
             
            </td>
            <td><?php echo $row ['Title'];?></td>
           
       <td><?php echo $row ['State'];?>
              
            </td>
            <td><?php echo $row ['Sponsor'];?>
              
            </td>
            <td><?php echo $row ['Date_time'];?></td>

             <td><?php echo $row ['Participants'];?></td>
              <td><?php echo $row ['Coordinator'];?></td>
               <td><?php echo $row ['Remarks'];?></td>
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
         <?php }
        } else {
          $cnt=0;
          ?>

           <tr>
            <td><?php echo $cnt?></td>
               
            <td><?php echo "Nil";?>
             
            </td>
            <td><?php echo "Nil";?></td>
           
            <td><?php echo "Nil";?>
              
            </td>
        
              
            
            <td><?php echo "Nil";?></td>

             <td><?php echo "Nil";?></td>
               <td><?php echo "Nil";?></td>
                <td><?php echo "Nil";?></td>
                 <td><?php echo "Nil";?></td>
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <div style="padding-left: 35%;padding-top: 50px;padding-bottom: 100px">
<a class="control-group" onclick="window.print()"><b>Print Report</b></a>

</div>

<!--< /form> -->

<script type="text/javascript">
  function printContent(){
    // var restorepage = document.body.innerHTML;
    // var printcontent = document.getElementById(el).innerHTML;
    // document.body.innerHTML = printcontent;
    window.print();
//     document.body.innerHTML = restorepage;
// }
</script>


</body>
</html>

<?php }
?>