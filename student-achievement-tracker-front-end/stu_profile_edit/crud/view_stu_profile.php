<?php require_once('../profile_photo/processForm.php') ?>
<?php
$aid = isset($_SESSION['AID']) ? $_SESSION['AID'] : '';

$_SESSION['AID'] = $aid;
        $usernm="root";
        $passwd="";
        $host="localhost";
        $database="dbms_project";

        $conn = mysqli_connect($host,$usernm,$passwd,$database);

        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
}

        $sql = "SELECT * FROM student WHERE ID = '$id'";
        $result = mysqli_query ($conn,$sql) or die ('Error');

        $sql1 = "SELECT * FROM files where UID='$uid'";
        $result1 = mysqli_query($conn, $sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Profile</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../../css/bootstrap.min.css">
     <link rel="stylesheet" href="../../css/magnific-popup.css">
     <link rel="stylesheet" href="../../css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../../css/templatemo-style.css">
     <link rel="stylesheet" href="../../css/ProfileStyle.css">
     <link rel="stylesheet" href="../profile_photo/main.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
     
</head>
<body>
     <div class="new-section">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Student Achievement Tracker</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Graph Analysis</a></li>
                         <li><a href="#contact" class="smoothScroll">Profile</a></li>
                         <li><a href="#contact" class="smoothScroll">Student</a></li>
                         <li><a href="#contact" class="smoothScroll">Authority</a></li>
                         <li><a href="#contact" class="smoothScroll">Logout</a></li>
                    </ul>

               </div>
               
          </div>
     </section>
     <section id="section1">
          <div class="top-space">
               <h1>Profile</h1>
          </div>
     </section>
</div>

     <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">

                    <div class="row ele">
                         <div class="col-md-4">
                              <div class="profile-img">
                                   
                                   <form action="view_stu_profile.php" method="post" enctype="multipart/form-data">
                                        <?php if (!empty($msg)): ?>
                                        <div class="alert <?php echo $msg_class ?>" role="alert">
                                        <?php echo $msg; ?>
                                        </div>
                                        <?php endif; ?>
                                        <div class="form-group text-center" style="position: relative;" >
                                        <span class="img-div">
                                        <div class="text-center img-placeholder"  onClick="triggerClick()">
                                             <h4>Change Profile Photo</h4>
                                        </div>
                                        <?php if(mysqli_num_rows($result1) == 1){
                                             $row1 = mysqli_fetch_array ($result1);
                                             ?>
                                        <img src="<?php echo '../../file/uploads/Student/'.$id.'/Profile/' . $row1['Name'] ?>" onClick="triggerClick()" id="profileDisplay">
             
                                        <?php }else{?>
                                             <img src="../profile_photo/placeholder.jpg" onClick="triggerClick()" id="profileDisplay">
                 
                                        <?php }?> 
                                        </span>
                                             <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                                        </div>
                                        <div class="form-group" >
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                   </form>                              

                              </div>
                          </div>

               <form method="post">
               <?php
                    if (mysqli_num_rows($result) > 0) {
  
                         while ($row = mysqli_fetch_array ($result)){
 
               ?>
                    
                         <div class="col-md-6">
                              <div class="profile-head" id="name">
                                   <h5 class="ele">
                                       <?php echo $row ['Full_Name'];?>
                                   </h5>
                                   <h6 id="student" class="ele">
                                        Student
                                   </h6>
                                   <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                                             <!-- <li class="nav-item">
                                             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                             </li>
                                             <li class="nav-item">
                                             <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                        </li> -->
                                   </ul>
                              </div>
                         </div>

                         <div class="col-md-2">
                              <a href="#" style="color:blue;">Edit Profile</a>
                         </div>

               </div>  
                    
                    <div class="row" style="margin-top: 30px;">
                         <div class="col-md-4">
                              <div class="profile-work ele">
                                   <p>WORK LINK</p>
                                   <a href="">Website Link</a><br/>
                                   <a href="">Bootsnipp Profile</a><br/>
                                   <a href="">Bootply Profile</a>
                                   <p>SKILLS</p>
                                   <a href="">Web Designer</a><br/>
                                   <a href="">Web Developer</a><br/>
                                   <a href="">WordPress</a><br/>
                                   <a href="">WooCommerce</a><br/>
                                   <a href="">PHP, .Net</a><br/>
                              </div>
                         </div>
                         <div class="col-md-8 ele">
                              <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Registration Id</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="reg_id" class="ele1"><?php echo $row ['ID'];?></p>
                                   </div>
                              </div>
                               <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Name</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="name" class="ele1"><?php echo $row ['Full_Name'];?></p>
                                   </div>
                              </div>
                               <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Class</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="class" class="ele1"><?php echo $row ['Class'];?></p>
                                   </div>
                              </div>
                               <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Roll Number</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="roll_no" class="ele1"><?php echo $row ['Rollno'];?></p>
                                   </div>
                              </div>

                               <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Department</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="department" class="ele1"><?php echo $row ['Department'];?></p>
                                   </div>
                              </div>
                               <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Date of Birth</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="dob" class="ele1"><?php echo $row ['DOB'];?></p>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Email</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="email_id" class="ele1"><?php echo $row ['Email'];?></p>
                                   </div>
                              </div>
                               <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Mobile No.</label>
                                   </div>
                                   <div class="col-md-6">
                                        <p id="mobile" class="ele1"><?php echo $row ['Mobile'];?></p>
                                   </div>
                              </div>
                               <div class="row">
                                   <div class="col-md-6">
                                        <label class="ele2">Address
                                   </div>
                                   <div class="col-md-6">
                                        <p id="address" class="ele1"><?php echo $row ['Address'];?></p>
                                   </div>
                              </div>
                               
                         </div>
                    </div>
                    <?php
               }
          } else {
               echo "0 results";
               }
        ?>
               </form>
     </div>
</section>


<!-- WORK -->




<!-- FOOTER -->
<footer data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-sm-12">
                    <div class="footer-thumb footer-info"> 
                         <h2>Hydro Company</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
               </div>

               <div class="col-md-2 col-sm-4"> 
                    <div class="footer-thumb"> 
                         <h2>Company</h2>
                         <ul class="footer-link">
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Join our team</a></li>
                              <li><a href="#">Read Blog</a></li>
                              <li><a href="#">Press</a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-2 col-sm-4"> 
                    <div class="footer-thumb"> 
                         <h2>Services</h2>
                         <ul class="footer-link">
                              <li><a href="#">Pricing</a></li>
                              <li><a href="#">Documentation</a></li>
                              <li><a href="#">Support</a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-3 col-sm-4"> 
                    <div class="footer-thumb"> 
                         <h2>Find us</h2>
                         <p>123 Grand Rama IX, <br> Krung Thep Maha Nakhon 10400</p>
                    </div>
               </div>                    

               <div class="col-md-12 col-sm-12">
                    <div class="footer-bottom">
                         <div class="col-md-12 col-sm-9">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2017 Your Company</p>
                              </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</footer>


<!-- MODAL -->
<section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content modal-popup">

               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>

               <div class="modal-body">
                    <div class="container-fluid">
                         <div class="row">

                              <div class="col-md-12 col-sm-12">
                                   <div class="modal-title">
                                        <h2>Hydro Co</h2>
                                   </div>

                                   <!-- NAV TABS -->
                                   <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                        <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                   </ul>

                                   <!-- TAB PANES -->
                                 <!--  <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                             <form action="#" method="post">
                                                  <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                  <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                  <input type="submit" class="form-control" name="submit" value="Submit Button">
                                             </form>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                             <form action="#" method="post">
                                                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                  <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                             </form>
                                        </div>
                                   </div> -->
                              </div>

                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- SCRIPTS -->
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.stellar.min.js"></script>
<script src="../../js/jquery.magnific-popup.min.js"></script>
<script src="../../js/smoothscroll.js"></script>
<script src="../../js/custom.js"></script>
<script src="../profile_photo/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script>
          $(document).ready(function(){
          $("#submit").hide();  
          $("#profileImage").on("change", function(){
          $("#submit").show();  
    })
});
</script>
</body>
</html>