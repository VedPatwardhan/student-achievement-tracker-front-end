<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: ../../Home_page.php");
    exit;
}
 $id = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Page1</title>
<!--<link rel="stylesheet" type="text/css" href="stylehome.css" >-->
	<link rel="stylesheet" type="text/css" href="navbar.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style type="text/css">
      span, a, a:hover {
    text-decoration: none;
    color: inherit;
}
.blog img{
    max-width: 100%;
}
.blog-head {
  margin-bottom: 70px;
}

.blog-head h6{
  color: #f05907;
  position: relative;
  display: inline-block;
  text-transform: capitalize;
}

.blog-head h6:after, .blog-head h6:before{
  position: absolute;
  content: "";
  width: 50px;
  height: 3px;
  background: #f05907;
  top: 50%;
}

.blog-head h6:after{
  right: 120%;
}

.blog-head h6:before{
  left: 120%;
}

.overlay{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 0;
}
.blog{
  background-color: #f7f7f7;
      padding: 100px 0;
    min-height: 100vh;
}

.blog .item{
  background-color: #fff;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  overflow: hidden;
  position: relative;
}

.blog .item .more{
  position: absolute;
  right: 30px;
  bottom: 20px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
  color: #f05907;
  font-size: 19px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  line-height: 40px;
  text-align: center;
  transform: translate(0 , 100px);
  transition: all 0.3s ease-in-out;
}

.blog .item:hover .more{
  transform: translate(0 , 0)
}

.blog .item:hover .img img{
  transition: all 0.4s ease;
}

.blog .item:hover .img img{
  transform: rotate(-5deg) scale(1.2 , 1.2);
}

.blog .item .img{
  clip-path: polygon(0 0, 100% 0, 100% 70%, 0 100%, 0 75%);
}

.blog .item .info{
  padding: 30px;
  position: relative;
}

.blog .item .info .date{
  position: absolute;
  left: calc(50% - 25px);
  top: -54px;
  width: 50px;
  height: 50px;
  line-height: 20px;
  text-align: center;
  background-color: #f05907;
  color: #fff;
  padding: 5px;
  transform: rotate(45deg);
}

.blog .item .info .date span {
    transform: rotate(-45deg);
    display: inline-block;
}
.blog .item .info h5:hover{
  color: #f05907;
}

.blog .item .info .user{
  margin-top: 20px;
  color: #f05907;
}

.blog .item .info .user i{
  margin-right: 5px;
  font-size: 14px;
}
  </style>
</head>
<body>

	<div class="home">
      
   <ul>
 <li><a href="/projects/stu_profile_edit/crud/view_stu_profile.php">View Profile</a>
 </li>
 <li><a href="#">Activities</a>
  <ul>
   <li><a href="/projects/arts_edit1/crud/index.php?ID=<?php echo $id?>">Arts</a></li>
   <li><a href="/projects/comp_edit1/crud/index.php?ID=<?php echo $id?>">Competitve Coding</a></li>
   <li><a href="#">Internships</a></li>
   <li><a href="#">Paper Presentation</a></li>
   <li><a href="/projects/project_edit1/crud/index.php">Project Competition</a></li>
   <li><a href="/projects/social_edit1/crud/index.php?ID=<?php echo $id?>">Social Work</a></li>
   <li><a href="/projects/sports_edit1/crud/index.php">Sports</a></li>
   
  
  </ul>
 </li>
 <li><a href="#">Help</a>
 <ul>
  <li><a href="">College imp No.s</a>
  <li><a href="">College imp Docs</a>
  <li><a href="">College Notices</a>  
 </ul>
 </li>
 <li><a href="#">About us</a>
 <ul>
  <li><a href="">Blog</a>
  <li><a href="">Mobile No.</a>
  <li><a href="">Email</a>  
 </ul>
 </li>
 <li><a href="stu_logout.php">Logout</a></li>
</ul>

</div>


<div class="container">
  <div class="jumbotron" style="margin-top:5% ">
    <center><h1>Student Achievements Tracker</h1></center>      
<!--  < p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
 -->  </div>
  <img src="PICT.jpg" style="width:100%;">
  <!-- <p>This is some text.</p>      
  <p>This is another text.</p>      
</div> -->

