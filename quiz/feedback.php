<?php
include_once('dbcon.php');
if(isset($_REQUEST['confirm']))
{
    if(($_REQUEST["subject"]=="") || ($_REQUEST["email"]==""))
  {
    $msg="All field are require";
  }
  else
  {
   $name=$_REQUEST['rname'];
   $email=$_REQUEST['email'];
   $subject=$_REQUEST['subject'];
   $feedback=$_REQUEST['feedback'];
  $sql="insert into feedbacks values ('','$name','$email','$subject','$feedback',now())";
    if($conn->query($sql) == TRUE)
    {
    $msg="feedback submited successfully";
    }
    else{
        $msg="Unable to submit feedback";
        }
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/design.css">
    <title>online exam</title>
</head>
<body>
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm fixed-top">
       <span class="navbar-brand navbar-right">Online exam</span>
       <button class="navbar-toggler-icon p-3" id="navbutton" onclick="openNav()"></button>
       <ul class="navbar-nav navv" id="navv">
        <a href="" class="closebtn" onclick="closeNav">X</a>
         <li class="nav-item mx-3 side-nav "><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item mx-3 side-nav "><a href="#" class="nav-link" onclick="idd()">Devloper</a></li>
         <li class="nav-item mx-3 side-nav "><a href="#" class="nav-link">AboutUs</a></li>
         <li class="nav-item mx-3 side-nav "><a href="feedback.php" class="nav-link">Feedback</a></li>
       </ul> 
    </nav>
    <!--developer model -->
    <div class="modalls" id="dev">
          <div class="fll border-bottom">
            <h2 class="ml-5 my-2">Developer</h2>
            <span class="closes" onclick="closess()">&times;</span>
          </div>
        <div class="carr">
          <div class="col border-right">
            <img src="image/gaurav.jpg" alt="gaurav" class="fluid-image" style="width:150px;">
          </div>
          <div class="col">
            <h2>gaurav prajapati</h2>
            <p><b>gauravprajapati@gmail.com</b></p>
            <p>8218153731</p>
          </div>
        </div>
      </div>
      <!--end developer model -->

     <header class="jumbotron back-image mt-3">
        <div class="container mb-1">
            <div class="row">
              <div class="col-md-7 col-sm-6 offset-md-3 bg-dark text-white">
                  <h2 class="text-center mt-3">feedback/Report a problem</h2>
                <form action="" method="POST" class="p-3">
                  <div class="form-group my-1">
                    <i class="fas fa-user mr-2"></i><label for="name" class="font-weight-bold">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="rname">
                  </div>
                  <div class="form-group my-1"> 
                    <label for="subject" class="font-weight-bold">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                  </div>
                  <div class="form-group my-1"> 
                    <label for="subject" class="font-weight-bold">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your Email">
                  </div>
                  <div class="form-group my-1"> 
                    <label for="subject" class="font-weight-bold">Feedback</label>
                    <textarea name="feedback" id="feedback" rows="5" class="form-control" placeholder="Enter your feedback"></textarea>
                  </div>
                  <div class="submit" style="display: flex;">
                  <button class="btn btn-danger mt-2 p-1 font-weight-bold mr-4" name="confirm">Submit</button>
                  <p class="alert p-0 my-2 font-weight-bold"><?php if(isset($msg)) echo $msg ?></p>
                  </div>
                </form>
            </div>
          </div>
      </div>
     </header>
      <!--footer section-->
    <div class="container-fluid">
        <footer class="row bg-dark text-white">
          <div class="col-sm-4 py-3">
            <span class="mr-5 text-center font-weight-bold">follow us:</span>
            <a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube fa-2x ml-2 text-secondary clr"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram fa-2x ml-2 text-danger clr"></i></a>
            
          </div> <!--end first column-->
          <div class="col-sm-8 text-right my-3">
            <small class="text-uppercase font-weight-bold mr-3">design by gaurav &copy</small>
            <small class="ml-2"><a class="btn btn-dark" href="admin/adminlogin.php">admin login</a></small>
          </div>
        </footer>
      </div>
      
      <!--End footer section-->

<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>