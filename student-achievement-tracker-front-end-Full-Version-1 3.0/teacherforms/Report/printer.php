<?php
require 'db.php';
session_start();
$flag = 0;

$filename='';
        
if (isset ($_POST['sdate'])  && isset($_POST['edate']) && isset($_POST['month'])  ) {
  
  $month = $_POST['month'];
  $rawdate1 = $_POST['sdate'];
  $rawdate2 = $_POST['edate'];
 
  $start = date('Y-m-d',strtotime($rawdate1));
  $end = date('Y-m-d',strtotime($rawdate2));
 
  

  $sql1 = "SELECT * FROM formA WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result1 = mysqli_query ($conn,$sql1) or die ('Error');
 $sql2 = "SELECT * FROM formB WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result2 = mysqli_query ($conn,$sql2) or die ('Error');

 $sql3 = "SELECT * FROM formC WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result3 = mysqli_query ($conn,$sql3) or die ('Error');
 $sql4 = "SELECT * FROM formD WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result4 = mysqli_query ($conn,$sql4) or die ('Error');
 $sql5 = "SELECT * FROM formE WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result5 = mysqli_query ($conn,$sql5) or die ('Error');
 $sql6 = "SELECT * FROM formF WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result6 = mysqli_query ($conn,$sql6) or die ('Error');
 $sql7 = "SELECT * FROM formG WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result7 = mysqli_query ($conn,$sql7) or die ('Error');
 $sql8 = "SELECT * FROM formH WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result8 = mysqli_query ($conn,$sql8) or die ('Error');



  $sql9 = "SELECT * FROM formI WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result9 = mysqli_query ($conn,$sql9) or die ('Error');

  $sql10 = "SELECT * FROM formJ WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result10 = mysqli_query ($conn,$sql10) or die ('Error');

  $sql11 = "SELECT * FROM formK WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result11= mysqli_query ($conn,$sql11) or die ('Error');

  $sql12= "SELECT * FROM formL WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result12 = mysqli_query ($conn,$sql12) or die ('Error');

  $sql13= "SELECT * FROM formM WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result13 = mysqli_query ($conn,$sql13) or die ('Error');

  $sql14= "SELECT * FROM formN WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result14 = mysqli_query ($conn,$sql14) or die ('Error');

 $sql15= "SELECT * FROM formO WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result15 = mysqli_query ($conn,$sql15) or die ('Error');
 $sql16= "SELECT * FROM formP WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result16 = mysqli_query ($conn,$sql16) or die ('Error');
 $sql17= "SELECT * FROM formQ WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result17 = mysqli_query ($conn,$sql17) or die ('Error');
 $sql18= "SELECT * FROM formR WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result18 = mysqli_query ($conn,$sql18) or die ('Error');
 $sql19= "SELECT * FROM formS WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result19 = mysqli_query ($conn,$sql19) or die ('Error');
 $sql20= "SELECT * FROM formT WHERE Currentdate BETWEEN '$start' AND '$end'";
 $result20 = mysqli_query ($conn,$sql20) or die ('Error');

  
  
}
else{
    $message = 'data insertion Unsuccessful';
  }