<section class="blog" data-scroll-index="4">
        <div class="container">
          <!-- header of section -->
          <div class="blog-head text-center">
            <h2>News & Notices</h2>
            <h6>latest news</h6>
          </div>

          <!-- blog items -->
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="item">
                <div class="img">
                 <!-- <img src="https://i.ibb.co/CKNmhMX/blog1.jpg" alt=""> -->
                  <img style="height: 380px" src="3.jpg" alt="">
                </div>
                <div class="info">
                  <div class="date">
                    <span>05 <br> Nov</span>
                  </div>
                  <a href=""><h5>Lorem Ipsum is simply dummy</h5></a>
                  <p>Lorem ipsum dolor sit amet conse ctetur, adipi sicing elit. Nisi sapiente hic fugiat delectus dicta delectus dicta.</p>
                  <a href="#0" class="user"><i class="fas fa-user"></i>Admin</a>
                  <a href="#0" class="more"><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="item">
                  <div class="img">
                   <!-- <img src="https://i.ibb.co/m5yGbdR/blog2.jpg" alt="">-->
                    <img style="height: 380px" src="4.jpg" alt="">
                  </div>
                  <div class="info">
                    <div class="date">
                      <span>19 <br> Dec</span>
                    </div>
                    <a href=""><h5>Lorem Ipsum is simply dummy</h5></a>
                    <p>Lorem ipsum dolor sit amet conse ctetur, adipi sicing elit. Nisi sapiente hic fugiat delectus dicta delectus dicta.</p>
                    <a href="#0" class="user"><i class="fas fa-user"></i>Admin</a>
                    <a href="#0" class="more"><i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>

          </div>
        </div>



         <div class="container">
          <!-- header of section -->
          <div class="blog-head text-center">
            <h2>Events</h2>
            <h6>latest Event details</h6>
          </div>

          <!-- blog items -->
          <div class="col-md-6 col-lg-6">
                <div class="item">
                  <div class="img">
                    <!--<img src="https://i.ibb.co/YXV3zmh/blog3.jpg" alt="">-->
                    <img style="height: 380px" src="5.jpg" alt="">
                  </div>
                  <div class="info">
                    <div class="date">
                      <span>25 <br> Dec</span>
                    </div>
                    <a href=""><h5>Lorem Ipsum is simply dummy</h5></a>
                    <p>Lorem ipsum dolor sit amet conse ctetur, adipi sicing elit. Nisi sapiente hic fugiat delectus dicta delectus dicta.</p>
                    <a href="#0" class="user"><i class="fas fa-user"></i>Admin</a>
                    <a href="#0" class="more"><i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>

            <div class="col-md-6 col-lg-6">
                <div class="item">
                  <div class="img">
                    <img style="height: 380px" src="7.jpg" alt="">
                  </div>
                  <div class="info">
                    <div class="date">
                      <span>19 <br> Dec</span>
                    </div>
                    <a href=""><h5>Lorem Ipsum is simply dummy</h5></a>
                    <p>Lorem ipsum dolor sit amet conse ctetur, adipi sicing elit. Nisi sapiente hic fugiat delectus dicta delectus dicta.</p>
                    <a href="#0" class="user"><i class="fas fa-user"></i>Admin</a>
                    <a href="#0" class="more"><i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>

              
        </div>



         <div class="container">
          <!-- header of section -->
          <div class="blog-head text-center">
            <h2>Remarkable Achievements </h2>
            <h6>latest Achievements</h6>
          </div>

          <!-- blog items -->
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="item">
                <div class="img">
                  <img style="height: 380px" src="6.jpg" alt="">
                </div>
                <div class="info">
                  <div class="date">
                    <span>05 <br> Nov</span>
                  </div>
                  <a href=""><h5>Lorem Ipsum is simply dummy</h5></a>
                  <p>Lorem ipsum dolor sit amet conse ctetur, adipi sicing elit. Nisi sapiente hic fugiat delectus dicta delectus dicta.</p>
                  <a href="#0" class="user"><i class="fas fa-user"></i>Admin</a>
                  <a href="#0" class="more"><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="item">
                  <div class="img">
                    <img style="height: 380px" src="8.jpg" alt="">
                  </div>
                  <div class="info">
                    <div class="date">
                      <span>19 <br> Dec</span>
                    </div>
                    <a href=""><h5>Lorem Ipsum is simply dummy</h5></a>
                    <p>Lorem ipsum dolor sit amet conse ctetur, adipi sicing elit. Nisi sapiente hic fugiat delectus dicta delectus dicta.</p>
                    <a href="#0" class="user"><i class="fas fa-user"></i>Admin</a>
                    <a href="#0" class="more"><i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </section>

</body>
</html>