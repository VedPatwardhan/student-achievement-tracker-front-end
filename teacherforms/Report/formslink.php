<?php
require 'db.php';
session_start();
if(!isset($_SESSION["login_auth"]) || $_SESSION["login_auth"] !== true){
    header("location: ../../Auth_login.php");
    exit;
}

$id = $_SESSION['AID'];



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
      <h2>Monthly Report Generator
</h2>
    </div>
    <div class="card-body">
     
     
        
        <div class="form-group">
   <button type="submit" class="btn btn-info" onclick="form21()">
Print Monthly Report
</button>
</div>

    <div class="form-group">
     <button type="submit" class="btn btn-info" onclick="form1()">A.  Conferences, Seminars, Symposia, Workshops, FDP, STTP Organized /conducted. </button>
</div>
 <div class="form-group">
<button type="submit" class="btn btn-info" onclick="form2()">B. Webinar / video conference /Invited talks organized /conducted. </button>
</div>
<div class="form-group">
<button type="submit" class="btn btn-info" onclick="form3()">C. Teachers Attended Conferences, Seminars, Symposia, Workshops, FDP, STTP etc.</button>
</div>
 
 <div class="form-group">
<button type="submit" class="btn btn-info" onclick="form4()">D.  Collaboration / MoU with National / International Institute/Industry /Research Center/Colleges/University.</button>
</div>
 <div class="form-group">
<button type="submit" class="btn btn-info" onclick="form5()">E.  Center  of innovation / excellence.</button>
<button type="submit" class="btn btn-info" onclick="form6()">F.  Industry sponsored Labs.</button>
<button type="submit" class="btn btn-info" onclick="form7()">G.  Grants Received </button>
</div>
 
 <div class="form-group">
<button type="submit" class="btn btn-info" onclick="form8()">H.  Financial support provided to students. </button>
<button type="submit" class="btn btn-info" onclick="form9()">I.  Consultancy Projects </button>
<button type="submit" class="btn btn-info" onclick="form10()">J.  Patent </button>
</div>

 <div class="form-group">
<button type="submit" class="btn btn-info" onclick="form11()">
K.   Books / Book Chapter 
 </button>
 </div>
 <div class="form-group">
 <button type="submit" class="btn btn-info" onclick="form12()">
L.  Research Publications in National and International Journals/Edited Books/Proceedings/Conference
 </button>
 </div>
 <div class="form-group">

  <button type="submit" class="btn btn-info" onclick="form13()">
M.  Research Projects/Schemes Undertaken by Teachers
 </button>
 <button type="submit" class="btn btn-info" onclick="form14()">
N.  Staff Achievement </button>
 <button type="submit" class="btn btn-info" onclick="form15()">
O.  Student Achievement </button>
 </div>
 
 <div class="form-group">

<button type="submit" class="btn btn-info" onclick="form16()">
P.  Departmental Achievement</button>
<button type="submit" class="btn btn-info" onclick="form17()">
Q.  Technical Competitions / Tech Fest Organized / Participated</button>
</div>
 
 <div class="form-group">
<button type="submit" class="btn btn-info" onclick="form18()">
R.  Industrial Visits / Tours
</button>
<button type="submit" class="btn btn-info" onclick="form19()">
S.  Resource Person:

</button>
<button type="submit" class="btn btn-info" onclick="form20()">
T.  Any other information (As applicable )

</button>
</div>
        
      </form>
    </div>
  </div>
</div>

<script >
      function form1(){
        window.location = "../formA/index.php";
      }
      function form2(){
        window.location = "../formB/index.php";
      }
       function form3(){
        window.location = "../formC/index.php";
      }
       function form4(){
        window.location = "../formD/index.php";
      }
      function form5(){
        window.location = "../formE/index.php";
      }
       function form6(){
        window.location = "../formF/index.php";
      }
       function form7(){
        window.location = "../formG/index.php";
      }
      function form8(){
        window.location = "../formH/index.php";
      }
      function form9(){
        window.location = "../formI/index.php";
      }
       function form10(){
        window.location = "../formJ/index.php";
      }
       function form11(){
        window.location = "../formK/index.php";
      }
        function form12(){
        window.location = "../formL/index.php";
      }
      function form13(){
        window.location = "../formM/index.php";
      }
       function form14(){
        window.location = "../formN/index.php";
      }
       function form15(){
        window.location = "../formO/index.php";
      }
      function form16(){
        window.location = "../formP/index.php";
      }
       function form17(){
        window.location = "../formQ/index.php";
      }
      function form18(){
        window.location = "../formR/index.php";
      }
       function form19(){
        window.location = "../formS/index.php";
      }
      function form20(){
        window.location = "../formT/index.php";
      }
       function form21(){
        window.location = "../Report/create.php";
      }
        </script>
<?php
require 'footer.php';
?>