if(isset($_SESSION["login_auth"]) || $_SESSION["login_auth"] == true || isset($_SESSION["login_admin"]) || $_SESSION["login_admin"] == true){

    if(isset($_SESSION["login_auth"])){
      $flag = 1;
    }
?>

    <html >
  <head>
    <title class="control-group">Preview</title> 
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="printpreview.css"  />
    
        </head>
  <body >
<!-- <div class="logo" style="padding-left:10%;">

  <img src="logo.jpg"></div> -->
  <div class="logo" style="padding-left:10%;">

    <p  style="padding-left:100px;font-size: 40px;"><b>Monthly Report for <?php echo $month?>  </b></p>
    <hr>

    <p  style="padding-left:140px;font-size: 20px;"><b>Record between  <?php echo $rawdate1?> and <?php echo $rawdate2?>  </b></p>
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
         <?php if (mysqli_num_rows($result1) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result1)){
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

<br><br>
        <div class="tabs" >
          <h2>B.  Webinar / video conference /Invited talks organized /conducted.</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Activity/Event</th>
          <th>Title</th>
          <th>Speaker/Resource Person</th>
         
          <th>Date(s) [dd/mm/yyyy]</th>
          <th>No. of Participants</th>
          
          <th>Remarks</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result2) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result2)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
               
            <td><?php echo $row ['Activity'];?>
             
            </td>
            <td><?php echo $row ['Title'];?></td>
           
            <td><?php echo $row ['Speaker'];?>
              
            </td>
        
              
            
            <td><?php echo $row ['Date_time'];?></td>

             <td><?php echo $row ['Participants'];?></td>
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
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
<br><br>
       <div class="tabs">
          <h2>C.  Teachers Attended Conferences, Seminars, Symposia, Workshops, FDP, STTP etc.</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
         
          <th>Title</th>

          <th>Type/Nature</th>
          <th>Name of organizer</th>
          <th>Date(s) [dd/mm/yyyy]</th>
          <th>Name of the Staff</th>
          
          
          <th>Sponsorship Details </th>
           
        </tr>
         <?php if (mysqli_num_rows($result3) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result3)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
              
          
            <td><?php echo $row ['Title'];?></td>

              <td><?php echo $row ['Type'];?>
             
            </td>
           
            <td><?php echo $row ['Organiser'];?>
              
            </td>
        
              
            
            <td><?php echo $row ['Date_time'];?></td>

             <td><?php echo $row ['Staff'];?></td>
               <td><?php echo $row ['Sponsorship'];?></td>
                
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
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>

      
      <br><br>
       <div class="tabs">
          <h2>D.  Collaboration / MoU with National / International Institute/Industry /Research Center/Colleges/University.</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
         
          <th>Name of Institute / Company/ Industry/Research Center</th>

          <th>Collaboration/MoU title</th>
        
          <th>Date(s) [dd/mm/yyyy]</th>
          <th>Scope /Remark</th>
          
          
           
        </tr>
         <?php if (mysqli_num_rows($result4) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result4)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
              
          
            <td><?php echo $row ['Name'];?></td>

              <td><?php echo $row ['Collab'];?>
             
            </td>
           
           
        
              
            
            <td><?php echo $row ['Date_time'];?></td>

             <td><?php echo $row ['Remark'];?></td>
                
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

            
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
       <div class="tabs">
          <h2>E.  Center  of innovation / excellence</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Name of Institute / Organization (if any)</th>
          <th>Area/Title/Scope</th>
          <th>Investment</th>
         
         
          
          <th>Remarks</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result5) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result5)){
            $cnt=$cnt+1;
       ?>
        <tr>
             <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Title'];?></td>
           
            <td><?php echo $row ['Investment'];?>
              
            </td>
        
              
            
           
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

           
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
       <div class="tabs">
          <h2>F. Industry sponsored Labs.</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Name of sponsoring  Industry/Company</th>
          <th>Name of sponsored Lab</th>
          <th>Type of support</th>
         
         
          <th>Grant in Rs. (if any)</th>
          
          <th>Year of establishment</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result6) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result6)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
             
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Sponsor'];?></td>
           
            <td><?php echo $row ['Support'];?>
              
            </td>
        
              
            
          <td><?php echo $row ['Grant_money'];?></td>
               <td><?php echo $row ['Year'];?></td>
               
                
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
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
       <div class="tabs">
          <h2>G.  Grants Received</h2>
      <table  >

        <tr>
           <th>Sr. No.</th>
          <th>Name of Principal Investigator</th>
          <th>Name of Grant</th>
          <th>Sanctioning Authority</th>
         <th>Period of Grant</th>
         <th>Sanctioned order no.</th>
          <th>Date of Sanction</th>
          <th>Amount</th>
           
        </tr>
         <?php if (mysqli_num_rows($result7) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result7)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
               <?php $uid = $row ['UID'];?>
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Grantname'];?></td>
           
            <td><?php echo $row ['Authority'];?>
              
            </td>
             <td><?php echo $row ['Period'];?>
              
            </td>
         <td><?php echo $row ['OrderNo'];?>
              
            </td>
              
            
            <td><?php echo $row ['Date_time'];?></td>

           
               <td><?php echo $row ['Amount'];?></td>
                
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
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
       <div class="tabs">
          <h2>H.  Financial support provided to students.</h2>
      <table >

        <tr>
           <th>Sr. No.</th>
          <th>Academic Year</th>
          <th>Course</th>
          <th>Activity</th>
         
         
          <th>Financial Support provided</th>
          
          <th>No. of students availing the support</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result8) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result8)){
            $cnt=$cnt+1;
       ?>
        <tr>
           <td><?php echo $cnt?></td>
               
            <td><?php echo $row ['Year'];?>
             
            </td>
            <td><?php echo $row ['Course'];?></td>
           
            <td><?php echo $row ['Activity'];?>
              
            </td>
        
              
            
           

             <td><?php echo $row ['Finance'];?></td>
               <td><?php echo $row ['Count1'];?></td>
                
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
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
<br><br>
      <div class="tabs">
          <h2>I.  Consultancy Projects</h2>
      <table >

        <tr>
           <th>Sr. No.</th>
          <th>Name of faculty (Chief Consultant)</th>
          <th>Client Organization</th>
          <th>Title of Consultancy of project</th>
         
         
          <th>Amount received (in Rupees)</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result9) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result9)){
            $cnt=$cnt+1;
       ?>
        <tr>
             <td><?php echo $cnt?></td>
               
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Client'];?></td>
           
            <td><?php echo $row ['Title'];?>
              
            </td>
        
              
            
           

             <td><?php echo $row ['Amount'];?></td>
                
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

           
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
<br><br>
      <div class="tabs">
          <h2>J.  Patent</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Name of the Staff</th>
          <th>Title of Patent Filed</th>
          <th>Patent Published Yes/No (Year)</th>
         <th>Patent Granted Yes/No (Year)</th>
         <th>Patents Licensed Yes/No (Year)</th>
          <th>Earning From Patents (Amount in Rupees)</th>
         
          
           
        </tr>
         <?php if (mysqli_num_rows($result10) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result10)){
            $cnt=$cnt+1;
       ?>
        <tr>
           <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Title'];?></td>
           
            <td><?php echo $row ['Publish'];?>
              
            </td>
             <td><?php echo $row ['Patent_Grant'];?>
              
            </td>
         <td><?php echo $row ['License'];?>
              
            </td>
              
            
          
           
               <td><?php echo $row ['Amount'];?></td>
                
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
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
<br><br>
      <div class="tabs">
          <h2>K.   Books / Book Chapter</h2>
      <table  >

        <tr>
        <th>Sr. No.</th>
          <th>Name of the Teacher(s)/Author</th>
          <th>Title of the Reference Books/Monographs</th>
          <th>Name and Place of Publisher(s)</th>
         
          <th>Date of Publication</th>
          <th>Hard /Soft Copy</th>
          <th>Link in case of Soft copy</th>
          <th>Isbn/Issn No.</th>
           
        </tr>
         <?php if (mysqli_num_rows($result11) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result11)){
            $cnt=$cnt+1;
       ?>
        <tr>
           <td><?php echo $cnt?></td>
               
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Title'];?></td>
           
            <td><?php echo $row ['Publisher'];?>
              
            </td>
        
              
            
            <td><?php echo $row ['Date_Pub'];?></td>

             <td><?php echo $row ['Copy'];?></td>
               <td><?php echo $row ['Link'];?></td>
               <td><?php echo $row ['Isbn'];?></td>
                
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
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
<br><br>
      <div class="tabs">
          <h2>L.  Research Publications in National and International Journals/Edited Books/Proceedings/Conference</h2>
      <table >

        <tr>
          <th>Sr. No.</th>
          <th>Name of the Teacher's/Author</th>
          <th>Title of the Paper</th>
          <th>Name of the Journal/Proceeding/Edited
Book/Conference</th>
         
          <th>Level (State / National / International)</th>
          <th>>Volume/No / Issue </th>
          
          <th>Pages</th>
          <th>Year</th>
          <th>ISBN/ISSN No.</th>
           <th>Publisher </th>
           
        </tr>
         <?php if (mysqli_num_rows($result12) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result12)){
            $cnt=$cnt+1;
       ?>
        <tr>
          <td><?php echo $cnt?></td>
               
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Title'];?></td>
           
            <td><?php echo $row ['Journal'];?>
              
            </td>
        
              
            
            <td><?php echo $row ['Level'];?></td>

             <td><?php echo $row ['Volume'];?></td>
               <td><?php echo $row ['Page'];?></td>
                <td><?php echo $row ['Year'];?></td>
                 <td><?php echo $row ['Isbn'];?></td>
                  <td><?php echo $row ['Publisher'];?></td>
                
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

             <td><?php echo "Nil";?></td>
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
<br><br>
      <div class="tabs">
          <h2>M.  Research Projects/Schemes Undertaken by Teachers</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Name of the Investigator(s)</th>
          <th>Faculty (Stream)</th>
          <th>Title of the Research Project/Scheme</th>
         
          <th>Sanctioned order no.& Date</th>
          <th>Name of the Funding Agency</th>
          
          <th>Duration of the Project/Scheme (Dates)</th>
          <th>Amount Sanctioned(Rs.)</th>
          <th>Major/Minor</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result13) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result13)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Name'];?>
             
            </td>
               <td><?php echo $row ['Faculty'];?>     </td>
            <td><?php echo $row ['Title'];?></td>
           
         
              
       
        
              
            
            <td><?php echo $row ['Sanction'];?></td>

             <td><?php echo $row ['Fund'];?></td>
               <td><?php echo $row ['Duration'];?></td>
                <td><?php echo $row ['Amount'];?></td>
                 <td><?php echo $row ['Major'];?></td>
                
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
<br><br>
      <div class="tabs">
          <h2>N.  Staff Achievement</h2>
      <table  >

        <tr>
           <th>Sr. No.</th>
          <th>Name of Staff</th>
          <th>Achievement</th>
         
         
         
          
          <th>Remark</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result14) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result14)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
               
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Achievement'];?></td>
           
           
        
              
            
           
               <td><?php echo $row ['Remark'];?></td>
                
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
        
              
            
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
<br><br>
      <div class="tabs">
          <h2>O.  Student Achievement</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Name of Student</th>
          <th>Class</th>
          <th>Achievement</th>
         
         
         
          
          <th>Remark</th>
          
          
           
        </tr>
         <?php if (mysqli_num_rows($result15) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result15)){
            $cnt=$cnt+1;
       ?>
        <tr>
             <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Name'];?>
             
            </td>
             <td><?php echo $row ['Class'];?>
             
            </td>
            <td><?php echo $row ['Achievement'];?></td>
           
           
        
              
            
           
               <td><?php echo $row ['Remark'];?></td>
                
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

           
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
      <div class="tabs">
          <h2>P. Departmental Achievement</h2>
      <table >

        <tr>
           <th>Sr. No.</th>
          <th>Department</th>
          <th>Achievement Description</th>
        
          
           
        </tr>
         <?php if (mysqli_num_rows($result16) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result16)){
            $cnt=$cnt+1;
       ?>
        <tr>
           <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Department'];?>
             
            </td>
             <td><?php echo $row ['Description'];?>
             
            </td>
                
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
          
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
      <div class="tabs">
          <h2>Q.  Technical Competitions / Tech Fest Organized / Participated</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Name of Technical Competition/Techfest</th>
          <th>No. of participants</th>
          <th>Duration</th>
         
          <th>Name of student / Staff Participated</th>
          <th>Prize  / Rank Obtained</th>
          <th>Level</th>
          
           
        </tr>
         <?php if (mysqli_num_rows($result17) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result17)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Participants'];?></td>
           
            <td><?php echo $row ['Duration'];?>
              
            </td>
        
              
            
            <td><?php echo $row ['Participant_name'];?></td>

             <td><?php echo $row ['Prize'];?></td>
               <td><?php echo $row ['Level'];?></td>
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
             
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
      <div class="tabs">
          <h2>R.  Industrial Visits / Tours</h2>
      <table class="tabs">

        <tr>
           <th>Sr. No.</th>
          <th>Name and address of the  Company / Industry visited</th>
          <th>Purpose of the visit</th>
          <th>No. of Students</th>
         <th>Date of visit</th>
         <th>Coordinator(s)</th>
         
          
           
        </tr>
         <?php if (mysqli_num_rows($result18) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result18)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
               
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Purpose'];?></td>
           
            <td><?php echo $row ['Students'];?>
              
            </td>
             <td><?php echo $row ['Date_visit'];?>
              
            </td>
         <td><?php echo $row ['Coordinator'];?>
              
                
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
            
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
      <div class="tabs">
          <h2>S.  Resource Person:</h2>
      <table  >

        <tr>
          <th>Sr. No.</th>
          <th>Name of faculty</th>
          <th>Name of FDP / Workshop / Other</th>
          <th>Level</th>
         <th>Topic</th>
         <th>Date</th>
         <th>Organizer</th>
           
        </tr>
         <?php if (mysqli_num_rows($result19) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result19)){
            $cnt=$cnt+1;
       ?>
        <tr>
           <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['FDP'];?></td>
           
            <td><?php echo $row ['Level'];?>
              
            </td>
             <td><?php echo $row ['Topic'];?>
              
            </td>
         <td><?php echo $row ['Date_time'];?>
              
            </td>
            <td><?php echo $row ['Organizer'];?>
              
            </td>
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
            
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
      <br><br>
      <div class="tabs">
          <h2>T.  Any other information (As applicable )</h2>
      <table  >

        <tr>
            <th>Sr. No.</th>
          <th>Name of the Activity</th>
          <th>Organizer</th>
          <th>Name/No. of participants</th>
         <th>Date/Duration</th>
         <th>Prize  / Rank Obtained</th>
         <th>Remark</th>
           
        </tr>
         <?php if (mysqli_num_rows($result20) > 0) {
            $cnt=0;
        while ($row = mysqli_fetch_array ($result20)){
            $cnt=$cnt+1;
       ?>
        <tr>
            <td><?php echo $cnt?></td>
              
            <td><?php echo $row ['Name'];?>
             
            </td>
            <td><?php echo $row ['Organizer'];?></td>
           
            <td><?php echo $row ['Participants'];?>
              
            </td>
             <td><?php echo $row ['Duration'];?>
              
            </td>
         <td><?php echo $row ['Prize'];?>
              
            </td>
            <td><?php echo $row ['Remark'];?>
                
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
             
              
                
               <!-- <td><?php echo $row ['ID'];?></td> -->
               
        </tr>
          <?php
          
      } ?>
            
      </table>
      </div>
   <!--  </div>
  </div>
</div> -->
<div style="padding-left: 35%;padding-top: 50px;padding-bottom: 100px">
<a class="control-group" onclick="window.print()"><b>Print Report</b></a>

<a class="control-group" href="../../Auth_page1.php"><b>Go Back</b></a>
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

<?php }else{
  if($flag == 1){
    header("location: ../../Auth_login.php");
    exit;
  }else{
    header("location: ../../admin_login.php");
    exit;
  }
  
}
// require 'footer.php';
?>