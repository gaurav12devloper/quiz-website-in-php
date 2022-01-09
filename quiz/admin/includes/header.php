<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/design.css">
    <title><?php echo TITLE ?></title>
    <style>
        .active {
            color: white;
            background-color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm fixed-top">
       <span class="navbar-brad navbar-right">Online exam</span>
       <button class="navbar-toggler-icon p-3" id="navbutton" onclick="openNav()"></button>
       <ul class="navbar-nav navv" id="navv">
        <a href="" class="closebtn btn px-2" onclick="closeNav">X</a>
         <li class="nav-item text-center mx-3 side-nav btn-outline-secondary"><a href="../index.php" class="nav-link">Home</a></li>
         <li class="nav-item text-center mx-3 side-nav  btn-outline-secondary"><a href="#" class="nav-link" onclick="idd()">Devloper</a></li>
         <li class="nav-item text-center mx-3 side-nav  btn-outline-secondary"><a href="#" class="nav-link">AboutUs</a></li>
         <li class="nav-item text-center mx-3 side-nav  btn-outline-secondary"><a href="../feedback.php" class="nav-link">Feedback</a></li>
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
            <img src="../image/gaurav.jpg" alt="gaurav" class="fluid-image" style="width:150px;">
          </div>
          <div class="col">
            <h2>gaurav prajapati</h2>
            <p><b>gauravprajapati@gmail.com</b></p>
            <p>8218153731</p>
          </div>
        </div>
      </div>
      <!--end developer model -->
<!--start side-bar-->
    <div class="container-fluid bg-light" style="margin-top: 60px;">
    <button class="btn mb-3" id="menubutton" onclick="openm()">Menu</button>
        <div class="row">
            <nav class="col-sm-3 col-md-2 mt-2 menu" id="menu">
                <div class="left-sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item"> 
                            <a class="nav-link <?php if (page=='dashboard.php') { echo 'active';} ?>" href="dashboard.php">Dashboard</a></li>
                        <li class="nav-item menu">
                             <a class="nav-link <?php if (page=='quiz.php') { echo 'active';} ?>" href="quiz.php">Add Quiz</a></li>
                        <li class="nav-item">
                             <a class="nav-link <?php if (page=='showquiz.php') { echo 'active';} ?>" href="showquiz.php">show quiz</a></li>
                        <li class="nav-item"> 
                            <a class="nav-link <?php if (page=='rank.php') { echo 'active';} ?>" href="rank.php">Ranking</a></li>
                        <li class="nav-item"> 
                            <a class="nav-link <?php if (page=='feedback.php') { echo 'active';} ?>" href="afeedback.php">Feedback</a></li>
                        <li class="nav-item"> 
                            <a class="nav-link <?php if (page=='history.php') { echo 'active';} ?>" href="history.php">History</a></li>    
                        <li class="nav-item"> <a class="nav-link" href="../logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
<!--        </div>
    </div>     -->        
<!--end side-bar-->
   